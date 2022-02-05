<?php 
  include('css/_log.php');
  include('css/_nav.php');
 
  include('db/_dbconnect.php');

   $u = $_SESSION['username'];
   $sql = "SELECT * FROM buy WHERE username = '".$bid."'";
   $res = mysqli_query($conn,$sql);
   if(mysqli_num_rows($res)>0){
       while($row = mysqli_fetch_assoc($res)){
                                
       }
    }

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
               //$password = $_POST['password'];
               //$hash = password_hash($password, PASSWORD_DEFAULT);
               

    $sql="UPDATE users SET uphone = '$phone', uname = '$name', uemail = '$email', ubrithdate = '$brithdate', ugender = '$gender', uaddres = '$address', uimg ='".$no.$file_name."'  WHERE users.srno = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        

    }else{
        echo'<h1>NOT CONCTACT TO YOUR UPDATE TO DATABASE </h1>';
    }

    }
}

?>