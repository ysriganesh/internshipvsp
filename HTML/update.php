<?php  

$host = 'localhost';  

$user = 'root';  

$pass = '';  

$dbname = 'member';  

$conn = mysqli_connect($host, $user, $pass,$dbname);  

if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  

echo 'Connected successfully<br/>'; 

$username = $_POST['username'] ;
$DEPARTMENT = $_POST['DEPARTMENT'] ;
$EmployeeNumber =$_POST['EmployeeNumber'] ;
$email = $_POST['email'] ;
$password = $_POST['password'] ;

$sql = "INSERT INTO new VALUES ('$username' , '$DEPARTMENT' , '$EmployeeNumber' , '$email' , '$password')";
if(mysqli_query($conn, $sql)){  

 echo "Record inserted successfully";  

}else{  

echo "Could not insert record: ". mysqli_error($conn);  

}  

mysqli_close($conn);  

?>  