<?php
header("Content-type:text/html;charset=utf-8");
//定义路径常量
define('URL_WEBSITE','http://127.0.0.1');
//ADMIN
define('ADMIN_URL','/static/admin');
//Home
define('HOME_URL','/static');
//IMG
define('IMG_URL','/images');
//自定义信息跳转
function lee_mess($mess='',$src){
			if($mess==''){
				echo "<script type='text/javascript'>
				window.location.href='".$src."';
	  			</script>";
				exit();
			}else{
			if($src==''){
				echo "<script type='text/javascript'>
			window.alert('".$mess."');
			window.history.go(-1);
  			</script>";
			}else{
			echo "<script type='text/javascript'>
			window.alert('".$mess."');
			window.location.href='".$src."';
  			</script>";
			}
				}
			exit();
}

//处理文章标题字符
function lee_title($str,$max_length,$end_mark){
	if(mb_strlen($str,'utf-8')>$max_length){
		$str=mb_substr($str,0,$max_length,'utf-8').$end_mark;
	}
	return $str;
}

//输出print_r
function P($str){
	echo '<pre>';
	print_r($str);
	echo '</pre>';
	
}

// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
function check_verify($code, $id = ''){
	$verify = new \Think\Verify();
	return $verify->check($code, $id);
}