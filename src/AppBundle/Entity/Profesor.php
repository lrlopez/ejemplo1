<?php
/**
 * Created by PhpStorm.
 * User: lrlopez
 * Date: 13/12/16
 * Time: 13:24
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Profesor
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Parte", mappedBy="profesor")
     * @var Parte[]
     */
    private $partes;

    /**
     * @ORM\OneToOne(targetEntity="Grupo",mappedBy="tutor")
     * @var Grupo
     */
    private $tutoria;

    /**
     * @ORM\ManyToMany(targetEntity="Grupo", mappedBy="profesores")
     * @var Grupo[]
     */
    private $grupos;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->partes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Profesor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Profesor
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Profesor
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add parte
     *
     * @param Parte $parte
     *
     * @return Profesor
     */
    public function addParte(Parte $parte)
    {
        $this->partes[] = $parte;

        return $this;
    }

    /**
     * Remove parte
     *
     * @param Parte $parte
     */
    public function removeParte(Parte $parte)
    {
        $this->partes->removeElement($parte);
    }

    /**
     * Get partes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPartes()
    {
        return $this->partes;
    }

    /**
     * Set tutoria
     *
     * @param Grupo $tutoria
     *
     * @return Profesor
     */
    public function setTutoria(Grupo $tutoria = null)
    {
        $this->tutoria = $tutoria;

        return $this;
    }

    /**
     * Get tutoria
     *
     * @return Grupo
     */
    public function getTutoria()
    {
        return $this->tutoria;
    }

    /**
     * Add grupo
     *
     * @param Grupo $grupo
     *
     * @return Profesor
     */
    public function addGrupo(Grupo $grupo)
    {
        $this->grupos[] = $grupo;

        return $this;
    }

    /**
     * Remove grupo
     *
     * @param Grupo $grupo
     */
    public function removeGrupo(Grupo $grupo)
    {
        $this->grupos->removeElement($grupo);
    }

    /**
     * Get grupos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrupos()
    {
        return $this->grupos;
    }
}
