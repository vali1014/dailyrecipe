<link rel="stylesheet" href="./css/tablazat.css" type="text/css"/>
<table>
  <h2>Vélemények</h2>

    <thead>
      <tr>
        <th>Név</th>
        <th>Dátum</th>
        <th>Üzenet</th>
      </tr>
    </thead>

    <?php
    include "service/contactok_lekerese.php";

    foreach ($rows as $row) { ?>
          <tr>
            <td><?= $row['nev'] . ($row['bejelentkezett_e'] == 0 ? ' (Vendég)' : '') ?></td>
            <td><?= $row['datum'] ?></td>
            <td><?= $row['content'] ?></td>
          </tr>
    <?php } ?>
</table>
