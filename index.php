<?php

// global $pageTitle; this is one way of making global variables but global variables are actually just a global array. It is easier to visualize doing it this way. 
//This is an associative array.
$GLOBALS['pageTitle'] = 'Home';
    //Header
    include './templates/header.php';
?>
    



<?php 
    //Footer
    include './templates/footer.php'
?>