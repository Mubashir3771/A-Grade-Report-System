<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 <?php include("header.php"); ?>
  <div class="container">
    <div class="row mt-3">
<div class="col-md-6 m-auto ">
     
<div class=" text-center font-weight-bold font-size-15 text-success  "> <h3>Login</h3></div>

<form action="adminPanel.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
    </div>
</div>


<div class="container-fluid pb-0 mb-0 justify-content-center text-white bg-dark ">
        <footer>
            <div class="row my-5 justify-content-center py-5">
                <div class="col-11">
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                          <h1 class="mb-3 mb-lg-4 bold-text "><b>A Grade Report System</b></h1>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                            <h5 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h5>
                            <ul class="list-unstyled">
                                <li>Home</li>
                                <li>About</li>
                                <li>Blog</li>
                                <li>Portfolio</li>
                            </ul>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                          <h5 class="mb-3 mb-lg-4 bold-text "><b>Contact Us</b></h5>
                            <p class="mb-1 bold-text">Mubashir Bashir</p>
                            <p>mubashir.bsse3771@iiu.edu.pk</p>
                            <p class="mb-1 bold-text">Rizwan Shaheen</p>
                            <p>rizwan.bsse3784@iiu.edu.pk</p>
                            <p class="mb-1 bold-text">Tassawar Abbas</p>
                            <p>tassawar.bsse3871@iiu.edu.pk</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

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
  window.location.href='./adminPanel.php';
 </script>";

}
else{
  echo '
  <script>
  alert(" Invalid User name and password");
  </script>
  ';
}



}




?>