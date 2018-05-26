<?php
     
include "connection.php";

$name 		= $_POST['firstname'];
$name1 		= $_POST['fathername'];
$name2 		= $_POST['lastname'];
$e		= $_POST['email'];
$name4		= $_POST['dob'];
$name3		= $_POST['username'];
$pass 		= md5($_POST['password']);

$p= $_POST['phone'];
$s = $_POST['state'];
$occ = $_POST['occupation'];
$age = $_POST['age'];

if(!$name || !$name2){
$error="Please fill empty fields";
include"student_reg.php";
exit();
}



$sq = mysql_query('SELECT username FROM login WHERE username="'.$_POST['username'].'"');
$exist = mysql_num_rows($sq);
	
		if($exist==1){
		$nam="<center><h4><font color='#FF0000'>The username already exist, please select another.</h4></center></font>";
		unset($id);
		include('student_reg.php');
		exit();
		}		



$sql = 'INSERT INTO student(firstname,fathername,lastname,dob,age,email,username,state,occupation,phone)
         VALUES("'.$_POST['firstname'].'","'.$_POST['fathername'].'","'.$_POST['lastname'].'","'.$_POST['dob'].'","'.$_POST['age'].'","'.$_POST['email'].'","'.$_POST['username'].'","'.$_POST['state'].'","'.$_POST['occupation'].'","'.$_POST['phone'].'")';
         
$sql2 = 'INSERT INTO login(username,password)
         VALUES("'.$_POST['username'].'","'.md5($_POST['password']).'")';           

$result = mysql_query($sql);
$result2 = mysql_query($sql2);

	if(!$result && !$result2){
	die("Error on mysql query".mysql_error());
	}
	else{
	header("location: login.php");
	}


           
 ?>

