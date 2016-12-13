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
class Estudiante
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
     * @ORM\OneToMany(targetEntity="Parte", mappedBy="estudiante")
     * @var Parte[]
     */
    private $partes;

    /**
     * @ORM\ManyToOne(targetEntity="Grupo", inversedBy="estudiantes")
     * @ORM\JoinColumn(nullable=false)
     * @var Grupo
     */
    private $grupo;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->partes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Estudiante
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
     * @return Estudiante
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
     * @return Estudiante
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
     * @param \AppBundle\Entity\Parte $parte
     *
     * @return Estudiante
     */
    public function addParte(\AppBundle\Entity\Parte $parte)
    {
        $this->partes[] = $parte;

        return $this;
    }

    /**
     * Remove parte
     *
     * @param \AppBundle\Entity\Parte $parte
     */
    public function removeParte(\AppBundle\Entity\Parte $parte)
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
     * Set grupo
     *
     * @param \AppBundle\Entity\Grupo $grupo
     *
     * @return Estudiante
     */
    public function setGrupo(\AppBundle\Entity\Grupo $grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \AppBundle\Entity\Grupo
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
