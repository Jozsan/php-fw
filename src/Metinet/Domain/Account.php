<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 18/01/18
 * Time: 09:37
 */

namespace Metinet\Domain;


class Account
{
    private $mail;
    private $password;

    public function __construct(Mail $mail, Password $password)
    {
        $this->mail = $mail;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

}