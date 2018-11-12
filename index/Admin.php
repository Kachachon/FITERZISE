<?php  
  include_once 'head_.php';
  include_once 'PopUpLogIn.php';
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

<link href="Admin.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="tab">
  <h1 style="text-align: center; font-style: bold; font-size: 40px; color: white; margin-bottom: 30px; margin-top: 40px;">ADMIN</h1>
  <button class="tablinks" onclick="openCity(event, 'home')" id="defaultOpen"><i class="fa fa-home"></i>HOME</button>
  <button class="tablinks" onclick="openCity(event, 'view')"><i class="fa fa-fw fa-search"></i>VIEW SITE</button>
</div>

<div id="home" class="tabcontent">
  <h2 style=" font-style: bold; margin-top: 20px; margin-left: 20px;">USER INFORMATION</h2>
<table style=" font-style: bold; margin-left: 20px;">
  <tr>
    <th>USER ID</th>
    <th>FIRSTNAME</th>
    <th>LASTNAME</th>
    <th>E-MAIL</th>
    <th>WEIGHT</th>
    <th>HEIGHT</th>
    <th>AGE</th>
    <th>SEX</th>
    <th>VIEW</th>
  </tr>

</div>

<div id="view" class="tabcontent">

</div>

<?php
  include_once 'DBconnect.php';
   //$v='view detail';
  $sql="SELECT userID,firstname,lastname,email,weight,height,age,sex,username,
       password FROM USER;";
    $result = mysqli_query($conn, $sql);
    $resultCheck= mysqli_num_rows($result);
    if($resultCheck > 1)
    {  
      while ($row = $result->fetch_assoc()) 
      {
      echo "<tr>";
      echo "<td>".$row['userID']."</td>";
      echo "<td>".$row['firstname']."</td>";
      echo "<td>".$row['lastname']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['weight']."</td>";
      echo "<td>".$row['height']."</td>";
      echo "<td>".$row['age']."</td>";
      echo "<td>".$row['sex']."</td>";
      echo "<td>".'view detail'."</td>";

      echo "</tr>";
      } 
    }
    else 
    { echo 'Query error: '.$con->error;
    }
?>
</table>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
