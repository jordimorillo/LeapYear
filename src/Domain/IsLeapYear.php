<?php


namespace Src\Domain;


/**
 * Class ShowsIsLeapYear
 * @package Src\Domain\Year
 */
class IsLeapYear
{

    /**
     * @param Year $year
     * @return bool
     */
    public function __invoke(Year $year): bool
    {
        return (
            $year->get() % 400 === 0 ||
            (
                $year->get() % 4 === 0 &&
                $year->get() % 100 !== 0
            )
        );
    }

}