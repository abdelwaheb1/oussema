<?php
class Event
{
    // Attributes initialized to null
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $description = null;
    private ?string $date = null;
    private ?float $prix = null;
    private ?string $localisation = null;
    private ?string $photo = null;

    // Constructor to initialize attributes (except id)
    public function __construct(
        string $nom, 
        string $description, 
        string $date, 
        float $prix, 
        string $localisation, 
        string $photo
    ) {
        $this->nom = $nom;
        $this->description = $description;
        $this->date = $date;
        $this->prix = $prix;
        $this->localisation = $localisation;
        $this->photo = $photo;
    }

    // Getters and Setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): void
    {
        $this->localisation = $localisation;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }
}
