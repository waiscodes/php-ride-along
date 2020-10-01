<?php

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

<!-- 
  The url for the get method http://localhost:3000/calc.php?value1=3&operator=add&value2=4 
  You can read it in kvp. Name is the key and value is the value.
 -->

<?php 
    //Footer
    include './templates/footer.php'
?>