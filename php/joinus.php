<?php
extract($_POST);
$server_name="localhost";
$username="root";
$password="";
$database_name="pasaydhan";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysql_error());

}

if(isset($_POST['joinus_submit']))
{	
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $email = $_POST['email'];
	 $age = $_POST['age'];
	 $occupation = $_POST['occupation'];
	 $mobile_no = $_POST['mobile'];

	 $sql_query = "INSERT INTO joinus  (first_name,last_name,age,occupation,mobile_no,email)
	 VALUES ('$first_name','$last_name','$age','$occupation','$mobile_no','$email')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo ("<script language='javascript'>window.alert('New Details Entry inserted successfully !');</script>");
	 } 
	 else
     {
		echo "Error: " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>