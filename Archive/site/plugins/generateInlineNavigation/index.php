<?php
	// Link to Page Controller
	
	function generateInlineNavigation($field) {
		preg_match_all("(#{2,6}\ .*)", $field, $matches, PREG_OFFSET_CAPTURE);

		if(isset($matches[0][0][0])) {
			// Cut the array down one level as there is only one preg-match group
			$matches = $matches[0];
			
			$inlineNavigationHTML = "<ol>";
			
			//Go through all matches
			for($index = 0; $index < count($matches); $index++){
				// Get the innerHTML of the headline and the level by exploding the preg-match into an array.
				$headline = explode(' ', $matches[$index][0], 2);
				
				// Generate the ID, detect the level of heading, generate HTML
				
				//$id = crc32($headline[1]); //crc32 is the computationally cheapest hash possible in PHP. Result is not readable.
				
				$id = createSlug($headline[1]); // Creates readable URL-slugs, requires plugin, use alternative above without plugin.
				
				$level = strlen($headline[0]);
				$html = "<h{$level} id='{$id}'>{$headline[1]}</h{$level}>";
				
				// Save the html into the matches array
				$matches[$index][2] = $html;

				// Save the Inline navigation item into the inlineNavigationHTML string
				$inlineNavigationHTML .= "<li><a href='#{$id}'>{$headline[1]}</a></li>";
			}
			$inlineNavigationHTML .= "</ol>";
			
			//Flip the array back to front. This is because we need to start replacing "# Headline" with <html> elements from the end of the $field string to the front, because otherwise the OFFSET position found by preg-match-all is only valid one for the first headline
			$matches = array_reverse($matches);
			foreach($matches as $match) {
				$field = substr_replace($field, $match[2], $match[1], strlen($match[0]));
			}
			
			// Pack the modified field and the navigation HTML into the return value
			$returnPackage = [$field, $inlineNavigationHTML];
			
			// And return them
			return $returnPackage;
		}else{
			return false;
		}
	}
?>