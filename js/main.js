$(document).ready(function(){


    /** CLOSE SNACKBAR **/

    $(".close_snackbar").click(function(e){
        e.preventDefault();
        console.log("Close snackbar");
        $(".snackbar_style_wrapper").hide();
    });

    /** SNACKBAR ON CHANGES  **/
    $(".topic_editor_save").click(function(){
        console.log("Changes saved");
        $(".topic_saved_snackbar").show();
    });

    /** DISPLAYING COMMENT COMPOSER **/

    $(".reply_button").click(function(e){
        e.preventDefault();
        console.log("Comment placeholder text hidden");
        $(".new_reply_comment").show();
    });

    /** SHOWING COMMENT PLACEHOLDER WHEN CANCEL BUTTON CLICKED  **/

    $(".new_comment_cancel_button").click(function(){
        console.log("Comment placeholder text hidden");
        $(".new_comment_input_placeholder").show();
    });


    /** HIDING COMMENT PLACEHOLDER TEXT  **/

    $(".new_comment_input").click(function(){
        console.log("Comment placeholder text hidden");
        $(this).parent().children(".new_comment_input_placeholder").hide();
    });

    /** CANCEL TOPIC MODAL **/

    $(".login_modal_cancel").click(function(){
        console.log("Modal confirm button pressed");
    $(".create_section_modal").hide();
    });

    /** CREATE TOPIC MODAL CONFIRM **/

    $(".modal_delete_button").click(function(e){
        e.preventDefault();
        console.log("Modal confirm button pressed");
    $(".create_section_modal").hide();
    $(".new_section_snackbar").show();
    });

    /** SHOW CREATE SUB SECTION MODAL **/

    $(".add_section_button").click(function(){
        console.log("Copy button selected");
    $(".create_section_modal").toggle();
    $(this).parent(".drop_down_options_wrapper").toggle();
    });

    /** CANCEL REMINDER MODAL **/

    $(".login_modal_cancel").click(function(){
        console.log("Modal confirm button pressed");
    $(".create_reminder_modal").hide();
    });

    /** CREATE REMINDER MODAL CONFIRM **/

    $(".modal_delete_button").click(function(e){
        e.preventDefault();
        console.log("Modal confirm button pressed");
    $(".create_reminder_modal").hide();
    $(".new_reminder_snackbar").show();
    });

    /** SHOW REMINDER TOPIC MODAL **/

    $(".create_reminder_button").click(function(){
        console.log("Copy button selected");
    $(".create_reminder_modal").toggle();
    $(this).parent(".drop_down_options_wrapper").toggle();
    });

     /** CANCEL TOPIC MODAL **/

     $(".login_modal_cancel").click(function(){
        console.log("Modal confirm button pressed");
    $(".create_topic_modal").hide();
    });

     /** CREATE TOPIC MODAL CONFIRM **/

     $(".modal_delete_button").click(function(e){
         e.preventDefault();
        console.log("Modal confirm button pressed");
        $(".create_topic_modal").hide();
        $(".new_topic_snackbar").show();
    });

    /** SHOW CREATE TOPIC MODAL **/

    $(".topic_create_button").click(function(){
        console.log("Copy button selected");
    $(".create_topic_modal").toggle();
    $(this).parent(".drop_down_options_wrapper").toggle();
    });

    /** CONFIRM COPY MODAL **/

    $(".modal_confirm_button").click(function(){
        console.log("Modal confirm button pressed");
    $(".copy_modal").hide();
    $(".topic_copied_snackbar").show();
    });

    /** CANCEL COPY MODAL **/

    $(".login_modal_cancel").click(function(){
        console.log("Modal cancel button pressed");
      $(".copy_modal").hide();
    });

    /** SHOW COPY MODAL **/

    $(".topic_edit_copy").click(function(){
        console.log("Copy button selected");
      $(".copy_modal").toggle();
      $(this).parent(".drop_down_options_wrapper").toggle();
    });

    /** DELETE DELETE MODAL **/

    $(".modal_delete_button").click(function(){
        console.log("Modal cancel button pressed");
    $(".delete_modal").hide();
    $(".delete_topic").show();
    });

     /** CANCEL DELETE MODAL **/

     $(".login_modal_cancel").click(function(){
        console.log("Modal cancel button pressed");
      $(".delete_modal").hide();
    });

    /** SHOW DELETE MODAL **/

    $(".topic_edit_delete").click(function(){
        console.log("Delete button selected");
      $(".delete_modal").toggle();
      $(this).parent(".drop_down_options_wrapper").toggle();
    });

    /** TOPIC EDITOR BUTTON **/

    $(".topic_editor_button_button").click(function(){
        console.log("Topic editor button pressed");
        $(this).parent().children(".drop_down_options_wrapper").toggle();
    });

    /** SHOW LOGIN MODAL **/

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

    $(".nav_option_button").click(function(e){
        e.preventDefault();
        console.log("Nav options clicked");
      $(".nav_options").toggle();
    });

    /** TOGGLE REMINDERS BOX **/

    $(".nav_notif_button").click(function(e){
        e.preventDefault();
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