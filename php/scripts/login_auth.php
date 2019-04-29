<?php require_once("/home/sjohns/public_html/curriculr_build/php/main.php"); ?>

<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$conn = new PDO("mysql:host=localhost; dbname=sjohns", "sjohns", "aBoo4mea");

$results = $conn->query("SELECT * from Teacher WHERE Username = '$username' && Password = '$password'");

$row = $results->fetch();

if ($row == false) {
    echo "No matching row";
    header("Location: ../../index.php");
} else {
    $_SESSION["TeacherUsername"] = $row[Username];
    $_SESSION["TeacherID"] = $row[TeacherID];
    $_SESSION["IsTeacher"] = true;
    header("Location: ../../views/index.php");
}

?>