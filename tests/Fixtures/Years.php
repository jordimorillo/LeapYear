<?php


namespace Tests\Fixtures;


use Src\Domain\Year;


/**
 * Class Years
 * @package Tests\Fixtures
 */
class Years
{

    /**
     * @return Year
     */
    public static function DivisibleByFourHundred(): Year
    {
        return new Year(400 * random_int(1, 10));
    }

    /**
     * @return Year
     */
    public static function DivisibleByAHundredButNotByFourHundred(): Year
    {
        while($year = 100 * random_int(1, 90)) {
            if($year % 400 !== 0) {
                break;
            }
        }
        return new Year($year);
    }

    /**
     * @return Year
     */
    public static function DivisibleByFourButNotByAHundred(): Year
    {
        while($year = 4 * random_int(1, 90)) {
            if($year % 100 !== 0) {
                break;
            }
        }
        return new Year($year);
    }

    /**
     * @return Year
     */
    public static function NotDivisibleByFour(): Year
    {
        while($year = random_int(1, 9999)) {
            if($year % 4 !== 0) {
                break;
            }
        }
        return new Year($year);
    }

}