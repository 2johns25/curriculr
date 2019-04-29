<?php 

    session_start();

    if (isset($_SESSION["TeacherUsername"])) {
        header("Location: views/index.php");
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sam Johns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculr</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>    
    <div class="login_image_background">
        <div class="login_overlay_background">
        </div> <!-- Login overlay background -->
    </div>
        <div class="login_content_container">
            <img class="login_logo" src="assets/logo/logo2.svg"/>
            <div class="user_selection">
                <div class="user_group">
                    <div class="login_user_pic pupil_pic"></div>
                    <div class="login_btn" id="pupil_login_btn">Pupil login</div>
                </div> <!-- User group -->
                <div class="user_group">
                    <div class="login_user_pic teacher_pic"></div>
                    <div class="login_btn" id="teacher_login_btn">Teacher login</div>
                </div> <!-- User group -->
                <div class="user_group">
                    <div class="login_user_pic parent_pic"></div>
                    <div class="login_btn" id="parent_login_btn">Parent login</div>
                </div> <!-- User group -->
            </div> <!-- User selection -->
        </div> <!-- Login content container -->
        <div id="login_modal_background" class="modal">
            <div class="login_modal_wrapper">
                <div class="login_modal_container">
                <div class="login_modal_logo"><img src="assets/logo/logo2.svg"/></div>
                    <h4>Teacher's login</h4>
                    <div class="login_form">
                        <form action="php/scripts/login_auth.php" method="POST">
                            <div class="form_action_group">
                                <label>Username</label>
                                <input type="text" name="username"/>
                            </div>
                            <div class="form_action_group">
                                <label>Password</label>
                                <input type="password" name="password"/>
                            </div>
                            <div class="form_actions">
                            <div class="rectangle_fill_button login_modal_cancel">Cancel</div>
                            <button class="cta_button">Login</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- Login modal container -->
            </div> <!-- Login modal wrapper -->
        </div> <!-- Login modal background -->
<script src="js/third_party_js/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>