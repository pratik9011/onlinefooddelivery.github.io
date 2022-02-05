<html>

<head>
    <link rel="stylesheet" href="">
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;

    }

    .wrapper {
        height: 300px;
        width: 300px;
        position: relative;
    }

    .upimg {}
    </style>
</head>

<body>
    <?php  
  include('css/_log.php');
  include('css/_nav.php');
 
  include('db/_dbconnect.php');
   //UPDATE `users` SET `srno` = '13' WHERE `users`.`srno` = 29;
   $u = $_SESSION['username'];
   $sql = "SELECT * FROM users WHERE username = '".$u."'";
   $res = mysqli_query($conn,$sql);
   if(mysqli_num_rows($res)>0){
       while($row = mysqli_fetch_assoc($res)){
                                
                               $id = $row['srno'];

 
     
     
     
       
     
           echo' <div class="modal-dialog" role="document">
                <div class="modal-content" style=" background-color: whitesmoke;">
                <div class="modal-header">
                    <h3 class="modal-title text-info" id="exampleModalLabel">UPDATE PROFILE</h3>
                    
                </div>
                <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="col mt-2 text-center">
                         <div class="profile" style="display:flexbox;">
                         <div class="profileimg">
                              
                        
                           <label for="upimg" value"'.$row['uimg'].'" width="40%"><img src="'.$row['uimg'].'"  width="20%" height="20%" style="border-radius: 74px; border: solid skyblue;" ></label>  
                           <input type="file" name="uimg" value="'.$row['uimg'].'" style="display:none; visibility:none;" id="upimg" class="upimg" >
                           
                           </div><label><b style="color:skyblue;">Change profile picture</b></label>
                           </div>
                    </div>
                    <div class="col mt-2">
                    <input type="text" name="uname" id="uname" class="form-control" value="'.$row['uname'].'" placeholder="Enter full name">
                </div>
                    <div class="col mt-2">
                        <input type="text" name="username" id="p_username" class="form-control " value="'.$row['username'].'" disabled="disabled" >
                        <div id="emailHelp" class="form-text">Username are not change are unique.</div>
                    </div>
                    <div class="col mt-2">
                        <input type="uemail" name="uemail" id="uemail" class="form-control" value="'.$row['uemail'].'" placeholder="Enter email ">
                    </div>
                    <div class="col mt-2">
                        <input type="text" name="uaddres" id="add" class="form-control" value="'.$row['uaddres'].'" placeholder="Enter address">
                    </div>
                    <div class="col mt-2">
                        <input type="tel" name="uphone" id="uphone" class="form-control" value="'.$row['uphone'].'" placeholder="Enter mobile no">
                    </div>
                    <div class="col mt-2">
                        <input type="text" name="ubrithdate" id="quali" class="form-control" value="'.$row['ubrithdate'].'" >
                    </div>
                   
                    <div class="col mt-2">';
                        
                         
                         
                         

                echo'</div>

              <div class="col mt-2">
                        Male <input type="radio" name="ugender"  value ="Male" class="form-group" checked>
                        Female <input type="radio" name="ugender"  value ="Female" class="form-group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">submit</button>
                    
                </div>
                </form>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
    </body>
</html>';
       }
                     
    }
    ?>
    <?php
            
        
    echo "</table></div>";
    
?>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
           if(isset($_FILES['uimg'])){
            $no = "http://127.0.0.1/project/img/profile_img/";
            $file_name =$_FILES['uimg']['name'];
            $file_tmp =$_FILES['uimg']['tmp_name'];
            move_uploaded_file($file_tmp,"img/profile_img/".$file_name);                              
        
                $name = $_POST['uname'];
                
               $phone = $_POST['uphone'];
               $email = $_POST['uemail'];
               $address =$_POST['uaddres'];
               $gender = $_POST['ugender'];
               $brithdate =$_POST['ubrithdate'];
               
               

    $sql="UPDATE users SET uphone = '$phone', uname = '$name', uemail = '$email', ubrithdate = '$brithdate', ugender = '$gender', uaddres = '$address', uimg ='".$no.$file_name."'  WHERE users.srno = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        

    }else{
        echo'<h1>NOT CONCTACT TO YOUR UPDATE TO DATABASE </h1>';
    }

    }
}

?>