<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Src\Domain\Year;
use Src\Domain\IsLeapYear;
use Tests\Fixtures\Years;


/**
 * Class ShowsIsLeapYearTest
 * @package Tests
 */
class IsLeapYearTest extends TestCase
{
    /**
     * @dataProvider leapYearsRepository
     * @param Year $aYear
     */
    public function testToKnowIfAYearIsALeapYear(Year $aYear): void
    {
        $showsIsLeapYear = new IsLeapYear();
        $result = $showsIsLeapYear($aYear);
        $this->assertTrue($result);
    }

    /**
     * @dataProvider notLeapYearsRepository
     * @param Year $aYear
     */
    public function testToKnowIfAYearIsNotALeapYear(Year $aYear): void
    {
        $showsIsLeapYear = new IsLeapYear();
        $result = $showsIsLeapYear($aYear);
        $this->assertFalse($result);
    }

    /**
     * @return Year[]
     */
    public function leapYearsRepository(): array
    {
        return [
            'A year divisible by 400' => [Years::DivisibleByFourHundred()],
            'A year divisible by 4 but not by 100' => [Years::DivisibleByFourButNotByAHundred()]
        ];
    }

    /**
     * @return Year[]
     */
    public function notLeapYearsRepository(): array
    {
        return [
            'A year divisible by 100 but not by 400' => [Years::DivisibleByAHundredButNotByFourHundred()],
            'A year not divisible by 4' => [Years::NotDivisibleByFour()]
        ];
    }

}