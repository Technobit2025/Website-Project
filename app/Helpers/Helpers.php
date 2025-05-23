<?php

use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

if (! function_exists('getJsonResponse')) {
  function getJsonResponse($params = null, $status = 200, array $headers = [], $options = 0)
  {
    $responses = [
      'status' => $status,
      'success' => isset($params['success']) ? $params['success'] : true,
      'message' => isset($params['message']) ? $params['message'] : null,
      'data' => isset($params['data']) ? $params['data'] : null,
      'exceptions' => isset($params['exceptions']) ? $params['exceptions'] : null
    ];

    if (isset($params['metadata'])) {
      $responses['metadata'] = $params['metadata'];
    }

    return response()->json($responses, $status);
  }
}
if (! function_exists('formatDate')) {
  function formatDate($date, $format = 'd F Y')
  {
    return \Carbon\Carbon::parse($date)->translatedFormat($format);
  }
}

if (! function_exists('formatRupiah')) {
  function formatRupiah($amount)
  {
    return 'Rp ' . number_format($amount, 0, ',', '.');
  }
}
if (!function_exists('uploadFile')) {
  function uploadFile($file, $folder, $disk = 'public')
  {
    $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9_\.-]/', '', $file->getClientOriginalName());
    $file->storeAs($folder, $filename, $disk);
    return $filename;
  }
}
if (!function_exists('deleteFile')) {
  function deleteFile($path)
  {
    if (Storage::disk('public')->exists($path)) {
      Storage::disk('public')->delete($path);
    }
  }
}
if (!function_exists('generateQrCode')) {
  function generateQrCode($text, $size = 200)
  {
    $qrCode = QrCode::size($size)->generate($text);
    return $qrCode;
  }
}
if (!function_exists('attendanceType')) {
  function attendanceType($status)
  {
    $types = [
      'Present' => 'Hadir',
      'Sick Leave' => 'Izin Sakit',
      'Leave' => 'Cuti',
      'Absent' => 'Alpa',
      'Late' => 'Terlambat',
      'Leave Early' => 'Pulang Awal',
      'WFH' => 'WFH',
    ];

    return $types[$status] ?? $status;
  }
}
