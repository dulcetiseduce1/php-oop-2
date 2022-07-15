<?php

require_once './classi/Prodotto.php';

class ProdottoCibo extends Prodotto

{
    protected $shelfLife;
    protected $storageTemperature;
    protected $storageMethod;
    protected $ingredients;



    public function __construct($name, $price, $description, $image, $category, $brand, $shelfLife, $storageTemperature, $storageMethod, $ingredients)
    {
        parent::__construct($name, $price, $description, $image, $category, $brand);
        $this->setShelfLife($shelfLife);
        $this->setStorageTemperature($storageTemperature);
        $this->setStorageMethod($storageMethod);
        $this->setIngredients($ingredients);
    }

    /**
     * Get the value of shelfLife
     */
    public function getShelfLife()
    {
        return $this->shelfLife;
    }

    /**
     * Set the value of shelfLife
     *
     * @return  self
     */
    public function setShelfLife($shelfLife)
    {
        $this->shelfLife = $shelfLife;

        return $this;
    }

    /**
     * Get the value of storageTemperature
     */
    public function getStorageTemperature()
    {
        return $this->storageTemperature;
    }

    /**
     * Set the value of storageTemperature
     *
     * @return  self
     */
    public function setStorageTemperature($storageTemperature)
    {
        $this->storageTemperature = $storageTemperature;

        return $this;
    }

    /**
     * Get the value of storageMethod
     */
    public function getStorageMethod()
    {
        return $this->storageMethod;
    }

    /**
     * Set the value of storageMethod
     *
     * @return  self
     */
    public function setStorageMethod($storageMethod)
    {
        $this->storageMethod = $storageMethod;

        return $this;
    }

    /**
     * Get the value of ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}