<?php 

	//PART 1
	/* $file = 'readme.txt';

	if ( file_exists($file) ) {
		echo readfile($file) . '<br/>';

		copy($file, 'quotes.txt');

		echo realpath($file) . '<br/>';

		echo filesize($file) . '<br/>';

		rename($file, 'test.txt');
		
	}else{
		echo 'file does not exist';
	}

	mkdir('quotes'); */

	//PART 2
	$file = 'quotes.txt';

	$handle = fopen($file, 'r');

	//echo fread($handle, filesize($file));
?>