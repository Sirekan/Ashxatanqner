<?php
  if(isset($_POST['btn']))
  {
    if(!empty($_POST['title']) && !empty($_POST['subtitle']) && !empty($_POST['img']) && !empty($_POST['text']))
    {
      $t = $_POST['title'];
      $s = $_POST['subtitle'];
      $i = $_POST['img'];
      $text = $_POST['text']; 

      $inser = mysqli_connect('localhost','root','root','m');
      $query = "INSERT INTO `articles`(`title`,`subtitle`,`img`,`content`) VALUES ('$t','$s','$i','$text')";
      mysqli_query($inser,$query);
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" type="text/css" href="style_admin.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style type="text/css">
  .from
    {
      width: 610px;
      text-align: center;
      background-color:yellow;
      border-radius:40px;
      border-radius: 4px;
      margin:0 auto;
      margin-top: 150px;
    }
  input
    {
      height: 45px;
      width: 300px;
      font-size: 18px;
      margin-bottom: 20px;
      background-color: red;
      padding-left: 30px;
      margin: auto;
    }
    table
    {
      margin: auto;
    }
    #btn
    {
      padding: 15px 30px;
      color:red;
      border-radius: 4px;
      border:none;
      background-color: green;
    }
    .form table
    {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="main">
    <?php include 'menu.php'; ?>

<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->


    <div class="container">
      <form method='post' class='from' >

        <table>
            <tr>
              <td><input type="text" name="title" placeholder="TITLE"></td>
            </tr>
            <tr>
              <td><input type="text" name="subtitle" placeholder="SUBTITLE"></td>
            </tr>
            <tr>
              <td><input type="text" name="img" placeholder="IMAGE"></td>
            </tr>
            <tr>
              <td><textarea name="text"></textarea></td>
            </tr>
            <tr>
              <td><input type="submit" name="btn" id='btn'></td>
            </tr>
      </table>

      <table border="1" cellpadding="15" class="prod_table">
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>

        <?php  
        $a = mysqli_connect('localhost','root','usbw','m');
        mysqli_set_charset($a,'utf8');
        $b = "SELECT * FROM `articles`";
        $query = mysqli_query($a,$b);
        $resalt = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $i = 0;
        while($i<count($resalt)){
        ?>
        <tr>
          <td><?php echo $resalt[$i]['title'] ?></td>
          <td><?php echo $resalt[$i]['subtitle'] ?></td>
          <td>
            <a href="d.php?del=<?php echo $resalt[$i]['id'] ?>">
            <img src="adm_images/del.png" style='width: 50px;height: 50px;'>
            </a>
          </td>
          <td>
            <a href="u.php?id=<?php echo $resalt[$i]['id'] ?>">
             <img src="adm_images/ed.jpg" style='width: 50px;height: 50px;'>
            </a>
          </td>
        </tr>

        <?php
          $i++;
        }

        ?>

        
      </table>
      </form>
    </div>


<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->


   <?php include 'footer.php'; ?>
  </div>
</body>
</html>
