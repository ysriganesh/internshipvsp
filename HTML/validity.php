<?php
if($_POST)
{
    $host = 'localhost';  

    $user = 'root';  

    $pass = '';  

    $dbname = 'member';
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    
    $conn=mysqli_connect($host,$user,$pass,$dbname);

    $query="SELECT * from new where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['auth']='true';
        header('location:Adminpage.html');
    }
    else
    {
        echo 'wrong user or password';
    }
}
?>