<?php
if(isset($_POST['submit']))
{
 
$email=$_POST['email'];
$password=$_POST['password'];

require_once("conn.php");

$sql="SELECT * FROM `admin` WHERE Email ='$email' AND Password ='$password'";
$query=mysqli_query($con ,$sql );

if(mysqli_num_rows($query))
{

  echo "<script>
  alert('Login Successfully');
  </script>
  ";


}
else{
  echo '
  <script>
  alert(" Invalid User name and password");
  window.location.href = "adminLogin.php";
  </script>
  ';
}



}




?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- 
java script cdn -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
  

    
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand text-white" href="#">A Grade Report System</a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contactUs.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php">Logout</a>
          </li>
        
         
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    

  <div class="container">
    <div class="row mt-3">
<div class="col-md-6 m-auto ">
    

 
    <div class=" text-center font-weight-bold font-size-15 text-success  "> <h3>Admin Panel</h3></div>

<!-- header -->
<ul class="nav nav-tabs bg-dark ">
        <li class="nav-item">
          <a class="nav-link text-white " href="addStudent.php">Add Student</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white" href="addTeacher.php">Add Teacher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="addCourse.php">Add Course</a>
        </li>
       


    </div>
    </div>
</div>

<?php ("footer.php");?>
</body>