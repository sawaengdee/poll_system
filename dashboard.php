<?php
 session_start();
 include 'server.php';
$sql = "SELECT member.username, role.role_name FROM member INNER JOIN role ON member.id_role = role.id_role";
$result=mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

for($i=0;$i<$count;$i++){
    $row = mysqli_fetch_object($result);
    echo "index:".$i ."\t";
    echo "SESSION:".$_SESSION["username"] ."\t";
    echo $row->username ."\t";
    echo $row->role_name ."<br>";
    if($row->username ==  $_SESSION["username"] && $row->role_name == "admin"){
        echo "Admin";
    }
    if($row->username ==  $_SESSION["username"] && $row->role_name == "user"){
        echo "User";
    }
}
?>