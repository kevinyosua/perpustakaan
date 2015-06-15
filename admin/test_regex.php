<?php

    function get_numerics ($str) {
        preg_match_all('/\D+/', $str, $matches);
        return $matches[0];
    }

    $one = 'one two 4 three (5 four five)';
    $two = 'one two 2 three';
    $three =  'one two 12 three (3 four)';
    $four = 'one two 3 three (13 four five)';

    $arr=get_numerics($one);
	for($i=0; $i<sizeof($arr); $i++){
		echo $arr[$i];
	}
	$satu="00001";
	echo strlen($satu);
	
?>