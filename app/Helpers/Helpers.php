<?php

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
