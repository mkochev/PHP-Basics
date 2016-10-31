<?php 
	if ($_POST) 
	{
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$phone = trim($_POST['phone']);
		$gender = trim($_POST['sex']);
		$bdate = $_POST['birthdate'];
		$nation = $_POST['nation'];
		$company = trim($_POST['company']);
		$from = $_POST['from'];
		$to = $_POST['to'];
		$pclang = $_POST['pc-language'];
		$pcskill = $_POST['pc-skill'];
		$language = $_POST['lang'];
		$compreh = $_POST['compr-level'];
		$reading = $_POST['read-level'];
		$writing = $_POST['write-level'];
		$drivers = $_POST['category'];

		//validate 
		if (!(ctype_alpha($fname)) || mb_strlen($fname) <= 2 || mb_strlen($fname) >= 20) {
			$fname = "Please enter valid first name!";
		}

		if (!(ctype_alpha($lname)) || mb_strlen($lname) <= 2 || mb_strlen($lname) >= 20) {
			$lname ="Please enter valid last name!";
		}

		$length = count($language);
		for ($i = 0; $i < $length; $i++ ) {
			if (!(ctype_alpha($language[$i])) || mb_strlen($language[$i]) <= 2 || mb_strlen($language[$i]) >=20 )
			$language[$i] = "Please enter a valid language!";
		}
		
		if(!(ctype_alnum($company)) || mb_strlen($company) <= 2 || mb_strlen($company) >=20 ) {
			$company = "Please enter a valid company!";
		}

		if (preg_match('/^[0-9 \' \'+-]+$/', $phone) !== 1) {
        	$phone = 'Please enter a valid Phone Number!';
    	}

    	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
    		$email = "Please enter a valid email!";
    	}
	}
	


?>