<?php
$db = mysqli_connect("localhost", "root", "", "photos");
$msg="";
if (isset($_POST['upload'])){
    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $target = "images/".basename($image);
    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
mysqli_query($db, $sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}
}
$result = mysqli_query($db, "SELECT * FROM images");

?>




<html>
    <head>
        <title>Upload Image</title>
</head>
<body>
<div id="content">
    <?php
while ($row = mysqli_fetch_array($result)){
    echo "<div id='img_div'>";
    echo "<img src='images/".$row['image']." ' height='200px' width='300px'>";
    echo "<p>".$row['image_text']."</p>";
    echo "</div>";
}
    ?>
    <form method="POST" action="image.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
        <input type="file" name="image">
</div>
<div>
    <textarea name="image_text" id="text" cols="40" rows="4" placeholder="Message"></textarea>
</div>
<div>
    <button type="submit" name="upload" value="upload image">POST</button>
</div> 
</form>
</body>
</html>