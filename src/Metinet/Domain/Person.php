<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 12:16
 */

namespace Metinet\Domain;


class Person implements User
{
    private $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function canParticipateEvent(Event $event){

        if($event->isPublicEvent()){
            return true;
        }
        return false;
    }
}