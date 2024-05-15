<h2>A mai nap:
    <?php $fmt = datefmt_create(
        "hu_HU",
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        "Europe/Budapest",
        IntlDateFormatter::GREGORIAN,
        "yyyy. MM. dd. (cccc)"
    );

    echo datefmt_format($fmt, time());
    ?>
</h2>

<?php
include "./service/random_valasztas.php";
?>

<div class="etelek">
  <div class="etel-sor">
    <h3>A mai ajánlott előétel: <br/></h3>
    <div class="etel">
      <a href="<?= file_get_contents("$file_path_eloetel" . "/meta.txt") ?>">
        <img class="kep" src="<?= $file_path_eloetel . "/" . $randomeloetelnev . ".jpg" ?>" alt="kep">
      </a>
      <iframe class="leiras" src="<?= $file_path_eloetel . "/" . $randomeloetelnev . ".txt" ?>"></iframe>
    </div>
  </div>

  <div class="etel-sor">
    <h3>A mai ajánlott főétel: <br/></h3>
    <div class="etel">
      <a href="<?= file_get_contents("$file_path_foetel" . "/meta.txt") ?>">
        <img class="kep" src="<?= $file_path_foetel . "/" . $randomfoetelnev . ".jpg" ?>" alt="kep">
      </a>
      <iframe class="leiras" src="<?= $file_path_foetel . "/" . $randomfoetelnev . ".txt" ?>"></iframe>
    </div>
  </div>

  <div class="etel-sor">
    <h3>A mai ajánlott desszert: <br/></h3>
    <div class="etel">
      <a href="<?= file_get_contents("$file_path_desszert" . "/meta.txt") ?>">
        <img class="kep" src="<?= $file_path_desszert . "/" . $randomdesszertnev . ".jpg" ?>" alt="kep">
      </a>
      <iframe class="leiras" src="<?= $file_path_desszert . "/" . $randomdesszertnev . ".txt" ?>"></iframe>
    </div>
  </div>

</div>