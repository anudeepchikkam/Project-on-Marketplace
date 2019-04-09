<?php
session_start();
//check if the user has clicked the login button
if (isset($_POST['login-submit'])) {
// Include config file
    require 'dbh.inc.php';

    $mailuid = $_POST['Username'];
    $password = $_POST['Password'];
    $_SESSION['user'] = $mailuid;

	    //Error handlers
		//Check if inputs are empty
    if (empty($mailuid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        	//Check if username exists in the database USING PREPARED STATEMENTS
        $sql = "SELECT * FROM users WHERE username=? OR email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();           
        } 
        //If the prepared statement didn't fail, then continue
        else {
            //Bind parameters/data to the placeholder (?) in our $sql
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            //Run query in database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    // Store data in session variables
                    $_SESSION['username'] = $row['firstname'];
                    header("Location: ../index.php");
                    exit();
                } else {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}