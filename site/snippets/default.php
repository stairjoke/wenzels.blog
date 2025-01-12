<main>
  <h1><?= $page->title() ?></h1>
  <?= $page->text()->kt() ?>
  <p id="permalink"><a href="<?= $page->permalink() ?>">⌞w⌝</a></p>
</main>