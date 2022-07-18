<?php 


require_once __DIR__ . "/Prodotto.php";

class ProdottoAccessorio extends Prodotto{

protected $color ; 
protected $material ; 
protected $category = "Pet's bed";


function __construct($_name , $_price , $_description , $_color , $_material)
{
    parent::__construct($_name , $_price , $_description);
    $this->setColor($_color);
    $this->setMaterial($_material);
}



/**
 * Get the value of color
 */ 
public function getColor()
{
return $this->color;
}

/**
 * Set the value of color
 *
 * @return  self
 */ 
public function setColor($color)
{
$this->color = $color;

return $this;
}

/**
 * Get the value of material
 */ 
public function getMaterial()
{
return $this->material;
}

/**
 * Set the value of material
 *
 * @return  self
 */ 
public function setMaterial($material)
{
$this->material = $material;

return $this;
}
}

?>