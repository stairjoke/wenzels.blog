<?= snippet('default-page-title') ?>
<div class="page-layout home">
	<?php
		// Get all blogposts
		$articles = $kirby->collection("blogposts");
		
		foreach($articles->paginate(10) as $article) :
	?>
		<article>
			<?= $article->title() ?>
		</article>
	<?php endforeach; ?>
</div>