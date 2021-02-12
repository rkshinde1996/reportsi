<?php
	include_once 'config.php';

	$response = array('code' => 1, 'desc' => '');

	$name = postInput('name');
	$email = postInput('email');
	$mobile = postInput('mobile');
	$designation = postInput('designation');
	$message = postInput('message');
	$country = postInput('country');
	$subscription = postInput('subscription');

	if($name!="" && $mobile!=""){

		$formArray = array(
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'designation' => $designation,
            'message' => $message,
            'country' => $country,
            'subscription' => $subscription,
            'added_on' => $DATE,
        );
        $response = commonInsert('ri_enquiries_tbl', $formArray);
        
    }else{

        $response['code'] = 0;
        $response['desc'] = "Some fields are missing!";
    }
    echo json_encode($response);

?>