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
    $this->price = number_format(
      $price, // Number to format 
      2, // Number of decimal places
      '.', // decimal seperator
      ',' // Thousand seperator
    );
    $this->calories = ((integer) $calories); // This does type conversion to the value directly next to the right of it. intVal() does the same thing. Similar intParse()
  }

  public function caramelize()
  { //This function just multiplies the properties to methods.
    $this->calories *=2;
  }

  public function output()
  { // Closing the main tag here. It doesn't effect it though, since it's inside the function block.
    ?> 
      <dl>
        <dt>Snack Name: </dt>
        <dd><?php echo $this->name; ?></dd>
        <dt>Snack Type: </dt>
        <dd><?php echo $this->type; ?></dd>
        <dt>Snack Price: </dt>
        <dd><?php echo $this->price; ?></dd>
        <dt>Snack Calories: </dt>
        <dd><?php echo $this->calories; ?></dd>
      </dl>
    <?php
  }
}

// // Initialized a snack object, pass arguments to __construct
// $mySnack = new Snack('Oreo','chocolate', 1.8843, '200');
// var_dump($mySnack);

// // Run a method from the object.
// $mySnack->caramelize();
// var_dump($mySnack);

// $mySnack->output();

?>