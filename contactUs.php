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
    
<form action="contactUs.php" method="POST">
 
    <div class=" text-center font-weight-bold font-size-15 text-success  "> <h3>Contact Us</h3></div>
    <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
  </div>
  <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Emial" required>
  </div>
  <div class="mb-3">
    <label >Subject</label>
    <input type="text" class="form-control" name="subject" placeholder="Enter Your Subject" required>
  </div>
  <div class="mb-3">
  <label >Message</label>
   <textarea name="message" id="" cols="70" rows="8" placeholder="Enter Your Message"></textarea>
  </div>
 
<button class="btn btn-success fs-3 font-weight-bold my-3 form-control" name="submit" type="submit"> Submit</button>

  </div>
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
</html>



<?php
if(isset($_POST['submit']))
{


        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        require_once("conn.php");
        $sql="INSERT INTO `contact_us`(`Id`, `Name`, `Email`, `Subject`, `Message`) VALUES ('','$name','$email','$subject','$message')";
        $query=mysqli_query($con ,$sql );

        if($query)
        {
            echo '
            <script>
            alert("Message has been sending successfully.");
            </script>
            ';
        }
        else
        {
            echo '
  <script>
  alert("Message not sending.");
  </script>
  ';
        }
}
?>

