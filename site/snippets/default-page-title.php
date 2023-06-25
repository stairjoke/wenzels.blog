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