<h2>Képgaléria</h2>

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
    <div id="uploadPicContainer" class="accordion">
      <div class="accordion-item">
        <h3 class="accordion-header" id="uploadAccordionHeading">
          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#uploadAccordion" aria-expanded="true" aria-controls="uploadAccordion">

            <i class="bi bi-cloud-arrow-up"></i>Feltöltés a galériába
          </button>
        </h3>

        <div id="uploadAccordion" class="accordion-collapse collapse show"
             aria-labelledby="uploadAccordionHeading" data-bs-parent="uploadPicContainer">
          <form action="?oldal=kepek" method="post" enctype="multipart/form-data" class="accordion-body">
            <input type="hidden" name="max_file_size" value="110000">
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Fájlok</label>
              <input class="form-control form-control-sm" type="file" name="fajlok[]"  id="formFileMultiple" multiple required>
            </div>
            <input type="submit" class="btn btn-outline-secondary" name="feltoltes">
          </form>
        </div>
      </div>
    </div>
<?php } ?>

<div id="galeria">
    <?php
    arsort($kepek);

    foreach ($kepek as $fajl => $datum) {
        ?>
      <div class="kep">
        <a href="<?= $kepek_mappa . $fajl ?>">
          <img src="<?= $kepek_mappa . $fajl ?>" alt="<?= $fajl ?>">
        </a>
        <p>Név: <?= $fajl; ?></p>
        <p>Dátum: <?= date($kep_datum_formatum, $datum); ?></p>
      </div>
        <?php
    }
    ?>
</div>
</html>
