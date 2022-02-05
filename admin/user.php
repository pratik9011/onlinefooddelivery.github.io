<?php
include("../css/_nav2.php");
include("../db/_dbconnect.php");
?>
<?php

$sqli="SELECT srno FROM  users ORDER BY srno";
$sqli_q= mysqli_query($conn, $sqli);

$count = mysqli_num_rows($sqli_q);


?>
<html>

<head>

</head>

<body>

    <div class="container-fluid row-col-2">
        <div class="row row-col-2 ml-2">
            <div class="col-3">
                <div class="col-md-6 ml-5 mt-5 text-center">
                    <img src="http://127.0.0.1/project/img/admin.png" class="rounded img-fluid img-thumbnail"
                        width="80%">
                </div>
                <dl class="row">

                    <dt class="col-sm-5 mt-3">ADMINIESTER NAME</dt>
                    <dd class="col-sm-7 mt-3">ADMIN</dd>



                    <dt class="col-sm-5 mt-3">TOTAL USERS</dt>
                    <dd class="col-sm-7 mt-3"><?php echo '<b>'.$count.'</b>';  ?></dd>
                </dl>
            </div>
            <?php
    $sql = "select * from users";
    $res = mysqli_query($conn,$sql);
    echo "
    <table class='table table-bordered table-hovermt-2 mt-3'>
    <thead class='text-center'>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Name</th>
            <th scope='col'>email</th>
            <th scope='col'>Address</th>
            <th scope='col'>Phone No</th>
            <th scope='col'>Gender</th>
            <th scope='col'>Date Of Birth</th>
            
        </tr>
    </thead>";
    while($row = mysqli_fetch_assoc($res)){
       echo "<tr >
                    <td >{$row['srno']}</td>
                    <td>{$row['uname']}</td>
                    <td id='uid'>{$row['uemail']}</td>
                    <td id='sprice'class='text-center'>{$row['uaddres']}</td>
                    <td class='text-truncate' style='max-width: 150px;'>{$row['uphone']}</td>
                    <td >{$row['ugender']}</td>
                    <td >{$row['ubrithdate']}</td>
                </tr>";
      }
      ?>
        </div>
    </div>
    </div>
    </div>

</body>

</html>