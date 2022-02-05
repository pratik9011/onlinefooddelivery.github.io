<?php
include("../css/_nav2.php");
include("../css/_log2.php");
include("../db/_dbconnect.php");
 $login=false;
 $showError =false;
 $order =$_GET['orderid'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
   $emp_id=$_POST['empid'];
  
 
    $sql="UPDATE buy SET get_delivary='$emp_id'   WHERE buy.id ='$order'";
    $res = mysqli_query($conn, $sql);
    if($res){
         $login=true;

    }else{
        $showError="database error.";
    }
 
     }
     if($login){
        echo'
        <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>success</strong>  your action now.
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
     $sql = "SELECT * FROM buy WHERE id ='$order'";
     $res = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($res)){
      $username=$row['busername']; 
      $quantity=$row['uquntity'];
      $address=$row['baddress'];
      $order_time=$row['buytime'];
      $product_name=$row['pname'];
      $payment_type=$row['p_type'];
      $total_pay=$row['t_pay'];
     $product_price=$row['bprice'];
      $payment_result=$row['pay'];
      $payment_id=$row['payid'];
   
      echo'<ul class="d-col form-control">
      <div class="modal-dialog" role="document">
         <div class="modal-content" style=" background-color: whitesmoke;"> 
           <div class="modal-header">
                             <h3 class="modal-title text-info" id="exampleModalLabel">Order action</h3>
                             
            </div>
            <div class="modal-body">
                  <form action="" method="post" enctype="multipart/form-data">
                  <div class="text-center my-2 "><b>ORDER INFO.</b></div>
                  <div class="d-flex justify-content-around my-4">
                      <div><b>ORDER ID:</b>  '.$payment_id.'</div>
                      <div><b>USERNAME:</b> '.$username.'</div>
                      <div><b>ORDER TIME:</b> '.$order_time.'</div>
                  </div>
                  <div class="d-flex justify-content-around my-4">
                      <div><b>ORDER ADDRESS:</b>  '.$address.'</div>
                      <div><b>PRODUCT NAME:</b>  '.$product_name.'</div>
                      <div><b>PRICE:</b>  '.$product_price.'</div>
                  </div>
                  <div class="d-flex justify-content-around my-4">
                      
                      <div><b>TYPE PAYMENT: </b> '.$payment_type.'</div>
                      <div><b>PAYMENT RESULT: </b> '.$payment_result.'</div>
                      
                  </div>
                  <div class="d-flex justify-content-around my-4">
                        <div><b>TOTAL PRICE:  '.$total_pay.'</b></div> 
                  </div>
                  <div class="d-col justify-content-around my-4">
                  <input type="text" class="form-control my-2" id="contact" aria-describedby="emailHelp"
                  name="empid" placeholder="Enter emp id">
                  <button class="form-control btn btn-primary my-2" value="submit" type="submit" name="submit">submit</button>
                  <a href="buy.php" class="form-control btn btn-dark my-2">Back</a>
                  </div>
                  <p>Enter only this id to who get order delivard to order address.</p>
                  </div>
                  </form>
            </div>
       </div>
     </div>';
     }
    
?>