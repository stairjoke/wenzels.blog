<?php
  date_default_timezone_set('Europe/Berlin');
  return [
    'date' => [
      'handler' => 'intl',
      'EN' => 'MMMM dd, YYYY HH:mm',
      'HTML' => "yyyy-MM-dd'T'HH:mmXXX",
      'RSS' => "EEE, dd MMM yyyy HH:mm:ss ZZZZ"
    ],
    'locale' => 'en_US.utf-8',
    'markdown' => [
      'extra' => true
    ]
  ];
?>