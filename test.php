<?php
include 'server.php';

$sql = "SELECT member.username, role.role_name FROM member INNER JOIN role";
$result=mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

for($i=0;$i<$count;$i++){
    $row = mysqli_fetch_object($result);
    echo $row->username ;
    echo $row->role_name .'<br>';
}
print_r ($result);
?>