<main>
  <ol class="list-of-posts">
    <?php foreach($page->children()->listed()->flip() as $item): ?>
    <li>
      <div class="postHead">
        <h2><a href="<?= $item->permalink() ?>" class="note"><?= $item->title() ?></a></h2>
        <?= snippet('time', ['item' => $item]) ?>
      </div>
      <?= $item->teaser()->md() ?>
    </li>
    <?php endforeach; ?>
  </ol>
</main>
