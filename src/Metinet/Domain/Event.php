<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 11:11
 */

namespace Metinet\Domain;

// TODO: Inscription / !place !externe


class Event
{
    private $name;
    private $description;
    private $objectif;
    private $date;
    private $salle;
    private $author;
    private $publicEvent;
    private $price;
    private $participants;
    private $timetable;
    //TODO HORAIRES


    public function __construct(string $name, string $description, string $objectif, DateEvent $date, Salle $salle, Student $author, bool $publicEvent, ?int $price = null, Timetable $timetable)
    {
        $this->name = $name;
        $this->description = $description;
        $this->objectif = $objectif;
        $this->date = $date;
        $this->salle = $salle;
        $this->author = $author;
        $this->publicEvent = $publicEvent;
        $this->price = $price;
        $this->timetable = $timetable;
        $this->participants = [];
    }

    public function getPersonMax() :int
    {
        return $this->salle->getNbPersonneMax();
    }
    public function isPublicEvent() :bool {
        return $this->publicEvent;
    }
    public function addParticipant(User $participant){

        if(count($this->participants) < $this->salle->getNbPersonneMax()) {
            $this->participants[] = $participant;
        }
        else{
            throw new \Exception(500);
        }
    }
}