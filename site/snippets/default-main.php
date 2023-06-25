<article>
	<div class="page-title">
		<h1><?= $page->title() ?></h1>
		<?php
			if(!$page->date()->isEmpty()) :
		?>
		<time datetime="<?= $page->date()->toDate('Y-MM-FF kk-mm-ss.SSSxxx') ?>">
			<?php
				echo(t('publishedDate') . ' ');
				echo($page->date()->toDate(new IntlDateFormatter($kirby->language()->locale(LC_COLLATE), IntlDateFormatter::RELATIVE_LONG, IntlDateFormatter::SHORT, 'Europe/Berlin')));
				echo(' ' . t('publishedBy'));
				?> <nobr>Wenzel Massag.</nobr>
		</time>
		<?php
			endif;
		?>
	</div>
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