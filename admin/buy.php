<?php

include("../css/_nav2.php");
include("../db/_dbconnect.php");
include("../css/_log2.php");
?>
<?php
$sql = "SELECT * FROM buy";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){

    $q = $row['uquntity'];
}
   $i=0;
   $query ="SELECT SUM(bprice) AS sum FROM buy";
   $query_r = mysqli_query($conn , $query);
   while($row = mysqli_fetch_assoc($query_r)){
     
     $sum = $row['sum'] * $q;
   }
   $sqli="SELECT id FROM buy ORDER BY id";
   $sqli_q= mysqli_query($conn, $sqli);
  
   $count = mysqli_num_rows($sqli_q);
   
?>

<html>

<body>
    <div class="container-fluid row-col-2">
        <div class="row row-col-2 ml-2">
            <div class="col-3">
                <div class="col-md-6 ml-5 mt-5 text-center">
                    <img src="http://127.0.0.1/project/img/admin.png" class="rounded img-fluid img-thumbnail"
                        width="80%">
                </div>
                <dl class="row">

                    <dt class="col-sm-5 mt-3">USER NAME</dt>
                    <dd class="col-sm-7 mt-3">ADMIN</dd>



                    <dt class="col-sm-5 mt-3">TOTAL ORDERS</dt>
                    <dd class="col-sm-7 mt-3"><?php echo '<b>'.$count.'</b>';  ?></dd>

                    <dt class="col-sm-5 mt-3">TOTAL EARNS</dt>
                    <dd class="col-sm-7 mt-3"><?php echo '<b>'.$sum.'</b>';  ?></dd>
                </dl>
            </div>
            <?php
    $sql = "SELECT * FROM buy";
    $res = mysqli_query($conn,$sql);
    echo "
    <table class='table table-bordered table-hovermt-2 mt-3'>
    <thead class='text-center'>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>User Name</th>
            <th scope='col'>Product Name</th>
            <th scope='col'>Total Price</th>
            <th scope='col'>Total Quntity</th>
            <th scope='col'>Buy Time</th>
            
            <th scope='col'>Order Address</th>
            <th scope='col'>Action</th>
        </tr>
    </thead>";
    while($row = mysqli_fetch_assoc($res)){
        $num=$row['id'];
        $tprice=$row['bprice'];
        
       echo "<tr >
                    <td >{$row['id']}</td>
                    <td>{$row['busername']}</td>
                    <td id='uid'>{$row['pname']}</td>
                    <td id='uid'>{$row['bprice']}</td>
                    <td id='uid'>{$row['uquntity']}</td>
                    <td id='sprice'class='text-center'>{$row['buytime']}</td>
                   <td> {$row['baddress']}</td>";
                echo'<td><a href="action.php?orderid='.$num.'" class="btn btn-primary text-center">get action</a></td>
                 
                </tr>';
               
      }
    

     
    
      
      
      ?>
        </div>
    </div>
    </div>
    </div>
</body>

</html>