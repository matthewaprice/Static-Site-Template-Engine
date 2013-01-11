<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/functions.php';

global $PAGE_ARRAY;

if ( PAGE_TO_SERVE ) :
	if ( in_array( PAGE_TO_SERVE, $PAGE_ARRAY ) ) :
		require $_SERVER['DOCUMENT_ROOT'] . '/view/' . PAGE_TO_SERVE . '.php';
	else :
		require $_SERVER['DOCUMENT_ROOT'] . '/view/404.php';	
	endif;	
else :
	require $_SERVER['DOCUMENT_ROOT'] . '/view/home.php';
endif;	
?>


