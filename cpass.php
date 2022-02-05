<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php 
     include('css/_log.php');
     include('css/_nav.php');
     include('db/_dbconnect.php');
    


  $u = $_SESSION['username'];

  $sql = "SELECT * FROM users WHERE username = '".$u."'";
  $res = mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0){
      if($row = mysqli_fetch_assoc($res)){        
      
                                   $id = $row['srno'];
                                   
                             
 


               

                 if(isset($_POST['done'])){
                     $opassword = $_POST['opassword'];
                    if(password_verify($opassword, $row['password'])){
                                                   
                                 
                                               $npassword = $_POST['npassword'];
                                               $cpassword = $_POST['cpassword'];
                                               if(($npassword == $cpassword)){
                                                               $hash = password_hash($npassword, PASSWORD_DEFAULT);
                                                              $sql = "UPDATE users SET password ='$hash' WHERE users.srno = $id";
                                                              $res = mysqli_query($conn, $sql);
                                                               if($res){
                                                                        echo'<div class="alert alert-success d-flex align-items-center" role="alert">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                                        </svg>
                                                                        <div>
                                                                            <b> Success</b> changed your password.
                                                                        </div>
                                                                      </div>';

                                                                        }else{
                                                                               
                                                                               
                                                                               echo'<div class="alert alert-danger d-flex align-items-center" role="alert">
                                                                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                                                 <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                                               </svg>
                                                                               <div>
                                                                                   <b> Warning</b> database error.
                                                                               </div>
                                                                             </div>';
                                                                        }

                                               }else{
                                                   echo'<div class="alert alert-danger d-flex align-items-center" role="alert">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                     <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                   </svg>
                                                   <div>
                                                       <b> Warning</b> both  password not match.
                                                   </div>
                                                 </div>';
                                               }


                        
                             }else{ 
                                 echo'<div class="alert alert-warning d-flex align-items-center-top" role="alert">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                   <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                 </svg>
                                 <div>
                                     <b> Success</b> Old password wrong.
                                 </div>
                               </div>';

                             }
                         
                         }
                        
      }
    }


?>

    <div class="modal-dialog" role="document">
        <div class="modal-content" style=" background-color: whitesmoke;">
            <div class="modal-header">
                <h3 class="modal-title text-danger" id="exampleModalLabel">Change password</h3>

            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="container-fluid md-2">
                        <div class="col mt-2">
                            <input type="password" name="opassword" id="opassword" class="form-control" value=""
                                placeholder="Enter old password">
                        </div>
                        <div class="col mt-2">
                            <input type="password" name="npassword" id="npassword" class="form-control"
                                placeholder="Enter new password ">
                        </div>
                        <div class="col mt-2">
                            <input type="password" name="cpassword" id="cpassword" class="form-control"
                                placeholder="Enter confrim password">
                        </div>
                        <div class="col mt-2">
                            <button type="submit" name="done" class="btn btn-primary" data-dismiss="modal">Done</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>