<?php
//HOLI
$header = [
        'HOME' => [
                'url' => ROOT
        ],

        'TEST' => [
                'url' => ROOT . 'test',
                'links' => [
                        'link1' => '#',
                        'link2' => '#',
                        'link3link3link3' => '#'
                ]
        ]
]

?>

<header id="mainHeader">
    <ul>
        <li id="logo_container">
            <a class="logo" href="<?= ROOT ?>"> <?= PAGE_NAME ?> </a>
        </li>
        <li id="sections-container">
            <ul id="menu">
                <? foreach($header as $name => $content){ ?>
                    <li>
                        <? ($content['links']) ? $withSubmenu = true : $withSubmenu = false; ?>
                        <a class="section <?= $withSubmenu ? 'withSubmenu' : '' ?>"
                           href="<?= $content['url'] ?>">
                            <?= $name ?>
                        </a>
                        <? if($withSubmenu){ ?>
                            <ul id="subMenu">
                                <? foreach($content['links'] as $subName => $url) { ?>
                                    <li>
                                        <a class="section" href="<?= $url ?>">
                                            <?= $subName ?>
                                        </a>
                                    </li>
                                <? } ?>
                            </ul>
                        <? } ?>
                    </li>
                <? } ?>
            </ul>
        </li>
    </ul>
</header>