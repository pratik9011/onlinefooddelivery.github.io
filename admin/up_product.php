<?php
  $login=false;
  $showError= false;
include("../css/_nav2.php");
include("../css/_log2.php");
include("../db/_dbconnect.php");


if($login){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success</strong> your account is now created and you can login.
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

$prop = $_GET['proid'];

$sql = "SELECT * FROM users1 where pid= '$prop'";  
$result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_assoc($result)){
        
           $pro = $row ['pid'];
           $price =$row['pprice'];
           $desc =$row ['pdescription'];
           $name =$row ['pname'];
           $img =$row ['img'];
           $ptype =$row ['ptype'];

        
echo '
 <div class="container">
    <div class="modal-dialog">
    <div class="modal-content" style=" background-color: whitesmoke;">
                <div class="modal-header">
                    <h3 class="modal-title text-info" id="exampleModalLabel">UPDATE PRODUCT</h3>
                    
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="d-flex justify-content-center">
                    <img src="'.$img.'" alt="" class="border border-success border-3 my-2" width="150px" height="150px">
                    </div>
                       <label>UPDATE IMAGE</label>
                         <input type="file" name="uimg" class="form-control" value="'.$img.'">
                        <input type="text" class="form-control my-2" name="pro_name" value="'.$name.'" placeholder="Product name:- ">
                        <input type="text" class="form-control my-2" name="pro_price" value="'.$price.'" placeholder="Product price:- ">
                        <input type="text" class="form-control my-2" name="pro_type" value="'.$ptype.'" placeholder="Product type:- ">
                        <input type="text" class="form-control my-2" name="pro_dec" id="" " value='.$desc.'" >
                        <button type="submit" name="submit"   class="btn btn-primary form-control">Submit</button>
                        <a class="btn btn-outline-dark form-control my-2" href="product.php">Back</a>
                    </form>
                </div>
       </div>
    </div>
</div>';
}


if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(isset($_FILES['uimg'])){
        $no = "http://127.0.0.1/project/img/product/";
        $file_name =$_FILES['uimg']['name'];
        $file_tmp =$_FILES['uimg']['tmp_name'];
        move_uploaded_file($file_tmp,"../img/product/".$file_name);   
   
 $pro_name = $_POST['pro_name'];
 $pro_price= $_POST['pro_price'];
 $pro_type = $_POST['pro_type'];
$pro_dec = $_POST['pro_dec'];

 $sql="UPDATE users1 SET pname ='$pro_name', pdescription = '$pro_dec', pprice = '$pro_price', ptype ='$pro_type', img='$no$file_name' WHERE users1.pid = '$pro'";
    $res = mysqli_query($conn, $sql);
    if($res){
               $login=true;        

    }else{
            $showError="NOT CONCTACT TO YOUR UPDATE TO DATABASE"; 
    }
}
   }else{
         $showError="<h1> not post";
        }
?>


<script>
function lert() {
    alert("update your product");
    window.location = "product.php";
}
</script>