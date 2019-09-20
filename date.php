<?php
	echo date('F,jS,Y');
	echo '</br>';
	echo date('F,jS,Y',strtotime("+1 month"));
	echo '</br>';
	echo date('F,jS,Y',strtotime("-1 month"));
	echo '</br>';
	var_dump(checkdate(29,2,2015));


?>