<?php
include "config.php";
$post_id = $_GET['id'];
$cat_id = $_GET['catid'];

$sql1= "SELECT * FROM post WHERE post_id = {$post_id}";
$result = mysqli_query($conn,$sql1);
$row =mysqli_fetch_assoc($result);
unlink("upload/".$row['post_img']);



$sql = "DELETE FROM post WHERE post_id = {$post_id};";
$sql .="UPDATE category set post = post - 1 WHERE category_id = {$cat_id}";




if (mysqli_multi_query($conn,$sql)) {
 header ("LOCATION: {$hostname}/admin/post.php");

}else{
    echo"Query faild";
}
?>