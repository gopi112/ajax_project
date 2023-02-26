<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	if(isset($_GET['checkid']) && $_GET['checkid'] > 0){

		$update_ch_id = $user_fun->htmlvalidation($_GET['checkid']);

		$condition0['u_id'] = $update_ch_id;
		$select_pre = $user_fun->select_assoc("user", $condition0);

		if($select_pre){

			$json['status'] = 0;
			$json['firstname'] = $select_pre['u_name'];
			$json['lastname'] = $select_pre['u_lname'];
			$json['email'] = $select_pre['u_email'];
			$json['mobile'] = $select_pre['u_mobile'];
			$json['address1'] = $select_pre['u_address1'];
			$json['address1'] = $select_pre['u_address2'];
			$json['city'] = $select_pre['u_city'];
			$json['state'] = $select_pre['u_state'];
			$json['pin'] = $select_pre['u_pin'];
			$json['country'] = $select_pre['u_country'];			
			$json['msg'] = "Success";

		}
		else{

			$json['status'] = 1;
			$json['firstname'] = "NULL";
			$json['lastname'] = "NULL";
			$json['email'] = "NULL";
			$json['mobile'] = "NULL";
			$json['address1'] = "NULL";
			$json['address2'] = "NULL";
			$json['city'] = "NULL";
			$json['state'] = "NULL";
			$json['pin'] = "NULL";
			$json['country'] = "NULL";
			$json['msg'] = "Fail";

		}

	}
	else{
			$json['status'] = 2;
			$json['firstname'] = "NULL";
			$json['lastname'] = "NULL";
			$json['email'] = "NULL";
			$json['mobile'] = "NULL";
			$json['address1'] = "NULL";
			$json['address2'] = "NULL";
			$json['city'] = "NULL";
			$json['state'] = "NULL";
			$json['pin'] = "NULL";
			$json['country'] = "NULL";
			$json['msg'] = "Invalid Values Passed";
	}
}
else
{
			$json['status'] = 3;
			$json['firstname'] = "NULL";
			$json['lastname'] = "NULL";
			$json['email'] = "NULL";
			$json['mobile'] = "NULL";
			$json['address1'] = "NULL";
			$json['address2'] = "NULL";
			$json['city'] = "NULL";
			$json['state'] = "NULL";
			$json['pin'] = "NULL";
			$json['country'] = "NULL";
			$json['msg'] = "Invalid Method Found";
}


echo json_encode($json);

?>
