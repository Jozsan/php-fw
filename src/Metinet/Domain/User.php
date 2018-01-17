<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 13:11
 */

namespace Metinet\Domain;


interface User
{
    public function canParticipateEvent(Event $event);
}