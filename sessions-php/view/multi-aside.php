  <aside>
      <nav class="navmulti">
        <ul>
        <?php foreach ($pages as $key => $value) : ?>
            <?php
            $selected = null;
            if ($key == $pageReference) {
                $selected = "class=\"selected\"";
            }
            // var_dump($value);
            ?>
                <?php if ($value["visible"]) : ?>
              <li><a <?= $selected ?> href="?page=<?= $key ?>"><?= $value["title"] ?></a></li>
                <?php endif; ?>
        <?php endforeach; ?>
        </ul>
      </nav>
  </aside>
