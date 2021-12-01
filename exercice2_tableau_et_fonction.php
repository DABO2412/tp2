<?php
function plusGrand($tab){
	if(empty($tab)){
		return null;
	}else{
	 echo max($tab);
	}
	
}
plusGrand(array('15', '14','45','6','13562'));

?>
