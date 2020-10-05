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
  <select name="type" id="animal-type">
    <option value="cat">Cat</option>
    <option value="dog">Dog</option>
    <option value="horse">Horse</option>
    <option value="snail">Snail</option>
  </select>
  <input type="submit" value="Get Animal Fact!">
</form>

<?php
if (isset($_POST['amount']) && isset($_POST['type']))
{
  $factsListResponse = file_get_contents(
    "https://cat-fact.herokuapp.com/facts/random?amount={$_POST['amount']}&animal_type={$_POST['type']}"
  );

  if ($factsListResponse)
  {
    $factsList = json_decode($factsListResponse);
    ?>
      <h2>
        List of
        <?php echo ucfirst($_POST['type']); ?>
        Facts
      </h2>
      <?php if (!empty($factsList)) : ?>
      <ol>
        <?php foreach ($factsList as $fact) : ?>
          <li>
            <?php echo $fact->text; ?>
          </li>
        <?php endforeach ?>
      </ol>
      <? else : ?> 
      <p>No Facts Found</p>
      <?php endif ?>
    <?php
  }
}
?>

<?php include './templates/footer.php' ?>