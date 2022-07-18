<?php

require_once __DIR__ . "/Carta.php";

class Utente extends Carta
{

    private $name;
    private $surname;
    private $email;
    private $password;
    private $isRegistered;
    private Carta $creditCard;
    private $cart = [];

    function __construct($_name, $_surname, $_email, $_password, $_isRegistered, $_cardNumber, $_cvc, $_expire)
    {
        parent::__construct($_cardNumber, $_cvc, $_expire);

        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setEmail($_email);
        $this->setPassword($_password);
        $this->setIsRegistered($_isRegistered);
        $this->creditCard = new Carta($_cardNumber, $_cvc, $_expire);
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of isRegistered
     */
    public function getIsRegistered()
    {
        return $this->isRegistered;
    }

    /**
     * Set the value of isRegistered
     *
     * @return  self
     */
    public function setIsRegistered($isRegistered)
    {
        $this->isRegistered = $isRegistered;

        return $this;
    }

    /**
     * Get the value of cart
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     *
     * @return  self
     */
    public function setCart($cart)
    {
        array_push($this->cart, $cart);
    }
}
