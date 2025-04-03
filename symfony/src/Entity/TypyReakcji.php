<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypyReakcji
 *
 * @ORM\Table(name="typy_reakcji")
 * @ORM\Entity
 */
class TypyReakcji
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_typy_reakcji", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypyReakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=50, nullable=false)
     */
    private $nazwa;


}
