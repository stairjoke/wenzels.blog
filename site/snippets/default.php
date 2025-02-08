<main>
  <h1><a class="permalink" href="<?= $page->permalink() ?>">#</a><?= $page->title() ?></h1>
  <?= $page->blocks()->toBlocks() ?>
</main>