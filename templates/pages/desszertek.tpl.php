<h2>Desszertek</h2>

<div class="desszertek-container">
    <?php
    $desszertek = scandir('./recipe/desszertek/');
    array_splice($desszertek, 0, 2);
    for ($i = 0; $i < count($desszertek); $i++) {
        $desszertnev = $desszertek[$i];
        ?>
      <div class="desszert">
        <a href="<?= file_get_contents("./recipe/desszertek/" . $desszertnev . "/meta.txt"); ?>">
          <img class="kep" src="<?= "./recipe/desszertek/" . $desszertnev . "/" . $desszertnev . ".jpg" ?>" alt="kep">
        </a>
        <iframe class="leiras" src="<?= "./recipe/desszertek/" . $desszertnev . "/" . $desszertnev . ".txt" ?>"></iframe>
      </div>
    <?php } ?>
</div>
