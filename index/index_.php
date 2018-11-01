<?php  
  include_once 'head_.php';
?>

<body>	
<link href="home.css" rel="stylesheet" type="text/css">
    <img src="../home/Larm.png" alt="Rarm" id="Larm">
    <img src="../home/Rarm.png" alt="Larm" id="Rarm">
    <div id="upper">
        CHALLENGE<br>
        YOURSELF<br>
    </div>
    <div id="lower">
        <?php
            if(isset($_SESSION['u_ID']))
            {
                echo "You Are LogIn";
            }
        ?>
        CREATE<br>
        YOUR<br>
        OWN<br>
        PROGRAM
    </div>
    <div>
    <button type="submit" name="create" id="btcreate">CREATE</button>

<?php  
  include_once 'PopUpLogIn.php';
?>

</body>
</html>