<?php 
  $a = mysqli_connect('localhost','root','root','m');
  $id = $_POST['id'];
  if($_POST['img'])
  {
  	$t = $_POST['title'];
	  $s = $_POST['subtitle'];
	  $i = $_POST['img'];
	  $text = $_POST['text'];
    echo $t.$s.$i.$text;
  }
  else
  {
  	$t = $_POST['title'];
	  $s = $_POST['subtitle'];
	  $text = $_POST['text'];
  }
  $sql = "UPDATE `articles` 
  SET 
    `title`='$t', 
    `subtitle`='$s', 
    `img`='$i',
    `content`='$text' 
  WHERE 
    `id`=$id";
  mysqli_query($a,$sql);
?>