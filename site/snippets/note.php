<main>
  <div class="postHead">
    <h1><?= $page->title() ?></h1>
    <?= snippet('time', ['item' => $page]) ?>
  </div>
  <?= $page->text()->kt() ?>
  <p id="permalink"><a href="{{ page.url | safe }}">⌞w⌝</a></p>
</main>