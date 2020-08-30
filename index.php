<?php  
  
$con = mysqli_connect('localhost','root','root');  
  
if(!$con)  
{  
    echo 'not connect to the server';  
}  
if(!mysqli_select_db($con,'myinfo'))  
{  
    echo 'database not selected';  
}  
  
$name = $_POST['name'];  
$email = $_POST['email'];
$message = $_POST['message'];   
  
$sql = "INSERT INTO service (name,email,message) VALUES
 ('$name','$email','$message')";  
  
if(!mysqli_query($con,$sql))  
{  
    echo 'Not inserted';  
}  
else  
{  
    echo 'Data Inserted';  
}  
header("refresh:3; url=index.html")  
?>  