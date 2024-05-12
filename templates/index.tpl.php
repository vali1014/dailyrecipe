<?php session_start(); ?>
<?php if (file_exists('./service/' . $keres['fajl'] . '.php')) {
    include("./service/{$keres['fajl']}.php");
} ?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8">

  <title><?= $ablakcim['cim'] ?></title>
  <link rel="stylesheet" href="./css/stilus.css" type="text/css"/>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"
          integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
          crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Custom css files -->
    <?php if (file_exists('./css/' . $keres['fajl'] . '.css')) { ?>
      <link rel="stylesheet" href="./css/<?= $keres['fajl'] ?>.css" type="text/css"/>
    <?php } ?>
</head>

<body>
<header>
  <img src="./images/<?= $fejlec['kepforras'] ?>" alt="<?= $fejlec['kepalt'] ?>" onclick="document.location.href='/git/dailyrecipe/'" >

  <h1><?= $fejlec['cim'] ?></h1>
    <?php if (isset($_SESSION['login'])) { ?>
      Bejelentkezve: <strong>
            <?= $_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")" ?>
      </strong>
    <?php } ?>
</header>

<div id="wrapper">
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
