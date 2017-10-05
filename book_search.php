<?php
	require('./includes/application_top.php'); 
	require "./includes/book.php";

	$url="http://www.soosuu.com/tool/booksearch_realtime.php?isbn=$isbn&action=simple_search";
	$listhtml=getcontent1($url);

	echo $listhtml;

	require('./includes/application_bottom.php');
	
?>
