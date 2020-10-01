<?php

$GLOBALS['pageTitle'] = 'Calculator';

    //Header
    include './templates/header.php';
?>

<p>
  Welcome to our Calculator Page
</p>

<form action="">
  <label for="op1">Enter your first Operand</label>
  <input type="number" name="value1" id="op1" value="">

  <label for="operator"></label>
  <select name="operator" id="operator">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">&times;</option>
    <option value="divide">&divide;</option>
  </select>

  <label for="op2">Enter your second Operand</label>
  <input type="number" name="value2" id="op2" value="">

  <input type="submit" value="Calculate">
</form>

<?php 
    //Footer
    include './templates/footer.php'
?>