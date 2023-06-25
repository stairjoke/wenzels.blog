<!DOCTYPE html>
<html lang="<?= $kirby->language()->locale(LC_COLLATE) ?>">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.typekit.net/pqb7qdl.css">
		<?= css('assets/css/style.css') ?>
		<meta name="theme-color" media="(prefers-color-scheme: dark)" content="#003D2A">
		<meta name="theme-color" content="#138444">
	</head>
	<body>
		<header>
			<nav class="left-right-divide layout-row">
				<ol class="layout-row">
					<?php
						foreach($site->children()->listed() as $child){
							$linkedPage = $site->find($child);
							echo(linkToPage($linkedPage));
						}
					?>
					<li><nobr><a href="#" target="_blank">Portfolio</a></nobr></li>
				</ol>
				<a href="<?= ($kirby->language() == "en") ? $page->url('de') : $page->url('en'); ?>"><?= $site->switchLanguage() ?></a>
			</nav>
		</header>
		<div class="vertical-flex">
			<main>
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
			</main>
			<footer>
				<nav class="left-right-divide layout-row">
					<?= $site->socials()->kt() ?>
					<ul>
						<li><?php
							$legalDisclosure = $site->find('legal-disclosure');
							echo(linkToPage($legalDisclosure));
						?></li>
						<li><?php
								$privacy = $site->find('privacy');
								echo(linkToPage($privacy));
							?></li>
					</ul>
				</nav>
				<p class="legal"><?= $site->legal()->kirbytextinline() ?></p>
			</footer>
		</div>
	</body>
</html>
