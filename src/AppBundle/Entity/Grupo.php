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
class Grupo
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
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $aula;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $planta;

    /**
     * @ORM\OneToMany(targetEntity="Estudiante", mappedBy="grupo")
     * @var Estudiante[]
     */
    private $estudiantes;

    /**
     * @ORM\OneToOne(targetEntity="Profesor",inversedBy="tutoria")
     * @var Profesor
     */
    private $tutor;

    /**
     * @ORM\ManyToMany(targetEntity="Profesor", inversedBy="grupos")
     * @var Profesor[]
     */
    private $profesores;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estudiantes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profesores = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Grupo
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
     * Set aula
     *
     * @param integer $aula
     *
     * @return Grupo
     */
    public function setAula($aula)
    {
        $this->aula = $aula;

        return $this;
    }

    /**
     * Get aula
     *
     * @return integer
     */
    public function getAula()
    {
        return $this->aula;
    }

    /**
     * Set planta
     *
     * @param integer $planta
     *
     * @return Grupo
     */
    public function setPlanta($planta)
    {
        $this->planta = $planta;

        return $this;
    }

    /**
     * Get planta
     *
     * @return integer
     */
    public function getPlanta()
    {
        return $this->planta;
    }

    /**
     * Add estudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudiante
     *
     * @return Grupo
     */
    public function addEstudiante(\AppBundle\Entity\Estudiante $estudiante)
    {
        $this->estudiantes[] = $estudiante;

        return $this;
    }

    /**
     * Remove estudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudiante
     */
    public function removeEstudiante(\AppBundle\Entity\Estudiante $estudiante)
    {
        $this->estudiantes->removeElement($estudiante);
    }

    /**
     * Get estudiantes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEstudiantes()
    {
        return $this->estudiantes;
    }

    /**
     * Set tutor
     *
     * @param \AppBundle\Entity\Profesor $tutor
     *
     * @return Grupo
     */
    public function setTutor(\AppBundle\Entity\Profesor $tutor = null)
    {
        $this->tutor = $tutor;

        return $this;
    }

    /**
     * Get tutor
     *
     * @return \AppBundle\Entity\Profesor
     */
    public function getTutor()
    {
        return $this->tutor;
    }

    /**
     * Add profesore
     *
     * @param \AppBundle\Entity\Profesor $profesore
     *
     * @return Grupo
     */
    public function addProfesore(\AppBundle\Entity\Profesor $profesore)
    {
        $this->profesores[] = $profesore;

        return $this;
    }

    /**
     * Remove profesore
     *
     * @param \AppBundle\Entity\Profesor $profesore
     */
    public function removeProfesore(\AppBundle\Entity\Profesor $profesore)
    {
        $this->profesores->removeElement($profesore);
    }

    /**
     * Get profesores
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfesores()
    {
        return $this->profesores;
    }
}
