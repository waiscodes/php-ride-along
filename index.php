<?php
//You need to session_start() to any pages you want to use it on. Usually you'd do page by page, unless you want to use it on every page then you would put it in your header. 
session_start();

// global $pageTitle; this is one way of making global variables but global variables are actually just a global array. It is easier to visualize doing it this way. 
//This is an associative array.
$GLOBALS['pageTitle'] = 'Home';
    //Header
    include './templates/header.php';
?>


<?php if (isset($_SESSION['calcHistory'])) : ?>
    <h2>Calculator History from Session</h2>
    <ul>
        <?php foreach ($_SESSION['calcHistory'] as $calculation) : ?>
            <li>
                <?php echo $calculation; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
<?php 
    //Footer
    include './templates/footer.php'
?>