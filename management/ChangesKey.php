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
                <h1 class="font-weight-light">Management</h1>
                <hr class="line-long"/>
                
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ChangesKey.php">Changes in the key</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Show queries</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
                
                <hr class="line-long"/>
                
                <form action="AddToBase.php" method="post"> 
                    Litera<br/>
                    <input type="text" name="letter" /><br/>
                    Kod<br/>
                    <input type="text" name="code" /><br/><br/>
                    <input type="submit" value="Dodaj" class="btn btn-primary"/> 
                </form>
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
            while($row = $result->fetch_assoc()) {
                
            echo $arry = "'" . $row["letter"] . "'" . "=>" . "'" . $row["cipkey"] . "'" . "," ;
            }
       
            } else {
    echo "0 results";
}
$conn->close();
                ?>
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