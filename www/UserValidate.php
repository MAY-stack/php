<?php
    $con = mysqli_connect("svc.sel4.cloudtype.app:32647", "webmaster", "12345", "1stAndroid");

    $userid = $_POST["userid"];
   
    $stmt = mysqli_prepare($con, "SELECT * FROM USER WHERE userid = ?");
    mysqli_stmt_bind_param($stmt, "s", $userid);
    mysqli_execute($stmt);
    mysqli_store_result($stmt);
    mysqli_stmt_bind_reult($stmt);

    $response = array();
    $response["success"] = true;

    while(mysqli_stmt_fetch($stmt)){
        $response["success"] = false;
        $response["userid"] = $userid;
    }
    
    echo json_encode($response);
?>
