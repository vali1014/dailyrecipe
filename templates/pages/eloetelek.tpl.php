<h2>Előételek</h2>

<div class="eloetelek-container">
    <?php
    $eloetelek = scandir('./recipe/eloetelek/');
    array_splice($eloetelek, 0, 2);
    for ($i = 0; $i < count($eloetelek); $i++) {
        $eloetelnev = $eloetelek[$i];
        ?>
      <div class="eloetel">
        <a href="<?= file_get_contents("./recipe/eloetelek/" . $eloetelnev . "/meta.txt"); ?>">
          <img class="kep" src="<?= "./recipe/eloetelek/" . $eloetelnev . "/" . $eloetelnev . ".jpg" ?>" alt="kep">
        </a>

        <iframe class="leiras" src="<?= "./recipe/eloetelek/" . $eloetelnev . "/" . $eloetelnev . ".txt" ?>"></iframe>
      </div>
    <?php } ?>
</div>