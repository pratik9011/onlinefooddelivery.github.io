 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


     <?php
      include('_log.php');
       $_SESSION['username'];
    echo' </head>
       
  <body>
   
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Food delivery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../admin/index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../admin/product.php">Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/user.php">View User</a>
        </li>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../admin/emp.php">Employee mangement</a>
      </li>

        <li class="nav-item">
          <a class="nav-link" href="../admin/buy.php">View Orders</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../admin/order.php">Admin dashbord</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/logout.php">Logout</a>
        </li>
        
       
    
       
      </ul>
      <form class="d-flex justify-content-end" method="get" action="search.php">
        <input class="form-control me-2 " name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>'; ?>

 </html>