<?php
echo'<div class="container-fluid bg-secondary">';
include("../css/_nav2.php");
include("../css/_log2.php");
include("../db/_dbconnect.php");

$current_date= date_default_timezone_get();
echo date("Y-m-d");
$rec=date("Y-m-d");
$rec1=strtotime($rec);
echo' <div class="row">';
$sql = "SELECT * FROM buy WHERE buytime=current_date()";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){
    $username= $row ['busername'];
    $quantity= $row ['uquntity'];
$order_address=$row['baddress'];
   $order_time=$row['time'];
   $order_date=$row['buytime'];
 $product_name=$row['pname'];
$product_price=$row['bprice'];
 $payment_type=$row['p_type'];
$payment_result=$row['pay'];
  $total_price=$row['t_pay'];
  $payment_id=$row['payid'];
  $emp_id=$row['get_delivary'];


  $sql = "SELECT * FROM users1 where pname='$product_name'";  
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)){
 
$pro = $row ['pid'];
$pprice =$row['pprice'];

$name =$row ['pname'];

echo'<div class="col md 4 my-2">
<div class="modal-dialog my-5" role="document">
   <div class="modal-content" style=" background-color: whitesmoke;"> 
     <div class="modal-header">
                       <h3 class="modal-title text-info" id="exampleModalLabel">Order action <input class="form-check-input" type="checkbox"></h3>
                       
            </div>
          <div class="modal-body">
        <div class="border-1 border-dark border-top">
        <div class="d-flex justify-content-end my-4"><h4>Date: '.$order_date.'</h4></div>
                <div class="text-center my-2 "><b>PRODUCT INFO.</b></div>
                <div class="d-flex justify-content-around my-4">
                    <div>PRODUCT NAME: '.$product_name.'</div>
                    <div>PRODUCT ID: '.$pro.'</div>
                    <div>PRODUCT TYPE:</div>
                </div>
                <div class="d-flex justify-content-around my-4">
                    <div>PRICE: '.$product_price.'</div>
                    <div></div>
                    <div></div>
                </div>
                </div>
                <div class="border-1 border-dark border-top">
                <div class="text-center my-2 "><b>ORDER INFO.</b></div>
                <div class="d-flex justify-content-around my-4">
                    <div>ORDER ID: '.$payment_id.'</div>
                    <div>USERNAME: '.$username.'</div>
                    <div>ORDER TIME: '.$order_time.'</div>
                </div>
                <div class="d-flex justify-content-around my-4">
                    <div>ORDER ADDRESS: '.$order_address.'</div>
                    <div>PRODUCT NAME: '.$product_name.'</div>
                    <div>PRICE: '.$product_price.'</div>
                </div>
                <div class="d-flex justify-content-around my-4">
                    <div><h5>TOTAL PRICE: '.$total_price.'</h5></div>
                    <div><b>EMPLOYEE ID:</b>'.$emp_id.'</div>
                    <div></div>
                </div>
                </div>
               
                
                 
            <div class="page">
               <div class="subpage">
               <div class="border-1 border-dark border-top border-bottom">
               <div class="text-center my-2 "><b>PAYMENT INFO.</b></div> 
               <div class="d-flex justify-content-around my-4">
                    
                    <div>USERNAME: '.$username.'</div>
                   
                </div>
                <div class="d-flex justify-content-around my-4">
                    <div>PAYMENT TYPE: '.$payment_type.'</div>
                    <div>TOTAL PAY: '.$total_price.'</div>
                    <div>PAYMENT RESULT: '.$payment_result.'</div>
                    
                </div>
                
               </div>
               
            
               </div>
        </div>
    </div> 
  </div>
</div>
            ';

 }
}
echo'</div>
</div>';
?>