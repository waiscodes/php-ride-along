<?php 
$navArray = array(
    'home' => 'index.php',
    'about' => 'about.php',
);
?>

<nav>
<ul>
<?php foreach ($navArray as $page => $link) : ?>
<li>
    <a href="<?php echo $link; ?>"> <?php echo $page; ?> </a>
</li>
<?php endforeach ?>
</ul>
</nav>