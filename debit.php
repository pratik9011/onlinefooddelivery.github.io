<?php 
include("css/_log.php"); 
include("db/_dbconnect.php");
include("css/_nav.php");

$payid = $_GET['paid'];
$uname=$_SESSION['username'];
 $sql = "SELECT * FROM buy WHERE  payid ='$payid'";
 $result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
  $total=$row['t_pay'];


}

echo'<div class="modal-dialog" role="document">
<div class="modal-content" style=" background-color: whitesmoke;"> 
  <div class="modal-header">
       <h3 class="modal-title text-success" id="exampleModalLabel">Card information</h3>
   </div>
   <div class="modal-body">
   <button class="btn btn-success form-control my-2" href="">Total pay '.$total.'</button>
   <div>
    <label for="card">Enter card no:-</label>
</div>
   <div class="d-flex my-2">
    <input type="text" maxlength="4" name="card" id=""  class="form-control mx-2" placeholder="0000">
    <input type="text" maxlength="4" name="card" id=""  class="form-control mx-2" placeholder="0000">
    <input type="text" maxlength="4" name="card" id=""  class="form-control mx-2" placeholder="0000">
    <input type="text" maxlength="4" name="card" id=""  class="form-control mx-2" placeholder="0000">
</div> 
<div class="d-flex my-2">
<div class="d-col my-2">
    <label for="from">VALID FROM</label>
</div>
    <input type="month" name="from" id="" class="form-control">
    <label for="thuru"class="mb-3"> VALID THRU</label>
    <input type="month" name="from" id="" class="form-control">
</div>
<label for="from">Enter card password</label>
<input type="password" maxlength="4" name="card" id=""  class="form-control my-2" placeholder="0000">

<a onclick="peet()" class="btn btn-success form-control my-2" href="otp.php?pri='.$payid.'">Submit</a>
</div>

';


?>
<script>
function peet() {

    alert("otp code is 2911");
    console.log(cheks);

}
</script>