<?= snippet('header') ?>
<article>
	<?= snippet('default-page-title') ?>
	<div class="page-layout default">
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
			<div class="permalink">
				<div class="permalinkLayout">
					<a href="<?= $page->permalink() ?>" title="<?= t('permalinkInfo') ?>">Permalink:</a>
						<input type="text" value="<?= $page->permalink() ?>" />
						<button class="permalinkInfoTrigger">ℹ︎</button>
				</div>
				<p class="permalinkInfo"><?= t('permalinkInfo') ?></p>
			</div>
		</div>
		<div class="right"></div>
	</div>
</article>
<?= snippet('footer') ?>