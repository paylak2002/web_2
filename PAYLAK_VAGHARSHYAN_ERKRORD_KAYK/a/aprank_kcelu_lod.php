<?php 
  $db = mysqli_connect("localhost","root","usbw","products");
  if(isset($_POST['btn']))
  {
    $select = $_POST['tesak'];
    $anun = $_POST['anun'];
    $gin = $_POST['gin'];
    $nkar = $_FILES['nkar']['name'];
    $text = $_POST['text'];
    $sql = "INSERT INTO `shop`(`name`,`price`,`img_src`,`description`,`select`) VALUES ('$anun',$gin,'$nkar','$text',$select)";
    mysqli_query($db,$sql);  
    move_uploaded_file($_FILES['nkar']['tmp_name'],"../shopi miji nkarnern en/".$nkar);
  }
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  input
  {
    width: 200px;
    height: 25px;
  }
  td,table
  {
    border:3px solid;
  }
  </style>
</head>
<body>
  <div class="main">
        <form method="post" class="Plo" enctype="multipart/form-data">
              <select name='tesak'>
                <option value='1'>ELEKTRAKAN APRANK</option>
                <option value='2'>HAGUST</option>
                <option value='3'>ANSHARJ_GUYK</option>
              </select><br><br>
              <input type="text" name="anun"><br><br>
              <input type="number" name="gin"><br><br>
              <input type="file" name="nkar"><br><br>
              <textarea name="text"></textarea><br><br>
              <input type="submit" name="btn" value="Add"><br><br>
        </form>
        <table>
          <tr>
            <td>NAME</td>
            <td>price</td>
            <td>delete</td>
            <td>update</td>
          </tr>
          <?php
          $sql = "SELECT * FROM `shop`";
          $query = mysqli_query($db,$sql);
          $arr = mysqli_fetch_all($query,MYSQLI_ASSOC);  
          for($i = 0;$i < count($arr);$i++)
          {
          ?>
          <tr>
            <td><?php echo $arr[$i]['name']; ?></td>
            <td><?php echo $arr[$i]['price']; ?></td>
            <td><a href="jnjelu_kod.php?id=<?php echo $arr[$i]['id'] ?>">DELETE</a></td>
            <td><a href="popoxelu_kod.php?id=<?php echo $arr[$i]['id'] ?>">UPDATE</a></td>
          </tr>
          <?php
          } 
          ?>
        </table>
  </div>
</body>
</html>
