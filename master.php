<?php require_once "Config/global.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=PAGE_NAME . ' - ' . $this->data['meta_data']['title'] ?></title>
    <!-- FIX (404) favicon.ico -->
    <link rel="shortcut icon" href="#" />

    <!--  EXTRA CSS  -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/extra/css/normalize.css" />

    <!--  BASIC CSS  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/_footer.css" />
    <link href='<?= ROOT ?>Dist/css/_header.css' type='text/css' rel='stylesheet'/>
    <? foreach($this->data['css'] as $css){ ?>
        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>Dist/css/views/<?= $css ?>" />
    <? } ?>

    <!-- BASIC JS -->
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>

    <!-- CUSTOM JS -->
    <? foreach($this->data['js'] as $js){ ?>
        <script src="<?= ROOT ?>Dist/js/<?= $js ?>"></script>
    <? } ?>
</head>
<body>
<? include '_header.php'; ?>
<main id="render-main" class="container">
    <? require_once("Views/" . $this->data['view'] . ".php"); ?>
</main>


<? require_once('_footer.php'); ?>
</body>
</html>
