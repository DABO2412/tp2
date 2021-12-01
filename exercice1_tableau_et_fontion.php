<?php
function dernierElement($tab){
	if(empty($tab)){
		return null;
	}else{
	 echo end($tab);
	}
	
}
dernierElement(array('a', '258','c','23','25'));
//dernierElement(array());
?>
