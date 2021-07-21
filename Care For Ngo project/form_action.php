<?php
session_start();
$emailid=$_POST["emailid"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpass"];
if($password!=$confirmpassword)
{
header("location:form.php?error=1");
}
else
{
$conn = mysqli_connect("localhost","root","","wdl");
$query="INSERT INTO register(firstname,lastname,emailid,gender,password) values('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["emailid"]."','".$_POST["gender"]."','".$_POST["password"]."')";
$result=mysqli_query($conn,$query);
if($result)
{
  $stmt = mysqli_query($conn, "SELECT * FROM register WHERE emailid = '$emailid' AND password = '$password'");
  if(mysqli_num_rows($stmt) > 0){
    $row = mysqli_fetch_assoc($stmt);
    $_SESSION["uid"] = $row["uid"];
    $_SESSION["firstname"]=$row['firstname'];
    $_SESSION["is_logged_in"] = true;
    header("location:index.php");
    return;
}
}
else
{
    echo "Record Insertion Failed";
}
}
?>
