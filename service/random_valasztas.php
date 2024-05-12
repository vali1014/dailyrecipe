<?php
  $ma = date("Y.m.d");
  $file_path = './napimenu/'.$ma;

  if (!file_exists($file_path)) {
    mkdir($file_path, 0777, true);
    // és most a mappat töltsem fel 1-1-1 randommal
    $eloetelek = array(/*idekellalistajuk*/);
    $random_keys_eloetelek = array_rand ($eloetelek,1);
    copy($random_keys_eloetelek,'./napimenu/'.$ma );
  }
?>>

<h3>
A mai ajánlott előétel: <br/>
    <?php
    fopen()
    ?>

</h3>

<h3>
A mai ajánlott főétel: <br/>
    <?php
    ?>

</h3>

<h3>
A mai ajánlott desszert: <br/>
    <?php
    ?>

</h3>