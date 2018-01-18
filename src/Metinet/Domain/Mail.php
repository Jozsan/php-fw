<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 18/01/18
 * Time: 11:20
 */

namespace Metinet\Domain;


class Mail
{
    private $mail;

    public static function createFromString(string $mail){
        return new self($mail);
    }
    public function __construct(string $mail)
    {
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            throw new \Exception("Email must be type jacquietunning@domaine.fr");
        }
        $this->mail = $mail;
    }
    public function __toString()
    {
        return $this->mail;
    }
}