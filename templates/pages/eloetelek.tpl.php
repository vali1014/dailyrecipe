<meta charset="utf-8">

<h2>Előételek</h2>

<div class="eloetelek-container">
  <?php
  $eloetelek = scandir('./recipe/eloetelek/');
  array_splice($eloetelek, 0, 2);
      for ($i=0; $i < count($eloetelek); $i++) {
        $eloetelnev = $eloetelek[$i];
  ?>
      <a href="<?= file_get_contents("./recipe/eloetelek/".$eloetelnev."/meta.txt"); ?>">
        <img src="<?="./recipe/eloetelek/".$eloetelnev."/".$eloetelnev.".jpg"?>" alt="kep">
      </a>
      <a>
        <iframe src="<?="./recipe/eloetelek/".$eloetelnev."/".$eloetelnev.".txt"?>" width="400" height="370"
        &language=hu frameborder="0" marginheight="0px" marginwidth="0px"></iframe>
      </a>
      <?php } ?>
</div>