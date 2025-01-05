<main>
  <h1><?= $page->title() ?></h1>
  <?= $page->text()->kt() ?>
  <p id="permalink"><a href="{{ page.url | safe }}">⌞w⌝</a></p>
</main>