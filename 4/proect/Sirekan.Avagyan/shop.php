<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style type="text/css">
  .Vika
  {
    color:black;
    background-color: pink;
    padding:20px;
    margin:15px;
    width: 13.3%;
    height: 500px;
    float:left;
   border:2px solid gray;
  }
  .Vika:hover
  {
    background-color: lightgreen;
  }
  .Vika img
  {
    width: 100%;
  }
  .verj
  {
    clear: left;
  }
  .title
  {
    height: 30%;
    font-size: 30px;
  }
  .title h1
  {
    font-size: 30px;
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
  <div class="main">
    <?php include 'menu.php'; ?>
    <?php 
      $a = mysqli_connect('localhost','root','root','m');
      mysqli_set_charset($a,'utf8');
      $b = "SELECT * FROM `articles`";
      $query = mysqli_query($a,$b);
      $resalt = mysqli_fetch_all($query, MYSQLI_ASSOC);
      /*echo '<pre>';
      print_r($resalt);
      echo '</pre>'; */
    ?>
<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->


    <div class="container">
      <?php 
      $i = 0;
      while ($i < count($resalt)) 
      {
      ?>
      <a href="link.php?id=<?php echo $resalt[$i]['id']; ?>">
        <div class='Vika'>
          <div class='title'>
            <h1><?php echo $resalt[$i]['title']; ?></h1>
            <h3><?php echo $resalt[$i]['subtitle']; ?></h3>
          </div>
          <div class='image'>
            <img src="<?php echo $resalt[$i]['img']; ?>">
          </div>
          <div class='text'>
            <p><?php echo $resalt[$i]['content']; ?></p>
          </div>
        </div>
      </a>
      <?php
      $i++;
      }
      ?>
      <div class='verj'></div>
    </div>


<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->


   <?php include 'footer.php'; ?>
  </div>
</body>
</html>
