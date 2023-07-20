<?php
	// Plugin to render dates in a localized format
	
	function renderPubdate($page, $kirby){
		$returnValue = "";
		
		if($page->date()->toDate('kkmmssSSS') != "240000000"){
			// If the time is not exactly midnight
			// Format the date and time string with time
			$returnValue .= $page->date()->toDate(new IntlDateFormatter($kirby->language()->locale(LC_COLLATE), IntlDateFormatter::RELATIVE_LONG, IntlDateFormatter::SHORT, 'Europe/Berlin'));
		}else{
			// If the time is exactly midnight
			// Format the date string without time
			$returnValue .= $page->date()->toDate(new IntlDateFormatter($kirby->language()->locale(LC_COLLATE), IntlDateFormatter::RELATIVE_LONG, IntlDateFormatter::NONE, 'Europe/Berlin'));
		}
	
		return $returnValue;
	}
?>