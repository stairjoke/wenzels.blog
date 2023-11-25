<?= snippet('header') ?>
<?= snippet('home-page-title') ?>
<?php
	// Get all blogposts
	$blogposts = $kirby->collection("blogposts");
		
	// Paginate the rest of the posts
	$articles = $blogposts->paginate(3);
	$pagination = $articles->pagination();
?>
<div class="page-layout home">
	<?php foreach($articles as $article) : ?>
		<article>
			<a href="<?= $article->url() ?>"><h2><?= $article->title() ?></h2></a>
			<time datetime="<?= $page->date()->toDate('Y-MM-FF kk-mm-ss.SSSxxx') ?>"><?= renderPubdate($article, $kirby) ?></time>
			<?= $article->text()->kt() ?>
		</article>
	<?php endforeach; ?>
	
	<?php if($articles->pagination()->hasPages()) : ?>
	<nav class="pagination">
		
		<?php if($articles->pagination()->hasNextPage()) : ?>
		<a href="<?= $articles->pagination()->nextPageURL() ?>"><?= t('paginationPreviousLink') ?></a>
		<?php endif; ?>
		
		<?php if($articles->pagination()->hasPrevPage()) : ?>
			&nbsp;|&nbsp;<!-- add link to calendar-view here -->
		<a href="<?= $articles->pagination()->prevPageURL() ?>">
			<?= t('paginationNextLink') ?>
		</a>
		<?php endif; ?>
		
	</nav>
	<?php endif; ?>
	
</div>
<?= snippet('footer') ?>