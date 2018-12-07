<?php 
  $a = mysqli_connect('localhost','root','usbw','m');
  $id = $_GET['id'];
  $sql1 = "SELECT * FROM `articles` WHERE `id`=$id";
  $result = mysqli_query($a,$sql1);
  $arr = mysqli_fetch_assoc($result);
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
      <form action='edit.php' method='post' class='from'>

        <table>
            <tr>
              <td><input type="text" name="id" placeholder="ID" value="<?php echo $arr['id']; ?>"></td>
            </tr>
            <tr>
              <td><input type="text" name="title" placeholder="TITLE" value="<?php echo $arr['title']; ?>"></td>
            </tr>
            <tr>
              <td><input type="text" name="subtitle" placeholder="SUBTITLE" value="<?php echo $arr['subtitle']; ?>"></td>
            </tr>
            <tr>
              <td><input type="text" name="img" placeholder="IMAGE" value="<?php echo $arr['img']; ?>"></td>  
            </tr>
            <tr>
              <td><textarea name="text" ><?php echo $arr['content']; ?></textarea></td>
            </tr>
            <tr>
              <td><input type="submit" name="btn" id='btn'></td>
            </tr>
      </table>
      </form>
    </div>


<!--ghihgfiighgfdhgifdhgifdhighfdighifgifhgij-->


   <?php include 'footer.php'; ?>
  </div>
</body>
</html>