<!DOCTYPE html>
<html>

<head>
  <title>My PHP Page</title>
</head>

<body>
  <?php

  require_once __DIR__ . '/../vendor/autoload.php';

  use MrSquaare\App\Number;

  echo "Hello World!";
  echo "<br />";

  $timestamp = time();

  if (Number::isEven($timestamp)) {
    echo "The timestamp is even.";
  } else {
    echo "The timestamp is odd.";
  }
  ?>
</body>

</html>