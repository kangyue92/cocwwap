<?php
	var_dump($_SERVER);

	$url = 'http://10.103.242.154:8080/SSHDemo/mytest.action';
	//$data = array('key1' => 'value1', 'key2' => 'value2');
	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'GET',
	        //'content' => http_build_query($data),
	    ),
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	var_dump($result);


	$json = json_decode($result,TRUE);
	var_dump($json);

?>

