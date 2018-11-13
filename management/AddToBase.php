<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Silence / REPT" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <!-- Moje własne style CSS -->
    <link rel="Stylesheet" type="text/css" href="../css/style.css" />
    
	<title>Management</title>

</head>

<body>
    
    <!-- Główne okno programu -->
    
    <div class="container">
         <div class="row">
            <div class="col-md-8">

<?php 

        // Odbieramy dane z formularza 
        $letter = $_POST['letter']; 
        $code = $_POST['code']; 

                
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
        
        //Dodanie rekordu do bazy danyc
        $sql = "INSERT INTO cip_key (letter, cipkey)
        VALUES ('$letter', '$code')";
        
        //Sprawdzenie czy rekord został prawidłowo dodany do bazy danych
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  
                
        //Zamknięcie połączenia z bazą danych
        $conn->close();   

?>
                <a class="nav-link active" href="index.php">Home</a>
    
            </div>
        </div>
    </div>
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>