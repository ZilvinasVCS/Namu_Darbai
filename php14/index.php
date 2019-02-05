<?php
    $fromYear = 2019;
    $thisYear = (int)date('Y');

    if($fromYear >= $thisYear) {
        echo "My website &copy; $thisYear";
    } elseif ($fromYear <= $thisYear) {
        echo 'My website &copy;' .$fromYear. '-' .$thisYear. '<br>';
    }
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
</body>
</html>
  