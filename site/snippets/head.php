<head>
  <title><?= $kirby->site()->title() ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= css([
    'assets/css/style.css',
    '@auto'
  ]) ?>
  <link rel="alternate" type="application/rss+xml" 
    title="RSS Feed" 
    href="/feed.xml" />
    <?php
    if($page->template()->name() == "note"){
      echo('<base href="/content/notes/' . $page->num() . '_' . $page->slug() . '/" />');
    }
    ?>
</head>