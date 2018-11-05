<?php

/**
 * @author Marcin
 * @copyright 2015
 */
 	
 	//Pobranie tekstu z formularza
    $post = $_POST['code'];
 	
	//Wczytanie zawartości pliku
    include 'key.php';
    
    //Zmiana tekstu na ciąg znaków
    $p = strtr($post, $arry + $arrypluss + $arryplus);

	//Wyświetlenie
    echo $p;
    
?>