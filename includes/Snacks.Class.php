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
  function __construct($name = '', $type = '', $price = 0.00, $calories = 0)
  {
    $this->name = $name;
    $this->type = $type;
    // for more verbose currency formatting, there's a currency fomatting function.
    $this->price = $price;
    $this->calories = $calories;
  }
}

$mySnack = new Snack('Oreo');
var_dump($mySnack);

?>