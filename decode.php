<?php

/**
 * @author Marcin
 * @copyright 2015
 */
 
 	//Pobranie tekstu z formularza
    $posts = $_POST['recode'];
 	
	//Wczytanie zawartości pliku
    include 'rekey.php';
	
	//Zmiana tekstu na ciąg znaków
    $p = strtr($posts, $arry + $arrypluss + $arryplus);
	
	//Wyświetlenie
    echo $p
    
?>