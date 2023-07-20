<?php
	if(!$page->date()->isEmpty()) :
?>
<time datetime="<?= $page->date()->toDate('Y-MM-FF kk-mm-ss.SSSxxx') ?>">
	<?php
		// Builds an internationalized/translated statement that looks like this
		// Published on Month DD, YYYY, HH:MM AM/PM by Wenzel Massag
		// Or looks like
		// Published on Month DD, YYYY by Wenzel Massag
		
		echo(t('publishedDate') . ' ' . renderPubdate($page, $kirby) . ' ' . t('publishedBy'));
		?> <nobr>Wenzel Massag.</nobr>
</time>
<?php
	endif;
?>