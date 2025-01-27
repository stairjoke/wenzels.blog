<main>
  <div class="postHead">
    <h1><?= $page->title() ?></h1>
    <time datetime="<?= $page->date()->toDate(option('date.HTML')) ?>"><?= $page->date()->toDate(option('date.format')) ?></time>
  </div>
  <?= $page->text()->kt() ?>
  <p id="permalink"><a href="{{ page.url | safe }}">⌞w⌝</a></p>
</main>