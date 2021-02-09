<?php
class Cards extends Database
{
    private $id;
    private $cardNumber;
    private $cardTypesID;


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

    /**
     * Get the value of cardTypesID
     */
    public function getCardTypesID()
    {
        return $this->cardTypesID;
    }

    /**
     * Set the value of cardTypesID
     *
     * @return  self
     */
    public function setCardTypesID($cardTypesID)
    {
        $this->cardTypesID = $cardTypesID;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }
}
