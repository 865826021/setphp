<?php
return array(
	//'配置项'=>'配置值'
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'setphp',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  'root',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'set_',    // 数据库表前缀
	
	//伪静态
	'URL_HTML_SUFFIX'=>'', //伪静态后缀为空
	'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg|asp|aspx|jsp|undefined|null|php',  // URL禁止访问的后缀
);