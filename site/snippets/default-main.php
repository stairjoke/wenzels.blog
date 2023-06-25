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
			<p class="permalink"><a href="<?= $page->permalink() ?>" title="<?= t('permalinkInfo') ?>">Permalink</a> <span class="infoTrigger">ℹ︎</span><span class="info"><?= t('permalinkInfo') ?></span></p>
		</div>
		<div class="right"></div>
	</div>
</article>