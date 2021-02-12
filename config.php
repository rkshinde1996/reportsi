<?php

define('LIVE', 0);
define('SITE_URL', 'https://www.reportsinsights.com/');
$DATE = date('Y-m-d H:i:s');

/*==========================
	method to base_url
===========================*/
if(!function_exists('base_url')){

	function base_url( $str = '' ){

		$url_details = $_SERVER['HTTP_HOST'];
		$script_name = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
		$url_details.= $script_name;

		$final_url = 'http://'.$url_details;

		$final_url.= $str;

		return $final_url;
	}
}

/*============================
     method to db credentials
=============================*/
function db_credentials(){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "reportsinsights";

	$cre_arr = array(
		'servername' => $servername,
		'username' => $username,
		'password' => $password,
		'dbname' => $dbname,
	);
	return $cre_arr;
}

/*==========================
	method to db config
===========================*/
function db_config(){

	// Create connection
	$db_credentials = db_credentials();
	extract($db_credentials);
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	
	    $error = 'Error while connecting to database!';
		$res = array('code' => '0', 'desc' => $error);
	
	}else{

		// return $conn;
		$res = array('code' => '1', 'result' => $conn);
	}
	return $res;
}



/*============================
	method to common Insert
=============================*/
function commonInsert($table, $insert_array){

	$conn_result = db_config(); //database configuration function

	if($conn_result['code'] == 1){

		$conn = $conn_result['result'];

		$res = array('code' => '1', 'result' => array());

	    $field = array_keys($insert_array);
		$data = array_values($insert_array);

	    $field_values= implode(',',$field);
	    $data_values='';
	    foreach($data as $row){
	    	$data_values.= "'$row',";
	    }

	    $data_values = rtrim($data_values, ',');
	    // echo $data_values;die;
	    // $data_values=implode(',',$data);

	    $sql = "INSERT into". " ".$table." ( ".$field_values. " ) VALUES (".$data_values.")";
	        
	    if ($conn->query($sql) === TRUE) {

			$last_id = $conn->insert_id;
		    $msg = "your details has been submitted, we call get back to you soon!";
			$res = array('code' => '1', 'last_inserted_id' => $last_id, 'desc' => $msg);

		} else {

		    echo "Error: " . $sql . "<br>" . $conn->error;
		    $error = 'Error while inserting data';

			$res = array( 'code' => '0', 'desc' => $error );
		}

    }else{

		$res = array('code' => '0', 'desc' => $conn_result['desc']);
			
	}

    $res = json_encode($res);
    $res = json_decode($res);
	return $res;
}


/*============================
	method to get post input
=============================*/
if(!function_exists('postInput')){

	function postInput($field_name){

		$field_value = isset($_POST[$field_name]) ? $_POST[$field_name] :'';
		
		if(is_array($field_value)){

			$field_name = count($field_value > 0) ? $field_value : array();
		}else{

			$field_name = trim(stripslashes($field_value));
		}
		// $field_name = mysql_real_escape_string($field_name);
		return $field_name;
	}
}

/*============================
	method to get input
=============================*/
if(!function_exists('getInput')){

	function getInput($field_name){

		$field_value = isset($_GET[$field_name]) ? $_GET[$field_name] :'';
		
		$field_name = trim(stripslashes($field_value));

		return $field_name;
	}
}
?>