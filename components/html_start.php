<?php  // SETTING THE IMPORTANT PHP ASPECTS OF EACH PAGE

// Including the main.php file to initialise the backend
require_once("/home/sjohns/public_html/curriculr/php/main.php"); 

// Start the user session
session_start();

// Check that the user is logged in
if (!isset ($_SESSION['TeacherUsername'])) {
    header("Location: ../index.php");
}

// Setting the page title
if (!isset($page_title)) {
    $page_title = "Curriculr";
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <!-- SETTING META DATA -->
    <meta charset="UTF-8">
    <meta name="author" content="Sam Johns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/logo/favicon.png"/>
    <title><?php echo $page_title ?></title>

    <!-- Include fontawaesome external file -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Include JQuery for summernote -->
    <script src="../js/third_party_js/jquery.min.js"></script>

    <!-- Inlcude main custom stylesheet file -->
    
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>

</head>
<body>
    <div class="curriculr_wrapper">


    
    