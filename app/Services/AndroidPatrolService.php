<?php

namespace App\Services;

use App\Models\Patrol;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AndroidPatrolService
{
    public function store(array $data): Patrol
    {
        $employeeId = Auth::user()->employee->id;
        logger('Auth employee ID: ' . $employeeId); // Debug ID pegawai

        $photoUrl = null;

        if (isset($data['photo_base64']) && isset($data['filename'])) {
            logger('Base64 input (truncated): ' . substr($data['photo_base64'], 0, 30)); // Potong biar gak terlalu panjang

            // Jika foto dikirim tanpa prefix, langsung decode base64-nya
            $decoded = base64_decode($data['photo_base64']);

            if ($decoded === false) {
                logger('Gagal decode base64!');
            } else {
                logger('Base64 berhasil didecode, panjang: ' . strlen($decoded));
            }

            // Buat nama file unik di folder patroli
            $filename = 'patroli/' . time() . '_' . $data['filename'];

            // Simpan file ke public storage
            Storage::disk('public')->put($filename, $decoded);
            logger('Foto berhasil disimpan di storage: ' . $filename);

            // Simpan path ke database
            $photoUrl = $filename;
        } else {
            logger('Tidak ada foto yang dikirim.');
        }

        logger('Photo URL yang akan disimpan di DB: ' . $photoUrl);

        $patrol = Patrol::create([
            'employee_id'      => $employeeId,
            'shift_id'         => $data['shift_id'],
            'place_id'         => $data['place_id'],
            'patrol_location'  => 'Auto from QR',
            'status'           => $data['kondisi']?? null,
            'catatan'          => $data['catatan'] ?? null,
            'photo'            => $photoUrl,
            'latitude'         => $data['latitude'],
            'longitude'        => $data['longitude'],
        ]);

        logger('Patrol berhasil dibuat dengan ID: ' . $patrol->id);

        return $patrol;
    }

    public function getMyPatrols()
    {
        return Patrol::with(['place', 'shift'])
            ->where('employee_id', Auth::user()->employee->id)
            ->latest()
            ->get();
    }
}
