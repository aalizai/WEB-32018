<?php 
$data= array(
'name' => $_POST['name'],
'lname' => $_POST['lname'],
'db' => $_POST['db'],
'uname' => $_POST['uname'],
'pass' => $_POST['pass'],
'email' => $_POST['email'],
'tel' =>$_POST['tel']
);
/*
$name = $_POST['name'];
$lname = $_POST['lname'];
$db = $_POST['db'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$email =$_POST['email'];
$tel =$_POST['tel'];
 * 
 */
//$filename = $_FILES['pic']['name'];
//$filename_t = $_FILES['pic']['tmp_name'];
//echo $filename;
//echo $filename_t;

$realname = "xyz_".time().".jpeg";
$file_upload=move_uploaded_file($_FILES['pic']['tmp_name'], "/Applications/MAMP/htdocs/Class_ex/interface/users/pic/$realname");
$patt_name ="/^[A-Z][a-z]{2,}\s?[a-z]*$/";
if (preg_match($patt_name, $data['name'])) {
if ($file_upload) {
	include '/Applications/MAMP/htdocs/Class_ex/data/class.crud_user.php';
	$obj = new crud_user();
	$obj->create_user($data);
	
}	
} else {
	header("location:http://localhost/Class_ex/interface/users/create_user.php?name=1");
}
