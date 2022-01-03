<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!--  Bootstrap css cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- font awesome cdn  -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>


<?php include("header.php"); ?>
<body class="bg-light">

    <!-- Add product form -->
<div class="container">
    <div class="row mt-3">
<div class="col-md-6 m-auto ">
    
<form action="addTeacher.php" method="POST">
 
    <div class=" text-center font-weight-bold font-size-15 text-success  "> <h3>Add Teacher</h3></div>
    <div class="mb-3">
    <label >Teacher Name </label>
    <input type="text" class="form-control" name="t_name" placeholder="Enter Teacher Name" required>
  </div>
  <div class="mb-3">
    <label >Father Name </label>
    <input type="text" class="form-control" name="t_f_name" placeholder="Enter Father Name" required>
  </div>
  <div class="mb-3">
    <label >Teacher Id </label>
    <input type="number" class="form-control" name="t_id" placeholder="Enter Teacher Id" required>
  </div>
  <div class="mb-3">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
  </div>

  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
  </div>
 
  <div class="mb-3">
    <label >Confirm Password</label>
    <input type="password" class="form-control" name="c_password" placeholder="Enter confirm password" required>
  </div>
<button class="btn btn-success fs-3 font-weight-bold my-3 form-control" name="submit"> Add Teacher</button>

  </div>
</form>

</div>
    </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>



<?php 
if(isset($_POST['submit']))
{



$s_name=$_POST['t_name'];
$t_f_name=$_POST['t_f_name'];
$t_id=$_POST['t_id'];
$email=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];

require_once("conn.php");

$sql="INSERT INTO `add_teacher`(`Id`, `Teacher Name`, `Father Name`, `Teacher Id`, `Email`, `Password`, `Confirm Password`) VALUES ('','$s_name','$t_f_name','$t_id','$email','$password','$c_password')";

$query= mysqli_query($con,$sql);
echo "query inserted ";
if($query)
{

  echo "Data inserted Successfully";
}
else{
  echo "Data not inserted";
}

}



?>