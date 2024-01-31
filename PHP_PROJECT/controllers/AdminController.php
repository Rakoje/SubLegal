<?php
include('../db.php');
include('../helpers/session_config.php');

$action = $_POST['action'];

if($action == "login"){
    $password = $_POST['password'] != null ? $_POST['password']:"";
    $username = $_POST['username'] != null ? $_POST['username']:"";

    $error = "";

    if($password == "") $error .= "You didn't enter your password!";
    if($username == "") $error .= "\nYou didn't enter your username!";

    if($error == ""){
        $query = "SELECT count(*) cnt from admin
              where username = '$username'";

        $cnt = $pdo->query($query)->fetch()['cnt'];

        if($cnt > 0){
            $query = "SELECT count(*) cnt from admin
              where password = '$password'
              and username = '$username'";

            $cnt_pass = $pdo->query($query)->fetch()['cnt'];

            if($cnt_pass > 0){
                $_SESSION['logged'] = true;
                echo json_encode(array(
                    "success" => 1
                ));
            } else {
                $error .= "\nPassword doesn't match the username!";

            }
        } else {
            $error .= "\nUsername doesn't exist!";
        }
    }

    if($error != "")
        echo json_encode(array(
            "success" => 0,
            "error" => $error
        ));
}

?>