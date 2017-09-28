<?php
	function filter_by_name($json, $query) {
		$new_arr = array();
		foreach ($json as $row) {
			if (strstr($row->name,  $query)) {
				$new_arr[] = $row;
			}
		}
		return $new_arr;
	}

	function filter_by_tag($json, $query) {
		$q_arr = array(
			"alphabet"=>"Alpha",
			"animals"=>"Aquarium",
			"arrows"=>"Arrows",
			"astrology"=>"Astrology",
			"baby"=>"Baby",
			"beauty"=>"Beauty",
			"business"=>"Business",
			"cinema"=>"Cinema",
			"city"=>"City",
			"clothing"=>"Clothing",
			"computer-hardware"=>"Computer-hardware",
			"crime"=>"Crime",
			"cultures"=>"Cultures",
			"diy"=>"Diy",
			"data"=>"Data",
			"drinks"=>"Drinks",
			"ecommerce"=>"Ecommerce",
			"editing"=>"Editing",
			"files"=>"Files",
			"finance"=>"Finance",
			"flags"=>"Flags",
			"folders"=>"Folders",
			"food"=>"Food",
			"free-icons"=>"Free-icons",
			"hands"=>"Hands",
			"healthcare"=>"Healthcare",
			"holidays"=>"Holidays",
			"household"=>"Household",
			"industry"=>"Industry",
			"logos"=>"Logos",
			"maps"=>"Maps",
			"media-controls"=>"Media-controls",
			"messaging"=>"Messaging",
			"military"=>"Military",
			"mobile"=>"Mobile",
			"music"=>"Music",
			"nature"=>"Nature",
			"network"=>"Network",
			"operating-systems"=>"Operating-systems",
			"users"=>"Users",
			"photo-video"=>"Photo-video",
			"plants"=>"Plants",
			"printing"=>"Printing",
			"profile"=>"Profile",
			"programming"=>"Programming",
			"science"=>"Science",
			"security"=>"Security",
			"shopping"=>"Shopping",
			"sports"=>"Sports",
			"time-and-date"=>"Time-and-date",
			"transport"=>"Transport",
			"travel"=>"Travel",
			"user-interface"=>"User-interface",
			"weather"=>"Weather"
		);
		$real_name  = $q_arr[$query];

		$new_arr = array();
		foreach ($json as $row) {
			if ($row->name ===  $real_name) {
				$new_arr[] = $row;
			}
		}
		return $new_arr;
	}
?>