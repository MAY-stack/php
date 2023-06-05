<?php
    $con = mysqli_connect("svc.sel4.cloudtype.app:32647", "root", "12345", "root");

    $userid = $_POST["userid"];
    $userpassword = $_POST["userpassword"];
    $usergender = $_POST["usergender"];
    $usermajor = $_POST["usermajor"];
    $useremail = $_POST["useremail"];
    
    $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sssss", $userid, $userpassword,$usergender,$usermajor,$useremail);
    mysqli_execute($statement);

    $response = array();
    $response["success"] = true;

    echo json_encode($response);
?>
