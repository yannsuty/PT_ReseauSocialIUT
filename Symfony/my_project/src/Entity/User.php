<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity 
 * @ORM\Table(name="eureka_user")
 *
 * @UniqueEntity(fields="mail", message="le mail est deja utilise")
 * @UniqueEntity(fields="mail_upec", message="le mail est deja utilise")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150, unique=true)
     * @Assert\Email(message = "mail invalide")
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=150, unique=true)
     * @Assert\Email(message = "mail invalide"))
     */
    private $mail_upec;

    /**
     * @ORM\Column(type="json",nullable=true)
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string", name="mdp",nullable=true)
     */
    private $password;
    
     /**
      * @ORM\Column(type="string", length=50)
      * @Assert\Length(max = 50, maxMessage = "Nom trop long")
     */
    private $nom;
    
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Length(max = 50, maxMessage = "Prenom trop long")
     */
    private $prenom;
    
    /**
     * @ORM\Column(name="datenaiss", type="date",nullable=true)
     */
    private $date_de_naissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statut;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function getDateDeNaissance(): ?\DateTime
    {
        return $this->date_de_naissance;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }
    
    public function getMailUpec(): ?string
    {
        return $this->mail_upec;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }


    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function setDateDeNaissance(\DateTime $date_de_naissance = null): self
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function setMailUpec(string $mail_upec): self
    {
        $this->mail_upec = $mail_upec;

        return $this;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }




    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
