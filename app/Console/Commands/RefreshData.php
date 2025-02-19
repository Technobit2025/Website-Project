<?php

namespace App\Console\Commands;

use ZipArchive;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class RefreshData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cuba:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refreshing cuba data.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('db:wipe');
        $this->info('Importing dummy data..');

        $this->info('Creating Data tables from database.');
        $sql = public_path('db.sql');
        if (file_exists($sql)) {
            $data = file_get_contents($sql);
            DB::unprepared($data);
            if (env('DUMMY_IMAGES_URL')) {
                $this->info("Downloading dummy images from the server, wait for few minutes, it's depends on your internet.");
                $sP = storage_path('app/public');
                if (! file_exists($sP)) {
                    mkdir($sP, 0777, true);
                    $rePose = Http::timeout(0)->get(env('DUMMY_IMAGES_URL'));
                    if ($rePose?->successful()) {
                        $fN = basename(env('DUMMY_IMAGES_URL'));
                        $zFP = $sP.'/'.$fN;
                        file_put_contents($zFP, $rePose?->getBody());
                        if ($this->iZf($zFP)) {
                            $zp = new ZipArchive;
                            if ($zp->open($zFP) === true) {
                                $zp->extractTo($sP);
                                $zp->close();
                            }
                            unlink($zFP);
                        }
                    }
                }
            }
        } else {

            $this->info('');
            $this->info('db.sql file not found for dummy data import');
            $this->info('');
        }

        $this->call('storage:link');
        $this->call('optimize:clear');
    }
    public function iZf($fP)
    {
        $fio = finfo_open(FILEINFO_MIME_TYPE);
        $mTy = finfo_file($fio, $fP);
        finfo_close($fio);

        return $mTy === 'application/zip';
    }
}
