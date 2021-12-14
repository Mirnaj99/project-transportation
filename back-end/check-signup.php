<?php 

include "db_conn.php";
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);


	function input_test($data1){
       $data1 = trim($data1);
	   $data1 = stripslashes($data1);
	   $data1 = htmlspecialchars($data1);
	   return $data1;
	}

	$signupemail = input_test($_POST['signupemail']);
	$signuppassword = input_test($_POST['signuppassword']);
	$re_password = input_test($_POST['re_password']);
	$name = input_test($_POST['name']);
    $username = input_test($_POST['username']);
    $phone = input_test($_POST['phone']);



	if (empty($signupemail)) {
		echo '<p>Email is required</p>';
	    ;}
		else if (!filter_var($signupemail, FILTER_VALIDATE_EMAIL)) {
			echo("Invalid email format");	}
			//strong password
			
		
	else if(empty($signuppassword)){
        echo("Password is required");
	    ;
	}
	$uppercase = preg_match('@[A-Z]@', $signuppassword);
			$lowercase = preg_match('@[a-z]@', $signuppassword);
			$number    = preg_match('@[0-9]@', $signuppassword);
			$specialChars = preg_match('@[^\w]@', $signuppassword);
			
		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($signuppassword) < 8) {
				echo("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");	 ;
			}
	else if(empty($re_password)){
        echo("Re Password is required");
	    ;
	}

	else if(empty($name)){
        echo("Name is required");
	    ;}
		else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) { echo("Only letters and white space allowed in Name");}
       
		else if($signuppassword !== $re_password){
            echo("The confirmation password  does not match");
            ;}
    else if(empty($username)){
            echo("UserName is required");
            ;}
        
        else if(empty($phone)){
                echo("Phone number is required")
                ;}

                else {
		
                    // distinct username
                    $sql4 = "SELECT * FROM tbluser WHERE phone='$phone' ";
                    $result4 = mysqli_query($conn, $sql4);
            
                    if (mysqli_num_rows($result4) > 0 /* or =1 */) {
                        echo("Phone number already exists");
                        ;
                    }
                
           

		
                // distinct username
                $sql3 = "SELECT * FROM tbluser WHERE username='$username' ";
                $result3 = mysqli_query($conn, $sql3);
        
                if (mysqli_num_rows($result3) > 0 /* or =1 */) {
                    echo("UserName already exists");
                    ;
                }
       
	else{

		// hashing the password

		// distinct email
	    $sql = "SELECT * FROM tbluser WHERE email='$signupemail' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0 /* or =1 */) {
			echo("Email already exists");
	        ;
		}
        else {
           $sql2 = "INSERT INTO tbluser (email, password, name, username, phone) VALUES('$signupemail', '$signuppassword', '$name', '$username', '$phone')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 echo("Your account has been created successfully");
	         ;
           }else {
	           	echo("unknown error occurred");
		        ;
           }
		}
	}
}
	
// }else{
// 	echo("Location: ../html/signup.php");
// 	;
// }