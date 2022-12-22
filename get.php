<?php

function getEmployees(){
	$url = 'https://dummy.restapiexample.com/api/v1/employees';

	$opts = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"Accept-language: en\r\n" .
				  "Cookie: foo=bar\r\n"
	  )
	);
	
	$context = stream_context_create($opts);
	
	/* Sends an http request to www.example.com
	   with additional headers shown above */
	$result = file_get_contents($url, false, $context);
		
	return count(json_decode($result)->data);
	
}

function addEmployee(){
	$url = 'https://dummy.restapiexample.com/api/v1/create';
	$data = array('name' => 'test', 'salary' => '123', 'age' => '123');
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	
	return $result;
}

var_dump(addEmployee());
?>