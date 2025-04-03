<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posty
 *
 * @ORM\Table(name="posty", indexes={@ORM\Index(name="IDX_688853E4A9866533", columns={"id_uzytkownicy"})})
 * @ORM\Entity
 */
class Posty
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_posty", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPosty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tresc", type="text", nullable=true)
     */
    private $tresc;

    /**
     * @var string
     *
     * @ORM\Column(name="temat", type="text", nullable=false)
     */
    private $temat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="liczba_udostepnien", type="integer", nullable=true)
     */
    private $liczbaUdostepnien = '0';

    /**
     * @var \Uzytkownicy
     *
     * @ORM\ManyToOne(targetEntity="Uzytkownicy")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_uzytkownicy", referencedColumnName="id_uzytkownicy")
     * })
     */
    private $idUzytkownicy;


}
