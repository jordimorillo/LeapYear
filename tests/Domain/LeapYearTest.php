<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Src\Domain\LeapYear;


class LeapYearTest extends TestCase
{
    public function testThatICanInstantiateALeapYear(): void
    {
        $leapYear = new LeapYear(random_int(0, 9999));
        $this->assertIsInt($leapYear);
    }
}