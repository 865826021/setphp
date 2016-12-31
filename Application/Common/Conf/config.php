<?php
return array(
	//'配置项'=>'配置值'
	//启动smarty引擎
	'TMPL_ENGINE_TYPE'=>'Smarty',
	'TMPL_ENGINE_CONFIG'=>array(
			'plugins_dir'=>'./Application/Smarty/Plugins/',
	
	),
	// 开启路由
	'URL_ROUTER_ON'   => true,
	'URL_MODEL'          => '2',
	//'TMPL_EXCEPTION_FILE' => APP_PATH.'/Home/404.php',
	'URL_ROUTE_RULES'=>array(
			//正则案例 '/^c_(\d+)$/' => 'Home/Admin/Index?cid=:1'
			/*'news/:year/:month/:day' => array('News/archive', 'status=1'),
			'news/:id'               => 'News/read',
			'news/read/:id'          => '/news/:1',*/
			//'admin' => 'Home/Admin/Index?cid=:1'
			//正则路由 /home/index/category/cid/1
			//'lee'=> 'Home/Index/Index',

			
	),
	
		
	//伪静态JSP 仅应用于前台外观
	//'URL_HTML_SUFFIX'=>'jsp',
	//'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg|asp|aspx|null',  // URL禁止访问的后缀设
			
);