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

                 header('location: ../admin/index.php');
                  }else{
                     echo'user';
                  }

                
                $login =true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                
                header('location: index.php');

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
<div class="modal-dialog" role="document">
  <div class="modal-content" style=" background-color: whitesmoke;"> 
  <div class="modal-header">
                    <h3 class="modal-title text-info" id="exampleModalLabel">Login Our Website</h3>
                    
                </div>
   <div class="modal-body">
    <form action="login.php" method="post">
    <div class="col mt-2" >
    
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
     name="username" placeholder="Enter your username">
    
  </div>
  <div class="col mt-2">
  
        
                
    <input type="password" class="form-control" id="Password" name= "password" placeholder="Enter your password">
    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>
  <div class="col mt-2">
      <p> Create new your account <a href="signup.php"> click here</a></p>
  </div>
  <div class="col mt-2">
     <button type="submit" class="btn btn-primary">Login</button>
  </div>
  </form>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>