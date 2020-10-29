<?php 

function dd($text){
	echo "<pre>";
	die(print_r($text));
	echo "</pre>";	
}