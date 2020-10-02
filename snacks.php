<?php 
  $GLOBALS['pageTitle'] = 'Snacks Object Practice';
  // require_once only requires it once. And once it's already on that page, it doesn't require it again. If it required twice, it would break because you can't define a class twice. 
  require_once './includes/Snacks.Class.php';
  // the difference between require and include is, require throws an error and crashes the program if the file isn't there where as includes throws a warning in debugging. 
  include './templates/header.php'; 
  
  // Initialize array
  $snacks = [];
  // Now the data. You get data by using file_get_content(file/path)
  $snacksFileString = file_get_contents('./data/snacks.json'); //Retreives the contents of the file as a STRING.

  if ($snacksFileString)
  { // Convert the JSON to PHP array or object. Encode turns viseversa
    $snacksArray = json_decode($snacksFileString);
    if ($snacksArray)
    { // if the conversion was successful
      foreach($snacksArray as $snack)
      {
        $snacks[] = new Snack(...$snack);
      }
    }
  }
  ?>
 <h2>Our Snacks</h2> 
<?php if (!empty($snacks)) : ?>
    <?php foreach ($snacks as $snack) $snack->output(); ?>
<?php else : ?>
  <p>Sorry, no snacks found!</p>
<?php endif; ?>

<?php include './templates/footer.php'; ?>