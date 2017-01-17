<?php
	$test = file_get_contents('temp_test.html');
	$res = preg_match_all('#\w+(?=\})#',$test,$matches);
	
	//print_r($matches);

	$values = array('value1' => 'this is test', 'value2' => 'this is another test');


foreach ($values as $key => $value) {

	if(in_array($key, $matches[0])){		
		$test = preg_replace("#{".$key."}#", $values[$key], $test);		
	}

}
echo $test;
?>