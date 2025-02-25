<?php
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
