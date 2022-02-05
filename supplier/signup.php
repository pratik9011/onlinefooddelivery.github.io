<?php 
   $err = false;
   $showError = false;
   include '../db/_dbconnect.php';
   
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

    
     $existesql = "SELECT * FROM supp WHERE supp_username = '$username'";
    
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
        
                $sql="INSERT INTO supp VALUES(DEFAULT,'$uname','$username','$hash')";
                $result = mysqli_query($conn, $sql);
                $err = true;
                header('location: login.php');
            
     }
     else{
       $showError ="Password do not match";
     }
   }
  }
  
?>
<!doctype html>
<html lang="en">

<head class="">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Signup</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body >
   
    
    <main>
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

    <div class="modal-dialog" style=" background-color:; ">
        <div class="modal-content" style=" background-color: whitesmoke; transfrom: translate(-50%, -50%); ">
            <div class="modal-header">
                <h3 class="modal-title text-info" id="exampleModalLabel">Login Our Website</h3>

            </div>
            <div class="modal-body">

                <form action="signup.php" method="post" enctype="multipart/form-data">
                    <div class="row mt-2">
                        <div class="col mt-2">

                            <input type="text" class="form-control" id="uname" aria-describedby="emailHelp" name="uname"
                                maxlength="50" placeholder="Enter name full name">
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <div class="col mt-2">

                            <input type="text" class="form-control" id="uemail" aria-describedby="emailHelp"
                                name="uemail" maxlength="50" placeholder="Enter your email example@email.com">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col mt-2">

                            <input type="text" class="form-control" id="uphone" aria-describedby="emailHelp"
                                name="uphone" maxlength="13" placeholder="Enter Mobile No">
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

                            <input type="text" class="form-control" id="uname" aria-describedby="emailHelp"
                                name="uaddres" maxlength="100" placeholder="Enter full address ">
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <div class="col mt-2">
                            <label for="">ENTER BIRTH-DATE </label>
                            <input type="date" class="form-control" id="ubrithdate" aria-describedby="emailHelp"
                                name="ubrithdate" maxlength="30" placeholder="dd-mm-yy Enter your birth-date">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col mt-2">

                            <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                                name="username" maxlength="20" placeholder="Enter you username example@123">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="col mt-2">

                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col mt-2">

                            <input type="password" class="form-control" id="Password" name="password" maxlength="23"
                                placeholder="Enter strong password">
                        </div>

                        <div class="col mt-2">

                            <input type="password" class="form-control" id="cPassword" name="cpassword"
                                placeholder="Enter confrim password ">
                            <div id="emailHelp" class="form-text">Make sure to type the same password.</div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Signup</button>
                </form>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    </main>
</body>

</html>