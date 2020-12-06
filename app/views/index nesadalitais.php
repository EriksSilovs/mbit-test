

<!-- nesadalitais index fails NETIEK IZMANTOTS aplikacija, atstaju,
 lai ir vieglaks saprast strukturu un ari, lai vieglak editot nakotne 
 (noteiktos gadijumos, kad nepieciesams pilnais koda parskats) -->


<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="visible-window">
    <div class="main-background"></div></div> <!-- scalable image- background  -->

  <div class="main-info"> <!--  novietojums aktivajam logam  -->
      <div class="grey-container">
        
        <div class="left">
          <h1 class="heading">Don't have an account?</h1>
          <img src="img/line_under.png" alt="line">
          <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, porro <br> fuga ipsam quasi et eaque accusantium <br> ipsa iure inventore.</p>
          <button id="left" onclick="switchVisible(), hideElement()">sign up</button>
        </div>
        <div class="right">
          <h1 class="heading">Have an account?</h1>
          <img src="img/line_under.png" alt="line">
          <p>Lorem ipsum dolor, sit amet consectetur  adipisicing elit.</p>
          <button id="right" onclick="switchVisible(), showElement()">login</button>
        </div>

        <div class="active-window">  
                <div class="white-window animate__animated animate__fadeIn">
                    <div class="fold-top"></div>
                    <div class="fold-middle"></div>
                    <div class="fold-bottom"></div>
                    <!-- tiek uzlikti 2 iems viens otram virsu "login" un "sign up" -->
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
                              echo "<p  class='done'> Registration Successful!<strong> Login! </strong><?p>";
                            }
                        ?>
                
                      		
                  </div>   <!-- id = login content div end -->
                </div> <!-- item1White (login) beidzas -->        
             </div>   
             </div>
             <div class="footer-mob">All rights reserved "Magebit" 2016.</div>
  </div>
  
  <div class="footer">All rights reserved "Magebit" 2016.</div>

<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/action.js"> </script>
<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/email.js"> </script>
<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/pasw.js"> </script>
<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/SUP/name.js"> </script>
<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/SUP/SUPemail.js"> </script>
<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/SUP/SUPpasw.js"> </script>

</body>
</html>