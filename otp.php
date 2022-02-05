<?php
include("css/_log.php"); 
include("db/_dbconnect.php");
include("css/_nav.php");
$paid= $_GET['pri'];
$submit="ra";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $otp =$_POST['otp'];
   $submit=$_POST['submit'];
   
}
echo'<div class="modal-dialog" role="document">
<div class="modal-content" style=" background-color: whitesmoke;"> 
  <div class="modal-header">
       <h3 class="modal-title text-success" id="exampleModalLabel">OTP Code</h3>
   </div>
   <div class="modal-body">
   <form method="post">
  ';
   if($submit == "submit"){

   
   if($otp == 2911){
    echo'<a type="submit" class="btn btn-primary form-control my-2" href="paytaype.php?paid='.$paid.'">NEXT</a>';
}else{
  echo"<script>confirm('you enter wrong OTP')</script>";

}
   }else{
   echo' <div class="d-flex my-2">
  
   <input type="text" class="form-control" name="otp" maxlength="4" name="card" id=""  class="form-control mx-2" placeholder="0000">
  
   </div>
   <button type="submit" name="submit" class="btn btn-primary form-control my-2" value="submit">Submit</button>
   </form>
   </div>';
   }
   

 

  
echo'</div>
</div>';
?>
<script></script>