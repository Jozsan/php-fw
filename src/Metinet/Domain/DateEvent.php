<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 11:48
 */

namespace Metinet\Domain;


class DateEvent
{
    private $dateEvent;

    public static function fromString(string $dateEvent): self
    {
        return new self($dateEvent);
    }

    private function __construct(string $dateEvent)
    {
        $dateEventDateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', sprintf('%s 23:59:59', $dateEvent));
        if ($dateEventDateTime > new \DateTimeImmutable('now')) {

            throw InvalidDateEvent::mustNotBeInThePast();
        }

        $this->dateEvent = $dateEventDateTime;
    }
}