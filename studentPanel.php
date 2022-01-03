
<?php
if(isset($_POST['submit']))
{
 
$email=$_POST['email'];
$password=$_POST['password'];

require_once("conn.php");

$sql="SELECT * FROM `add_student` WHERE Email ='$email' AND Password ='$password'";
$query=mysqli_query($con ,$sql );

if(mysqli_num_rows($query))
{

  echo "<script>
  alert('Login Successfully');

 </script>";
 $sql="SELECT * FROM `add_course` WHERE Email ='$email' ";
$result = mysqli_query($con, $sql);

if ($result) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['courseName']= $row['Couse Name'] ;
     $_SESSION['courseCode']=$row['Course Code'] ;

  }

} else {
  echo "not found!";


}
}
else{
  echo '
  <script>
  alert(" Invalid User name and password");
  window.location.href = "studentLogin.php";
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
          <?php include("headerLogout.php"); ?>
      <div class="container">
        <div class="row mt-3">
    <div class="col-md-6 m-auto ">
        
    
     
        <div class=" text-center font-weight-bold font-size-15 text-success  "> <h3>Student Dashboard</h3></div>
    
    
    
    
        <table class="table">
      <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
          <th scope="col">Course Code</th>
          <th scope="col">Course Name</th>
          <th scope="col">Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $_SESSION['courseName']?></td>
          <td><?php echo  $_SESSION['courseCode'] ?></td>
          <td>N/A</td>
        </tr>
       
      </tbody>
    </table>
    
    
    </table>
   
    </body>