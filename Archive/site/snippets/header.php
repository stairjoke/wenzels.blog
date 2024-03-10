<!DOCTYPE html>
<html lang="<?= $kirby->language()->locale(LC_COLLATE) ?>">
	<head>
		<title><?= $site->title() ?> &gt; <?= $page->title() ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta property="og:title" content="<?= $page->title() ?>">
		<meta property="og:site_name" content="<?= $page->title() ?>">
		<meta property="og:url" content="<?= $page->url() ?>">
		<meta property="og:description" content="<?php
			if($page->description()->isNotEmpty()) {
				echo($page->description());
			}else{
				echo($site->description());
			}
		?>">
		<meta property="og:type" content="blog">
		<?php
			if($page->ogimageALT()->isNotEmpty() && $page->ogimage()->isNotEmpty()){
				echo('<meta property="og:image" content="'. $page->url() . '/' . $page->ogimage() .'">');
				echo('<meta content="'. $page->ogimageALT() .'" property="og:image:alt">');
			}elseif($page->hasImages()){
				echo('<meta property="og:image" content="'. $page->image()->url() .'">');
				echo('<meta content="'. $page->image()->alt() .'" property="og:image:alt">');
			}else{
				echo('<meta property="og:image" content="/ogImage.' . $kirby->language()->code() . '.jpg">');
				echo('<meta content="' . $site->ogImageAlt() . '" property="og:image:alt">');
			}
		?>
		<meta content="<?= $site->description() ?>" name="description">
		<meta content="Wenzel Massag" name="author">
		<meta content="index, follow" name="robots">
		
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
				</ol>
				<a href="<?= ($kirby->language() == "en") ? $page->url('de') : $page->url('en'); ?>"><?= $site->switchLanguage() ?></a>
			</nav>
		</header>
		<div class="vertical-flex">
			<main>