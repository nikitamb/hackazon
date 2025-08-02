<?php

return array(
	'default' => array(
		'user'=>'hackazon',
		'password' => 'hackazon',
		'driver' => 'PDOV',

		//'Connection' is required if you use the PDO driver
		'connection'=>'mysql:host=127.0.0.1;dbname=hackazon',

		// 'db' and 'host' are required if you use Mysql driver
		'db' => 'hackazon',
		'host' => '127.0.0.1',
        'port' => 3306
	)
);


/* note
 * mysql> create database hackazon;
 * mysql> GRANT ALL ON hackazon.* TO hackazon@'localhost' IDENTIFIED BY 'password';
*/
