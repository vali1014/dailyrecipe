<?php
if(isset($row)) {
  if($row) { ?>
        <h1>Bejelentkezett:</h1>
        Azonosító: <strong><?= $row['id'] ?></strong>
        Név: <strong><?= $row['csaladi_nev']." ".$row['utonev'] ?></strong>
    <?php } else { ?>
        <h1>A bejelentkezés nem sikerült!</h1>
        <a href="?oldal=belepes" >Próbálja újra!</a>
    <?php }
} ?>

<?php if(isset($errormessage)) { ?>
    <h2><?= $errormessage ?></h2>
<?php }
