<?php 
   $err = false;
   $showError = false;
   include("../db/_dbconnect.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
  
       
     

    $username = $_POST["username"];
     $password = $_POST["password"];
     $cpassword = $_POST["cpassword"];
     $uname = $_POST["uname"];
     $uemail = $_POST["uemail"];
     $uaddres = $_POST["uaddres"];
     $uphone = $_POST["uphone"];
     $ugender = $_POST["ugender"];
     $ubrithdate = $_POST["ubrithdate"];
    
    // $existe=false;

    
     $existesql = "SELECT * FROM ausers WHERE ausers = '$username'";
    
     $result= mysqli_query($conn, $existesql);
     $numExistRow = mysqli_num_rows($result);
     if($numExistRow > 0){
         //$exits = true;
         
        $showError =" username alredy exist";
     }
     else {
      //$exits = false;
     
     if(($password == $cpassword)){
       $hash = password_hash($password, PASSWORD_DEFAULT);
         $sql = "INSERT INTO ausers (`auser`, `apss`) VALUES ('$username', '$hash')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $err = true;
            }
     }
     else{
       $showError ="Password do not match";
     }
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

    <title>Signup</title>
</head>

<body>
    <?php require '../css/_nav2.php'?>

    <?php
    if($err){
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
        <h1 class="text-center">Signup to our website</h1>
    </div>
    <form action="signup.php" method="post" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col mt-2">
                <label for="exampleInputEmail1" class="form-label">ENTER YOUR NAME*</label>
                <input type="text" class="form-control" id="uname" aria-describedby="emailHelp" name="uname"
                    maxlength="50">
                <div id="emailHelp" class="form-text"></div>
            </div>

            <div class="col mt-2">
                <label for="exampleInputEmail1" class="form-label">ENTER YOUR EMAIL*</label>
                <input type="text" class="form-control" id="uemail" aria-describedby="emailHelp" name="uemail"
                    maxlength="50">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col mt-2">
                <label for="exampleInputEmail1" class="form-label">ENTER YOUR PHONE NO * </label>
                <input type="text" class="form-control" id="uphone" aria-describedby="emailHelp" name="uphone"
                    maxlength="13">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="col mt-2">
                <label for="exampleInputEmail1" class="form-label">ENTER YOUR GENDER*</label>
                <div class="col mt-2">
                    Male <input type="radio" name="ugender" value="Male" class="form-group" checked>
                    Female <input type="radio" name="ugender" value="Female" class="form-group">
                </div>
            </div>
        </div>
        <div class="row mt-2">

            <div class="col mt-2">
                <label for="exampleInputEmail1" class="form-label">ENTER YOUR ADDRESS* </label>
                <input type="text" class="form-control" id="uname" aria-describedby="emailHelp" name="uaddres"
                    maxlength="100">
                <div id="emailHelp" class="form-text"></div>
            </div>

            <div class="col mt-2">
                <label for="exampleInputEmail1" class="form-label">ENTER YOUR BRITH DATE* </label>
                <input type="date" class="form-control" id="ubrithdate" aria-describedby="emailHelp" name="ubrithdate"
                    maxlength="30">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col mt-2">
                <label for="exampleInputEmail1" class="form-label">USERNAME*</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username"
                    maxlength="20" value="example@123">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="col mt-2">

            </div>
        </div>
        <div class="row mt-2">
            <div class="col mt-2">
                <label for="exampleInputPassword1" class="form-label">PASSWORD*</label>
                <input type="password" class="form-control" id="Password" name="password" maxlength="23">
            </div>

            <div class="col mt-2">
                <label for="exampleInputPassword1" class="form-label">CONFIRM PASSWORD*</label>
                <input type="password" class="form-control" id="cPassword" name="cpassword">
                <div id="emailHelp" class="form-text">Make sure to type the same password.</div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Signup</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>