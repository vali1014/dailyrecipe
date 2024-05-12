<?php
include 'config.inc.php';
$uzenet = array();

if (isset($_POST['feltoltes'])) {

    $fajlok = $_FILES["fajlok"];
    for ($i = 0; $i < count($fajlok["name"]); $i++) {
        if ($fajlok['error'][$i] == 4) {
            $uzenet[] = "Nem töltött fel fájlt";
        } elseif ($fajlok['error'][$i] == 1 || $fajlok['error'][$i] == 2 ||
            $fajlok['size'][$i] > $kep_max_meret) {
            $uzenet[] = " Túl nagy állomány: " . $fajlok['name'][$i];
        } elseif (!in_array($fajlok['type'][$i], $kep_media_tipusok)) {
            $uzenet[] = " Nem megfelelő típus: " . $fajlok['name'][$i];
        } else {
            $vegsohely = $kepek_mappa . strtolower($fajlok['name'][$i]);
            if (file_exists($vegsohely)) {
                $uzenet[] = " Már létezik: " . $fajlok['name'][$i];
            } else {
                move_uploaded_file($fajlok['tmp_name'][$i], $vegsohely);
                $uzenet[] = ' Ok: ' . $fajlok['name'][$i];
            }
        }
    }
}
?>

<style type="text/css">
    div#galeria {
        margin: 0 auto;
        width: 610px;
    }

    div.kep {
        display: inline-block;
    }

    div.kep img {
        width: 200px;
    }
</style>

<?php
// képek beolvasása
$kepek = array();
$olvaso = opendir($kepek_mappa);
while (($fajl = readdir($olvaso)) !== false) {
    if (is_file($kepek_mappa . $fajl)) {
        $vege = strtolower(substr($fajl, strlen($fajl) - 4));
        if (in_array($vege, $kep_tipusok)) {
            $kepek[$fajl] = filemtime($kepek_mappa . $fajl);
        }
    }
}
closedir($olvaso);

// képfeltöltés üzenetei
if (!empty($uzenet)) {
    echo '<ul>';
    foreach ($uzenet as $u) {
        echo "<li>$u</li>";
    }
    echo '</ul>';
}
?>

<?php if(isset($_SESSION['login'])) { ?>
  <h1>Feltöltés a galériába:</h1>

  <form action="?oldal=kepek" method="post" enctype="multipart/form-data">
  <input type="hidden" name="max_file_size" value="110000">
  <label>Fájlok:
    <input type="file" name="fajlok[]" accept="image/png, image/jpeg" multiple required>
  </label>
  <input type="submit" name="feltoltes">
</form>
<?php } ?>

<div id="galeria">

  <h1>KÉPGALÉRIA</h1>
    <?php
    arsort($kepek);

    foreach ($kepek as $fajl => $datum) {
        ?>
      <div class="kep">
        <a href="<?= $kepek_mappa . $fajl ?>">
          <img src="<?= $kepek_mappa . $fajl ?>">
        </a>
        <p>Név: <?= $fajl; ?></p>
        <p>Dátum: <?= date($kep_datum_formatum, $datum); ?></p>
      </div>
        <?php
    }
    ?>
</div>
</html>
