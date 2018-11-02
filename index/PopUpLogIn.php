
  <div id="Login" class="modal">
  <form class="modal-content animate" action="loginUser.php" method="POST" >
    <div class="imgcontainer">
        <p> LOG IN </p>
      <span onclick="document.getElementById('Login').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <br><br>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button type="submit" name="SubmitLogin" class="login">Login</button>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('Login');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
    {
    if (event.target == modal) 
        {
        modal.style.display = "none";
        }
    }
</script>