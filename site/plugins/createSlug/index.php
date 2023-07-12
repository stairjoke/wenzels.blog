<?php

	// https://stackoverflow.com/a/75170964/10713654
	
	function createSlug($str) {
	
	 	$url = strtolower(trim($str));
	
	 	$replacements = ['@'=> "at", '#' => "hash", '$' => "dollar", '%' => "percentage", '&' => "and", '.' => "dot", 
					'+' => "plus", '-' => "minus", '*' => "multiply", '/' => "devide", '=' => "equal to",
					'<' => "less than", '<=' => "less than or equal to", '>' => "greater than", '<=' => "greater than or equal to",
		];
	
	 	$url = strtr($str, $replacements);
	 	return $urlKey = preg_replace('#[^0-9a-z]+#i', '-', $str);
	}
?>