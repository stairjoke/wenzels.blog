<?= snippet('default-page-title') ?>
<div class="page-layout home">
	<?php
		// Get all blogposts
		$articles = $kirby->collection("blogposts")->paginate(10);
		
		foreach($articles as $article) :
	?>
		<article>
			<?= $article->title() ?>
		</article>
	<?php endforeach; ?>
	
	<?php if($articles->pagination()->hasPages()) : ?>
	<nav class="pagination">
		
		<?php if($articles->pagination()->hasNextPage()) : ?>
		<a href="<?= $articles->pagination()->nextPageURL() ?>"><?= t('paginationPreviousLink') ?></a>
		<?php endif; ?>
		&nbsp;|&nbsp;<!-- add link to calendar-view here -->
		<?php if($articles->pagination()->hasPrevPage()) : ?>
		<a href="<?= $articles->pagination()->prevPageURL() ?>">
			<?= t('paginationNextLink') ?>
		</a>
		<?php endif; ?>
		
	</nav>
	<?php endif; ?>
	
</div>