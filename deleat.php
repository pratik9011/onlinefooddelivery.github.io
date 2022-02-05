<?php  
  include('css/_log.php');
  include('css/_nav.php');
  include('db/_dbconnect.php');
  session_start();
  $duname = $_SESSION['username'];
   $p=$conn;
   $id = $_GET['uid'];
  $sql = "DELETE FROM users WHERE users.srno = $id";
  $res = mysqli_query($p,$sql);
  if($res){
            
                
                session_unset();
                session_destroy();
    
                header("location: login.php");
      exit;
  }else{
        echo"no delete account"; 
  }
?>