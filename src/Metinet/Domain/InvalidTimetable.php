<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 15:49
 */

namespace Metinet\Domain;


class InvalidTimetable extends \Exception
{
    public static function startingHourHigherEndingHour(): self
    {
        return new self('Ending hour must be Higher than Starting Hour');
    }
}