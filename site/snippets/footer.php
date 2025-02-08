<footer>
  <p>Find me on <?php
  foreach($site->links()->toStructure() as $link):
    ?><a href="<?= $link->href() ?>" rel="<?php
    if($link->rel()->isNotEmpty()):
    foreach($link->rel() as $item) {
      echo($item . ' ');
    } endif; ?>external" target="_blank"><?= $link->text() ?></a><?php endforeach; ?></p>
  <p class="copy">© Copyright <?= ($page->date()->isEmpty()) ? $page->modified(option('date.EN')) : $page->date()->toDate(option('date.EN')) ; ?> Germany, <?= $site->copyrightName() ?>. <?= $site->copyrightNotice()->kirbytextinline() ?></p>
</footer>