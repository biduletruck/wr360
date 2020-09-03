<?php

namespace App\Entity;

use App\Repository\TraitementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TraitementRepository::class)
 */
class Traitement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="traitements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Collaborateur;

    /**
     * @ORM\Column(type="integer")
     */
    private $TicketNumber;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Traitement = null;


    public function __construct()
    {
        $this->CreatedAt = new \Datetime();
    }

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreatedAt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Comment;

    /**
     * @ORM\Column(type="boolean")
     */
    private $DejaTraite = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCollaborateur(): ?User
    {
        return $this->Collaborateur;
    }

    public function setCollaborateur(?User $Collaborateur): self
    {
        $this->Collaborateur = $Collaborateur;

        return $this;
    }

    public function getTicketNumber(): ?int
    {
        return $this->TicketNumber;
    }

    public function setTicketNumber(int $TicketNumber): self
    {
        $this->TicketNumber = $TicketNumber;

        return $this;
    }

    public function getTraitement(): ?bool
    {
        return $this->Traitement;
    }

    public function setTraitement(?bool $Traitement): self
    {
        $this->Traitement = $Traitement;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeInterface $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(?string $Comment): self
    {
        $this->Comment = $Comment;

        return $this;
    }

    public function getDejaTraite(): ?bool
    {
        return $this->DejaTraite;
    }

    public function setDejaTraite(bool $DejaTraite): self
    {
        $this->DejaTraite = $DejaTraite;

        return $this;
    }
}
