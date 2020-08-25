
<?php
//
session_start();
include 'db_connection.php';

 if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$username= $_POST['username'];
$pass= $_POST['password'];
$sql = "SELECT * FROM login WHERE username='$username' && password='$pass'";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
      $_SESSION['login_user'] = $row['username'];
      header('Location: success.html');
      header('Location: home.php');
     } else {
      $error = "Your Login Name or Password is invalid";
    }
  
 }

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
  <div id="login"> 
        <h2> Login</h2>
        <form method="post" >
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-person"></i></div>
            <label for="exampleInput">Username</label>
            <div class="form-group"><input class="form-control" type="test" name="username" placeholder="username" require></div>
            
            
            <div class="form-group">
                <label class="form-check-label" for="exampleCheck1">Check me out</label> 
                <input class="form-control" type="password" name="password" placeholder="Password" require></div>
            <div class="form-group"
            ><button class="btn btn-primary btn-block" type="submit" name="login_button">Log In</button>
            </div> 
        </form>

        

</div> 
     
  </body>    
    </html>