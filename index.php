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
    <link rel="Stylesheet" type="text/css" href="css/style.css" />
    
	<title>Cipher</title>

</head>

<body>
    
    <!-- Główne okno programu -->
    
    <div class="container">
         <div class="row">
            <div class="col-md-6">
                
                <!-- Sekcja kodująca tekst -->
                <h3>Zakoduj swój tekst</h3>
                
                <form method="post" action="code.php">
                    <textarea type="text" name="code" class="form-control" rows="5"></textarea><br />
                    <input type="submit" value="Koduj" name="Koduj" class="btn btn-primary"/>
                </form>
                    <br />
                
                <!-- Sekcja rozszyfrowująca tekst -->
                <h3>Rozszyfruj swój tekst</h3>
                
                <form method="post" action="decode.php">
                    <textarea type="text" name="recode" class="form-control" rows="5"></textarea><br />
                    <input type="submit" value="Rozkoduj" name="Dekoduj" class="btn btn-primary"/>
                </form>
        
                    <br/>
                <!-- Stopka programu -->
                <footer><h5>Stworzone przez Synek</h5></footer>
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