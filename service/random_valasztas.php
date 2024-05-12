<?php
include "./service/recursive_copy.php";

  $ma = date("Y.m.d");
  $file_path = './napimenu/'.$ma;
  $file_path_eloetel = './napimenu/'.$ma.'/eloetel';
  $file_path_foetel = './napimenu/'.$ma.'/foetel';
  $file_path_desszert = './napimenu/'.$ma.'/desszert';

  if (!file_exists($file_path)) {
    mkdir($file_path, 0777, true);
    mkdir($file_path_eloetel, 0777, true);
    mkdir($file_path_foetel, 0777, true);
    mkdir($file_path_desszert, 0777, true);
    //mappak feltoltese random etelekkel
    $eloetelek = scandir('./recipe/eloetelek/');
    array_splice($eloetelek, 0, 2);
    $random_keys_eloetelek = array_rand($eloetelek,1);
    $randomeloetel = $eloetelek[$random_keys_eloetelek];
    recurseCopy('./recipe/eloetelek/'.$randomeloetel,'./napimenu/'.$ma.'/eloetel' );

    $foetelek = scandir('./recipe/foetelek/');
    array_splice($foetelek, 0, 2);
    $random_keys_foetelek = array_rand($foetelek,1);
    $randomfoetel = $foetelek[$random_keys_foetelek];
    recurseCopy('./recipe/foetelek/'.$randomfoetel,'./napimenu/'.$ma.'/foetel' );

    $desszertek = scandir('./recipe/desszertek/');
    array_splice($desszertek, 0, 2);
    $random_keys_desszertek = array_rand($desszertek,1);
    $randomdesszert = $desszertek[$random_keys_desszertek];
    recurseCopy('./recipe/desszertek/'.$randomdesszert,'./napimenu/'.$ma.'/desszert' );
  }

  $randomeloetelfiles = scandir($file_path_eloetel);
  array_splice($randomeloetelfiles, 0, 2);
  $randomeloetelnev = preg_grep('/.jpg/', $randomeloetelfiles)[0];
  $randomeloetelnev = substr($randomeloetelnev, 0, -4);

  $randomfoetelfiles = scandir($file_path_foetel);
  array_splice($randomfoetelfiles, 0, 2);
  $randomfoetelnev = preg_grep('/.jpg/', $randomfoetelfiles)[0];
  $randomfoetelnev = substr($randomfoetelnev, 0, -4);

  $randomdesszertfiles = scandir($file_path_desszert);
  array_splice($randomdesszertfiles, 0, 2);
  $randomdesszertnev = preg_grep('/.jpg/', $randomdesszertfiles)[0];
  $randomdesszertnev = substr($randomdesszertnev, 0, -4);
?>
