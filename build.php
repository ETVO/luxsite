<?php
    include 'initializer.php';
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux Digital</title>

    <link rel="stylesheet" href="<?php echo CSS_DIR . 'bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo CSS_DIR . 'main.css'; ?>">
    <link rel="stylesheet" href="<?php echo FONTS_DIR . 'bootstrap-icons/bootstrap-icons.css'; ?>">
    <link rel="stylesheet" href="<?php echo FONTS_DIR . 'Raleway/font.css'; ?>">
</head>
<body>
    <?php include_once './templates/header.php'; ?>
    <?php include_once './templates/landing.php'; ?>
    <?php include_once './templates/cards.php'; ?>
    <?php include_once './templates/footer.php'; ?>
</body>

<script src="<?php echo JS_DIR . 'main.js' ?>"></script>
</html>