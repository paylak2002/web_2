<?php 
  $db = mysqli_connect("localhost","root","usbw","products");
  $id = $_GET['id'];
  $sql = "SELECT * FROM `shop` WHERE `id`=$id";
  $query = mysqli_query($db,$sql);
  $arr = mysqli_fetch_assoc($query);
?>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="popoxum irakanacnox sayt.php" method="post" enctype="multipart/form-data">
    <input hidden type="number" name="id" value='<?php echo $arr['id'] ?>'><br><br>
    <input type="text" name="anun" value='<?php echo $arr['name'] ?>'><br><br>
    <input type="number" name="gin" value='<?php echo $arr['price'] ?>'><br><br>
    <input type="file" name="nkar"  value='<?php echo $arr['img_src'] ?>'><br><br>
    <textarea name="text"><?php echo $arr['description'] ?></textarea><br><br>
    <input type="submit" name="btn" value="Add">
  </form>
</body>
</html>