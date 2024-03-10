			</main>
			<footer>
				<nav class="left-right-divide layout-row">
					<?= $site->socials()->kt() ?>
					<ul class="shrink-override">
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
