<?php
    include 'server.php';

    $username = $_POST["username"];
    $password_1 = $_POST["password_1"];
    $password_2 = $_POST["password_2"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    $sql = "SELECT username FROM member WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (empty($username) && empty($password_1) && empty($fname) && empty($lname) && empty($email)){
        echo '<script> alert("กรอกข้อมูลไม่ครบ"); </script>';
        header("refresh:0.2; url=register.html");
    }else{
        if (empty($result) != 0){
            echo '<script>  alert("มีข้อมูลผู้ใช้นี้แล้ว");   </script>';
            header("refresh:0.2; url=register.html");
        }elseif($password_1 == $password_2){
            $sql = "INSERT INTO member (username, password, fname, lname, email,id_role)
            VALUE ('$username', '$password_1', '$fname', '$lname', '$email', 'r02');";
            if ($conn->multi_query($sql) === true){
                    echo '<script>  alert("กรอกข้อมูลสำเร็จ");   </script>';
                    header("refresh:0.2; url=login.html");
                    }
        }else{
            echo '<script>  alert("กรอกข้อมูลล้มเหลว");   </script>';
            header("refresh:0.2; url=register.html");
        }
    }
    $conn -> close();
?>