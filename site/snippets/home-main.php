<?= snippet('home-page-title') ?>
<?php
	// Get all blogposts
	$blogposts = $kirby->collection("blogposts");
	
	// Cut out the first one
	$article = $blogposts->first();
	$blogposts->remove($blogposts->first());
	
	// Paginate the rest of the posts
	$articles = $blogposts->paginate(12);
	$pagination = $articles->pagination();
?>
<div class="page-layout home">
	<?php if($pagination->page() == $pagination->firstPage()) : ?>
		<article class="most-recent">
			<a href="<?= $article->url() ?>">
				<h2><?= $article->title() ?></h2>
				<time datetime="<?= $page->date()->toDate('Y-MM-FF kk-mm-ss.SSSxxx') ?>"><?= renderPubdate($article, $kirby) ?></time>
			</a>
		</article>
	<?php
		endif;
		
		foreach($articles as $article) :
	?>
		<article>
			<a href="<?= $article->url() ?>">
				<h2><?= $article->title() ?></h2>
				<time datetime="<?= $page->date()->toDate('Y-MM-FF kk-mm-ss.SSSxxx') ?>"><?= renderPubdate($article, $kirby) ?></time>
			</a>
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