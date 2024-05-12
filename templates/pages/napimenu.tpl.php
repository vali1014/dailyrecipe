<meta charset="utf-8">
<script type="text/javascript" src="random.js"></script>
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
include "service/random_valasztas.php";
?>
