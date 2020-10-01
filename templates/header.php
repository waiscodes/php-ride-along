<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS['pageTitle'] ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="./css/main.css">
    <!-- Scripts -->
    <script src="./js/scripts.js" defer></script>
    <!-- ./ and just starting with the file stystem are the same -->
</head>
<body>
    <?php include dirname(__FILE__).'/nav.php' ?>
<!-- dirname is a function that finds the absolute path regardless. It's safer and future proof so possibly make a practice of using this more. -->
<h1>Welcome to my <? echo $GLOBALS['pageTitle'] ?> page</h1>