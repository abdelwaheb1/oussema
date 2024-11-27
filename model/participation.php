<?php
class participation
{

/// les attribues el kol initialiser a null ( = null )
    private $id = null;
    private $id_user= null;
    private $id_evenement = null;
    
    // constructeur nhotou les attrivue kol ken id 
    public function __construct( $id_user, $id_evenement)
    {
        $this->id_user = $id_user;
        $this->id_evenement = $id_evenement;
    }
}
<?php
class Participation
{
    // Attributes initialized to null
    private ?int $id = null;
    private ?int $id_user = null;
    private ?int $id_evenement = null;

    // Constructor to initialize attributes (except id)
    public function __construct(int $id_user, int $id_evenement)
    {
        $this->id_user = $id_user;
        $this->id_evenement = $id_evenement;
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

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    public function getIdEvenement(): ?int
    {
        return $this->id_evenement;
    }

    public function setIdEvenement(int $id_evenement): void
    {
        $this->id_evenement = $id_evenement;
    }
}
