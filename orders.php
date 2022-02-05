<?php
include("css/_log.php");
include("db/_dbconnect.php");
include("css/_nav.php");
   
    


     $oname = $_SESSION['username'];
     $sql = "SELECT * FROM buy WHERE busername= '$oname'";
$res = mysqli_query($conn,$sql);

 

      
   
         echo'
        <table class="table ">
            <thead class="text-center bg-info table table-bordered table-hovermt-2 mt-3 ">
                <tr>
                   
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">PAYMENT ID</th>
                    <th scope="col">PRODUCTS</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">ORDER TIME</th>
                    <th scope="col">TOTAL PRICE</th>
                    <th scope="col">TYPE PAYMENT </th>
                    <th scope="col">PAID PAYMENT</th>
                    <th scope="col">PRINT ORDER </th>

                    
                </tr>
            </thead>';
            while($row = mysqli_fetch_assoc($res)){

                $pid= $row['payid'];
                $pname=$row['pname'];
               $quantity= $row['uquntity'];
                $price=$row['bprice'];
                $time_order=$row['buytime'];
                $total=$row['t_pay'];
                $paid=$row['pay'];
               
                $paytype=$row['p_type'];

               echo '<tr class="my-2 text-center " style=" background-color: whitesmoke;">
                 <td class=" text-dark my-1">'.$pname.'</td>
                 <td class=" text-dark my-1">'.$pid.'</td>
                 <td class=" text-dark my-1">'.$quantity.'</td>
                 <td class=" text-dark my-1">'.$price.'</td>
                 <td class=" text-dark my-1">'.$time_order.'</td>
                 <td class=" text-dark my-1">'.$total.'</td>
                 <td class=" text-dark my-1">'.$paytype.'</td>
                 <td class=" text-dark my-1">'.$paid.'</td>
                
                 <td class=" text-dark my-1"><a class="btn btn-primary my-2" href="print.php?Gpayid='.$pid.'">print</a></td>
               </tr>';
                        
            }
        
       
       
    
?>