<?php
//Seession is basically cookies. A temporary storage that survives multiple page loads.
//It sets up Uid in the browser in an assosiative array format for just that user. 
session_start();

//Make sure to set default value if the key value pair does not yet exist in the associative session array. We can't array_push() to a NULL/undefined value.

if (!isset($_SESSION['calcHistory'])) 
{
  $_SESSION['calcHistory'] = array();
}

$GLOBALS['pageTitle'] = 'Calculator';

    //Header
    include './templates/header.php';
?>

<p>
  Welcome to our Calculator Page
</p>

<!-- Action is basically like a redirerct. You could also put # to get the same functionality -->
<!-- 
  GET: Adds the value to the url. Advantage of that is you can send the link to someone else and they get exactly 
  POST: This doesn't show in the submit in the url. 
 -->
 
<form action="calc.php" method="GET">
  <label for="op1">Enter your first Operand</label>
  <input type="number" name="value1" id="op1" value="">

  <label for="operator">Operator</label>
  <select name="operator" id="operator">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">&times;</option>
    <option value="divide">&divide;</option>
  </select>

  <label for="op2">Enter your second Operand</label>
  <input type="number" name="value2" id="op2" value="">
<!-- KVP name is the name of value. -->

  <input type="submit" value="Calculate">
</form>

<?php 
  var_dump($_GET);
  // This is basically a console.log but it shows up on the page. 
  // $_GET is a super global element. $_POST is the same thing. These are predefined variables. 

  echo '<pre>';
    var_dump($_GET);
  echo '</pre>';

  $result = FALSE;
  if ( !empty($_GET)) //empty is a function that checks if something is empty. Not just no value but also empty space. 
  {
    switch($_GET['operator'])
    {
      case 'add':
        $opSymbol = '+';
        $result = $_GET['value1'] + $_GET['value2'];
      break;
      case 'subtract':
        $opSymbol = '-';
        $result = $_GET['value1'] - $_GET['value2'];
      break;
      case 'multiply':
        $opSymbol = '&times;';
        $result = $_GET['value1'] * $_GET['value2'];
      break;
      case 'divide':
        $opSymbol = '&divide;';
        $result = $_GET['value1'] / $_GET['value2'];
      break;
    }
    array_push(
      $_SESSION['calcHistory'],
      "{$_GET['value1']} {$opSymbol} {$_GET['value2']} = {$result} " 
    );
  }
  echo '<pre>';
  var_dump($_SESSION);
  var_dump($result);
  echo '</pre>'
  // var_dump($result);
?>

<?php if ($result != FALSE ) : ?>
  <p>
    Your result for your canculation is: 
    <?php echo $result ?>
  </p>
<?php endif ?>
<!-- 
  The url for the get method http://localhost:3000/calc.php?value1=3&operator=add&value2=4 
  You can read it in kvp. Name is the key and value is the value.
 -->



<?php 
    //Footer
    include './templates/footer.php'
?>