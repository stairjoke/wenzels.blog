<?php
	// Link to Page: ~~Controller~~ Plugin
	
	function linkToPage($linkedPage) {
		return("<a href='{$linkedPage->url()}'>{$linkedPage->title()}</a>");
	}
?>