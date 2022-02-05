<?php
  
include("../css/_nav2.php");
include("../db/_dbconnect.php");

?>
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
    // total payment employee
    $query ="SELECT SUM(days_payment) AS sum FROM emp_payment";
    $query_r = mysqli_query($conn , $query);
    while($row = mysqli_fetch_assoc($query_r)){
      $total_emp_payment = $row['sum'];
    } 
    // total order
    $sqli="SELECT id FROM buy ORDER BY id";
   $sqli_q= mysqli_query($conn, $sqli);
   $total_order = mysqli_num_rows($sqli_q);
//    total employee
$sqli="SELECT emp_id FROM emp ORDER BY emp_id";
   $sqli_q= mysqli_query($conn, $sqli);
  
   $total_emp = mysqli_num_rows($sqli_q);

   
?>
<html>

<body>
    <div class="container-fluid row-col-2">
        <div class="row row-col-2 ml-2">

            <div class="row">
                <ul class="d-flex">
                    <li class="mx-4 nav-link">
                        <div class="col-md-6 ml-5 mt-5 text-center">
                            <img src="http://127.0.0.1/project/img/admin.png" class="rounded img-fluid img-thumbnail"
                                width="80%">
                        </div>

                        <dl class="row">
                            <dt class="col-sm-5 mt-3">USER NAME</dt>
                            <dd class="col-sm-7 mt-3">ADMIN</dd>

                            <dt class="col-sm-5 mt-3">EMAIL ID</dt>
                            <dd class="col-sm-7 mt-3">pratikpatil112001@gmail.com</dd>

                            <dt class="col-sm-5 mt-3">ADDRESS</dt>
                            <dd class="col-sm-7 mt-3">pune,maharastra,india</dd>

                            <dt class="col-sm-5 mt-3">MOBILE NO</dt>
                            <dd class="col-sm-7 mt-3">+91 9665626421</dd>

                            <dt class="col-sm-5 mt-3">GENDER</dt>
                            <dd class="col-sm-7 mt-3">MALE</dd>
                        </dl>
                    </li>
                    <li class="mx-5 my-5 nav-link">
                        <div class="container-fluid bg-danger rounded" style="width: 15rem; height: 10rem;">
                            <div class="text-center text-light">
                                <h5>Total employee payment:</h5>
                            </div>
                            <div class="text-center text-light">
                                <h6><?php echo $total_emp_payment; ?></h6>
                            </div>
                            <div class="text-center text-light"><svg xmlns="http://www.w3.org/2000/svg" width="60"
                                    height="60" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                    <path
                                        d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                </svg></div>
                        </div>
                    </li>
                    <li class="mx-1 my-5 nav-link">
                        <div class="container-fluid bg-info rounded" style="width: 15rem; height: 10rem;">
                            <div class="text-center text-light">
                                <h5>Total orders: </h5>
                            </div>
                            <div class="text-center text-light">
                                <h6><?php echo $total_order; ?></h6>
                            </div>
                            <div class="text-center text-light"><svg xmlns="http://www.w3.org/2000/svg" width="60"
                                    height="60" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></div>
                        </div>
                    </li>
                    <li class="mx-5 my-5 nav-link">
                        <div class="container-fluid bg-warning rounded" style="width: 15rem; height: 10rem;">
                            <div class="text-center text-light">
                                <h5>Total employee </h5>
                            </div>
                            <div class="text-center text-light">
                                <h6><?php echo $total_emp; ?></h6>
                            </div>
                            <div class="text-center text-light"><svg xmlns="http://www.w3.org/2000/svg" width="60"
                                    height="60" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                                    <path
                                        d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path
                                        d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                                </svg></div>
                        </div>
                    </li>



                </ul>

                </ul>
            </div>
            <?php

                $sum=0;

$sql = "SELECT * FROM buy";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){

    $q = $row['uquntity'];
}
   $i=0;
   $query ="SELECT SUM(bprice) AS sum FROM buy";
   $query_r = mysqli_query($conn , $query);
   while($row = mysqli_fetch_assoc($query_r)){
     $sum = $row['sum']*$q;
   }
   $sqli="SELECT id FROM buy ORDER BY id";
   $sqli_q= mysqli_query($conn, $sqli);
  
   $count1 = mysqli_num_rows($sqli_q);

   $sqli="SELECT srno FROM  users ORDER BY srno";
$sqli_q= mysqli_query($conn, $sqli);

$count = mysqli_num_rows($sqli_q);

$sqli="SELECT pid FROM  users1 ORDER BY pid";
$sqli_q= mysqli_query($conn, $sqli);

$count2 = mysqli_num_rows($sqli_q);

   
?>



            <?php  echo' <div class="btn-group" role="group" aria-label="Basic mixed styles example">
   <a type="button" class="btn btn-danger" height="300px" width="300px"href="user.php" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
   <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
 </svg> TOTAL USERS: '.$count.'</a>
 <a type="button" class="btn btn-success" height="300px" width="300px" href="buy.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
 <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg> TOTAL EARNS:'.$sum.'</a>
 <a type="button" class="btn btn-primary" height="300px" width="300px" href="product.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
 <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
 <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg> TOTAL PRODUCTS:'.$count2.'</a>
</div>'; ?>


        </div>
    </div>
    </div>
    </div>
</body>

</html>