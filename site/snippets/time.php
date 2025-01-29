<time datetime="<?= $item->date()->toDate(option('date.HTML')) ?>"><?php
$rawValue = $item->date()->value();
if($rawValue == null) {
  echo("NULL");
  return;
}

// Check if the raw value contains a time component (e.g., 'YYYY-MM-DD HH:MM')
$hasTimeComponent = preg_match('/\d{4}-\d{2}-\d{2} \d{2}:\d{2}/', $rawValue);

// Format the date
$formattedDate = $item->date()->toDate(option('date.EN'));

// If there is no time component and the formatted date ends with ' 00:00', trim it
if (!$hasTimeComponent && str_ends_with($formattedDate, ' 00:00')) {
    $formattedDate = substr($formattedDate, 0, -6);
}

echo($formattedDate);
?></time>