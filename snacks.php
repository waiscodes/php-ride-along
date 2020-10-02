<?php 
  $GLOBALS['pageTitle'] = 'Snacks Object Practice';
  // require_once only requires it once. And once it's already on that page, it doesn't require it again. If it required twice, it would break because you can't define a class twice. 
  require_once './includes/Snacks.Class.php';
  // the difference between require and include is, require throws an error and crashes the program if the file isn't there where as includes throws a warning in debugging. 
  include './templates/header.php'; ?>



<?php include './templates/footer.php'; ?>