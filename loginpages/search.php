
<?php 
//trigger the search
session_start();
include('includes/dbh.inc.php');
//connection to database, as of now its root but it would probably be better to create a new user account with minimum priveliges 
if(isset($_POST['submit-search'])){
//alert($_POST['searchQueryInput']); // checking if input recieved
$searchQueryInput=$_POST['submitquery'];
$likeString = "\"%".$searchQueryInput."%\"";
$sql="SELECT * FROM users WHERE firstname LIKE '%" . $searchQueryInput . "%'OR surname LIKE '%" . $searchQueryInput . "%'OR otherHobbies LIKE '%" . $searchQueryInput . "%'"; 
//alert($sql);
$result = mysqli_query($conn, $sql);
$searchResult=mysqli_fetch_all($result,MYSQLI_ASSOC); //gets the matching result where the column contains the search string
mysqli_free_result($result);
mysqli_close($conn);
$_SESSION['results'] =  array();
array_push($_SESSION['results'],$searchResult);
foreach($searchResult as $person){
    echo $person['email'];
}
 header("Location: ../loginpages/index.php?search=result");
exit();
}
?>

