<?php
	// Link to Page Controller
	
	function linkToPage($linkedPage) {
		return("<a href='{$linkedPage->url()}'>{$linkedPage->title()}</a>");
	}
?>