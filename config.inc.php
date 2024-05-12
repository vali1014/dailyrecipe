<?php
$ablakcim = array(
    'cim' => 'dailyrecipe',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
    'cim' => 'Napi receptek'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Napi receptek'
);

$menu = array(
    '/' => array('fajl' => 'fooldal', 'szoveg' => 'főoldal', 'menun' => array(1,1)),
    'receptek' => array('fajl' => 'receptek', 'szoveg' => 'receptek', 'menun' => array(1,1)),
    'napimenu' => array('fajl' => 'napimenu', 'szoveg' => 'napi menü', 'menun' => array(1,1)),
    'kepek' => array('fajl' => 'kepgaleria', 'szoveg' => 'képgaléria', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'kapcsolat', 'menun' => array(1,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'vélemények', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'email_elkuldve' => array('fajl' => 'email_elkuldve', 'szoveg' => 'email elküldve', 'menun' => array(0,0))
);

$subpages = array(
    'eloetelek' => array('fajl' => 'eloetelek', 'szoveg' => 'előételek', 'menun' => array(1,1)),
    'foetelek' => array('fajl' => 'foetelek', 'szoveg' => 'főételek', 'menun' => array(1,1)),
    'desszertek' => array('fajl' => 'desszertek', 'szoveg' => 'desszertek', 'menun' => array(1,1))
);

$hiba_oldal = array ('fajl' => 'error', 'szoveg' => 'A keresett oldal nem található!');

$kepek_mappa = './images/galeria/';
$kep_tipusok = array ('.jpg', '.png');
$kep_datum_formatum = "Y.m.d.";
$kep_media_tipusok = array('image/jpeg', 'image/png');
$kep_max_meret = 500*1024;