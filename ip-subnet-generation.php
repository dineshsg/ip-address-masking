<?php
	foreach($allow_ip_address as $key => $value){
		$parts = explode('/',$value);
		$exponent = 32-$parts[1].'-';
		$count = pow(2,$exponent);
		$start = ip2long($parts[0]);
		$end = $start+$count;
		$ip_range = array_map('long2ip', range($start, $end) );
	}
?>
