<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 18/01/18
 * Time: 11:48
 */

namespace Metinet\Domain;


class Password
{
    private $password;

    public function __construct(string $password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    public function __toString()
    {
        return $this->password;
    }
}