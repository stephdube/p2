<?php
/*
*	With thanks to the tutorial on parsing using the PHP html parsing
*	library found here: http://nimishprabhu.com/top-10-best-usage-examples-php-simple-html-dom-parser.html
*/

include('simple_html_dom.php');

$words = array();

for ($i=1;$i<4;$i++){
	// load pages 1-3 of site with word list
	$html = file_get_html('http://www.oxfordlearnersdictionaries.com/us/wordlist/english/academic/sublist01/?page='.$i);	
	// parse page searching for list items and pull out the plain words
	foreach($html->find('li') as $li) {
		// capitalized or non-alpha characters indicate undesired list items (specific to the website scraped here)
	 	if (ctype_lower($li->plaintext)){
	 		$words[] = $li->plaintext;
	 	}
	}
}

// try a different site (weeding out non-lowercase-chars still works)
$html = file_get_html('http://www.merriam-webster.com/popular-words/index.htm?&t=1404583006');	
foreach($html->find('li') as $li) {
 	if (ctype_lower($li->plaintext)){
 		$words[] = $li->plaintext;
 	}
}

// one more word-source
$html = file_get_html('http://www.onelook.com/wotd-archive.shtml');	
foreach($html->find('a') as $a) {
	if (ctype_lower($a->innertext)){
 		$words[] = $a->innertext;
 	}
}

//print_r($words); // test that the result is an array of dictionary words

?>