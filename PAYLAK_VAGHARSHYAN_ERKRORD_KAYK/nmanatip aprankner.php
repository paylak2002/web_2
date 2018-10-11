<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  .vika
  {
    color:black;
    padding:20px;
    margin:15px;
    width: 10%;
    height: 300px;
    float:left;
    border:3px solid;
    border-radius: 10px;
  }
  .vika:hover
  {
    background-color: lightblue;
  }
  .vika img
  {
    width: 100%;
  }
  .erj
  {
    clear: left;
  }
  .vika p
  {
    font-size: 10px;
  }
  .vika h1
  {
    font-size: 10px;
  }
  .title
  {
    height: 30%;
    font-size: 15px;
  }
  .title h1
  {
    font-size: 20px;
  }
  .image
  {
    width: 100%;
    height: 40%;
  }
  .text
  {
    overflow:hidden;
    height: 30%;
  }
  .text p
  {
    font-size: 100%;
  }
  </style>
</head>
<body>
    <?php 
      $sql = "SELECT * FROM `shop`";
      $query = mysqli_query($db,$sql);
      $resalt1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
      $ap_arr = array();
      $m = 0;
      for($j = 0;$j < count($resalt1);$j++)
      {
        if($resalt1[$j]['select'] == $arr['select'])
        {
          $ap_arr[$m] = $resalt1[$j];
          ++$m;
        }
      }
    ?>
<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->
      <?php 
      $i = 0;
      while ($i < count($ap_arr)) 
      {
      ?>
      <a href="aprank tpvox ej.php?id=<?php echo $ap_arr[$i]['id']; ?>">
        <div class='vika'>
          <div class='title'>
            <h1><?php echo $ap_arr[$i]['name']; ?></h1>
            <h3><?php echo $ap_arr[$i]['price']; ?></h3>
          </div>
          <div class='image'>
            <img src="shopi miji nkarnern en/<?php echo $ap_arr[$i]['img_src']; ?>">
          </div>
          <div class='text'>
            <p><?php echo $ap_arr[$i]['description']; ?></p>
          </div>
        </div>
      </a>
      <?php
      $i++;
      }
      ?>
      <div class='erj'></div>
</body>
</html>
