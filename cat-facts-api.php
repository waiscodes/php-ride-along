<?php
  $GLOBALS['pageTitle'] = 'Cat Facts Page';
  include './templates/header.php';
?>

<?php
  // file_get_content gets documents from an external source, like that json file for example.
  $dailyCatFactResponse = file_get_contents(
    'https://cat-fact.herokuapp.com/facts/random'
  );
  
  if ($dailyCatFactResponse)
  {
    $dailyCatFact = json_decode($dailyCatFactResponse);
    ?>
      <h2>Today's Cat Fact: </h2>
      <p><?php echo $dailyCatFact->text; ?></p>
    <?php
  }
?>

<h2>Request Animal Facts</h2>
<form action="#" method="POST">
  <label for="amount">Enter the Amount of Facts: </label>
  <input type="number" id="amount" name="amount">
  <label for="animal-type">Enter the Type of Animal: </label>
  <input type="text" id="animal-type" name="type">
  <input type="submit" value="Get Animal Fact!">
</form>

<?php
  $factsListResponse = file_get_contents(
    "https://cat-fact.herokuapp.com/facts/random?amount={$_POST['amount']}&animal_type={$_POST['type']}"
  );

  var_dump($factsListResponse);
?>

<?php include './templates/footer.php' ?>