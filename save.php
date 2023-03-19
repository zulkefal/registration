<?php
include 'database.php';
$gender=$_POST['gender'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pswd=$_POST['pswd'];
$bdate=$_POST['bdate'];
$neighbour=$_POST['neighbour'];
$sell=$_POST['sell'];
$badd=$_POST['badd'];
$bud=$_POST['bud'];
$group=$_POST['group'];

$sql ="INSERT INTO register (`title`,`fname`,`lname`,`email`,`password`,`birthdate`,`neighbourhood`,`seller`,`baddress`,`budget`,`groups`)
VALUES ('".$gender."','".$fname."','".$lname."','".$email."','".$pswd."','".$bdate."','".$neighbour."','".$sell."','".$badd."','".$bud."','".$group."')";
 if (mysqli_query($conn, $sql)) {
	echo json_encode(array("statusCode"=>200));
	}

else {
	echo json_encode(array("statusCode"=>201));
}

mysqli_close($conn);

?>
