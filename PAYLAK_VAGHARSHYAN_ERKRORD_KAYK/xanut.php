<?php
$db = mysqli_connect("localhost","root","usbw","products");
$sql = "SELECT * FROM `shop`";
$resalt = mysqli_query($db,$sql);
$arr = mysqli_fetch_all($resalt,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <title>PV_</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style type="text/css">
  .aprank
  {
    width: 15%;
    height: 500px;
    float: left;
    color:black;
    margin:10px;
  }
  .aprank img 
  {
    width: 100%;
  } 
  .ognox
  {
    clear: left;
  }
  .text
  {
    overflow: hidden;
  }
  .nkar
  {
    height: 40%;
  }
  .text,.vernagir
  {
    height: 25%;
  }
  .text p
  {
    font-size: 20px;
  }
  .aprank:hover
  {
    background-color: lightblue;
  }
  </style>
</head>
<body>
  <div class="main">
   <?php include 'logo.php'; ?>
   <?php include 'menu.php'; ?>

    <div class="container">
      <?php 
      for($i = 0;$i < count($arr);$i++)
      {
      ?>
      <a href="aprank tpvox ej.php?id=<?php echo $arr[$i]['id']; ?>">
        <div class='aprank'>
          <div class='vernagir'>
            <h1 style='font-size:30px;'><?php echo $arr[$i]['name']; ?></h1>
            <h3><?php echo $arr[$i]['price']; ?>$</h3>
          </div>
          <div class='nkar'>
            <img src="shopi miji nkarnern en/<?php echo $arr[$i]['img_src']; ?>">
          </div>
          <div class="text">
            <p><?php echo $arr[$i]['description']; ?></p>
          </div>
        </div>
      </a>
      <?php
      } 
      ?> 
      <div class="ognox"></div>
    </div>


<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->


    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
