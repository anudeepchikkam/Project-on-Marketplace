<!--Code Help From https://www.cloudways.com/blog/real-time-php-notification-system/-->
<?php
//insert.php
require 'includes/dbh.inc.php';
if(isset($_POST["textinfo"]))
{
 //CV page message request with purpose and message 
 $purpose = mysqli_real_escape_string($con, $_POST["purpose"]);
 $textinfo = mysqli_real_escape_string($con, $_POST["textinfo"]);
 $id = mysqli_escape_string($conn,$_GET['id']);
 
 //Insertion to comments table
 $query = "
 INSERT INTO comments(id,comment_subject, comment_text)
 
 VALUES ('$purpose', '$textinfo')
 ";
 $query2="INSERT INTO comments(id)
 SELECT id FROM [users] WHERE id NOT IN (SELECT id FROM comments)";
 mysqli_query($con, $query,$query2);
}