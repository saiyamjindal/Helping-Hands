<?php
$hostname="localhost";
$db_user="root";
$db_pass="";
$db_name="sample";

$connection=mysqli_connect($hostname, $db_user, $db_pass, $db_name);
if(mysqli_connect_errno()){
    die("Error connecting to the Database");
}

$visitor_ip=$_SERVER['REMOTE_ADDR'];

$query="SELECT * FROM counter_table WHERE ip_address='$visitor_ip' ";
$result=mysqli_query($connection, $query);

if(!$result){
die("Retriving Query Error<br>".$query);
}
$total_visitors=mysqli_num_rows($result);
if($total_visitors<1){
    $query="INSERT INTO counter_table(ip_address) VALUES('$visitor_ip') ";
$result=mysqli_query($connection, $query);
}


$query="SELECT * FROM counter_table";
$result=mysqli_query($connection, $query);

if(!$result){
die("Retriving Query Error<br>".$query);
}
$total_visitors=mysqli_num_rows($result);


?>
<html>
    <head>
<style>
   
    </style>
</head>
<body>
    <div class="wrapper">
    <h1>Visitor Count</h1>
    <h3><?php echo $total_visitors; ?></h3>
</div>
</body>
</html>