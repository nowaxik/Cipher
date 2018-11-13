<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cipher";

                // Połączenie z bazą danych
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Sprawdzenie połączenia
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                } 
        
                
                $sql = "SELECT letter, cipkey FROM cip_key";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_array()) {
                
            echo $arry = array( "'" . $row["letter"] . "'" . "=>" . "'" . $row["cipkey"] . "'" . ",") ;
            }
       
            } else {
    echo "0 results";
}
$conn->close();
    ?>