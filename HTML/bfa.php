<?php
if($_POST)
{
    $host = 'localhost';  

    $user = 'root';  

    $pass = '';  

    $dbname = 'member';
    
    $USERNAME=$_POST['USERNAME'];
    $PASSWORD=$_POST['PASSWORD'];
    
    
    $conn=mysqli_connect($host,$user,$pass,$dbname);

    $query="SELECT * from bfa where USERNAME='$USERNAME' and PASSWORD='$PASSWORD'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['auth']='true';
        header('location:login.php');
    }
    else
    {
        echo 'wrong user or password';
    }
}
?>