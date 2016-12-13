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
class Parte
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @var \DateTime
     */
    private $fecha;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $avisado;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    private $observacion;

    /**
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="partes")
     * @ORM\JoinColumn(nullable=false)
     * @var Profesor
     */
    private $profesor;
    /**
     * @ORM\ManyToOne(targetEntity="Estudiante", inversedBy="partes")
     * @ORM\JoinColumn(nullable=false)
     * @var Estudiante
     */
    private $estudiante;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Parte
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set avisado
     *
     * @param boolean $avisado
     *
     * @return Parte
     */
    public function setAvisado($avisado)
    {
        $this->avisado = $avisado;

        return $this;
    }

    /**
     * Get avisado
     *
     * @return boolean
     */
    public function getAvisado()
    {
        return $this->avisado;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Parte
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set profesor
     *
     * @param \AppBundle\Entity\Profesor $profesor
     *
     * @return Parte
     */
    public function setProfesor(\AppBundle\Entity\Profesor $profesor)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return \AppBundle\Entity\Profesor
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Set estudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudiante
     *
     * @return Parte
     */
    public function setEstudiante(\AppBundle\Entity\Estudiante $estudiante)
    {
        $this->estudiante = $estudiante;

        return $this;
    }

    /**
     * Get estudiante
     *
     * @return \AppBundle\Entity\Estudiante
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }
}
