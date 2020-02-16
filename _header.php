<?php

$header = [
        'HOME' => ROOT,
        'TEST' => ROOT . 'test'
]

?>

<header id="myHeader"n class="container">
<!--    <div class="row">-->
        <div id="logo_container" class="col-xs-4">
            <a class="logo" href="<?= ROOT ?>"> <?= PAGE_NAME ?> </a>
            <p class="logo_subtitle"> By Samuel10F </p>
        </div>
        <div id="sections-container" class="col-xs-8">
            <? foreach($header as $name => $href){ ?>
                <a class="section" href="<?= $href ?>"><?= $name ?></a>
            <? } ?>
        </div>
<!--    </div>-->
</header>