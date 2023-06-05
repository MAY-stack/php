<?php
    $con = mysqli_connect("svc.sel4.cloudtype.app:32647", "root", "12345", "root");

    $userid = $_POST["userid"];
   
    $statement = mysqli_prepare($con, "SELECT * FROM USER WHERE userid = ?");
    mysqli_stmt_bind_param($statement, "s", $userid);
    mysqli_execute($statement);
    mysqli_store_result($statement);
    mysqli_stmt_bind_reult($statement);

    $response = array();
    $response["success"] = true;

    while(mysqli_stmt_fetch($statement)){
        $response["success"] = false;
        $response["userid"] = $userid;
    }
    
    echo json_encode($response);
?>
