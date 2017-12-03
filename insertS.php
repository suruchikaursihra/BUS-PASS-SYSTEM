<?php
 $con = mysqli_connect('localhost','root','football@1234');
 
 if(!$con)
	 { echo 'Not Connected To Server'; } 
 
 if (!mysqli_select_db ($con,'login')) 
	 
    { echo 'Database Not Selected'; }

if(isset($_POST["submit"]))
{
	
 $Name = $_POST['username'];
 $Email = $_POST['email'];
}
else{echo "submit error";
}
 $sql = "insert into signup (username,Email) values ('$Name','$Email')";
 
 if (!mysqli_query($con,$sql))
	 
	 { echo 'Not Inserted'; } 
	 
 else 
    { echo 'Inserted Successfully'; }  
 
# header("refresh:0.11; url=bus pass system cloud computing/index.html");
 
 ?>﻿