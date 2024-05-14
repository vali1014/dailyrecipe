<?php
if (isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])) {
    try {
        $db = new PDO('mysql:host=ftp.nethely.hu;dbname=dailyrecipe', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $db->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlSelect = "select id from felhasznalok where bejelentkezes = :bejelentkezes";
        $sth = $db->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));

        if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "A felhasználói név már foglalt!";
            $ujra = "true";
        } else {
            $sqlInsert = "insert into felhasznalok(id, csaladi_nev, utonev, bejelentkezes, jelszo)
                          values(0, :csaladinev, :utonev, :bejelentkezes, :jelszo)";
            $stmt = $db->prepare($sqlInsert);
            $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':utonev' => $_POST['utonev'],
                ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => password_hash($_POST['jelszo'],
                    PASSWORD_DEFAULT)));
            if ($count = $stmt->rowCount()) {
                $newid = $db->lastInsertId();
                $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";
                $ujra = false;
            } else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }
    } catch (PDOException $e) {
        $uzenet = "Hiba: " . $e->getMessage() . "<br/>" . $e->getTraceAsString();
        $ujra = true;
    }
} else {
    header("Location: .");
}
?>