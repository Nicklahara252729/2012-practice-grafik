<?php

	//defined('ROOT') or die('');
	
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','satusampe250599');
	define('db_name','2012_web_native_grafik');
	
	mysql_connect(db_host,db_user,db_pass);
	mysql_select_db(db_name);
	
?>
