<?php
include 'config.inc.php';

$keres = current($menu);
if (isset($_GET['oldal'])) {
    $oldal = $_GET['oldal'];

    if (isset($menu[$oldal]) && file_exists("./templates/pages/{$menu[$oldal]['fajl']}.tpl.php")) {
        $keres = $menu[$oldal];
    } else {
        $keres = $hiba_oldal;
        header("HTTP/1.0 404 Not Found");
    }
}

include './templates/index.tpl.php';