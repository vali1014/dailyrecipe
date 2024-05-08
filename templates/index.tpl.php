<?php session_start(); ?>
<?php if(file_exists('./service/'.$keres['fajl'].'.php')) { include("./service/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8">

  <title><?= $ablakcim['cim'] ?></title>

  <link rel="stylesheet" href="./css/stilus.css" type="text/css"/>

    <?php if (file_exists('./css/' . $keres['fajl'] . '.css')) { ?>
      <link rel="stylesheet" href="./styles/<?= $keres['fajl'] ?>.css" type="text/css"/>
    <?php } ?>
</head>

<body>
<header>
  <img src="./images/<?= $fejlec['kepforras'] ?>" alt="<?= $fejlec['kepalt'] ?>" onclick="document.location.href='/dailyrecipe/'" >

  <h1><?= $fejlec['cim'] ?></h1>
    <?php if(isset($_SESSION['login'])) { ?>
      Bejelentkezve: <strong>
            <?= $_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")" ?>
      </strong>
    <?php } ?>
</header>

<div id="wrapper">
  <aside id="nav">
    <nav id="menu">
      <ul>
          <?php foreach ($menu as $url => $oldal) {
              if (!isset($_SESSION['login'])
                  && $oldal['menun'][0]
                  || isset($_SESSION['login'])
                  && $oldal['menun'][1]) { ?>
                <li <?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                  <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                      <?= $oldal['szoveg'] ?></a>
                </li>
              <?php } ?>
          <?php } ?>
      </ul>
    </nav>
  </aside>
  <div id="content">
      <?php
      include_once "./templates/pages/{$keres['fajl']}.tpl.php"; ?>
  </div>
</div>
<footer>
    <?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
  &nbsp;
    <?php if (isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
</footer>
</body>
</html>
