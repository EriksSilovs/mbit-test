<?php
   require APPROOT . '/views/includes/head_loggedin.php';
?>

<div class="visible-window">
<div class="main-background"></div></div> <!-- scalable image- background  -->

<div class="main-info create">
<div  class="update-grey grey-container"> 
<div class="container center">
    <h1 class="UpdTitle crea">
        Update Info
    </h1>

    <form
    action="<?php echo URLROOT; ?>/posts/update/<?php echo $data['post']->id ?>" method="POST">
      
        <div class="form-item Upd-input">
        
        <input  class="createInf"
                type="text"
                name="title"
                value="<?php echo $data['post']->title ?>">
            <span class="popup-text">Your attribute. <br> Example: Age, Gender, Place of Birth, Pets Name etc...</span>      

            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>

        <div class="form-item Upd-input" >
  
            <textarea class="createInf height" name="body" placeholder="Enter your information..."><?php echo $data['post']->body ?></textarea>

            <span class="popup-text">Amount or Name. <br> Example: 20, Man, Canada, Rico etc... </span>    

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>

        <button class="btn-green" name="submit" type="submit">UPDATE</button>
    </form>
    
</div>

</div>
<div class="footer-mob">All rights reserved "Magebit" 2020.</div>

<div class="footer">All rights reserved "Magebit" 2020.</div>

</div>

</div>


