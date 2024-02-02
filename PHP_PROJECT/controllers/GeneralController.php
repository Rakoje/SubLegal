<?php
include('../db.php');
include('../helpers/session_config.php');

$action = $_POST['action'];

if($action == "changeLanguage"){
    $_SESSION['language'] = $_POST['language'];
    echo json_encode(array("success" => 1, "lang" => $_SESSION['language'], "post"=>$_POST));
} else {
    echo json_encode(array("success" => 0, "error" => "Invalid POST request!"));
}
?>