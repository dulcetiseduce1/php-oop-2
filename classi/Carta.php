<?php 

class Carta{
    private $cardNumber;
    private $cvv;
    private $expiryDate;


    function __construct($_cardNumber , $_cvv , $_expiryDate)
    {
        $this->setCardNumber($_cardNumber);
        $this->setCvv($_cvv);
        $this->setExpiryDate($_expiryDate);
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
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expiryDate
     */ 
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set the value of expiryDate
     *
     * @return  self
     */ 
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }


    public function isExpired($expiryDate){
      $today = date("Y");
      if($expiryDate < $today){
        return false;
      }
        else{
        return true;
        }
      }
      
}
