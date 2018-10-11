<?php 
  $db = mysqli_connect("localhost","root","usbw","products");
  $id = $_GET['id'];
  $sql = "DELETE FROM `shop` WHERE `id`=$id";
  mysqli_query($db,$sql);
?>