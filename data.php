<!DOCTYPE html>
<html>
<head>
  <title>Success Page</title>
  <style>
    body {
      background-color: #f8f8f8;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .success-message {
      background-color: #28a745;
      color: #fff; 
      padding:10px;
      margin-left: 50px;
      border-radius: 5px;
      text-align: center;
      width: 200px;
    }
    a{
        color:white;
        text-decoration:none;
    }
  </style>
</head>
<body>
    <div >
<Thank>Your account has been created successfully!✔✔✔</p>
</p>
  <div class="success-message">
<a href="signin.html">Signin</a>
    </div>

</body>
</html>

<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "patel";

$con =new mysqli($host,$user,$password,$db);
if (!$con){
    echo "Error in the connection";

}
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$qry ="INSERT INTO `signup`(`username`,`email`, `password`,`confirmpassword`) VALUES ('$username','$email','$password','$confirmpassword')";
$insert = mysqli_query($con,$qry);
if(!$insert==true)
{
        echo "Error,Tryagain😢😢";

} 
else{
   ;
}
// Userdetail login credations//
$host = "localhost";
$user = "root";
$password = "";
$db = "patel";

$con =new mysqli($host,$user,$password,$db);
if (!$con){
    echo "Error in the connection";

}
$username=$_POST['username'];
$password=$_POST['password'];
$qry ="INSERT INTO `signin`(`username`, `password`) VALUES ('$username','$password')";
$insert = mysqli_query($con,$qry);
if(!$insert==true)
{
        echo "Error,Tryagain😢😢";

} 
else{
   ;
}
?>