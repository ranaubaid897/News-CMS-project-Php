<?php
include 'config.php';

if ( $_SESSION["user_role"] == '0' ) {
header ("LOCATION: {$hostname}/admin/post.php");
exit;
}

$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = {$userid}";

if (mysqli_query($conn,$sql)) {

    header ("LOCATION: {$hostname}/admin/users.php");

}else{

    echo "<p style ='color:red;text-align:center;margin:10px 0px;'>Can't Delete the User Record</>";

}
mysqli_colos($conn);


?>
