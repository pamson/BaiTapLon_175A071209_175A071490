<?php
session_start();
 
	$username=$_POST['username'];
	$password=$_POST['password'];
	include 'connect.php';
	$sql="SELECT * FROM  account  WHERE UserName = '$username' and PassWord ='$password'";
	$result=mysqli_query($connect,$sql);
		if(mysqli_num_rows($result)>0)
		{
            $row=mysqli_fetch_assoc($result);
            
			$hasspw=password_hash($password,PASSWORD_DEFAULT);
			if(password_verify($password,$hasspw)){
			
				$_SESSION['username'] = $username;
				$_SESSION['lv'] = $row['Role'];
				$_SESSION['name'] = $row['Name'];
				echo '1';
			}
			else{
                echo '0';
            }
		}
	mysqli_close($connect);
	mysqli_free_result($result); 

?>
