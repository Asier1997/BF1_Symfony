<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArmasApoyo
 *
 * @ORM\Table(name="armas_apoyo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArmasApoyoRepository")
 */
class ArmasApoyo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $arma;

    /**
     * @var integer
     */
    private $dmg;

    /**
     * @var integer
     */
    private $cargador;


    /**
     * Set arma
     *
     * @param string $arma
     *
     * @return ArmasApoyo
     */
    public function setArma($arma)
    {
        $this->arma = $arma;

        return $this;
    }

    /**
     * Get arma
     *
     * @return string
     */
    public function getArma()
    {
        return $this->arma;
    }

    /**
     * Set dmg
     *
     * @param integer $dmg
     *
     * @return ArmasApoyo
     */
    public function setDmg($dmg)
    {
        $this->dmg = $dmg;

        return $this;
    }

    /**
     * Get dmg
     *
     * @return integer
     */
    public function getDmg()
    {
        return $this->dmg;
    }

    /**
     * Set cargador
     *
     * @param integer $cargador
     *
     * @return ArmasApoyo
     */
    public function setCargador($cargador)
    {
        $this->cargador = $cargador;

        return $this;
    }

    /**
     * Get cargador
     *
     * @return integer
     */
    public function getCargador()
    {
        return $this->cargador;
    }
}
