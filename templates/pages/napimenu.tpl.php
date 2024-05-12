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

<h3>
  A mai ajánlott előétel: <br/>

</h3>

<h3>
  A mai ajánlott főétel: <br/>

</h3>

<h3>
  A mai ajánlott desszert: <br/>

</h3>
