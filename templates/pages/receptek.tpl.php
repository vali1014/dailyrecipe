<div id="mealtypes">
    <ul class="nav nav-tabs">
        <?php
        $i = 0;
        foreach ($subpages as $url => $oldal) { ?>
          <li class="nav-item">
            <a class="nav-link <?= $i == 0 ? 'active' : ''?>" href="#" data-bs-toggle="tab" role="tab"
               data-bs-target="<?= '#' . $url ?>" aria-selected="<?= $i == 0 ?>"><?= $oldal['szoveg'] ?></a>
          </li>
            <?php
            $i++;
        }
        ?>
    </ul>

  <div class="tab-content">
      <?php
      $i = 0;
      foreach ($subpages as $url => $oldal) { ?>
        <div class="tab-pane fade <?= $i == 0 ? 'show active' : ''?>" role="tabpanel" id="<?= $url ?>">
            <?php include_once "./templates/pages/" . $url . ".tpl.php"; ?>
        </div>
          <?php
          $i++;
      }
      ?>
  </div>
</div>
