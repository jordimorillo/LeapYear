<?php


namespace Src\Domain;


class LeapYear
{

    private int $leapYear;

    /**
     * LeapYear constructor.
     * @param int $leapYear
     */
    public function __construct(int $leapYear)
    {
        $this->leapYear = $leapYear;
    }

    /**
     * @return int
     */
    public function getLeapYear(): int
    {
        return $this->leapYear;
    }

}