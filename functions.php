<?php

function getController($url){
    $url = ' ' . $url;
    $ini = strpos($url, ROOT);
    if ($ini == 0) return '';
    $ini += strlen(ROOT);

    //IF THERE IS NOTHING MORE AFTER THE CONTROLLER WE TAKE UNTIL THE END OF THE LINE
    $len = ((strpos($url, '/', $ini) - $ini) > 0) ? strpos($url, '/', $ini) - $ini : strlen($url);

    return substr($url, $ini, $len);
}