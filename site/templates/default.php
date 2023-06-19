<!DOCTYPE html>
<html lang="en">
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
		<main>
			<article>
				<div class="article-title">
					<h1><?= $page->title() ?></h1>
					<time datetime="<?= $page->date()->toDate('Y-MM-FF kk-mm-ss.SSSxxx') ?>">
						<?php
							echo(t('pubdate') . ' ');
							echo($page->date()->toDate(new IntlDateFormatter($kirby->language()->locale(LC_COLLATE), IntlDateFormatter::RELATIVE_LONG, IntlDateFormatter::SHORT, 'Europe/Berlin')));
							?> by Wenzel Massag.
					</time>
				</div>
				<div class="article-layout">
					<div class="left">
						<nav class="sidebar">
							<ol>
								<li><a href="#">Headlines H2</a></li>
								<li><a href="#">And H3 will be listed and</a></li>
								<li><a href="#">linked here</a></li>
								<li><a href="#">By default text is dimmed.</a></li>
								<li><a href="#">Hovers make it pop.</a></li>
								<li><a href="#">This navigation is sticky</a></li>
							</ol>
						</nav>
					</div>
					<div class="main">
						<?= $page->text()->kt() ?>
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
	</body>
</html>
