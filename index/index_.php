<?php  
  include_once 'head_.php';
?>

<body>	
<link href="../home/index_.css" rel="stylesheet" type="text/css">
    <img src="../home/Larm.png" alt="Rarm" id="Larm">
    <img src="../home/Rarm.png" alt="Larm" id="Rarm">
    <div id="upper">
        CHALLENGE<br>
        YOURSELF<br>
    </div>
    <div id="lower">
        <?php
            $br = "<br>";
            if(isset($_SESSION['u_ID']))
            {
                echo "DO $br";
                echo "YOUR $br";
                echo "EXECISE $br";
            }
            else{
                echo "CREATE $br";
                echo "YOUR $br";
                echo "PROGRAM $br";
            }
        ?>
    </div>
    <div>
        <?php
            $br = "<br>";
            if(isset($_SESSION['u_ID']))
            {
                echo '<button type="submit" name="create" id="btcreate">WORK OUT!</button>';
            }
            else{
                echo '<button type="submit" name="create" id="btcreate">CREATE</button>';
            }
        ?>
<?php  
  include_once 'PopUpLogIn.php';
?>

</body>
</html>