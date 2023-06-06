<?php
    $con = mysqli_connect("svc.sel4.cloudtype.app:32647", "webmaster", "12345", "1stAndroid");

    $userid = $_POST["userid"];
    $userpassword = $_POST["userpassword"];
   
    $statement = mysqli_prepare($con, "SELECT * FROM USER WHERE userid = ? AND userpassword = ?");
    mysqli_stmt_bind_param($statement, "ss", $userid, $userpassword);
    mysqli_execute($statement);
    mysqli_store_result($statement);
    mysqli_stmt_bind_reult($statement, $userid);

    $response = array();
    $response["success"] = false;

    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;
        $response["userid"] = $userid;
    }
    
    echo json_encode($response);
?>