<?php

if (isset($_POST['password']) && isset($_POST['token'])) {

    require_once dirname(__DIR__) . "\\controller\\controller.php";
    $controller = new controller("localhost", "root", "", "school");
    $check_result = $controller->ResetPass($_POST['token'], $_POST['password']);

    if ($check_result == 'success') {
        echo json_encode(['status' => 'OK', 'message' => "Password reset successfully"]);
    } else {
        echo json_encode(['message' => "Theres an error, please try again"]);
    }
}
