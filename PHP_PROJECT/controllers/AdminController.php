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
} else if ($action == "add_project") {
    $title_srb = $_POST['in_title_srb']; // Get other form fields
    $content_srb = $_POST['in_content_srb'];
    $title_eng = $_POST['in_title_eng'];
    $content_eng = $_POST['in_content_eng'];
    $proj_date = $_POST['in_date'];

    // Handle the base64-encoded image
    if (isset($_POST['base64_image'])) {
        $base64_image = $_POST['base64_image'];


        try{
//            $pdo->query("
//            INSERT INTO project (title_srb, title_eng, content_srb, content_eng, image, date)
//            VALUES ('$title_srb', '$title_eng', '$content_srb', '$content_eng', 'base64_encoded_image_1', '2024-02-01'),
//            ");
            $stmt = $pdo->prepare("INSERT INTO project (title_srb, title_eng, content_srb, content_eng, image, date) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $title_srb);
            $stmt->bindParam(2, $title_eng);
            $stmt->bindParam(3, $content_srb);
            $stmt->bindParam(4, $content_eng);
            $stmt->bindParam(5, $base64_image, PDO::PARAM_LOB);
            $stmt->bindParam(6, $proj_date);
            $stmt->execute();

            echo json_encode(array(
                "success" => 1,
                "error" => ""
            ));
        } catch(PDOException $e){
            echo json_encode(array(
                "success" => 0,
                "error" => "PDOException"
            ));
        }

    } else {
        // Respond with an error if no image is provided
        echo json_encode(array(
            "success" => 0,
            "error" => "No Image"
        ));
    }
}else if($action == "deleteBlog"){
    try{
        $id = $_POST['id'];
        $pdo->query("delete from blog where id = $id");
        echo $id;
        echo json_encode(array(
            "success" => 1,
            "id" => $id
        ));
    }catch(PDOException $e){
        echo json_encode(array(
            "success" => 0,
            "error" => "PDOException"
        ));
    }
}
else if($action == "logout"){
    $_SESSION['logged'] = false;
    echo json_encode(array(
        "success" => 1
    ));
}
else if ($action == "add_blog") {
    $title_srb = $_POST['in_title_srb_b']; // Get other form fields
    $content_srb = $_POST['in_content_srb_b'];
    $title_eng = $_POST['in_title_eng_b'];
    $content_eng = $_POST['in_content_eng_b'];
    $blog_date = $_POST['in_date_b'];

    // Handle the base64-encoded image
    if (isset($_POST['base64_image'])) {
        $base64_image = $_POST['base64_image'];


        try{
//            $pdo->query("
//            INSERT INTO project (title_srb, title_eng, content_srb, content_eng, image, date)
//            VALUES ('$title_srb', '$title_eng', '$content_srb', '$content_eng', 'base64_encoded_image_1', '2024-02-01'),
//            ");
            $stmt = $pdo->prepare("INSERT INTO blog (title_srb, title_eng, content_srb, content_eng, image, date) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $title_srb);
            $stmt->bindParam(2, $title_eng);
            $stmt->bindParam(3, $content_srb);
            $stmt->bindParam(4, $content_eng);
            $stmt->bindParam(5, $base64_image, PDO::PARAM_LOB);
            $stmt->bindParam(6, $blog_date);
            $stmt->execute();

            echo json_encode(array(
                "success" => 1,
                "error" => ""
            ));
        } catch(PDOException $e){
            echo json_encode(array(
                "success" => 0,
                "error" => "PDOException"
            ));
        }

    } else {
        echo json_encode(array(
            "success" => 0,
            "error" => "No Image"
        ));
    }
}

?>