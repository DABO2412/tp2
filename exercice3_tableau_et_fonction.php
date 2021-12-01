<?php
$ret;
function verificationPWD($PWD){
   
    if(strlen($PWD) >= 8){
    	$ret="true";
    }else{
		$ret="false";
		}
			echo $ret;	
			return $ret;
}
    verificationPWD("mamedabo");
?>
