<article>
	<?= snippet('default-page-title') ?>
	<div class="page-layout">
		<div class="left">
			<?php
				$resultOfInlineNavigation = generateInlineNavigation($page->text());
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
			<?php
			if(gettype($resultOfInlineNavigation) == 'array'){
				echo kt($resultOfInlineNavigation[0]);
			}else{
				echo $page->text()->kt();
			}
			?>
			<hr />
			<p>Permalinks: <a href="<?= $page->url('en') ?>" title="permalink">🇺🇸</a>, <a href="<?= $page->url('de') ?>" title="permalink">🇩🇪</a></p>
		</div>
		<div class="right"></div>
	</div>
</article>