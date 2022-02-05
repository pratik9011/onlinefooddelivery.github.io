<?php
 include('css/_log.php');
 include('db/_dbconnect.php');
$payid=$_GET['Gpayid'];
  $u = $_SESSION['username'];
  $sql = "SELECT * FROM buy WHERE payid= '$payid'";
  $res = mysqli_query($conn,$sql);
 
      while($row = mysqli_fetch_assoc($res)){
            $username= $row ['busername'];
            $quantity= $row ['uquntity'];
        $order_address=$row['baddress'];
           $order_time=$row['buytime'];
         $product_name=$row['pname'];
        $product_price=$row['bprice'];
         $payment_type=$row['p_type'];
       $payment_result=$row['pay'];
          $total_price=$row['t_pay'];
      }
 $sql = "Select * from users where username ='$username'";
      $result = mysqli_query($conn, $sql);
     
        while($row=mysqli_fetch_assoc($result)){
            $user_name=$row['uname'];
            $user_email=$row['uemail'];
            $user_address=$row['uaddres'];
            $user_gender=$row['ugender'];
            $user_phone=$row['uphone'];
            $user_brithdate=$row['ubrithdate'];
            
            
            
        }
$sql = "SELECT * FROM users1 where pname='$product_name'";  
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)){
 
$pro = $row ['pid'];
$pprice =$row['pprice'];
$product_type =$row['ptype'];
$name =$row ['pname'];


 }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
    body {
        margin: 0;
        padding: 0;
        font: 12pt "Tahoma";
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;

    }

    .page {
        width: 21cm;
        min-width: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        border: 1px #d3d3d3 solid;
        border-radius: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);


    }

    .subpage {
        padding: 1px;
        border: 5px red solid;
        height: 256mm;
        outline: 2cm #ffeaea solid;

    }

    @page {
        size: A4;
        margin: 0;

    }

    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            page-break-after: always;
        }
    }

    .button {
        background-color: #1e90ff;
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font: size 16px;
        margin: 4px 2px;
        cursor: pointer;

    }
    </style>
    <title>print</title>
</head>

<body>
    <div class="book">
        <div class="page">
            <div class="subpage">page 1/2
                <div class="text-center my-0">
                    <h2>ONLINE FOOD DELIVARY</h2>
                </div>
                <div class="text-center my-5 "><b>This website are used in student collage project.</b></div>
                <div class="d-flex my-4 justify-content-around ">


                    <li class="nav-link text-dark"><label for="">CONTACT NO:</label> +919665626421</li>
                    <li class="nav-link text-dark ">GMAIL ID: pratikpatil112001@gmail.com</li>
                    <li class="nav-link text-dark"><img src="img/barcode.png" alt="" width="80px" height="30px"></li>

                </div>
                <?php echo'<div class="border-1 border-dark border-top">
        <div class="text-center my-5 "><b>USER ACCOUNT INFO.</b></div>
                <div class="d-flex justify-content-around my-4">
                    <div><b>NAME:</b> '.$user_name.'</div>
                    <div><b>USERNAME:</b> '.$username.'</div>
                    <div><b>GMAIL ID:</b> '.$user_email.'</div>
                </div>
                <div class="d-flex justify-content-around my-4">
                    <div><b>ADDRESS:</b> '.$user_address.'</div>
                    <div><b>BRITHDATE:</b> '.$user_brithdate.'</div>
                    <div><b>PHONE NO:</b> '.$user_phone.'</div>
                </div>
                <div class="d-flex justify-content-around my-4">
                    <div><b>GENDER:</b> '.$user_gender.'</div>
                    <div></div>
                    <div></div>
                </div>
                </div>
                <div class="border-1 border-dark border-top">
                <div class="text-center my-5 "><b>PRODUCT INFO.</b></div>
                <div class="d-flex justify-content-around my-4">
                    <div>PRODUCT NAME: '.$product_name.'</div>
                    <div>PRODUCT ID: '.$pro.'</div>
                    <div>PRODUCT TYPE: '.$product_type.'</div>
                </div>
                <div class="d-flex justify-content-around my-4">
                    <div>PRICE: '.$product_price.'</div>
                    <div>QUANTIY:-'.$quantity.'</div>
                    <div></div>
                </div>
                </div>
                <div class="border-1 border-dark border-top">
                <div class="text-center my-5 "><b>ORDER INFO.</b></div>
                <div class="d-flex justify-content-around my-4">
                    <div>ORDER ID: '.$payid.'</div>
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
                    <div></div>
                    <div></div>
                </div>
                </div>
               
                
            </div>
        </div>
       
            <div class="page">
               <div class="subpage">page 2/2
               <div class="border-1 border-dark border-top border-bottom">
               <div class="text-center my-5 "><b>PAYMENT INFO.</b></div> 
               <div class="d-flex justify-content-around my-4">
                    <div>NAME: '.$user_name.'</div>
                    <div>USERNAME: '.$username.'</div>
                    <div>PAYMENT ID: '.$payid.'</div>
                </div>
                <div class="d-flex justify-content-around my-4">
                    <div>PAYMENT TYPE: '.$payment_type.'</div>
                    <div>TOTAL PAY: '.$total_price.'</div>
                    <div>PAYMENT RESULT: '.$payment_result.'</div>
                    
                </div>
                
               </div>
               <div class="text-center my-2">
                <button onclick="window.print()" class="btn btn-primary " id="print-btn">print</button>
            </div>
               
            </div>';?>

            </div>

</body>

</html>