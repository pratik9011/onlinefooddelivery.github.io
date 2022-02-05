<?php 
   $login = false;
   $showError = false;
   $dc = "admin";
   include 'db/_dbconnect.php';
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       
     

    $username = $_POST["username"];
     $password = $_POST["password"];
     
         //$sql = "Select * from users where username ='$username' AND password ='$password'";
         $sql = "Select * from users where username ='$username'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
              while($row=mysqli_fetch_assoc($result)){
                  $admin = $row['username']; 
                if(password_verify($password, $row['password'])){
                  if($admin == $dc){
                    $login =true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;

                 header('location: index.php');
                  }else{
                     echo'<h1>users no allow <h1>';
                  }

                
               
                }
                else{
                  $showError ="lnvalid password";
                }
                
              }
                
               
            }
     
             else{
                    $showError ="lnvalid credentiles";
                  }
   }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login </title>
</head>

<body>
    <?php require 'css/_nav.php'?>

    <?php
    if($login){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success</strong> your account is now created and you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    if($showError){
      echo'
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
      }
?>
    <div class="container">
        <h1 class="text-center">Login to our website</h1>
    </div>
    <form action="login.php" method="post">
        <div class="md-3">
            <label for="exampleInputEmail1" class="form-label">uesername</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="md-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name="password">
        </div>
        <div class="md-3">
            <p> Create new your account <a href="signup.php"> click here</a></p>
        </div>
        <div class="md-3">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>