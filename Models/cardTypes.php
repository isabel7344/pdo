<?php
class CardTypes extends Database
{
    private $id;
    private $type;
    private $discount;

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

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
    public function __construct()
    {
        parent::__construct();
    }
    public function getAllCardTypes()
    {
        $query = "SELECT * FROM `cardTypes`";
        $queryGetAllCardTypes = parent::getDb()->prepare($query);
        $queryGetAllCardTypes->execute();
        $resultsQuery = $queryGetAllCardTypes->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
}
