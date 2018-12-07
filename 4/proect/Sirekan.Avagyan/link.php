<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style type="text/css">
  .Vika
  {
    border: 3px solid;
    margin:auto;
    width: 800px;
    text-align: center;
    padding: 10px;
   
  }
  .Vika img
  {
    margin:auto;
    width: 100%;
  }
  .Vika h2
  {
    font-size: 50px;
    color:black;
  }
  .Vika h1
  {
    font-size: 40px;
  }
  .nkari_div
  {
    width: 50%;
    height: 938px;
    box-sizing:border-box;
    float:left;
  }
  
  .nkaragtutyan
  {
    float:left;
    width:50%;
    height: 938px;
    box-sizing:border-box;
    border:3px solid gray;
    border-style: dotted;
  }
  .texti_div
  {
    box-sizing:border-box;
    height: 50%;
    overflow: hidden;
  }
  .texti_div table
  {
    box-sizing:border-box;
    border:3px solid;
    text-align: left;
    font-size: 30px;
    margin: 100px auto; 
  }
  .verj
  {
    clear: left;
  }
  </style>
</head>
<body>
  <div class="main">
    <?php include 'menu.php'; ?>

<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->


    <div class="container">
      <?php
        $a = mysqli_connect('localhost','root','root','m');
        mysqli_set_charset($a,'utf8');
        $g = $_GET['id'];
        $b = "SELECT * FROM `articles` WHERE `id`='$g'";
        $query = mysqli_query($a,$b);
        $resalt = mysqli_fetch_assoc($query); 
      ?>
      <div class='Vika'>
        <div class='nkari_div'>
          <h1><?php echo $resalt['title']; ?></h1>
          <img src="<?php echo $resalt['img']; ?>">
          <h2><?php echo $resalt['subtitle']; ?></h2>
        </div>
        <div class='nkaragtutyan'>
          <div class='texti_div'>
            <p><?php echo $resalt['content']; ?></p>
          </div>
          <div class='texti_div'>
            <table>
              <tr>
                <td>erkir</td>
                <td>rusastan</td>
              </tr>
              <tr>
                <td>pitaneliutyun@</td>
                <td>Chogtagorcac</td>
              </tr>
              <tr>
                <td>patrastvac</td>
                <td>2016</td>
              </tr>
            </table>
          </div>
        </div>
        <div class='verj'>
        </div>
      </div>
    </div>


<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->


   <?php include 'footer.php'; ?>
  </div>
</body>
</html>
