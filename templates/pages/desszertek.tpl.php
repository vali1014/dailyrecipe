<h2>Desszertek</h2>

<div class="desszertek-container">
  <?php
  $desszertek = scandir('./recipe/desszertek/');
  array_splice($desszertek, 0, 2);
      for ($i=0; $i < count($desszertek); $i++) {
        $desszertnev = $desszertek[$i];
  ?>
      <a href="<?= file_get_contents("./recipe/desszertek/".$desszertnev."/meta.txt"); ?>">
        <img src="<?="./recipe/desszertek/".$desszertnev."/".$desszertnev.".jpg"?>" alt="kep">
      </a>
      <a>
        <iframe src="<?="./recipe/desszertek/".$desszertnev."/".$desszertnev.".txt"?>" width="400" height="370"
        &language=hu frameborder="0" marginheight="0px" marginwidth="0px"></iframe>
      </a>
      <?php } ?>
</div>
