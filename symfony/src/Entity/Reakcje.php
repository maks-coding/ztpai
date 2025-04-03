<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reakcje
 *
 * @ORM\Table(name="reakcje", uniqueConstraints={@ORM\UniqueConstraint(name="unique_id_posty_id_uzytkownicy", columns={"id_posty", "id_uzytkownicy"})}, indexes={@ORM\Index(name="IDX_1E8CCDE9562E2A20", columns={"id_typy_reakcji"}), @ORM\Index(name="IDX_1E8CCDE9860D12D4", columns={"id_posty"}), @ORM\Index(name="IDX_1E8CCDE9A9866533", columns={"id_uzytkownicy"})})
 * @ORM\Entity
 */
class Reakcje
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reakcje", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReakcje;

    /**
     * @var \TypyReakcji
     *
     * @ORM\ManyToOne(targetEntity="TypyReakcji")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_typy_reakcji", referencedColumnName="id_typy_reakcji")
     * })
     */
    private $idTypyReakcji;

    /**
     * @var \Posty
     *
     * @ORM\ManyToOne(targetEntity="Posty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_posty", referencedColumnName="id_posty")
     * })
     */
    private $idPosty;

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
