<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=dailyrecipe', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sqlQuery = "select nev, datum, bejelentkezett_e, content from contact order by datum DESC";
    $stmt = $db->prepare($sqlQuery);
    $stmt->execute();
    $rows = $stmt->fetchAll();
} catch (PDOException $e) {
    $uzenet = "Hiba: ".$e->getMessage()."<br/>".$e->getTraceAsString();
}
