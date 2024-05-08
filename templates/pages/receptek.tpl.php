<link rel="stylesheet" href="./css/stilus.css" type="text/css"/>
<script type="text/javascript" src="recipes_current_content.js"></script>
<!-- listával -->
<div id="mealtypes" style="text-align: center">
  <nav>
    <ul>
        <?php foreach ($subpages as $url => $oldal) { ?>
            <li>
                <a href='./templates/pages/<?=$url?>.tpl.php' > <?= $oldal['szoveg'] ?> </a>
            </li>
        <?php } ?>
    </ul>
  </nav>
<!-- itt lenne a tartalom -->
  <?php foreach ($subpages as $url => $oldal) { ?>
    <div>
        <?php include_once "./templates/pages/" . $url . ".tpl.php"; ?>
    </div>
  <?php } ?>
</div>
<!-- buttonokkal -->
<div id="mealtypes" style="text-align: center">
  <nav>
    <ul>
        <?php foreach ($subpages as $url => $oldal) { ?>
            <button onclick="document.location.href='./templates/pages/<?=$url?>.tpl.php'"> <?= $oldal['szoveg'] ?> </button>
        <?php } ?>
    </ul>
  </nav>
  </div>