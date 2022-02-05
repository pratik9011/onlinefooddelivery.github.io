<?php  
       session_start();
       if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
         header("location: login.php");
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

    <title>Welcome - <?php  echo $_SESSION['username'];
    ?></title>
</head>

<body>
    <?php  require 'css/_nav.php' ?>






</body>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome To Food Delivary</title>
</head>

<body>

    <?php include 'partials/_dbconnect.php'  ?>

    <div class="container my-3">
        <h1 class="py-2">Searching you result <em>"<?php  echo $_GET['search'];?>"</em></h1>
        <table>
            <div class="row">
                <?php
   $search= $_GET["search"];
   $sql = "SELECT * FROM users1 WHERE MATCH(pname, pdescription, pprice, img, ptype) against ('$search')";
   $result = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_assoc($result)){
       
          $id= $row['pid'];
          $name = $row['pname'];
          $pprice = $row ['pprice'];
          $pdescription =$row['pdescription'];
          $img =$row['img'];
          $ptype =$row['ptype'];
          $pro = $id;



       echo '
              
       <div class="col md 4 my-2">
       <div class="card border border-3 border-success" style="width: 18rem; border-radius:2rem;">
           <a href="threads.php?proid='.$pro.'"><img src="'.$img.'" class="card-img-top border" height="200px" width="200px" alt="..." style="border-radius:2rem; ">
           <div class="card-body">
               <h5 class="card-title"><a class="nav-link text-primary " href="threads.php?proid='.$pro.'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
               <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
             </svg>'.$pprice.' </a></h5>
              
               <p class="card-text"></p> 
               <a  class="btn btn-outline-success" href="threads.php?proid='.$pro.'">'.$name.'</a>
           </div>
       </div>
     </div>';

        
   }

?>
            </div>
        </table>



        <!-- fech all products -->
        <?php $sql = "SELECT * FROM users1";  
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)){
  // echo $row ['srno'];
$pro = $row ['pid'];
$pprice =$row['pprice'];
$desc =$row ['pdescription'];
$name =$row ['pname'];
$img =$row ['img'];
$pprice =$row['pprice'];


// use now <h5 class="card-title"><a href="/thrades.php?catid='. $pro .'">'.$desc.' </a></h5>
 

 }

?>
        <!--  adding products-->




    </div>
    </div>
    <?php include 'partials/_footer.php' ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>