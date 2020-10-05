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

<?php include './templates/footer.php' ?>