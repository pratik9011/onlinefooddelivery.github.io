<!doctype html>
<html lang="en">
<?php 
include("css/_log.php"); 
include("db/_dbconnect.php");
include("css/_nav.php");
?>
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
                <div class="d-flex text-center">
                    <div class="text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-award" viewBox="0 0 16 16">
                            <path
                                d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                        </svg>
                    </div>
                    <h3 class="modal-title text-success" id="exampleModalLabel">Successful Dilivary</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <img src="img/sd.gif" alt="" class="rounded img-fluid rounded-circle" width="200px" height="200px">
                </div>
                <div class="text-center text-success">
                 <h4>Your food  ordered </h4>
                    </h4>

                </div>
               <div class="">
             <a href="orders.php" class="btn btn-primary form-control my-2">order/print</a>
             </div>
                <div class="text-center text-warning d-col">
                    <b class="text-center text-dark">IMOROTANT INFORMATION</b>

                    <p class="text-danger"><b>1.</b>if you order cancel click in navbar contact us option and call dial in office </p>
                </div>



            </div>
        </div>

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