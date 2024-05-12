<meta charset="utf-8">

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

<h3>A mai ajánlott előétel: <br/></h3>
<a href="<?= file_get_contents("$file_path_eloetel"."meta.txt") ?>">
    <img src="<?= $file_path_eloetel."/".$randomeloetelnev.".jpg" ?>" alt="kep">
</a>
<a>
    <iframe src="<?= $file_path_eloetel."/".$randomeloetelnev.".txt" ?>" width="400" height="370"
    &language=hu frameborder="0" marginheight="0px" marginwidth="0px"></iframe>
</a>

<h3>A mai ajánlott főétel: <br/></h3>
<a href="<?= file_get_contents("$file_path_foetel"."meta.txt") ?>">
    <img src="<?= $file_path_foetel."/".$randomfoetelnev.".jpg" ?>" alt="kep">
</a>
<a>
    <iframe src="<?= $file_path_foetel."/".$randomfoetelnev.".txt" ?>" width="400" height="370"
    &language=hu frameborder="0" marginheight="0px" marginwidth="0px"></iframe>
</a>

<h3>A mai ajánlott desszert: <br/></h3>
<a href="<?= file_get_contents("$file_path_desszert"."meta.txt") ?>">
    <img src="<?= $file_path_desszert."/".$randomdesszertnev.".jpg" ?>" alt="kep">
</a>
<a>
    <iframe src="<?= $file_path_desszert."/".$randomdesszertnev.".txt" ?>" width="400" height="370"
    &language=hu frameborder="0" marginheight="0px" marginwidth="0px"></iframe>
</a>
