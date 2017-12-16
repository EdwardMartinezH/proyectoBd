<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Software
 *
 * @ORM\Table(name="software", indexes={@ORM\Index(name="fk_Software_Equipo1_idx", columns={"Equipo_idEquipo"})})
 * @ORM\Entity
 */
class Software
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSoftware", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsoftware;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Equipo_idEquipo", referencedColumnName="idEquipo")
     * })
     */
    private $equipoequipo;



    /**
     * Get idsoftware
     *
     * @return integer
     */
    public function getIdsoftware()
    {
        return $this->idsoftware;
    }

    /**
     * Set equipoequipo
     *
     * @param \AppBundle\Entity\Equipo $equipoequipo
     *
     * @return Software
     */
    public function setEquipoequipo(\AppBundle\Entity\Equipo $equipoequipo = null)
    {
        $this->equipoequipo = $equipoequipo;

        return $this;
    }

    /**
     * Get equipoequipo
     *
     * @return \AppBundle\Entity\Equipo
     */
    public function getEquipoequipo()
    {
        return $this->equipoequipo;
    }
}
