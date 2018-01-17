<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 17/01/18
 * Time: 11:22
 */

namespace Metinet\Domain;


class Adresse
{
    private $adresse;
    private $codePostal;
    private $ville;
    private $pays;

    /**
     * Adresse constructor.
     * @param $adresse1
     * @param $codePostal
     * @param $ville
     * @param $pays
     */
    public function __construct(string $adresse1, int $codePostal, string $ville, string $pays)
    {
        $this->adresse = $adresse1;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getAdresse() :string
    {
        return $this->adresse;
    }

    /**
     * @return int
     */
    public function getCodePostal() :int
    {
        return $this->codePostal;
    }

    /**
     * @return string
     */
    public function getVille() :string
    {
        return $this->ville;
    }

    /**
     * @return string
     */
    public function getPays() :string
    {
        return $this->pays;
    }



}