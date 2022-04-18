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

    <link rel="shortcut icon" href="<?php echo IMG_DIR . 'logo.svg' ?>" type="image/x-icon">
</head>

<body class="em-breve">
    <div class="container m-auto text-left d-flex flex-column flex-md-row">
        <div class="brand d-flex flex-column mx-auto mx-sm-0 me-md-5">
            <img class="logo ms-lg-auto" src="<?php echo IMG_DIR . 'logo.svg'; ?>" alt="">
            <p class="slogan ms-lg-auto">A execução digital de uma estratégia humana.</p>
        </div>

        <div class="side mx-auto mx-sm-0 mt-4 mt-md-0 ms-md-5">
            <h1 class="title">
                SITE EM<br /><mark>CONSTRUÇÃO</mark>
            </h1>

            <div class="links mt-3">
                <?php foreach ($social as $link) : ?>
                    <div class="link">
                        <a href="<?php echo $link['link']; ?>" target="_blank">
                            <span class="icon bi-<?php echo $link['icon']; ?>" aria-label="<?php echo $link['label']; ?>"></span>
                            <span class="text"><?php echo $link['text']; ?></span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="links mt-4">
                <h2 class="subtitle">Entre em Contacto</h3>
                    <?php foreach ($contact as $link) : ?>
                        <div class="link">
                            <a href="<?php echo $link['link']; ?>" target="_blank">
                                <span class="icon bi-<?php echo $link['icon']; ?>" aria-label="<?php echo $link['label']; ?>"></span>
                                <span class="text"><?php echo $link['text']; ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
            </div>
        </div>

    </div>
</body>

<script src="<?php echo JS_DIR . 'main.js' ?>"></script>

</html>