<main>
  <div class="postHead">
    <h1><?= $page->title() ?></h1>
    <time datetime="{{ date | dateToRfc822 }}">{{ date | friendlyDate }}</time>
  </div>
  <?= $page->text()->kt() ?>
  <p id="permalink"><a href="{{ page.url | safe }}">⌞w⌝</a></p>
</main>