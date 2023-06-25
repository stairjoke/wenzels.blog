<?php
	return function($site) {
		$articles = new Collection();
		foreach($site->find('2023', '2022') as $years) {
			foreach($years->children()->listed()->flip() as $month) {
				foreach($month->children()->listed()->flip() as $post) {
					$articles->append($post);
				}
			}
		}
		
		return $articles;
	}
?>