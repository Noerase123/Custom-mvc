<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo IMG?>google.svg" width="50" height="50" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="<?php echo URL;?>Login/login_user">
      <input required type="email" id="login" class="fadeIn second" name="email" placeholder="email">
      <input required type="password" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="submit_login" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo URL.'Register';?>">Register here!</a> &nbsp&nbsp&nbsp&nbsp
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>