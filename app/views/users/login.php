

<div id="item-login" >
  <div class="formContent animate__animated animate__fadeIn" id="login">
    <div class="container1">
      <h1>Login</h1>
      <img src="img/stylePSD/megbit_logo.png" alt="">
    </div>
    <div class="container2">
      <img src="img/line_under.png" alt="">
    </div>

    <form action="<?php echo URLROOT; ?>/users/login" method ="POST">
        <div class="container2_1">
          <input id="email"  type="email" name="email"   required>
          <span id="required" class="floating-label">Email</span>
        
          <img id="mail_icon" src="img/stylePSD/small_icons/def/ic_mail.png" alt="ic_mail">
        
        </div>

        <div class="container2_2">
          <input id="password" type="password"  name="password" min="6"  required >
          <span id="required" class="floating-label">Password</span>
          <img id="lock_icon" src="img/stylePSD/small_icons/def/ic_lock.png" alt="ic_mail">
        </div>

        <div class="container2_3">
          <input id="submit-btn" type="submit" name="submit" value="login" >
          <a id="fogot-btn" href="#">Forgot? </a>
        </div>
      </form>
      <?php $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if (strpos($fullUrl, "Success=User_Registration_Done") == true){
              echo "<p  class='done'> Registration Successful!<strong> Login! </strong></p>";
            }
        ?>

          
  </div>   <!-- id = login content div end -->
</div> <!--  (login) beidzas -->    