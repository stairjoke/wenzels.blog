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
			<nav class="left-right-divide">
				<ol class="layout-row">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Feed</a></li>
					<li><nobr><a href="#" target="_blank">Portfolio</a></nobr></li>
				</ol>
				<a href="<?= ($kirby->language() == "en") ? $page->url('de') : $page->url('en'); ?>"><?= $site->switchLanguage() ?></a>
			</nav>
		</header>
		<main>
			<article>
				<div class="article-title">
					<h1>Blogpost Title of This Post</h1>
					<time>June 11, 2023, Wenzel Massag.</time>
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
						<p><em>This is emphasized text.</em> The content part scrolls up above the title, the title stays put when scrolling. The Top navigation sticks to the top and is above the content. <a href="#">This is a link,</a> and <a href="#" target="_blank">this is an external link.</a> This is inline <code>code</code>. Similarly <q>inline quotes should be easily distinguishable!</q></p>
						<pre>Block-level Code
Also works</pre>
						<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
						<blockquote>
							Thi sis a quote. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</blockquote>
						<p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
					<div class="right"></div>
				</div>
			</article>
		</main>
		<footer>
			<nav class="left-right-divide">
				<div class="layout-row"><?= $site->socials()->kt() ?></div>
				<ul class="layout-row">
					<li><a href="#">Legal Disclosure</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</nav>
			<p class="legal">© Copyright 2023 Wenzel Massag. Links to other websites are marked with an icon and "(ext)" for screen readers: <a target="_blank">example.</a></p>
		</footer>
	</body>
</html>
