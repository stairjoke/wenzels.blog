<!DOCTYPE html>
<html lang="<?= $kirby->language()->locale(LC_COLLATE) ?>">
	<head>
		<title><?= $site->title() ?> &gt; <?= $page->title() ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.typekit.net/pqb7qdl.css">
		<?= css([
			'assets/css/style.css',
			'@auto'
		]) ?>
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