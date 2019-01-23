<?php
//vianney
//table contenant le lien evoyer par mail et l'utilisateur à la quelle il corespond

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="eureka_inscription")
 */
class Cle_mail
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", unique=true)
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=250)
     */
    private $cle;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCle(): ?string
    {
        return $this->cle;
    }

    public function getDate():  ?\DateTime
    {
        return $this->date;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setCle(string $cle)
    {
        $this->cle = $cle;
        return $this;
    }

    public function setDate()
    {
        $this->date = new \DateTime('now');
    }

}
