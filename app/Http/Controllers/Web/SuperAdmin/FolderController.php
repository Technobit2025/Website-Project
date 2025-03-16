<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FolderController extends Controller
{
    public function index()
    {
        return view('super_admin.folder.index');
    }

    public function folders()
    {
        $directory = base_path("/"); // Start scanning from the base directory of the project
        $files = $this->scanDirectory($directory);
        return response()->json($files);
    }

    private function scanDirectory($dir)
    {
        $result = [];
        $items = scandir($dir);

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue; // Skip current and parent directory
            }

            $path = $dir . DIRECTORY_SEPARATOR . $item;
            if (is_dir($path)) {
                $result[] = [
                    'isDirectory' => true,
                    'name' => $item,
                    'child' => $this->scanDirectory($path) // Recursively scan subdirectories
                ];
            } else {
                $result[] = [
                    'isDirectory' => false,
                    'name' => $item,
                ];
            }
        }

        return $result;
    }
}
