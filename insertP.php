<?php
 $con = mysqli_connect('localhost','root','football@1234');
 
 if(!$con)
	 { echo 'Not Connected To Server'; } 
 
 if (!mysqli_select_db ($con,'login')) 
	 
    { echo 'Database Not Selected'; }

if(isset($_POST["submit"]))
{
	
 $name = $_POST['name'];
 $father = $_POST['father'];
 $dob = $_POST['dob'];
 $age = $_POST['age'];
 $email = $_POST['email'];
 $tel = $_POST['tel'];
 $top = $_POST['top'];
 $pfrom = $_POST['pfrom'];
 $pto = $_POST['pto'];
 $cpass = $_POST['cpass'];
 $address = $_POST['address'];
 $pin = $_POST['pin'];
}
else{echo "submit error";
}

 $sql = "insert into newpass ( Name, father_husband, DOB, Age, Email, Telephone, Type_of_pass, peroid_from, peroid_to, conssestional_pass, Address, pin) values ('$name','$father','$dob','$age','$email','$tel','$top','$pfrom','$pto','$cpass','$address','$pin')";
 
 if (!mysqli_query($con,$sql))
	 
	 { echo 'Not Inserted'; } 
	 
 else 
    { echo 'Inserted Successfully'; }  
 
 header("refresh:0.11; url=indexP.html");
 
 ?>﻿