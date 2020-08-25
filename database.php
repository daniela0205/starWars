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
     
      <section id="global">  
        <header>   
        <div class="header">
            <a href="#" class="logo">
                <img src="img/logo.png"  style="width:200px;height:100px;">   

            <div class="header-right">
              <a class="" href="home.php">Home</a>
              <a class="active" href="database.php">DataBase</a>    
              <a class="" href="report.php">Report</a>  
              <a href="logout.php">Logout</a>
            </div>
          </div>
          
        </header>

        <div class="textContent">
          <h2>User Register</h2>
         
               <?php

               // if(isset($_POST['user'])){
                $sql = "SELECT username, password FROM login";
                $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    // output table header
                    echo "<table class='container'>";  
                   // echo  "<tr style='align:center'><th>Username</th><th>Password</th></tr>";    
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<tr ><td>" . $row["username"]. "</td><td>" . $row["password"] . "</td>" ;    
                }
                    echo "</table>";
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);

              ?>

        </div>
 
        </section>
   <footer>
            Copyright © 2020 - Daniela Melgarejo
  </footer>

</body>
</html>



?>

