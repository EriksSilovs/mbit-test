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
                 
                    <!-- tiek uzlikti 2 iems viens otram virsu "login" un "sign up" (atrodas users mape) -->

<!-- aktivais un neaktivais logs  saja faila augsa redzams.
sadaliju login un register failos pa mapem (users)
includes mapee ir ieksa header un  footer -->

<?php
   require APPROOT . '/views/users/register.php';
?>
<?php
   require APPROOT . '/views/users/login.php';
?>
<?php
   require APPROOT . '/views/includes/footer.php';
?>