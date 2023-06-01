<?php
error_reporting(0);
$servername='localhost:3306';
$username="root";
$password="";
$dbname="loan";
$conn=mysqli_connect($servername,$username,$password,$dbname);

// if(! $conn){
//     die('Does not connected: '.mysqli_connect_error());
// }
// echo 'Connected Successfully';

?>
<?php
if(isset($_POST['reg']))
{

      $fname=$_POST['Name'];
      $lname=$_POST['LName'];
      $email=$_POST['Email'];
      $number=$_POST['Number'];
      $password=$_POST['Password'];
 $query="INSERT INTO loan VALUES('$fname','$lname','$email','$number','$password')";
$data=mysqli_query($conn,$query);
// if($data){
//     echo"insert";

//  }
//  else{
//     echo"fail";
//  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
    a:hover{
        color: aquamarine;
        background-color: red;
    }
    body{
        background-color: ;
    }
</style>
<body>
     <div  style="background-color: black;" class="container-fluid">
        <div class="text-center">
    <nav  class="navbar navbar-expand-md">
        <img  style="width: 250px;"class="navbar-brand  img-fluid " src="https://preview.colorlib.com/theme/easylo/assets/img/logo/logo.png">
        <a class="navbar-brand" href="#"></a>
        <button style="color: red;background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarssss"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarssss">
            <div class="text-center">
            <ul style="text-end" class="navbar-nav">
                <li style="margin-left: 45px;color: black;" class="nav-item"><a style="color: white;font-size: 25px;font-weight: bold;"   class="nav-link" href="http://127.0.0.1:5500/Loan.html">Home</a></li>
                <li style="margin-left: 45px;color: white;" class="nav-item"><a style="color: white;font-size: 25px;font-weight: bold;"  class="nav-link" href="http://127.0.0.1:5500/about%20us.html">About-Us</a></li>
                <li style="margin-left: 45px;color: white;" class="nav-item"><a style="color: white;font-size: 25px;font-weight: bold;"   class="nav-link" href="http://127.0.0.1:5500/service.html">Services</a></li>
                <li style="margin-left: 45px;color: white;" class="nav-item"><a style="color: white;font-size: 25px;font-weight: bold;"   class="nav-link" href="#">Blog</a></li>
                <li style="margin-left: 45px;color: white;" class="nav-item"><a style="color: white;font-size: 25px;font-weight: bold;"    class="nav-link" href="#">Contact</a></li>
                <li style="margin-left: 45px;color: white;" class="nav-item"><a style="color: white;font-size: 25px;font-weight: bold;background-color: red;"  class="nav-link" href="http://localhost/php/Loan.php">Apply For Loan</a></li>
        
            
            </ul>
        </div>
        </div>
    </nav>
        </div>
    </div>
    <div style="margin-top: 80PX;" class="container">
        <div class="text-center">
        <h3 style="color: blue;">LOAN FORM</h3>
        <marquee style="font-size: 20px;color:red;">If you already have an account with us, please login at the login page.</marquee><br>
        <form method="post">
<label style="font-size: 20px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">First Name</label>
<input style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; padding: 5px;border-radius: 3px;margin-left: 5px;width: 300px;" name="Name" type="text"placeholder="Enter Your Name"><br><br>
<label style="font-size: 20px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Last-Name</label>
<input style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; padding: 5px;border-radius: 3px;margin-left: 5px;width: 300px;" name="LName" type="text"placeholder="Enter Your Last-Name"><br><br>
<label style="font-size: 20px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Your Email</label>
<input style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; padding: 5px;border-radius: 3px;margin-left: 5px;width: 300px;" name="Email" type="text"placeholder="Enter Your Email"><br><br>
<label style="font-size: 20px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">  Number</label>
<input style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; padding: 5px;border-radius: 3px;margin-left: 25px;width: 300px;" name="Number" type="number"placeholder="Enter Your Number"><br><br>
<label style="font-size: 20px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Password</label>
<input style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; padding: 5px;border-radius: 3px;margin-left: 25px;width: 300px;" name="password" type="password"placeholder="Enter Your Password"><br><br>
<h5>I have read and agree to the Privacy Policy <input style="size: 20px;" type="checkbox"></h5><br>
<input style="border:2px solid red;padding:5px;color:red;" type="submit"class="rg"value="Apply Now"name="reg">
        </form>
    </div>
    </div>
    <div style="background-color:whitesmoke;margin-top: 50px;" class="container-fluid">
        <div class="row">
            <div class="col-md-3"><br><br><br>
                <img src="https://preview.colorlib.com/theme/easylo/assets/img/logo/logo2_footer.png"><br>
                <p>Opencart Learning Management System</p>
            </div>
            <div class="col-md-3"><br><br>
                <h4 style="color: blue;">Quick Links</h4>
                <a style="text-decoration: none;color: black;font-size: 20px;" href="">Work</a><br>
                <a style="text-decoration: none;color: black;font-size: 20px;" href="">Service </a><br>
                <a style="text-decoration: none;color: black;font-size: 20px;" href="">Product</a><br>
                <a style="text-decoration: none;color: black;font-size: 20px;" href="">Tips & Tricks</a><br>

</div>       
<div class="col-md-3"><br><br>
    <h4 style="color: blue;">Solution</h4>
    <a style="text-decoration: none;color: black;font-size: 20px;" href="">Air Freight</a><br>
    <a style="text-decoration: none;color: black;font-size: 20px;" href="">Ocean Freight</a><br>
    <a style="text-decoration: none;color: black;font-size: 20px;" href="">Large Product</a><br>

</div>       
<div class="col-md-3"><br><br>
    <h4 style="color: blue;">NewsLetter</h4>
    <h4 style="color: black;">Subscribe newsletter to get updates.</h4>


</div>       
 </div>
    </div>
</body>
</html>