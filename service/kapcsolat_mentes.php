<?php
// Szerver oldali ellenőrzés
$name_regex = '/^([A-Za-zÁÉÍÓÖŐÚÜŰáéíóöőúüű\s]{8,20})$/';
$is_correct = true;

$kimenet = "Név: {$_POST['nev']}";
if (!isset($_POST['nev']) || !preg_match($name_regex, $_POST['nev'])) {
    $kimenet .= "<span class='piros'> Hiba: Hiányzó vagy helytelen név.</span>";
    $is_correct = false;
}
$kimenet .= "<br>";

$email_regex = '/^[A-Za-z0-9_\-\.]+\@[A-Za-z0-9_\-\.]+\.[A-Za-z]{2,4}$/';
$kimenet .= "E-mail: {$_POST['email']}";
if (!isset($_POST['email']) || !preg_match($email_regex, $_POST['email']) || strlen($_POST['email']) > 40) {
    $kimenet .= "<span class='piros'> Hiba: Hiányzó, helytelen vagy túl hosszú e-mail.</span>";
    $is_correct = false;
}
$kimenet .= "<br>";

$kimenet .= "Üzenet: {$_POST['szoveg']}";
if (!isset($_POST['szoveg']) || strlen($_POST['szoveg']) < 20) {
    $kimenet .= "<span class='piros'> Hiba: Hiányzó vagy helytelen az üzenet hossza.</span>";
    $is_correct = false;
}
$kimenet .= "<br>";

// mentés db-be
if ($is_correct) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=dailyrecipe', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $db->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');


        $sqlInsert = "insert into contact(id, nev, email, bejelentkezett_e, content)
                          values(0, :nev, :email, :bejelentkezett_e, :content)";
        $stmt = $db->prepare($sqlInsert);
        $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'],
            ':bejelentkezett_e' => isset($_SESSION["login"]) ? 1 : 0, ':content' => $_POST['szoveg']));
    } catch (PDOException $e) {
        $kimenet = "Hiba: " . $e->getMessage() . "<br/><p>" . $e->getTraceAsString() . "</p>";
    }
} else {
    $kimenet = "<h2>Validálási hiba! Adatbázisba nem sikerült menteni... :(</h2>" . $kimenet;
}
