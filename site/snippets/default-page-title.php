<div class="page-title">
	<h1><?= $page->title() ?></h1>
	<?php
		if(!$page->date()->isEmpty()) :
	?>
	<time datetime="<?= $page->date()->toDate('Y-MM-FF kk-mm-ss.SSSxxx') ?>">
		<?php
			// Builds an internationalized/translated statement that looks like this
			// Published on Month DD, YYYY, HH:MM AM/PM by Wenzel Massag
			// Or looks like
			// Published on Month DD, YYYY by Wenzel Massag
			
			echo(t('publishedDate') . ' ');
			
			if($page->date()->toDate('kkmmssSSS') != "240000000"){
				// If the time is not exactly midnight
				// Format the date and time string with time
				echo($page->date()->toDate(new IntlDateFormatter($kirby->language()->locale(LC_COLLATE), IntlDateFormatter::RELATIVE_LONG, IntlDateFormatter::SHORT, 'Europe/Berlin')));
			}else{
				// If the time is exactly midnight
				// Format the date string without time
				echo($page->date()->toDate(new IntlDateFormatter($kirby->language()->locale(LC_COLLATE), IntlDateFormatter::RELATIVE_LONG, IntlDateFormatter::NONE, 'Europe/Berlin')));
			}
			
			echo(' ' . t('publishedBy'));
			?> <nobr>Wenzel Massag.</nobr>
	</time>
	<?php
		endif;
	?>
</div>