<?php 
  include 'inc/teacher-header.php';
?>
    <div class="">
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                $teacherLogin = $teacher->teacherLogin($_POST);
            }
          ?>
      <div class="login-container">
        <div class="form-container " >
          <!-- success and error message -->
            <?php 
                if (isset($teacherLogin)) {
                  echo $teacherLogin;
                }
            ?>
          <h1>Teacher Log In</h1>
          <form action="" method="post">
              <div class="text-box">
                  <input class="email" name="email" value="" placeholder="Email Address">
              </div>
              <div class="text-box">
                  <input class="Password" name="password" value="" placeholder="Password">
              </div>
              <!-- Remember Password -->
              <input type="checkbox" class="checkbox">  <span style="">Remember Password</span>
              <button type="submit" name="submit" class="button" style="color: #fff;">Sign In</button>
          </form>
    
           <br>
          <div class="footer">
            <p>Don't have an account ?<a href="teacher_sign_up.php" style="color: #274970; text-decoration: none; font-weight: bold;"> Sign Up</a></p><br>
            <p><a href="teacher-reset.php" style="color: #274970; text-decoration: none; font-weight: bold;">Forgotten Password</a></p>
          </div>        
        </div>
        <div class="picture-cont" >
            <img src="images/teacher.png" class="picture">
        </div>
      </div>
    

    </div>
    

  <script src="js/main.js"></script>
</body>
</html>