<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 13:23
 */

namespace Metinet\Domain;


class Inscription
{
    private $event;
    private $user;

    public function __construct(Event $event, User $user)
    {
        if($user->canParticipateEvent($event)){
            $this->event = $event;
            $this->user = $user;
            $event->addParticipant($user);
        }
        else{
            throw new \Exception(500);
        }
    }
}