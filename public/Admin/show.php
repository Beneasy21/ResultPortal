<?php
require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1';
$term = "1";
echo $id;
echo "</br>";

$arm = "1";
$studClass = "3";



$comment = find_comments_by_id_and_term($id, $term);



$result = fetch_students_by_class_and_arm($studClass, $arm);
while($student = mysqli_fetch_assoc($result)){
	echo $student['studName']."</br>";	
	//mysqli_free_result($result);
}



echo "Comment Id: " .h($comment['commId']) ."</br>";
echo "House Parent Says: " .h($comment['houseParent']) ."</br>"; 