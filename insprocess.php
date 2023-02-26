<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['firstname'])
	 && isset($_POST['lastname'])
	 && isset($_POST['email'])
	 && isset($_POST['mobile'])
	 && isset($_POST['address1'])
	 && isset($_POST['address2'])
	 && isset($_POST['city'])
	 && isset($_POST['state'])
	 && isset($_POST['country'])
	 && isset($_POST['pincode']))
	 {

		$firstname = $user_fun->htmlvalidation($_POST['firstname']);
		$lastname = $user_fun->htmlvalidation($_POST['lastname']);
		$email = $user_fun->htmlvalidation($_POST['email']);
		$mobile = $user_fun->htmlvalidation($_POST['mobile']);
		$address1 = $user_fun->htmlvalidation($_POST['address1']);
		$address2 = $user_fun->htmlvalidation($_POST['address2']);
		$city = $user_fun->htmlvalidation($_POST['city']);
		$state = $user_fun->htmlvalidation($_POST['state']);
		$country = $user_fun->htmlvalidation($_POST['country']);
		$pin = $user_fun->htmlvalidation($_POST['pincode']);



		if((!preg_match('/^[ ]*$/', $firstname))
		&& (!preg_match('/^[ ]*$/', $lastname))
		&& (!preg_match('/^[ ]*$/', $email))
		&& (!preg_match('/^[ ]*$/', $mobile))
		&& (!preg_match('/^[ ]*$/', $address1))
		&& (!preg_match('/^[ ]*$/', $address2))
		&& (!preg_match('/^[ ]*$/', $city))
		&& (!preg_match('/^[ ]*$/', $state))
		&& (!preg_match('/^[ ]*$/', $country))
		&& (!preg_match('/^[ ]*$/', $pin))
		)
		{

			$field_val['u_name'] = $firstname;
			$field_val['u_lname'] = $lastname;
			$field_val['u_email'] = $email;
			$field_val['u_mobile'] = $mobile;
			$field_val['u_address1'] = $address1;
			$field_val['u_address2'] = $address2;
			$field_val['u_city'] = $city;
			$field_val['u_state'] = $state;
			$field_val['u_country'] = $country;
			$field_val['u_pin'] = $pin;


			$insert = $user_fun->insert("user", $field_val);

			if($insert){
				$json['status'] = 101;
				$json['msg'] = "Data Successfully Inserted";
			}
			else{
				$json['status'] = 102;
				$json['msg'] = "Data Not Inserted";
			}

		}
		else{

			if(preg_match('/^[ ]*$/', $firstname)){

				$json['status'] = 103;
				$json['msg'] = "Please Enter firstname";

			}

			if(preg_match('/^[ ]*$/', $lastname))
			{

				$json['status'] = 110;
				$json['msg'] = "Please Enter lastname";

			}

			if(preg_match('/^[ ]*$/', $email))
			{

				$json['status'] = 104;
				$json['msg'] = "Please Enter Email";

			}

			if(preg_match('/^[ ]*$/', $mobile))
			{

				$json['status'] = 111;
				$json['msg'] = "Please Enter Mobile number";

			}

			if(preg_match('/^[ ]*$/', $address1))
			{

				$json['status'] = 112;
				$json['msg'] = "Please Enter address1";

			}

			if(preg_match('/^[ ]*$/', $address2))
			{

				$json['status'] = 113;
				$json['msg'] = "Please Enter address2";

			}

			if(preg_match('/^[ ]*$/', $city))
			{

				$json['status'] = 114;
				$json['msg'] = "Please Enter city";

			}

			if(preg_match('/^[ ]*$/', $state))
			{

				$json['status'] = 115;
				$json['msg'] = "Please Enter State";

			}

			if(preg_match('/^[ ]*$/', $pin))
			{

				$json['status'] = 116;
				$json['msg'] = "Please Enter pincode";

			}


			if(preg_match('/^[ ]*$/', $country)){

				$json['status'] = 105;
				$json['msg'] = "Please Select Country";

			}



		}

	}
	else{

		$json['status'] = 108;
		$json['msg'] = "Invalid Values Passed";

	}

}
else{

	$json['status'] = 109;
	$json['msg'] = "Invalid Method Found";

}


echo json_encode($json);

?>
