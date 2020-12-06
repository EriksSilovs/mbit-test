<?php
   require APPROOT . '/views/includes/head_loggedin.php';
?>

<div class="visible-window">
<div class="main-background"></div></div> <!-- scalable image- background  -->

<form action="<?php echo URLROOT; ?>/users/logout" method ="POST">
   <input type="submit" id="exit"    value="EXIT" class="btn red"   href="<?php echo URLROOT; ?>/users/logout">
</form>

<div class="main-info logged-in">

<div  class="grey-container"> 
<h1 class="usrInfo">User Information  <img src="img/stylePSD/megbit_logo.png" alt=""> </h1>
    
<?php if(isLoggedIn()): ?>
    <div class="btn-green-div">
        <a class="btn-green" href="<?php echo URLROOT;  ?>/posts/create">
            Create 
        </a>
    </div>
    <?php endif; ?>
<div class="container">


    <div class="scroll">
    <?php foreach($data['posts']  as $post ): ?> 
    

        <div class="container-item">


        
            <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
               
                <form action="<?php echo URLROOT . "/posts/delete/" . $post->id ?>" method="POST">
                    
                   

                    <h3> INFORMATION: </h3>
                 
            <h2>
               <?php echo $post->title; ?>:
            </h2>

            <p>
              <?php echo $post->body; ?>
            </p>

            <input  type="submit"   name="delete" value="Delete" class="btn-red">
              
                     <a class="btn-orange" href="<?php echo URLROOT . "/posts/update/" . $post->id ?>">Update</a>
                </form>
                
            <?php endif; ?>

      
            
        </div>
        
    <?php endforeach; ?>
    
    </div>
    
    </div>
    <div class="container-userInfo" >
   
  
        
                <textarea class="usersInfo inp" type="text" name="usersInfo" disabled >Name: <?php echo $_SESSION['username'] ?>; Email: <?php echo $_SESSION['email']?></textarea>

        </div>

        
        </div>
        <div class="footer-mob">All rights reserved "Magebit" 2020.</div>
        <div class="footer">All rights reserved "Magebit" 2020.</div>
</div>

  

lor