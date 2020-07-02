<?php

if(isset($_GET['vkey'])){
    //Process Verification
    $vkey= $_GET['vkey'];

    $mysqli = mysqli_connect('localhost', 'root', '', 'multi_login');

    $resultSet=$mysqli->query("SELECT verified,vkey FROM users WHERE verified=0 AND vkey='$vkey' LIMIT 1");

    if($resultSet->num_rows == 1){
$update=$mysqli->query("UPDATE USERS SET verified=1 WHERE vkey='$vkey' LIMIT 1");

if($update){
    echo "Account verified";
}
    }
    else{
        echo "This account is invalid or already verified";
    }
}else{
    die("Something went wrong !!!");
}

?>