<!doctype html>
<html lang="en">
<?php  
       include("css/_log.php");

?>
 <?php  include 'css/_nav.php';  ?>
    <?php include 'partials/_dbconnect.php'  ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome To Food Delivary</title>
</head>

<body style=" background:url('img/bg1.jpg');">
   

    <?php  
    
    
           
    

      $id = $_GET['proid'];
      $sql = "SELECT * FROM users1 WHERE pid=$id";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
          
             $pid =$row['pid'];
             $pname = $row['pname'];
             $pprice = $row ['pprice'];
             $pdescription =$row['pdescription'];
             $img =$row['img'];
             $ptype =$row['ptype'];
      }
    
    
    ?>
    <!-- slide img -->
    <div class="container my-4">

        <div class="jumbotron border border-success border-3 bg-light" style="border-radius:2rem;">
            <div class="card-body">
                <h3 class="display-4">You are Ordering <?php echo $pname; ?> </h3>

                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img;  ?>" class="card-img-top border border-success border-3 my-2" alt="...">

                </div>
                <p class="lead text-center bg-secondary"> describtion:<?php echo $pdescription; ?> </p>
                <hr class="my-4">
                <p>
                <h5> RS: <?php  echo $pprice;?></h5>
                </p>
                <?php echo' <a class="btn btn-outline-success btn-lg" href="order.php?proid='.$id.'" role="button">Order Now</a>
    </div>'; ?>







            </div>
            <?php include 'partials/_footer.php' ?>


            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous">
            </script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>