<?php
   require APPROOT . '/views/includes/head_loggedin.php';
?>

<div class="visible-window">
<div class="main-background"></div></div> <!-- scalable image- background  -->


<button ><input type="submit" id="exit" onclick="history.back()" value="BACK" class="btn red" > </button >
<div class="main-info create">
<div  class="create-grey grey-container "> 
<div class="container center">
    <h1 class="UpdTitle crea">
        Add Extra information
    </h1>

    <form action="<?php echo URLROOT; ?>/posts/create" method="POST">
        <div class="form-item">
            <input class="createInf" type="text" name="title" placeholder="Age, Gender, Place of Birth etc...">

            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <textarea class="createInf height" name="body" placeholder="Amount or Name. Example: 20 years, Woman, Canada etc..."></textarea>

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>

        <button class="btn-green" name="submit" type="submit">Submit</button>
    </form>
</div>
</div>
<div class="footer">All rights reserved "Magebit" 2020.</div>
<div class="footer-mob">All rights reserved "Magebit" 2020.</div>
</div>
