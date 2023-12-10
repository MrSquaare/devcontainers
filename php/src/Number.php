<?php declare(strict_types=1);

namespace MrSquaare\App;

class Number
{
  public static function isEven($number)
  {
    return ($number % 2) === 0;
  }
}

?>