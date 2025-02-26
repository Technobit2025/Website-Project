<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PerformanceController extends Controller
{
    public function index()
    {
        $performanceData = [
            'cpuUsage' => $this->getCpuUsage(),
            'memoryUsage' => $this->getMemoryUsage(),
            'diskUsage' => $this->getDiskUsage(),
            'queryLog' => $this->getQueryLog(),
            'activeUsers' => DB::table('sessions')->count(),
            'jobsPending' => DB::table('jobs')->count(),
            'systemInfo' => $this->getSystemInfo(),
        ];

        return view('super_admin.performance.index', compact('performanceData'));
    }

    private function getCpuUsage()
    {
        if (PHP_OS_FAMILY === 'Windows') {
            $output = shell_exec('wmic cpu get loadpercentage 2>&1');
            preg_match('/\d+/', $output, $matches);
            return $matches[0] ?? null;
        } else {
            $cpuLoad = sys_getloadavg()[0] ?? 0;
            $cpuCores = $this->getCpuCoreCount();
            return round(($cpuLoad / $cpuCores) * 100, 2);
        }
    }

    private function getCpuCoreCount()
    {
        return PHP_OS_FAMILY === 'Windows' ? intval(shell_exec('wmic cpu get NumberOfCores 2>&1')) : intval(shell_exec('nproc'));
    }

    private function getMemoryUsage()
    {
        if (PHP_OS_FAMILY === 'Windows') {
            $output = shell_exec('wmic os get freephysicalmemory, totalvisiblememorysize /value');
            preg_match_all('/\d+/', $output, $matches);
            if (isset($matches[0][0], $matches[0][1])) {
                $freeMemory = (int)$matches[0][0] * 1024;
                $totalMemory = (int)$matches[0][1] * 1024;
                return round((($totalMemory - $freeMemory) / $totalMemory) * 100, 2);
            }
            return null;
        } else {
            return (float)trim(shell_exec("free -m | awk 'NR==2{printf \"%.2f\", $3*100/$2 }'"));
        }
    }

    private function getDiskUsage()
    {
        $hostPath = env('HOST_PATH', '/');
        $totalSpace = disk_total_space($hostPath);
        $freeSpace = disk_free_space($hostPath);
        return round((($totalSpace - $freeSpace) / $totalSpace) * 100, 2);
    }

    private function getQueryLog()
    {
        DB::enableQueryLog();
        DB::table('users')->get();
        return DB::getQueryLog();
    }

    private function getSystemInfo()
    {
        return PHP_OS_FAMILY === 'Windows' ? $this->getSystemInfoWindows() : $this->getSystemInfoLinux();
    }

    private function getSystemInfoWindows()
    {
        $cpu = shell_exec('wmic cpu get name 2>&1');
        preg_match('/\w.*/', $cpu, $matches);

        $ram = shell_exec('wmic memorychip get capacity 2>&1');
        preg_match_all('/\d+/', $ram, $ramMatches);
        $totalMemory = array_sum(array_map('intval', $ramMatches[0])) / (1024 ** 3);

        return [
            'cpu' => $matches[0] ?? 'Unknown CPU',
            'memory' => round($totalMemory, 2) . ' GB',
        ];
    }

    private function getSystemInfoLinux()
    {
        $cpu = trim(shell_exec("grep -m1 'model name' /proc/cpuinfo | cut -d ':' -f2"));
        $mem = (int)trim(shell_exec("grep 'MemTotal' /proc/meminfo | awk '{print $2}'")) / (1024 ** 2);

        return [
            'cpu' => $cpu ?: 'Unknown CPU',
            'memory' => round($mem, 2) . ' GB',
        ];
    }
}
