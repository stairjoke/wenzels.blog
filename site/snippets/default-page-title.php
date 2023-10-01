<div class="page-title">
	<h1><?= $page->titleLong()->exists() ? $page->titleLong()->kirbytextinline() : $page->title(); ?></h1>
	<?= snippet('pubdate'); ?>
</div>