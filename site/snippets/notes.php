<main>
  <ol class="list-of-posts">
    <?php foreach($page->children()->listed()->flip() as $item): ?>
    <li>
      <div class="postHead">
        <h2><a href="<?= $item->permalink() ?>" class="note"><?= $item->title() ?></a></h2>
        <time datetime="<?= $item->date()->toDate(option('format.HTML')) ?>"><?= $item->date()->toDate(option('date.EN')) ?></time>
      </div>
      <?= $item->teaser()->md() ?>
    </li>
    <?php endforeach; ?>
  </ol>
</main>
