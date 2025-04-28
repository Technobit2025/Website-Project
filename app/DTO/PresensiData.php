<?php
namespace App\DTO;

use Carbon\Carbon;

class PresensiData
{
    public ?string $photo_data;
    public ?string $filename;
    public ?int $company_place_id;
    public ?float $latitude;
    public ?float $longitude;
    public ?string $note;
    public string $status;

    public function __construct(array $data)
    {
        // Status wajib
        if (!isset($data['status'])) {
            throw new \InvalidArgumentException("Key 'status' wajib diisi pada PresensiData.");
        }
        $this->status = $data['status'];

        // Photo dan filename opsional untuk clock-out
        $this->photo_data = $data['photo_data'] ?? null;
        $this->filename   = $data['filename']   ?? null;

        // Data lokasi dan note opsional
        $this->company_place_id = $data['company_place_id'] ?? null;
        $this->latitude         = isset($data['latitude']) ? (float)$data['latitude'] : null;
        $this->longitude        = isset($data['longitude']) ? (float)$data['longitude'] : null;
        $this->note             = $data['note'] ?? null;
    }
}
