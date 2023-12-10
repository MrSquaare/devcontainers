<?php declare(strict_types=1);

namespace MrSquaare\App\Tests;

use PHPUnit\Framework\TestCase;
use MrSquaare\App\Number;

/**
 * @covers MrSquaare\App\Number
 */
class NumberTest extends TestCase
{
  public function testIsEven(): void
  {
    $this->assertTrue(Number::isEven(2));
    $this->assertTrue(Number::isEven(0));
    $this->assertFalse(Number::isEven(1));
    $this->assertFalse(Number::isEven(-1));
  }
}

?>