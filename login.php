<?php
    include 'server.php';
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "SELECT username, password FROM member WHERE username='$username' && password='$password'";
    $result=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if ($count == 0){
         echo '<script>  alert("ไม่พบข้อมูลผู้ใช้");   </script>';
         header('refresh:0.2; url=login.html');
    }else{
          $_SESSION["username"] = $username;
          header('refresh:0.2; url=dashboard.php');
    }
    $conn -> close();
?>