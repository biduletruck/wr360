<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $OrderNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DeviationType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ReasonCode;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $CreationDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ModificationDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DeviationDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $Store;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $UserId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OrderType;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Traitement;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="orders")
     */
    private $Collaborateur;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DebutTraitement;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $FinTraitement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Commentaire;


    public function __construct()
    {
        $this->DebutTraitement = new \DateTime();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderNumber(): ?int
    {
        return $this->OrderNumber;
    }

    public function setOrderNumber(int $OrderNumber): self
    {
        $this->OrderNumber = $OrderNumber;

        return $this;
    }

    public function getDeviationType(): ?string
    {
        return $this->DeviationType;
    }

    public function setDeviationType(string $DeviationType): self
    {
        $this->DeviationType = $DeviationType;

        return $this;
    }

    public function getReasonCode(): ?string
    {
        return $this->ReasonCode;
    }

    public function setReasonCode(string $ReasonCode): self
    {
        $this->ReasonCode = $ReasonCode;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->CreationDate;
    }

    public function setCreationDate(?\DateTimeInterface $CreationDate): self
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }

    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->ModificationDate;
    }

    public function setModificationDate(?\DateTimeInterface $ModificationDate): self
    {
        $this->ModificationDate = $ModificationDate;

        return $this;
    }

    public function getDeviationDate(): ?\DateTimeInterface
    {
        return $this->DeviationDate;
    }

    public function setDeviationDate(?\DateTimeInterface $DeviationDate): self
    {
        $this->DeviationDate = $DeviationDate;

        return $this;
    }

    public function getStore(): ?int
    {
        return $this->Store;
    }

    public function setStore(int $Store): self
    {
        $this->Store = $Store;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->UserId;
    }

    public function setUserId(string $UserId): self
    {
        $this->UserId = $UserId;

        return $this;
    }

    public function getOrderType(): ?string
    {
        return $this->OrderType;
    }

    public function setOrderType(string $OrderType): self
    {
        $this->OrderType = $OrderType;

        return $this;
    }

    public function getTraitement(): ?bool
    {
        return $this->Traitement;
    }

    public function setTraitement(bool $Traitement): self
    {
        $this->Traitement = $Traitement;

        return $this;
    }

    public function getCollaborateur(): ?user
    {
        return $this->Collaborateur;
    }

    public function setCollaborateur(?user $Collaborateur): self
    {
        $this->Collaborateur = $Collaborateur;

        return $this;
    }

    public function getDebutTraitement(): ?\DateTimeInterface
    {
        return $this->DebutTraitement;
    }

    public function setDebutTraitement(?\DateTimeInterface $DebutTraitement): self
    {
        $this->DebutTraitement = $DebutTraitement;

        return $this;
    }

    public function getFinTraitement(): ?\DateTimeInterface
    {
        return $this->FinTraitement;
    }

    public function setFinTraitement(?\DateTimeInterface $FinTraitement): self
    {
        $this->FinTraitement = $FinTraitement;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }
}
