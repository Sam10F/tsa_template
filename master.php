<?php require_once "Config/global.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Master</title>
    <!-- FIX (404) favicon.ico -->
    <link rel="shortcut icon" href="#" />

    <!--  EXTRA CSS  -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/extra/css/normalize.css" />

    <!--  BASIC CSS  -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/_footer.css" />
    <link href='<?= ROOT ?>Dist/css/_header.css' type='text/css' rel='stylesheet'/>
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/custom.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/views/<?= $this->controller ?>.css" />

    <!-- BASIC JS -->
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="<?= ROOT ?>Dist/js/<?= $this->controller ?>.js"></script>
</head>
<body>
<? include '_header.php'; ?>

<section id="render-section">
<? require_once("Views/" . $this->controller . ".php"); ?>
</section>


<? require_once('_footer.php'); ?>
</body>
</html>
<?php
