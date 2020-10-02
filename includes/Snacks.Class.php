<?php 

class Snack
{
  // This is how we set up properties
  // Two things in a class, properties in a class

  // Public means this can be accessed outside the class
  public $name = '';
  public $type = '';
  public $price = 0.00;
  public $calories = 0;

  /**
   * Constructor Method runs everytime we make a new instance of this class. (a new object following this blueprint) 
   * 
   * 
  */
  function __construct($name, $type, $price, $calories)
  {
    $this->name = $name;
    $this->type = $type;
    $this->price = $price;
    $this->calories = $calories;
  }
}

?>