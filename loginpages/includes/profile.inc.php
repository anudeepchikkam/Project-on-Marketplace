<?php
//if (isset($_POST['signup-submit'])) {
	//Store or update user profile into database
    require 'dbh.inc.php';
    session_start();
    $info = $_POST['info'];
    $experience = $_POST['experience'];
    $education = $_POST['education'];
    $number = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $expertise = $_POST['expertise'];
    $country = $_POST['country'];
    $name = $_SESSION['username'];

    $sql = "UPDATE users SET selfIntro = '$info', workExperience = '$experience', education = '$education', contactNumber = '$number',
    otherHobbies = '$expertise', country = '$country' WHERE firstname = '$name'";

	//connection checker
    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php?submmit=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
//}
    ?>

    