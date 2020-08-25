<?php
   include('session.php');
  
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
 
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
            <!-- your stylesheets here -->
            <link href="./css/style.css" rel="stylesheet"/>
      
            <title>Star Wars</title>
    </head>
    <body>
     
       
    <div id="global">  
    <header>   
        <div class="header">
            <a href="home.php" class="logo">
                <img src="img/logo.png"  style="width:200px;height:100px;">   

            <div class="header-right">
              <a class="active" href="home.php">Home</a>
              <a class="" href="database.php">DataBase</a>    
              <a class="" href="report.php">Report</a>  
              <a href="logout.php">Logout</a>
            </div>
          </div>
          
        </header>
     <div >
        <div class="textContent">
            <h1>Welcome to the Star Wars fans site.</h1>
            <br>
            <p>  Here you will find all the relevant information on the sequels of these films</p>
          
          </div>

          <div class="container">
          
                <iframe class="responsive-iframe" src="slider.html"></iframe>
            
              
          </div>
          

    </div>
        
                    
                
            
  </div>

  <footer>
            Copyright © 2020 - Daniela Melgarejo
  </footer>

</body>
</html>