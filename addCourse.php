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
    
<form action="addCourse.php" method="POST">
 
    <div class=" text-center font-weight-bold font-size-15 text-success  "> <h3>Add Course</h3></div>
    <div class="mb-3">
    <label >Cource Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Course Name" required>
  </div>
  <div class="mb-3">
    <label >Course Code </label>
    <input type="text" class="form-control" name="c_code" placeholder="Enter Course Code" required>
  </div>
 
  <div class="mb-3">
    <label >Select Person</label>
    <select class="custom-select" name="s_person">
  <option value="student">Student</option>
  <option value="teacher">Teacher</option>
</select>
</div>

  <div class="mb-3">
    <label >Assigned To </label>
    <input type="text" class="form-control" name="id" placeholder="Enter Id" required>
  </div>
<button class="btn btn-success fs-3 font-weight-bold my-3 form-control" name="submit"> Add Course</button>

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



$name=$_POST['name'];
$c_code=$_POST['c_code'];
$s_person=$_POST['s_person'];
$id=$_POST['id'];

require_once("conn.php");

$sql="INSERT INTO `add_course`(`Id`, `Couse Name`, `Course Code`,`Select Person`, `Assign to`) VALUES ('','$name','$c_code','$s_person','$id')";

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