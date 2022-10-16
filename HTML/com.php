<?php  

$host = 'localhost';  

$user = 'root';  

$pass = '';  

$dbname = 'furnac';  

$conn = mysqli_connect($host, $user, $pass,$dbname);  

if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  

echo 'Connected successfully<br/>'; 

$date = $_POST['date'] ;
$BFNUMBER = $_POST['BFNUMBER'] ;
$EMPNUMBER = $_POST['EMPNUMBER'] ;
$EMPNAME = $_POST['EMPNAME'] ;
$SHIFT = $_POST['SHIFT'] ;
$STATUS = $_POST['STATUS'] ;
$COMPLAINT = $_POST['COMPLAINT'] ;

$sql = "INSERT INTO error VALUES ('$date' , '$BFNUMBER' , '$EMPNUMBER' , '$EMPNAME' , '$SHIFT' ,'$STATUS' , '$COMPLAINT')" ;

if(mysqli_query($conn, $sql)){  

 echo "Record inserted successfully";  

}else{  

echo "Could not insert record: ". mysqli_error($conn);  

}  

mysqli_close($conn);  

?>  