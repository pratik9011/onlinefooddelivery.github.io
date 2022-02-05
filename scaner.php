<?php 
include("css/_log.php"); 
include("db/_dbconnect.php");
$payid = $_GET['paid'];
$uname=$_SESSION['username'];
 $sql = "SELECT * FROM buy WHERE  payid ='$payid'";
 $result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
  $total=$row['t_pay'];
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

    <title>payment sacner!</title>
</head>

<body>
    <div class="modal-dialog" role="document">
        <div class="modal-content" style=" background-color: whitesmoke;">
            <div class="modal-header">


                <h3 class="modal-title text-primary" id="exampleModalLabel">QR.CODE Payment </h3>

            </div>
            <div class="modal-body">
                <?php echo'<a class="btn btn-warning form-control my-2  href="paytaype.php?paid='.$payid.'"">Total pay'.$total.'</a>';?>

                <img src="img/payment.png" alt="" width="450px" height="500px" class="rounded img-fluid">

            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script>
        function greet() {
            let a = confirm("Your payment is succesful");
            let img = document.getElementById('mp');
            console.log(a, img);


        }
        setTimeout(greet, 3000);

        function page() {
            window.location = "mpay.php";
        }
        setTimeout(page, 6000);
        </script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>