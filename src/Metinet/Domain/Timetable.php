<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 15:30
 */

namespace Metinet\Domain;


class Timetable
{
    private $startingHour;
    private $endingHour;


    public function __construct(int $startingHour, int $endingHour)
    {
        if ($startingHour >= $endingHour)
        {
                throw InvalidTimetable::startingHourHigherEndingHour();
        }
        $this->startingHour = $startingHour;
        $this->endingHour = $endingHour;
    }
}