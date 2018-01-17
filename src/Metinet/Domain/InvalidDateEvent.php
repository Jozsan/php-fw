<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 11:52
 */

namespace Metinet\Domain;


class InvalidDateEvent extends \Exception
{
    public static function mustNotBeInThePast(): self
    {
        return new self('Date Of Event cannot be in the past');
    }
}