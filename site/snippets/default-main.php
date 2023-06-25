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
			/*
				- Add notice to untranslated posts, because Kirby always auto - serves the original language if not available. Create in duplicate .de.md file with original content.
				- Homepage will show untranslated pages, so don’t translate titles of pages that don’t get a translation
			*/
			
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