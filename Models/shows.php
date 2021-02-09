<?php

class Shows extends Database
{
    private $id;
    private $title;
    private $performer;
    private $date;
    private $showTypesId;
    private $firstGenresId;
    private $secondGenresId;
    private $duration;
    private $startTime;

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
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of performer
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Set the value of performer
     *
     * @return  self
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of showTypesId
     */
    public function getShowTypesId()
    {
        return $this->showTypesId;
    }

    /**
     * Set the value of showTypesId
     *
     * @return  self
     */
    public function setShowTypesId($showTypesId)
    {
        $this->showTypesId = $showTypesId;

        return $this;
    }

    /**
     * Get the value of firstGenresId
     */
    public function getFirstGenresId()
    {
        return $this->firstGenresId;
    }

    /**
     * Set the value of firstGenresId
     *
     * @return  self
     */
    public function setFirstGenresId($firstGenresId)
    {
        $this->firstGenresId = $firstGenresId;

        return $this;
    }

    /**
     * Get the value of secondGenresId
     */
    public function getSecondGenresId()
    {
        return $this->secondGenresId;
    }

    /**
     * Set the value of secondGenresId
     *
     * @return  self
     */
    public function setSecondGenresId($secondGenresId)
    {
        $this->secondGenresId = $secondGenresId;

        return $this;
    }

    /**
     * Get the value of duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of startTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set the value of startTime
     *
     * @return  self
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }
    public function __construct()
    {
        parent::__construct();
    }
    //     Exercice 6
    // Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. 
    // Trier les titres par ordre alphabétique. 
    // Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.
    public function GetAllShows()
    {
        $query = "SELECT title,performer,date,startTime FROM `Shows` ORDER BY title ASC  ";
        $queryGetAllShows = parent::getDb()->prepare($query);
        $queryGetAllShows->execute();
        $resultsQuery = $queryGetAllShows->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
}
