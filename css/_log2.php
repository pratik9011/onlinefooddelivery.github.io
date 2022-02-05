<?php  
    
      
       $ur = $_SESSION['username'];
      $um = "admin";
      if($um == $ur){
      
       if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        
            
           
                      
           
                 header("location: login.php");
           
       }
    }else{
        header("location: logout.php");
    }
    
?>