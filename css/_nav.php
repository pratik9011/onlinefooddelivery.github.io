<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="_style.css">
</head>

<body>
    <?php
   include("./db/_dbconnect.php");
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
    $un =$_SESSION['username'];
    $sql="SELECT * FROM users WHERE username='.$un.'";
    $res= mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
       $row['uimg'];
    }
  } 
  else{
    $loggedin = false;
  }
  echo'
  <nav class="navbar navbar-success bg-light" style="border-radius:10px;">
  <div class="container-fluid">
  
    <a class="navbar-brand" href="#">
      Online Food Delivary
    </a>
   <ul>  <a class="navbar-brand" href="about.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
   <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
   <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
 </svg>About Us</a>
     <a class="navbar-brand" href="contact.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
     <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
   </svg>Contact Us</a>
   <a class="navbar-brand" href="about.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
   <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
   <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
 </svg> Help</a>
 
   </ul>
    
    


  </div>
 
</nav>';
  
echo' <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="border-radius:10px;">
  <div class="container-fluid">';
 
  if($loggedin){
    echo'<div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     <li class="nav-item d-flex justify-content-end">
       <a class=" nav-link" aria-current="page" href="profile.php">'.$un.'</a>
     </li>';}
   
     if($loggedin){
    
    echo'  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class=" mx-2 nav-link" aria-current="page" href="index.php">Home</a>
        </li>';}
  
       
        if($loggedin){
          echo'
          <li class="nav-item">
          <a class=" mx-2 nav-link" href="orders.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class=" mx-2 nav-link" href="logout.php">Logout</a>
        </li>';
        }
  if($loggedin){
        echo'
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <form class="" method="get" action="search.php">
      <div class="d-flex justify-content-end">
        <input class="form-control me-2 d-flex justify-content-end" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light d-flex justify-content-end" type="submit">Search</button>
        </div>
      </form>
      </ul>';}
     
   echo' </div>
  </div>
</nav>';
    ?>
    <img src="" alt="" width="" height="">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
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