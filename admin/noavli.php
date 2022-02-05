<?php
include("../css/_nav2.php");
include("../db/_dbconnect.php");
include("../css/_log2.php");
$login=false;
$id =$_GET['proid'];
$sql="SELECT * FROM users1 WHERE pid=$id";
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){
$avli=$row['avli'];

if($login){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success</strong> enterd successful...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

echo '<div class="modal-dialog" role="document">
<div class="modal-content" style=" background-color: whitesmoke;">
    <div class="modal-header">
        <h3 class="modal-title text-success" id="exampleModalLabel">ENTER STOCK</h3>
    </div>
    <div class="modal-body">
    <form action="" method="post">
             <input type="text" name="stock" class="form-control" value="'.$avli.'">
              <button type="submit" onclick="preet()" class="btn btn-success my-2 form-control" >UPADATE</button>
              <a type="submit"  class="btn btn-secondary my-2 form-control" href="product.php">BACK</a>
              </form>
              <div>
    </div>
    </div>';
}
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $stock =$_POST['stock'];
       
        $sql="UPDATE users1 SET avli='$stock' WHERE pid=$id";
        $res=mysqli_query($conn,$sql);
        if($res){
            
               header('location: product.php');
        }

    }
    else{
        
    }
?>
<script>
    function preet(){
        window.location ='product.php';
        
       
}
</script>