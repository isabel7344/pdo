<?php

class ShowTypes extends Database
{

    private $id;
    private $type;

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
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    public function __construct()
    {
        parent::__construct();
    }
    // Exercice 2
    // Afficher tous les types de spectacles possibles.
    public function getAllshowTypes()
    {
        $query = "SELECT * FROM `showTypes`";
        $queryGetAllshowTypes = parent::getDb()->prepare($query);
        $queryGetAllshowTypes->execute();
        $resultsQuery = $queryGetAllshowTypes->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
}
