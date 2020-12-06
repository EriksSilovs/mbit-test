// animation no vinas puses uz otru (white container)
{
  $( "#right" ).click(function() {

  if(window.matchMedia('(max-width: 960px)').matches){
    $( " .active-window" ).animate({ "top": "+=422px" }, "fast" );
    $( " .active-window" ).animate({ "left": "+=0px" }, "fast" );
  }
  else
  $( " .active-window" ).animate({ "left": "+=422px" }, "fast" ); 
  });

  $( "#left" ).click(function(){

  if(window.matchMedia('(max-width: 960px)').matches){
    $( " .active-window" ).animate({ "top": "-=422px" }, "fast" );
    $( " .active-window" ).animate({ "left": "-=0px" }, "fast" );
  }
  else
  $( " .active-window" ).animate({ "left": "-=422px" }, "fast" );
  blur
  });

  // sign up un login logu pārslēgšana - hide show
  function switchVisible(){ setTimeout (function hideShow() {
  if (document.getElementById('signUpPart')) {

    if (document.getElementById('item-login').style.display == 'none') {
      document.getElementById('item-login').style.display = 'block' ;
      document.getElementById('signUpPart').style.display = 'none' ;
      document.getElementById('item-login').style.display = 'block' ;
    }
    else {
      document.getElementById('item-login').style.display = 'none'  ;
      document.getElementById('signUpPart').style.display = 'block'  ;
    }
  }
  }
  ,) 
  };
};


// kad tiek aktivzēts ievadlauks - iedzedzas attiecīgā ikona

    // email
{
var x = document.getElementById("email");
x.addEventListener("focus", myFocusFunction, true);
x.addEventListener("blur", myBlurFunction, true);

function myFocusFunction() {
 document.getElementById("mail_icon").src="img/stylePSD/small_icons/active/ic_mail.png";  
};

function myBlurFunction() {
  document.getElementById("mail_icon").src="img/stylePSD/small_icons/def/ic_mail.png";  
};
};

  // Password
{
  var x = document.getElementById("password");
  x.addEventListener("focus", myFocusFunction, true);
  x.addEventListener("blur", myBlurFunction, true);
  
  function myFocusFunction() {
   document.getElementById("lock_icon").src="img/stylePSD/small_icons/active/ic_lock.png";  
  };
  
  function myBlurFunction() {
    document.getElementById("lock_icon").src="img/stylePSD/small_icons/def/ic_lock.png";  
  };
  };
  
 // Name
{
  var x = document.getElementById("SUPname");
  x.addEventListener("focus", myFocusFunction, true);
  x.addEventListener("blur", myBlurFunction, true);

  function myFocusFunction() {
  document.getElementById("SUPuser_icon").src="img/stylePSD/small_icons/active/ic_user.png";  
  };
  function myBlurFunction() {
  document.getElementById("SUPuser_icon").src="img/stylePSD/small_icons/def/ic_user.png";  
  }
};

// email
{

  var x = document.getElementById("SUPemail");
  x.addEventListener("focus", myFocusFunction, true);
  x.addEventListener("blur", myBlurFunction, true);

  function myFocusFunction() {
  document.getElementById("SUPmail_icon").src="img/stylePSD/small_icons/active/ic_mail.png";  
  };
  function myBlurFunction() {
    document.getElementById("SUPmail_icon").src="img/stylePSD/small_icons/def/ic_mail.png";  
  };
};

  // Password 
{
  var x = document.getElementById("SUPpassword");
  x.addEventListener("focus", myFocusFunction, true);
  x.addEventListener("blur", myBlurFunction, true);

  function myFocusFunction() {
  document.getElementById("SUPlock_icon").src="img/stylePSD/small_icons/active/ic_lock.png";  
  };
  function myBlurFunction() {
    document.getElementById("SUPlock_icon").src="img/stylePSD/small_icons/def/ic_lock.png";  
  };
};