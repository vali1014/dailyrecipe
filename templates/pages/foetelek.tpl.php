<h2>Főételek</h2>

<div class="foetelek-container">
    <?php
    $foetelek = scandir('./recipe/foetelek/');
    array_splice($foetelek, 0, 2);
    for ($i = 0; $i < count($foetelek); $i++) {
        $foetelnev = $foetelek[$i];
        ?>
      <div class="foetel">
        <a href="<?= file_get_contents("./recipe/foetelek/" . $foetelnev . "/meta.txt"); ?>">
          <img class="kep" src="<?= "./recipe/foetelek/" . $foetelnev . "/" . $foetelnev . ".jpg" ?>"
               alt="kep">
        </a>

        <iframe class="leiras"
                src="<?= "./recipe/foetelek/" . $foetelnev . "/" . $foetelnev . ".txt" ?>"></iframe>

      </div>
    <?php } ?>
</div>
