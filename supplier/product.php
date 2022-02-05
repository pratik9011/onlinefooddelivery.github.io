<?php
include("../css/_nav2.php");
include("../db/_dbconnect.php");
include("../css/_log2.php");
?>

<html>
<title></title>
<!-- model form add product -->

<form method="post" enctype="multipart/form-data">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>

    </div>
    <div class="modal-body">
        <div class="row row-col-2">
            <div class="col-6">
                <div class="col">
                    <div class="col">
                        <label>PRODUCT NAME</label>
                    </div>
                    <div class="col">
                        <input type="text" name="pname" id="pname" class="form-control">
                    </div>
                    <div class="col">
                        <label>Food Type</label>
                    </div>
                    <div class="col">
                        <select name="ptype" id="ptype" class="form-control">
                            <option disabled> Select</option>
                            <option value=""> </option>
                            <option value="veg">Veg </option>
                            <option value="non-veg">NON Veg</option>
                            <option value="south foods">South Foods</option>
                            <option value="snack">Bakery Food</option>
                            <!-- <option value="Cleaners"></option>
                                            <option value="Paper Goods"> </option>
                                            <option value="Other"> </option>-->
                        </select>
                    </div>
                    <div class="col mt-2 text-center">
                            <input type="time" name="time" id="time" class="form-control my-2">
                        </div>

                </div>
            </div>
            <div class="col-6">
                <div class="col">
                    <div class="col">
                        <label>PRODUCT PRICE</label>
                    </div>
                    <div class="col">
                        <input type="number" name="pprice" id="pprice" class="form-control">

                        <div class="col">
                            <label>PRODUCT DESCRIPTION</label>
                        </div>
                        <div class="col">
                            <textarea name="pdescription" id="pdescription" cols="40" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col">
                            <label>UPLOAD IMAGE</label>
                        </div>
                        <div class="col mt-2 text-center">
                            <input type="file" name="img" id="img" class="form-control">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addproduct" class="btn btn-primary">Save changes</button>
        </div>
</form>
</div>
</div>
</div>
</div>

</html>

<!-- open php braket --><?php
$sqli="SELECT pid FROM  users1 ORDER BY pid";
$sqli_q= mysqli_query($conn, $sqli);

$count = mysqli_num_rows($sqli_q);


    $sql = "select * from users1";
    $res = mysqli_query($conn,$sql);
    echo "
    <table class='table table-bordered table-hovermt-2 mt-3'>
    <thead class='text-center'>
    
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>TYPE</th>
            <th scope='col'>Name</th>
            
            <th scope='col'>Price</th>
            
            
            
            <th scope='col'>Product Description</th>
            <th scope='col'>IMAGE</th>
            <th scope='col'>STOCK</th>
            <th scope='col'>CHANGE</th>
            
        </tr>
    </thead>";
    echo "<b>TOTAL PRODUCTS $count</b><br>";
    while($row = mysqli_fetch_assoc($res)){
        $proid= $row['pid'];
        $avli=$row['avli'];
       echo "<tr >
                    <td >{$row['pid']}</td>
                    <td>{$row['ptype']}</td>
                    <td id='uid'>{$row['pname']}</td>
                    
                    <td id='sprice'class='text-center'>{$row['pprice']}</td>
                    
                    
                    
                    <td class='text-truncate' style='max-width: 150px;'>{$row['pdescription']}</td>
                    <td class='text-center'><div class=''><img src='{$row['img']}' style='width: 5rem;'class='my-lg-0 my-sm-0 img-fluid'></div></td>";
                   echo'<td class="text-center"><a type="submit" class="btn btn-success" href="noavli.php?proid='.$proid.'">+'.$avli.'</a></td>
                   <td class="text-center"><a type="submit" class="btn btn-primary" href="up_product.php?proid='.$proid.'">UPDATE</a></td>
                    
                </tr>';
      }

if(isset($_POST['addproduct'])){
    if(isset($_FILES['img'])){
        $pname = $_POST['pname'];
        $uid = uniqid();
        $pprice = $_POST['pprice'];
        $time =$_POST['time'];
        
        
        $pdescription = $_POST['pdescription'];
        $ptype = $_POST['ptype'];
        $no = "http://127.0.0.1/project/img/product/";
        $file_name = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($file_tmp,"../img/product/".$file_name);
        $sql="INSERT into users1 values(DEFAULT,DEFAULT,'".$pname."', '".$pprice."', '".$pdescription."', '".$no.$file_name."', '".$ptype."',DEFAULT,'".$time."')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "<script>alert(Some error occured";
        }else{
            echo  "<script>alert('Inserted new record successfully..!')</script>";
        }
    }
}
?>