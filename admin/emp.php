<?php

$login=false;
$showError =false;
 include("../css/_nav2.php");
 include("../css/_log2.php");
  include("../db/_dbconnect.php");
  
  echo'<div class="contanter-fluid d-flex justify-content-center bg-light text-center">
  <form action="" method="get">
  <a href="#" type="submit" name="button2" class="btn btn-outline-secondary d-col mx-2 my-2" value="add" >Update employee</a>
  <a href="#" type="submit" name="button1" class="btn btn-outline-danger d-col mx-2 my-2" value="add" >Delete delete</a>
 
  <button type="submit" name="button" class="btn btn-outline-success d-col mx-2 my-2" value="add" > Add employee</button>
  </form>
</div>';

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES['img'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $qualifaction = $_POST['qualifaction'];
    $gender = $_POST['gender'];
    $bank_name = $_POST['bank_name'];
    $account_no = $_POST['account_no'];
    $ifsc_no = $_POST['ifsc_code'];
    $job_post = $_POST['job_post'];

    $no = "http://127.0.0.1/project/img/emp_img/";
    $file_name = $_FILES['img']['name'];
    $file_tmp = $_FILES['img']['tmp_name'];

  
    move_uploaded_file($file_tmp,"../img/emp_img/".$file_name);
  $sql="INSERT INTO emp (`name`,`address`,`phone`	,`email`,`qualification`,`post`	,`account_no`,`bank_name`,`ifaac`,`gender`,`pic`	
  ) VALUES ('$name','$address','$contact','$email','$qualifaction','$job_post','$account_no','$bank_name','$ifsc_no','$gender','".$no.$file_name."')";
  $result = mysqli_query($conn,$sql);
  if($result){
$login=true;
  }else{
    $showError = "database is not working";
  }
}
  }

?>

<?php
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



 if(isset($_GET['button'])){
   $add = $_GET['button'];
 

echo'<ul class="d-col form-control">
<div class="modal-dialog" role="document">
  <div class="modal-content" style=" background-color: whitesmoke;"> 
  <div class="modal-header">
                    <h3 class="modal-title text-info" id="exampleModalLabel">New join employee</h3>
                    
                </div>
   <div class="modal-body">
<form action="" method="post" enctype="multipart/form-data">
   
   
    <input type="text" class="form-control my-2"  aria-describedby="emailHelp"
     name="name" placeholder="Enter employee full name">

     <input type="text" class="form-control my-2" id="email" aria-describedby="emailHelp"
     name="email" placeholder="Enter email">

     <input type="text" class="form-control my-2" id="contact" aria-describedby="emailHelp"
     name="contact" placeholder="Enter contact no">

     <input type="text" class="form-control my-2" id="address" aria-describedby="emailHelp"
     name="address" placeholder="Enter address">
    
     <input type="text" class="form-control my-2" aria-describedby="emailHelp"
     name="qualifaction" placeholder="Enter qualification">
    

    <select name="gender" id="" class="form-control my-2" placeholder="Enter gender">
        <option value="" diseable="on">select gender</option>
      <option value="Male">Male</option>
      <option value="female">Female</option>
    </select>
    <div class="d-flex" >
    <label for="img" class="d-flex">import id photo</label>
    <input type="file" class="form-control my-2"  aria-describedby="emailHelp"
    name="img" placeholder="Enter bank name">
    </div>

     <input type="text" class="form-control my-2"  aria-describedby="emailHelp"
     name="bank_name" placeholder="Enter bank name">

     <input type="text" class="form-control my-2"  aria-describedby="emailHelp"
     name="account_no" placeholder="Enter bank account no">

     <input type="text" class="form-control my-2"  aria-describedby="emailHelp"
     name="ifsc_code" placeholder="Enter IFSC code">

     <select name="job_post" id="" class="form-control my-2" placeholder="Enter gender">
        <option value="" diseable="on">select post</option>
      <option value="CEO">CEO</option>
      <option value="Manger">Manger</option>
      <option value="Superviser">Superviser</option>
      <option value="H.O.D">H.O.D</option>
      <option value="Employee">Empolyee</option>
    </select>
     <button class="form-control btn btn-primary" value="submit" type="submit" name="submit">submit</button>
   
 </form>
</div>
</div>
</div>
</ul>'; 
}else{

  $login=false;
   $showError =false;
  if($_SERVER["REQUEST_METHOD"] == "POST"){
      
    $p_emp_id=$_POST['empid'];
    $submit =$_POST['submit'];
    echo $submit;
    $sql = "SELECT * FROM emp WHERE emp_id ='$p_emp_id'";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res)){
           $emp_name =$row['name'];
            $emp_post=$row['post'];
       
            if($emp_post=="CEO"){
              $emp_payment=10000;
            }elseif($emp_post=="Manger"){
                $emp_payment=8000;
            }elseif($emp_post=="Superviser"){
                 $emp_payment=500;
                 
            }elseif($emp_post==="H.O.D"){
              $emp_payment=6000;
            }elseif($emp_post=="Employee"){
              $emp_payment=400; 
            }else{
             
            } 
          if($submit=="absent"){
            $emp_payment=0;
          }
         

  $sql="INSERT INTO emp_payment (`p_emp_id`,`emp_name`,`days_payment`,`emp_post`) VALUES ('$p_emp_id','$emp_name','$emp_payment','$emp_post')";
  $result = mysqli_query($conn,$sql);
  if($result){
              $login=true;
  }else{
         $showError = "database is not working";
  }
}
}

if($login){
  echo'
  <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>success</strong>  '.$emp_name.' your account is present now.
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
 echo'
 <div class="container-fluid">
 
    <div class="modal-dialog" role="document">
       <div class="modal-content" style=" background-color: whitesmoke;"> 
          <div class="modal-header">
                   <h3 class="modal-title text-info" id="exampleModalLabel">days record employee</h3>
                  
                   
               </div>
          <div class="modal-body">
           <form action="" method="post">
               <input type="text" class="form-control my-2"  name="empid" placeholder="Enter employee id">
               <button type="submit" name="submit" class="form-control btn btn-primary my-2 " value="Presnt"  >present</button>
               <button type="submit" name="submit" class="form-control btn btn-dark my-2" value="absent" >Absent</button>
           </form> 
          </div>
        </div>
      </div> 
    <div>
 </div>
 
 
 <div class="row bg-secondary">';
  $sql = "select * from emp";
  $res = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($res)){
    $name =$row['name'];
    $img =$row['pic'];
    $emp_id= $row['emp_id'];
    echo'
    <div class="col md 4 my-2">
    <div class="card" style="width: 15rem;">
    <img src="'.$img.'" class="card-img-top" alt="..." height="200px" width="200px">
    <div class="card-body border border-3">
    <p><b>ID:-'.$emp_id.'</b></p>
      <h5 class="text-center ">'.$name.'</h5>
     
      <a href="#" class="btn btn-primary form-control my-2">view profile</a>
     
    </div>
  </div>
    </div>
    ';
    
  }
  echo'</div>';
}

?>