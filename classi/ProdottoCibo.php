<?php 


require_once __DIR__ . "/Prodotto.php";

class ProdottoCibo extends Prodotto{

protected $expiryDate;
protected $ingredients = [];
protected $category = "Food";

function __construct($_name , $_price , $_description , $_expiryDate , $_ingredients)
{
    parent::__construct($_name , $_price , $_description);
    $this->setExpiryDate($_expiryDate);
    $this->setIngredients($_ingredients);
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
