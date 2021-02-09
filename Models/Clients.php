<?php

class Clients extends Database
{

    private $id;
    private $lastName;
    private $firstName;
    private $birthDate;
    private $card;
    private $cardNumber;


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get the value of cardNumber
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }

    // Exercice 1
    // Afficher tous les clients.
    // public function getAllClients()
    // {
    //     $query = "SELECT * FROM `clients`";
    //     $queryGetAllClients = parent::getDb()->prepare($query);
    //     $queryGetAllClients->execute();
    //     $resultsQuery = $queryGetAllClients->fetchAll(PDO::FETCH_ASSOC);
    //     if (!empty($resultsQuery)) {
    //         return $resultsQuery;
    //     } else {
    //         return false;
    //     }
    // }

    // Exercice 3
    // Afficher les 20 premiers clients.
    public function FirstClients()
    {
        $query = "SELECT * FROM `clients` LIMIT 0,20 ";
        $queryFirstClients = parent::getDb()->prepare($query);
        $queryFirstClients->execute();
        $resultsQuery = $queryFirstClients->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
    // Exercice 4
    // N'afficher que les clients possédant une carte de fidélité.
    public function CardClients()
    {
        $query = "SELECT * FROM `clients` WHERE `card` ";
        $queryCardClients = parent::getDb()->prepare($query);
        $queryCardClients->execute();
        $resultsQuery = $queryCardClients->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
    //     Exercice 5
    // Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
    // Les afficher comme ceci :
    // Nom : Nom du client
    // Prénom : Prénom du client
    // Trier les noms par ordre alphabétique.

    public function OrderClients()
    {
        $query = "SELECT lastName,firstName FROM `clients` WHERE lastName LIKE 'M%'  ORDER BY lastName ASC  ";
        $queryOrderClients = parent::getDb()->prepare($query);
        $queryOrderClients->execute();
        $resultsQuery = $queryOrderClients->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

    //     Exercice 7
    // Afficher tous les clients comme ceci :
    // Nom : Nom de famille du client
    // Prénom : Prénom du client
    // Date de naissance : Date de naissance du client
    // Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)
    // Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.

    public function getClients()
    {
        $query = "SELECT lastName,firstName,birthDate,card,cardNumber FROM `clients`";
        $queryGetClients = parent::getDb()->prepare($query);
        $queryGetClients->execute();
        $resultsQuery = $queryGetClients->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
}
