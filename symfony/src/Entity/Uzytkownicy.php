<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uzytkownicy
 *
 * @ORM\Table(name="uzytkownicy", uniqueConstraints={@ORM\UniqueConstraint(name="unique_login", columns={"login"})})
 * @ORM\Entity
 */
class Uzytkownicy
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_uzytkownicy", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUzytkownicy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imie", type="string", length=50, nullable=true)
     */
    private $imie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nazwisko", type="string", length=50, nullable=true)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="haslo", type="text", nullable=false)
     */
    private $haslo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_utworzenia", type="datetime", nullable=true)
     */
    private $dataUtworzenia;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_urodzenia", type="date", nullable=true)
     */
    private $dataUrodzenia;


}
