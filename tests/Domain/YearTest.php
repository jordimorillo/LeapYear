<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Src\Domain\Year;


class YearTest extends TestCase
{
    public function testThatICanInstantiateAYear(): void
    {
        $year = new Year(random_int(0, 9999));
        $this->assertIsInt($year->get());
    }
}