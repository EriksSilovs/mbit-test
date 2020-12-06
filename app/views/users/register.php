
<div id="item-signUp">
  <div class="animate__animated animate__fadeIn" id="signUpPart">
    <div id="signup-formCont">
      <div class="signup-formCont-1">  <!-- Container 1 (Virsraksts un logo)-->
          <h1>Sign Up</h1>      <!-- "sign up" = "SUP" saisinajums, kas redzams koda -->
        <img src="img/stylePSD/megbit_logo.png" alt="">
      </div>
      <div class="signup-formCont-2"> <!-- Container 2  iekļauj formu un visus tās elementus-->
        <img src="img/line_under.png" alt="">

        <form id="register-form" method="POST" action="<?php echo URLROOT; ?>/users/register">
          <div class="signup-formCont-2_1"> 
            <input id="SUPname" pattern="^ *[a-zA-Z]+ +[a-zA-Z]+ *[a-zA-Z]* *"   
              type="text" name="username"
              oninvalid="setCustomValidity('Enter Full Name ')"
              onchange="try{setCustomValidity('')}catch(e){}" required>

            <span id="SUPrequired" class="SUPfloating-label">Name</span>
            <img id="SUPuser_icon" src="img/stylePSD/small_icons/def/ic_user.png" alt="ic_mail">
          </div>

          <div class="signup-formCont-2_2">
            <input id="SUPemail"  type="email" name="email"   required>
            <span id="SUPrequired" class="SUPfloating-label">Email</span>
            <img id="SUPmail_icon" src="img/stylePSD/small_icons/def/ic_mail.png" alt="ic_mail">
          </div>

          <div class="signup-formCont-2_3">
            <input id="SUPpassword" type="password"  name="password" min="6"  required >
            <span id="SUPrequired" class="SUPfloating-label">Password</span>
            <img id="SUPlock_icon" src="img/stylePSD/small_icons/def/ic_lock.png" alt="ic_mail">
          </div>

          <div class="signup-formCont-2_4">
                <input id="SUPsubmit-btn" type="submit"  value="sign Up" name="signUp">  
          </div>
        </form>
    
      </div>
    </div> <!-- signup-formCont (content) beidzas -->
  </div> <!-- id = SignUpPart beidzas -->
</div>  <!-- item-signUp beidzas -->