<?php  // SETTING THE IMPORTANT PHP ASPECTS OF EACH PAGE

// Including the main.php file to initialise the backend
require_once("/home/sjohns/public_html/curriculr/php/main.php"); 

// Start the user session
session_start();

// Check that the user is logged in
if (!isset ($_SESSION['TeacherUsername'])) {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <!-- SETTING META DATA -->
    <meta charset="UTF-8">
    <meta name="author" content="Sam Johns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Curriculr</title>

    <!-- INCLUDING STYLESHEETS -->

    <!-- Include fontawaesome external file -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Include summernote css/js -->
    <link href="../assets/wysiwyg/summernote-lite.css" rel="stylesheet">
    <script src="../assets/wysiwyg/summernote-lite.js"></script>

    <!-- Inlcude main custom stylesheet file -->
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>

</head>
<body>
    <div class="curriculr_wrapper">


    
    