<h2>Főételek</h2>

<div class="foetelek-container">
  <?php
  $foetelek = scandir('./recipe/foetelek/');
  array_splice($foetelek, 0, 2);
      for ($i=0; $i < count($foetelek); $i++) {
        $foetelnev = $foetelek[$i];
  ?>
      <a href="<?= file_get_contents("./recipe/foetelek/".$foetelnev."/meta.txt"); ?>">
        <img src="<?="./recipe/foetelek/".$foetelnev."/".$foetelnev.".jpg"?>" alt="kep">
      </a>
      <a>
        <iframe src="<?="./recipe/foetelek/".$foetelnev."/".$foetelnev.".txt"?>" width="400" height="370"
        &language=hu frameborder="0" marginheight="0px" marginwidth="0px"></iframe>
      </a>
      <?php } ?>
</div>
