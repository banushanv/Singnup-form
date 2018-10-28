<?php
include 'database.php'; //insert database.php header files


if(isset($_POST['add'])){    //if a form has been add 
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$screenname = $_POST['screenname'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$dob = $year."-".$month."-".$day;
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$agree = $_POST['agree'];

    if ($password == $confirm_password && $agree == "agree") {
		$sql = "INSERT INTO `user`(`firstname`, `lastname`, `screenname`, `dob`, `gender`, `country`, `email`, `phone`, `password`) VALUES ('$firstname','$lastname','$screenname','$dob','$gender', '$country','$email','$phone','$password')";
	}else{
		echo("error");
	}
    if ($conn->query($sql) === TRUE) { //successfully insert connection
		echo("INSERT SUCCESSFULLY RECORD!!");
		} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>