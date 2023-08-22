<?= snippet('default-page-title') ?>
<div class="page-layout home">
	<?php
		// Get all blogposts
		$articles = $kirby->collection("blogposts")->paginate(8); //has to be an even number divisible by 4 — the CSS layout depends on it.
		
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