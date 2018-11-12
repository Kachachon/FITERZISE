<?php  
  include_once 'head_.php';
  include_once 'PopUpLogIn.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Account</title>
</head>
<body>
  <link href="../UserAccount/UserAccount.css" rel="stylesheet" type="text/css">
<div class="row">
  <div class="column">

  <div class="card1">
    <h1>USER</h1>
    <img src="../UserAccount/img2.png" alt="One" style="width:50%">
      <div class="Userdetail">
        <?php
        if(isset($_SESSION['u_ID']))
            {
                echo "<p>".$_SESSION['u_firstname']."  " .$_SESSION['u_lastname'] ."</p>" ;
                echo "<p>".$_SESSION['u_email']."</p>" ;
                echo "<p>".$_SESSION['u_username']."</p>" ;
            }
            
        ?>
      </div>
      <p><button class="ButUser">USER ACCOUNT</button></p>
    </div>
  </div>

  <div class="column">
    <div class="card2">
      <h1> Detail </h1>
      <img src="../UserAccount/detail.png" alt="Two" style="width:30%">
      <div class="Userdetail">
        <?php
        if(isset($_SESSION['u_ID']))
            {
                echo "<p>".$_SESSION['u_sex']."</p>" ;
                echo "<p>".$_SESSION['u_weight']." kg"."</p>" ;
                echo "<p>".$_SESSION['u_height']." "."cm"."</p>" ;
            }
        ?>
    </div>
  </div>

  <div class="column">
    <div class="card3">
      <h1> Programs </h1>
      <img src="../UserAccount/program.png" alt="Two" style="width:30%">
      <div class="Userdetail">
      <p> Cardio : SupersStrong </p>
      <p> Strength : Superman </p>
      <p>26 Days Left</p>
      <p><button class="DoEx">DO EXERCISE!</button></p>
    </div>
  </div>
</div>

</body>
</html>

</body>
</html>