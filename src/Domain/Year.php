<?php


namespace Src\Domain;


class Year
{

    /**
     * @var int
     */
    private int $year;

    /**
     * Year constructor.
     * @param int $year
     */
    public function __construct(int $year) {
        $this->year = $year;
    }

    /**
     * @return int
     */
    public function get(): int
    {
        return $this->year;
    }

}