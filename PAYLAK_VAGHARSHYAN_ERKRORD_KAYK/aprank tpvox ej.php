<?php
$db = mysqli_connect("localhost","root","usbw","products");
$id = $_GET['id'];
$sql = "SELECT * FROM `shop` WHERE id=$id";
$resalt = mysqli_query($db,$sql);
$arr = mysqli_fetch_assoc($resalt);
?>
<!DOCTYPE html>
<html>
<head>
  <title>PV_</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style type="text/css">
  .aprank
  {
    height: 900px;
  }
  .aprank div
  {
    box-sizing:border-box;
    float:left;
    width: 50%;
    height: 100%;
  }
  .ognox
  {
    clear: left;
  }
  img
  {
    width: 100%;
  }
  </style>
</head>
<body>
  <div class="main">
   <?php include 'logo.php'; ?>
   <?php include 'menu.php'; ?>

    <div class="container">
        <div class='aprank'>
          <div class='vernagir'>
            <h1><?php echo $arr['name']; ?></h1>
            <h3><?php echo $arr['price']; ?>$</h3>
            <img src="shopi miji nkarnern en/<?php echo $arr['img_src']; ?>">
          </div>
          <div class="text">
            <p><?php echo $arr['description']; ?></p>
          </div>
        </div>
      <div class="ognox"> 
        <?php 
          include 'nmanatip aprankner.php'; 
        ?>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
