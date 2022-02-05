<?php 
include("css/_log.php"); 
include("db/_dbconnect.php");
include("css/_nav.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
</head>

<body>
    <div class="modal-dialog" role="document">
        <div class="modal-content" style=" background-color: whitesmoke;">
            <div class="modal-header">


                <h3 class="modal-title text-primary" id="exampleModalLabel">Payment option </h3>

            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <label for="" class="from-control"><b> SELECT PAYMENT TYPE:</b></label>
                    <div class="col mt-2">
                        <input type="radio" name="pay" value="pay on dilvary" class="form-group" class="i" checked> pay
                        on dilvary
                        <a href="scaner.php"> <input type="radio" name="pay" value="mobile" class="form-group" id="mp">
                            mobile pay</a>
                        <input type="radio" name="pay" value="debit credit card" class="form-group "> debit/credit card
                    </div>
                    <div class="form-control mt-2">
                        <a type="submit" href="" class="btn btn-primary" name="submit" class="ii"> done</a>
                    </div>
                    <div class="from-control bg-primary text-dark text-center">
                        <b>Rs:00</b>
                    </div>


                </form>
            </div>
        </div>

    </div>

    <script>
    function call() {

        swal({
            text: 'aal ti side',
            imageUrl: 'http://127.0.0.1/project/img/payment.jpg',
            imageSize: "350*350",
            imageAlt: 'no avilable payment',
        })
    }
    </script>
</body>

</html>