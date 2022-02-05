<?php 
include("css/_log.php"); 
include("db/_dbconnect.php");
include("css/_nav.php");


?>


<?php
$next = false;
$pro= false;
$pro1= false;
$uname=$_SESSION['username'];

$sql = "SELECT * FROM buy";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
   $bid =$row['id'];
   $i=0;
   for($i;$i<= $bid;$i++){
        
      
   }


}
 $sql = "SELECT * FROM buy WHERE busername='$uname'";
 $result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
   $bid =$row['id'];
   


}


$id = $_GET['proid'];
      $sql = "SELECT * FROM users1 WHERE pid=$id";
      $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($result)){
        
        
         if($row){
            
         }else{
              echo'<h1>not display rcords</h1>';
         }
 
$price= $row['pprice'];
$pname= $row['pname'];
$avli = $row['avli'];

     }

if($_SERVER["REQUEST_METHOD"] == "POST"){
       
       $address =$_POST['address'];
       $quantity = $_POST['quantity'];
       $p_type =$_POST['submit'];
        $total = $price * $quantity;
        $stock=$avli-$quantity;
      $quan =$quantity;
      
       
       if($p_type=="mobile pay"){
           $pri="scaner";
           $next = true;
           $check ="paid";
           
           
       }elseif($p_type=="debit card"){
           $pri="debit";
        $next = true;
           $check ="paid";
       }elseif($p_type=="pay on dilivary"){
           $pri="paytaype";
        $next = true;
           $check = "none";
       }
       if($avli >= $quantity){
       $sql="UPDATE users1 SET avli = '$stock' WHERE pid = $id";
       $result= mysqli_query($conn,$sql);

       $sql="INSERT INTO buy (`busername`, `uquntity`, `baddress`, `buytime`,`pname`,`bprice`,`t_pay`,`p_type`,`pay`,`payid`) VALUES ('$uname', '$quantity', '$address', current_timestamp(),'$pname','$price','$total','$p_type','$check','$i')";
       $result = mysqli_query($conn,$sql);
       if($result){
           
        
       }

else{
    
}
}else{

}
}
?>
<html>

<body >


    <div class="modal-dialog" role="document">
        <div class="modal-content" style=" background-color: whitesmoke;">
            <div class="modal-header">
                <h3 class="modal-title text-success" id="exampleModalLabel">Order Dilivary</h3>
            </div>



            <?php
                if($next == true){
                    if($avli >= $quantity){
             echo'<div class="modal-body">
             <button class="btn btn-warning my-2 form-control">Total pay '.$total.'</button>
             <h3 class="text-success">Click next button....</h3>
              <a class="btn btn-success my-2" href="'.$pri.'.php?paid='.$i.'">next</a>
              <div>';
                    }else{
                        echo'<div class="modal-body">
                        <h3 class="text-danger">Sorry no avliable this food....</h3>
                        <a class="btn btn-success my-2" href="index.php">Try new </a>
                        ';
                    }
                 }
                 else{
                     echo'
                     <div class="conainer-fluid from-control">
               <form action="" method="post">
               <div class="modal-body">
               <input type="text" name="address" class="form-control my-3" placeholder="Enter address">
               <input type="number" name="quantity" class="form-control my-3" value="1" placeholder="Enter quantity">
               <div>
                   
               </div>
                      <button type="sumit" onclick="peet()"  value="pay on dilivary" name="submit" class="btn btn-outline-success form-control my-2">Pay on delivary</button>
                     <button type="sumit" onclick="meet()" value="mobile pay" name="submit" class="btn btn-outline-success form-control my-2">Mobile pay</button>
       
                     <button type="sumit" onclick="peet()" value="debit card" name="submit" class="btn btn-outline-success form-control my-2">Debit/credit card</button>
                     </div>';
                 }
                  ?>

            </form>
        </div>
    </div>

    </div>
    <script>
    function peet() {

        alert("click next button");
        console.log(cheks);

    }
    

    </script>
   
</body>

</html>