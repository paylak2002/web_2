<?php 
  $db = mysqli_connect("localhost","root","usbw","products");
  $id = $_POST['id'];
  if($_FILES['nkar']['name'])
  {
    $anun = $_POST['anun'];
    $gin = $_POST['gin'];
    $nkar = $_FILES['nkar']['name'];
    $text = $_POST['text'];
    $sql = "UPDATE `shop` SET `name`='$anun',`price`=$gin,`img_src`='$nkar',`description`='$text' WHERE id=$id";
    move_uploaded_file($_FILES['nkar']['tmp_name'],"../shopi miji nkarnern en/".$nkar);
  }
  else
  {
    $anun = $_POST['anun'];
    $gin = $_POST['gin'];
    $text = $_POST['text'];
    $sql = "UPDATE `shop` SET `name`='$anun',`price`=$gin,`description`='$text' WHERE id=$id";
  }
  mysqli_query($db,$sql);
?>