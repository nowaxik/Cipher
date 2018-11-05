<?php
    
    //Połącznie z bazą danych
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    
    //Spradzenie połączenia
    if ($conn->connect_error) {
        die("Błąd połącznenia: " . $conn->connect_error);
    } 
        echo "Połączono z bazą danych";
?>