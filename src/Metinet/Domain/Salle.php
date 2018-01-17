<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 11:19
 */

namespace Metinet\Domain;


class Salle
{
    private $name;
    private $adresse;
    private $nbPersonneMax;

    public function __construct(string $name, Adresse $adresse, int $nbPersonneMax)
    {
        $this->name = $name;
        $this->adresse = $adresse;
        $this->nbPersonneMax = $nbPersonneMax;
    }

    public function getNbPersonneMax() :int {
        return $this->nbPersonneMax;
    }

    /**
     * @return string
     */
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * @return Adresse
     */
    public function getAdresse() :Adresse
    {
        return $this->adresse;
    }

}