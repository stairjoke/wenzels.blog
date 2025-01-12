<header>
  <nav class="container">
    <h1 id="pageTitle"><a href="/" title="Home"><span role="img" aria-label="Home">🏡</span> <span class="viewport-hideOnXS"><?= $site->title() ?></span></a></h1>
    <ol>
      <?php foreach($site->pages()->listed() as $item) : ?>
      <li><a <?php e($item->isOpen(), 'class="active') ?> href="<?= $item->url() ?>"><?= html($item->title()) ?></a></li>
      <?php endforeach; ?>
      <li><a href="/feed.xml" target="_blank">RSS</a></li>
    </ol>
  </nav>
</header>