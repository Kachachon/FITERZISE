<?php  
  include_once 'head_.php';
  include_once 'PopUpLogIn.php';
?>
<body>
<link href="../userProgram/userprogram.css" rel="stylesheet" type="text/css">
<link href="cssbar.css" rel="stylesheet" type="text/css">


<h1 style="margin-top:80px; text-align: center; padding: 20px; font-size: 40px;">Welcome Sasinaree</h1>



<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      November<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Monday</li>
  <li>Tuesday</li>
  <li>Wednesday</li>
  <li>Thursday</li>
  <li>Friday</li>
  <li>Sataday</li>
  <li>Sunday</li>
</ul>

<ul class="days">  
  <li></li>
  <li></li>
  <li></li>
  <li><span class="active">1</span></li>
  <li><span class="active">2</span></li>
  <li><span class="active">3</span></li>
  <li><span class="active">4</span></li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
</ul>

<div class="row"> <!--row1-->
  <div class="column1">
    <div class="flip-box">
    <h1 class="p1">Cardio </h1>
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h3>Aladding Workout</h3>
      <img src="../userProgram/aladdin.png" style="width:280px; height:280px; border: double; border-color:#eb4d4b; border-width: 10px;">
    </div>
    <div class="flip-box-back">
      <h3 style="text-align: center; margin:30px; font-weight: bold;">Aladding Workout</h3>
      <p style="text-align: center; margin:30px; font-size: 12px;">If you want to be an adventurer of the mystical East you need to have great fascial fitness, overall strength, agility and muscle stability. Aladdin is a workout that puts you through your paces helping you develop all that as well as a good aerobic basis and good endurance levels. Add EC and it becomes a real challenge.</p>
    </div>
  </div>
</div>
  </div>

  <div class="column2">
    <div class="flip-box">
      <h1 class="p2">Strenght </h1>
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h3>Firestorm Workout</h3>
      <img src="../userProgram/firestorm.png" style="width:280px; height:280px; border: double; border-color:#eb4d4b; border-width: 10px;">
    </div>
    <div class="flip-box-back">
      <h3 style="text-align: center; margin:30px; font-weight: bold;">Firestorm Workout</h3>
      <p style="text-align: center; margin:30px; font-size: 12px;">Sometimes you need to rely on who you are and what you have. For that to work when you need it you need to dig deep inside yourself and work hard to build yourself up. Training is a journey not a destination and the Firestorm workout is a path you need to travel and you will be transformed.</p>
    </div>
  </div>
</div>
  </div>
</div>


<p class="feel">HOW DO YOU FEEL</p>
<div class="rate">
<img src="sohappy.png" style="width: 50px; height:50px;">
<img src="happy.png" style="width: 50px; height:50px;">
<img src="angry.png" style="width: 50px; height:50px;">
<img src="sad.png" style="width: 50px; height:50px;">
</div>

<p id="timer"></p><br>
<button type="submit" name="logout" onclick='location.replace ("home.html")' style="  background-color:#eb4d4b;  color:white;  margin: 10px; 
  padding:12px;   border-radius: 8px;  font-weight: bold;  border: none;  cursor: pointer; margin-left: 590px;">DONE</button>

<script>
// Set the date we're counting down to
var countDownDate = new Date("December 1, 2018 0:0:0").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="timer"
    document.getElementById("timer").innerHTML = days + " Days Left! "; 
    //+ hours + "h " + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>