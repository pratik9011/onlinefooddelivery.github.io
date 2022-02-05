<!-- button -->
<input type="sumit" value="submit" name="submit" class="btn btn-primary form-control">
<!-- irsert -->
$sql="INSERT INTO buy (`busername`, `uquntity`, `baddress`, `buytime`,`pname`,`bprice`,`t_pay`,`p_type`) VALUES
('$uname', '$quntity', '$address', current_timestamp(),'$pname','$price','$total','$pay');";
$result = mysqli_query($conn,$sql);
if($result){

<div class="d-flex justify-content-between">
    <div></div>
    <div></div>
    <div></div>
</div>