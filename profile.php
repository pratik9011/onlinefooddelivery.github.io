<?php
include('css/_log.php');
include('css/_nav.php');



include('db/_dbconnect.php');
    
        $u = $_SESSION['username'];
        $sql = "SELECT * FROM users WHERE username = '".$u."'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){

                $id=$row['srno'];
?>
<html>

<body>
    <div class="d-flex text-center bg-light my-2">

        <?php echo'<a type="submit" class="btn btn-outline-success text-center mx-2" href="cpass.php?uid='.$id.'">Change password</a>';?>

        <?php echo'<a type="submit" class="btn btn-outline-primary  text-center mx-2" href="update.php?uid='.$id.'">UPDATE PROFILE</a>';?>

        <?php echo' <a class="btn btn-outline-danger mx-2" onclick="deleat()" href="deleat.php?uid='.$id.'" role="button">DELETE PROFILE</a>';?>
    </div>
    <div class="container-fluid row-col-2">
        <div class="row row-col-2 ml-2">
            <div class="col-3">
                <div class="col-md-6 ml-5 mt-5 text-center">
                    <?php echo'<img src="'.$row['uimg'].'" class="rounded" width="50%" alt="No profile update" style="border-radius: 74px; border: solid skyblue;">'; ?>
                </div>
                <dl class="row">
                    <dt class="col-sm-5 mt-3">USER NAME</dt>
                    <dd class="col-sm-7 mt-3"><?php echo $row['username'];?></dd>

                    <dt class="col-sm-5 mt-3">FULL NAME</dt>
                    <dd class="col-sm-7 mt-3"><?php echo $row['uname'];?></dd>



                    <dt class="col-sm-5 mt-3">uemail ID</dt>
                    <dd class="col-sm-7 mt-3"><?php echo $row['uemail'];?></dd>

                    <dt class="col-sm-5 mt-3">ADDRESS</dt>
                    <dd class="col-sm-7 mt-3"><?php echo $row['uaddres'];?></dd>

                    <dt class="col-sm-5 mt-3">PHONE NUMBER</dt>
                    <dd class="col-sm-7 mt-3"><?php echo $row['uphone'];?></dd>

                    <dt class="col-sm-5 mt-3">GENDER</dt>
                    <dd class="col-sm-7 mt-3"><?php echo $row['ugender'];?></dd>

                    <dt class="col-sm-5 mt-3">Date of Birth</dt>
                    <dd class="col-sm-7 mt-3"><?php echo $row['ubrithdate'];?></dd>
                </dl>

            </div>
        </div>
        <div class="col mt-5">
            <div class="card-deck">


            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- UPDATE USER INFORMATION Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-info" id="exampleModalLabel">UPDATE</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="col mt-2 text-center">
                            <img src="<?php echo $row['photo'];?>" class="rounded-circle " width="40px" height="40px">
                            <input type="file" name="image" id="image" value="<?php echo $row['photo'];?>">
                        </div>
                        <div class="col mt-2">
                            <input type="text" name="username" id="p_username" class="form-control "
                                value="<?php echo $row['username'];?>" disabled>
                        </div>
                        <div class="col mt-2">
                            <input type="uemail" name="uemail" id="uemail" class="form-control"
                                value="<?php echo $row['uemail'];?>">
                        </div>
                        <div class="col mt-2">
                            <input type="text" name="add" id="add" class="form-control"
                                value="<?php echo $row['uaddres'];?>">
                        </div>
                        <div class="col mt-2">
                            <input type="tel" name="mnumber" id="mnumber" class="form-control"
                                value="<?php echo $row['uphone'];?>">
                        </div>
                        <div class="col mt-2">
                            <input type="text" name="qualification" id="quali" class="form-control"
                                value="<?php //echo $row['qualification'];?>">
                        </div>
                        <div class="col mt-2">
                            <input type="text" name="password" id="pass" class="form-control"
                                value="<?php echo $row['password'];?>">
                        </div>
                        <div class="col mt-2">
                            Male <input type="radio" name="gender" value="Male" class="form-group" checked>
                            Female <input type="radio" name="gender" value="Female" class="form-group">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" id="save-change" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
            }
        }
    echo "</table></div>";
    
?>

<?php
if(isset($_SESSION['username'])){
        if(isset($_FILES['img'])){
            $no = "http://127.0.0.1/project/img/profile_img/";
            $pass = $_POST['password'];
            $uemail = $_POST['uemail'];
            $pno = $_POST['uphone'];
            $file_name = $_FILES['img']['name'];
            $file_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($file_tmp,"../img/profile_img/".$file_name);
            $sql="UPDATE users SET photo='".$no.$file_name."',users.password='".$pass."',uemail='".$uemail."',uphone='".$pno."',users.uaddres='".$add."' WHERE username='".$u."'";
            $result=mysqli_query($conn,$sql);
            if(!$result){
                echo "Some error occured";
            }else{
                echo  "<script>swal('Good job!', 'Updated information successfully..!', 'success');</script>";
                echo "<script> location.href='http://127.0.0.1/project/home/'</script>";
            }
        }
    }
?>
<script>
function deleat() {
    let a = confirm("You have delete account");
}
</script>