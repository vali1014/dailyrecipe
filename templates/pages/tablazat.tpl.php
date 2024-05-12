<h2>Vélemények</h2>

<table class="table table-success table-striped table-hover align-middle">
    <thead>
      <tr>
        <th scope="col" class="col-3">Név</th>
        <th scope="col" class="col-3">Dátum</th>
        <th scope="col" class="col-6">Üzenet</th>
      </tr>
    </thead>

    <tbody>
    <?php
    include "service/contactok_lekerese.php";

    foreach ($rows as $row) { ?>
      <tr>
        <td><?= $row['nev'] . ($row['bejelentkezett_e'] == 0 ? ' (Vendég)' : '') ?></td>
        <td><?= $row['datum'] ?></td>
        <td><?= $row['content'] ?></td>
      </tr>
    <?php } ?>
    </tbody>
</table>
