<?php 

if(isset($_GET['del']))
{
  $g = $_GET['del'];
  $a = mysqli_connect('localhost','root','usbw','m');
  $sql = "DELETE FROM`articles` WHERE `id`=$g";
  mysqli_query($a,$sql);
  echo 'jnjvel e'; 
}
?>