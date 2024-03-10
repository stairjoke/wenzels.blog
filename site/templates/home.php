<?= snippet('header') ?>
<?= snippet('home-page-title') ?>
<?php
	// Get all blogposts
	$blogposts = $kirby->collection("blogposts");
		
	// Paginate the rest of the posts
	$articles = $blogposts->paginate(3);
	$pagination = $articles->pagination();
?>
<div class="page-layout">
	<?php foreach($articles as $article) : ?>
		<article>
			<div class="left">
				<?php
					$resultOfInlineNavigation = generateInlineNavigation($article->text());
					if(gettype($resultOfInlineNavigation) == 'array'):
				?>
				<nav class="sidebar">
					<?= $resultOfInlineNavigation[1] ?>
				</nav>
				<?php
					endif;
				?>
			</div>
			<div class="main">
				<a href="<?= $article->url() ?>"><h2><?= $article->title() ?></h2></a>
				<time datetime="<?= $article->date()->toDate('Y-MM-FF kk-mm-ss.SSSxxx') ?>"><?= renderPubdate($article, $kirby) ?></time>
				<?= $article->text()->kt() ?>
				<div class="permalink">
					<div class="permalinkLayout">
						<a href="<?= $article->permalink() ?>" title="<?= t('permalinkInfo') ?>">Permalink:</a>
							<input type="text" value="<?= $article->permalink() ?>" />
							<button class="permalinkInfoTrigger">ℹ︎</button>
					</div>
					<p class="permalinkInfo"><?= t('permalinkInfo') ?></p>
				</div>
			</div>
			<div class="right"></div>			
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