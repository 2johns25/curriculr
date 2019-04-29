/** SHOW/HIDE DROP DOWN MENU **/

$(document).ready(function(){
    
    /** SHOW MODAL **/

    $("#teacher_login_btn").click(function(){
        console.log("Teacher login button pressed");
      $("#login_modal_background").toggle();
    });

    /** HIDE MODAL **/

    $(".login_modal_cancel").click(function(){
        console.log("Modal cancel button pressed");
      $("#login_modal_background").hide();
    });

     /** TOGGLE NAVIGATION OPTIONS **/

    $(".nav_option_button").click(function(){
        console.log("Nav options clicked");
      $(".nav_options").toggle();
    });

    /** TOGGLE REMINDERS BOX **/

    $(".nav_notif_button").click(function(){
        console.log("Nav reminders clicked");
      $(".reminder_dropdown_wrapper").toggle();
    });

   /** TOGGLE CLASS HEADER OPTIONS  **/

   $(".fill_button_wrapper").click(function(e){
    e.preventDefault();
    console.log("Class header drop down clicked");
    
  $("#class_header_dropdown").toggle();
});


/** TOGGLE POST OPTION BUTTONS  **/

$(".ellipses_button").click(function(e){
    e.preventDefault()
    console.log("Post options button");
  $(this).parent().children(".drop_down_options_wrapper").toggle();
});

});


/** SHOW MODAL **/