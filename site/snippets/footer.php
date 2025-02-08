<footer>
  Find me on <?php
  $links = $site->links()->toStructure();
  $numberOfLinksLeftOver = $links->count();
  foreach($links as $link):
    $numberOfLinksLeftOver--;
    ?><a href="<?= $link->href() ?>" rel="<?php
    if($link->rel()->isNotEmpty()):
    foreach($link->rel() as $item) {
      echo($item . ' ');
    } endif; ?>external" target="_blank"><?= $link->text() ?></a><?php e($numberOfLinksLeftOver <= 0, '.', ', ') ?><?php endforeach; ?></p>
  <p class="copy">© Copyright <?= ($page->date()->isEmpty()) ? $page->modified(option('date.EN')) : $page->date()->toDate(option('date.EN')) ; ?> Germany, <?= $site->copyrightName() ?>. <?= $site->copyrightNotice()->kirbytextinline() ?></p>
</footer>