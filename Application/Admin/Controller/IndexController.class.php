<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	//成员属性
	public $pageone=5; //设置文章部分每页显示的条目
	//构造方法
	public function __construct(){
		parent::__construct();
		
		//分配URL URL变量命名采用全小写
		$this->assign('dashboardurl',U('Admin/Index/index')); //dashboard
		$this->assign('seturl',U('Admin/Index/set')); //设置->基本设置
		$this->assign('postallurl',U('Admin/Index/postall')); //文章->所有文章
		$this->assign('postaddurl',U('Admin/Index/postadd')); //文章->写文章
		$this->assign('postcateurl',U('Admin/Index/postcate')); //文章->分类目录

		$this->assign('menucateurl',U('Admin/Index/menucate')); //菜单->菜单分类
		$this->assign('menuaddurl',U('Admin/Index/menuadd')); //菜单->菜单添加
		//url
		$this->assign('menuliurl',U('Admin/Index/menuli')); //菜单->菜单列表
		$this->assign('userliurl',U('Admin/Index/userli')); //用户->用户列表
		$this->assign('useraddurl',U('Admin/Index/useradd')); //用户->用户添加
		
		
	}
	//成员方法

    public function index(){  //dashboard
    	//cotrollerSetup
    	$this->assign('controllerName','SETPHP');
    	$this->display();
    }
    
    public function set(){ //设置->基本设置
    	$optionsdb=D('options');
    	$options=$optionsdb->select();
    	if($_POST){
    		foreach($_POST as $k=>$v){
    			$res=$optionsdb->where(array('name'=>$k))->setField('val',$v);
    			if($res==1){
    				$ret=1;
    			}
    		}
    		if($ret==1){
    			lee_mess('更新完成',U());
    		}else{
    			lee_mess('内容未改动');
    		}
    		
    	}
    	//P($options);
    	$this->assign('options',$options);
    	//cotrollerSetup
    	$this->assign('controllerName','基本设置');
    	$this->assign('navSelectNo',1);
    	$this->display();
    }
    
    public function postall($pid=0){ //文章->所有文章
    	$Mpostcate=new \Admin\Model\PostcateModel;
    	$Mposts=new \Admin\Model\PostsModel;
    	//识别PID对文章进行读取
    	if($pid==0){ //pid为0查询全部 -> 默认为0
    		$postli=$Mposts->Mquery('','',$this->pageone); //posts query 每页显示5条
    		//P($postli);
    	}else{ //pid不为0 查询特定分类显示
    		$postcatenow=$Mpostcate->Mfind($pid); //postcate find
    		//P($postcatenow);
    		$postli=$Mposts->Mquery($pid,'',$this->pageone); //posts query 每页显示5条
    		$this->assign('postcatenow',$postcatenow);
    	}
    	foreach($postli['list'] as $k=>$v){ //处理文章字段
    		$postli['list'][$k]['time']=date('Y-m-d',$v['time']); //转换时间
    		$postli['list'][$k]['pinfo']=$Mpostcate->Mfind($v['pid']); //获取postcate信息
    	}
    	$this->assign('postli',$postli['list']); //输出列表
    	$this->assign('pageli',$postli['page']); //输出分页
    	//分类目录读取
    	$postcateinfo=$Mpostcate->Mcateshow(); //show postcate list
    	//P($postcateinfo);
    	$this->assign('postcateinfo',$postcateinfo);
    	
    	//url
    	$this->assign('postdeleteurl',U('Admin/Index/postdelete')); //文章->所有文章->删除文章
    	$this->assign('postmodifyurl',U('Admin/Index/postmodify')); //文章->所有文章->编辑文章
    	$this->assign('posthuishouurl',U('Admin/Index/posthuishou')); //文章->所有文章->文章回收站
    	//cotrollerSetup
    	$this->assign('controllerName','所有文章');
    	$this->assign('navSelectNo',2);
    	$this->display();
    }
    
    public function postadd(){ //文章->写文章
    	if($_POST){ //文章添加入库
    		$_POST['time']=time(); //当前时间
    		//P($_FILES);
    		if($_FILES['thumbnail']['name']){
    		$config = array(
	        'maxSize'    =>    3145728,
	        'rootPath'   =>    './images/',
	        'savePath'   =>    'posts/',
	        'saveName'   =>    time().'_'.mt_rand(100,999),
	        'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
	        'autoSub'    =>    true,
	        'subName'    =>    array('date','Ymd'),
	    );
	   	 	$upload = new \Think\Upload($config);// 实例化上传类
	   	 	// 上传单个文件
	   	 	$info = $upload->uploadOne($_FILES['thumbnail']);
	   	 	if(!$info) {// 上传错误提示错误信息
	   	 		lee_mess($upload->getError());
	   	 	}else{// 上传成功 获取上传文件信息
	   	 		$_POST['thumbnail']=$info['savepath'].$info['savename'];
	   	 	}
	   	 	
    		}
    	 	$Mposts=new \Admin\Model\PostsModel;
    	 	$res=$Mposts->Madd();
    	 	if($res){
    	 		lee_mess('添加完成',U('Admin/Index/postmodify',array('id'=>$res)));
    	 	}else{
    	 		lee_mess('添加失败');
    	 	}
    		
    	 }
    	 
    	//show postcate list
    	$Mpostcate=new \Admin\Model\PostcateModel;
    	$postcateinfo=$Mpostcate->Mcateshow(); //show postcate list
    	$this->assign('postcateinfo',$postcateinfo);
    	 
    	//cotrollerSetup
    	$this->assign('controllerName','写文章');
    	$this->assign('navSelectNo',3);
    	$this->display();
    }
    
    public function postmodify($id){
    	//show postcate list
    	$Mpostcate=new \Admin\Model\PostcateModel;
    	$postcateinfo=$Mpostcate->Mcateshow(); //show postcate list
    	$this->assign('postcateinfo',$postcateinfo);
    	
    	//post
    	$Mposts=new \Admin\Model\PostsModel;
    	$postinfo=$Mposts->find($id);
    	$postinfo['content']=htmlspecialchars_decode($postinfo['content']);
    	$this->assign('postinfo',$postinfo);
    	
    	//postcatenow
    	$postcatenow=$Mpostcate->Mfind($postinfo['pid']);
    	$this->assign('postcatenow',$postcatenow);
    	
    	if($_POST){
    		if($_FILES['thumbnail']['name']){
    			$config = array(
    					'maxSize'    =>    3145728,
    					'rootPath'   =>    './images/',
    					'savePath'   =>    'posts/',
    					'saveName'   =>    time().'_'.mt_rand(100,999),
    					'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
    					'autoSub'    =>    true,
    					'subName'    =>    array('date','Ymd'),
    			);
    			$upload = new \Think\Upload($config);// 实例化上传类
    			// 上传单个文件
    			$info = $upload->uploadOne($_FILES['thumbnail']);
    			if(!$info) {// 上传错误提示错误信息
    				lee_mess($upload->getError());
    			}else{// 上传成功 获取上传文件信息
    				$_POST['thumbnail']=$info['savepath'].$info['savename'];
    			}
    			 
    		}
    		$_POST['ctime']=time();
    		//P($_POST);
    		$res=$Mposts->Mupdate($_POST,$id);
    		if($res){
    			lee_mess('修改成功',U('',array('id'=>$id)));
    		}else{
    			lee_mess('修改失败');
    		}
    	}
    	
    	//cotrollerSetup
    	$this->assign('controllerName','编辑文章');
    	$this->assign('navSelectNo',2);
    	$this->display();
    }
    
    public function postdelete($delid=0,$pid=0){ 
    		$Mposts=new \Admin\Model\PostsModel;
    		$res=$Mposts->Mhuishou($delid,1); //移动到回收站
    		if($res){
    			if($pid==0){ //返回分类目录URL
    				lee_mess('删除成功,移动到文章回收站',U('Admin/Index/postall'));
    			}else{
    				lee_mess('删除成功,移动到文章回收站',U('Admin/Index/postall',array('pid'=>$pid)));
    			}
    			
    		}else{
    			lee_mess('删除失败');
    		}
    }
    
    public function posthuishou($state='',$id=''){ //state(1恢复文章 2彻底删除)
    	$Mpostcate=new \Admin\Model\PostcateModel;
    	$Mposts=new \Admin\Model\PostsModel;
    	
    	if($state==1){ //恢复文章
    		$res=$Mposts->Mhuishou($id,2);
    		if($res){
    			lee_mess('恢复成功',U());
    		}else{
    			lee_mess('恢复失败');
    		}
    	}else if($state==2){
    		$res=$Mposts->Mdelete($id);
    		if($res){
    			lee_mess('删除成功',U());
    		}else{
    			lee_mess('删除失败');
    		}
    	}
    	
    	
    	
    	$postli=$Mposts->Mquery('',1,$this->pageone); //posts query 每页显示条数为3
    	
    	foreach($postli['list'] as $k=>$v){ //处理文章字段
    		$postli['list'][$k]['time']=date('Y-m-d',$v['time']); //转换时间
    		$postli['list'][$k]['pinfo']=$Mpostcate->Mfind($v['pid']); //获取postcate信息
    	}
    	
    	$this->assign('postli',$postli['list']); //输出列表
    	$this->assign('pageli',$postli['page']); //输出分页
    	
    	//cotrollerSetup
    	$this->assign('controllerName','文章回收站');
    	$this->assign('navSelectNo',2);
    	$this->display();
    }
    
    public function postcate(){ //文章->分类目录
    	//show postcate list
    	$Mpostcate=new \Admin\Model\PostcateModel;
    	$postcateinfo=$Mpostcate->Mcateshow(); //show postcate list
    	$this->assign('postcateinfo',$postcateinfo);

    	//category public url
    	$this->assign('postcateaddurl',U('Admin/Index/postcateadd')); //文章->分类目录->添加分类目录
    	$this->assign('postcatesorturl',U('Admin/Index/postcatesort'));
    	$this->assign('postcatedeleteurl',U('Admin/Index/postcatedelete'));
    	$this->assign('postcatemodifyturl',U('Admin/Index/postcatemodify'));
    	//cotrollerSetup
    	$this->assign('controllerName','分类目录');
    	$this->assign('navSelectNo',4);
    	$this->display();
    }
    
    public function postcateadd(){ //文章->分类目录::添加
    	if($_POST){
    		$_POST['pid']= !empty($_POST['pid']) ? $_POST['pid'] : 0;
    		if(empty($_POST['name'])){
    			lee_mess('分类名称不得为空');
    			exit();
    		}
    		$Mpostcate=new \Admin\Model\PostcateModel;
    		$res=$Mpostcate->Madd();
    		if($res){
    			lee_mess('添加分类目录成功',U('Admin/Index/postcate'));
    		}else{
    			lee_mess('系统错误');
    		}
    	}
    	
    }
    
    public function postcatesort(){ //文章->分类目录::更新排序
    	if($_POST){
    		$Mpostcate=new \Admin\Model\PostcateModel;
    		foreach($_POST['sort'] as $k=>$v){
    			$res=$Mpostcate->MsetField('sort',$k,$v);
    			if($res==1){
    				$ret=1;
    			}
    		}
    		if($ret==1){
    			lee_mess('更新排序成功',U('Admin/Index/postcate'));
    		}else{
    			lee_mess('排序未改动');
    		}
    	}
    }
    
    public function postcatedelete($cid=0){ //文章->分类目录::删除分类
    	$Mpostcate=new \Admin\Model\PostcateModel;
    	$res=$Mpostcate->Mdelete($cid);
    	if($res){
    		lee_mess('删除成功',U('Admin/Index/postcate'));
    	}else{
    			lee_mess('系统错误');
    		}
    }
    
    public function postcatemodify(){ //文章->分类目录::修改
    	if($_POST){
    		//P($_POST);
    		$Mpostcate=new \Admin\Model\PostcateModel;
    		if($_POST['pid']=='no'){
    			//不修改父级别 只修改名字
    			$res=$Mpostcate->MsetField('name',$_POST['cid'],$_POST['name']);
    			if($res){
    				lee_mess('修改成功',U('Admin/Index/postcate'));
    			}else{
    				lee_mess('未改动');
    			}
    		}else{
    			//修改父级别和名字
    			$res=$Mpostcate->Mupdate(array('name'=>$_POST['name'],'pid'=>$_POST['pid']),$_POST['cid']);
    			if($res){
    				lee_mess('修改成功',U('Admin/Index/postcate'));
    			}else{
    				lee_mess('未改动');
    			}
    		}
    	}
    }
    
    //菜单
    public function menucate(){ //菜单->菜单分类
    	$Mmenucate=new \Admin\Model\MenucateModel;
    	$menucate=$Mmenucate->Mquery();
    	$this->assign('menucate',$menucate);
    	//URL
    	$this->assign('menucateaddurl',U('Admin/Index/menucateadd')); //菜单->菜单分类->添加菜单
    	$this->assign('menucatemodifyurl',U('Admin/Index/menucatemodify'));//菜单->菜单分类->修改分类名
    	$this->assign('menucatedeleteurl',U('Admin/Index/menucatedelete')); //菜单->菜单分类->删除菜单
    	//cotrollerSetup
    	$this->assign('controllerName','菜单分类');
    	$this->assign('navSelectNo',7);
    	$this->display();
    }
    
    public function menucateadd(){ //菜单->菜单分类->添加菜单
    	if($_POST){
    		$Mmenucate=new \Admin\Model\MenucateModel;
    		$res=$Mmenucate->Madd();
    		if($res){
    			lee_mess('添加菜单分类成功',U('Admin/Index/menucate'));
    		}else{
    			lee_mess('添加菜单分类失败');
    		}
    	}
    }
    
    public function menucatemodify(){ //菜单->菜单分类->修改菜单
    	if($_POST){
    		$Mmenucate=new \Admin\Model\MenucateModel;
    		$res=$Mmenucate->Msetfield('name',$_POST['cid'],$_POST['name']);
    		if($res){
    			lee_mess('修改成功',U('Admin/Index/menucate'));
    		}else{
    			lee_mess('未改动');
    		}
    	}
    	
    }
    
    public function menucatedelete($cid=0){ //菜单->菜单分类->删除菜单
    	$Mmenucate=new \Admin\Model\MenucateModel;
    	$res=$Mmenucate->Mdelete($cid);
    	if($res){
    		lee_mess('删除成功',U('Admin/Index/menucate'));
    	}else{
    		lee_mess('系统错误');
    	}
    }
    
    public function menuadd($cid=1){ //菜单->添加菜单(default:未分类菜单)
    	if($_POST){
    		$Mmenu=new \Admin\Model\MenuModel;
    		$res=$Mmenu->Madd();
    		if($res){
    			lee_mess('添加成功',U('Admin/Index/menuadd',array('cid'=>$cid)));
    		}else{
    			lee_mess('添加失败');
    		}
    	}
    	$Mmenucate=new \Admin\Model\MenucateModel;
    	$menucateinfo=$Mmenucate->Mquery();
    	$this->assign('menucateinfo',$menucateinfo);
    	if($cid){
    		$menucatenow=$Mmenucate->Mfind($cid);
    		$this->assign('menucatenow',$menucatenow);
    	}
    	//url
    	$this->assign('menulinowurl',U('Admin/Index/menuli',array('cid'=>$cid)));
    	//cotrollerSetup
    	$this->assign('controllerName','添加菜单');
    	$this->assign('navSelectNo',6);
    	$this->display();
    }
    
    public function menuli($cid=1){ //CID默认为1
    	//菜单分类处理
    	$Mmenucate=new \Admin\Model\MenucateModel;
    	$Mmenu=new \Admin\Model\MenuModel;
    	$menucatenow=$Mmenucate->Mfind($cid);
    	$menucateinfo=$Mmenucate->Mquery();
		$this->assign('menucatenow',$menucatenow);
		$this->assign('menucateinfo',$menucateinfo);
		//菜单处理
		$menuli=$Mmenu->Mquery($cid);
		foreach($menuli as $k=>$v){
			$menuli[$k]['pinfo']=$Mmenucate->Mfind($v['cid']); //将菜单分类信息载入到菜单
		}
		//P($menuli);
		$this->assign('menuli',$menuli);
		//URL
		$this->assign('menulisorturl',U('Admin/Index/menulisort'));
		$this->assign('menulideleteurl',U('Admin/Index/menulidelete',array('cid'=>$cid)));
		$this->assign('menulimodifyurl',U('Admin/Index/menulimodify'));
    	//cotrollerSetup
    	$this->assign('controllerName','菜单列表');
    	$this->assign('navSelectNo',5);
    	$this->display();
    }
    
    public function menulisort(){ //菜单排序
    	if($_POST){
    		$Mmenu=new \Admin\Model\MenuModel;
    		foreach($_POST['sort'] as $k=>$v){
    			$res=$Mmenu->Msetfield('sort',$k,$v);
    		if($res==1){
    				$ret=1;
    			}
    		}
    		if($ret==1){
    			lee_mess('更新排序成功',U('Admin/Index/menuli',array('cid'=>$_POST['cid'])));
    		}else{
    			lee_mess('排序未改动');
    		}	
    	}
    }
    
    public function menulidelete($id=0,$cid=0){
    	if($id){
    		$Mmenu=new \Admin\Model\MenuModel;
    		$res=$Mmenu->delete($id);
    		if($res){
    			lee_mess('删除成功',U('Admin/Index/menuli',array('cid'=>$cid)));
    		}else{
    			lee_mess('删除失败');
    		}
    	}else{
    		lee_mess('删除失败');
    	}
    }
    
    public function menulimodify(){
    	if($_POST){
    		$Mmenu=new \Admin\Model\MenuModel;

    		if($_POST['cid']=='no'){
    			//不修改父级别 只修改名字/超链接
    			$res=$Mmenu->Mupdate(array('name'=>$_POST['name'],'url'=>$_POST['urlmodify']),$_POST['id']);
    			if($res){
    				lee_mess('修改成功',U('Admin/Index/menuli',array('cid'=>$_POST['getcid'])));
    			}else{
    				lee_mess('未改动');
    			}
    		}else{
    			//修改父级别/名字/超链接
    			$res=$Mmenu->Mupdate(array('name'=>$_POST['name'],'url'=>$_POST['urlmodify'],'cid'=>$_POST['cid']),$_POST['id']);
    			if($res){
    				lee_mess('修改成功',U('Admin/Index/menuli',array('cid'=>$_POST['getcid'])));
    			}else{
    				lee_mess('未改动');
    			}
    		}
    	}
    }
    
    public function userli(){
    	$Musers=new \Admin\Model\UsersModel;
    	$users=$Musers->Mselectfenye($this->pageone);
    	foreach($users['list'] as $k=>$v){
    		$users['list'][$k]['register_time']=date('Y-m-d',$v['register_time']);
    		if($v['login_time']!=0){
    		$users['list'][$k]['login_time']=date('Y-m-d',$v['login_time']);
    		}
    	}
    	$this->assign('users',$users['list']);
    	$this->assign('pageli',$users['page']);
    	//cotrollerSetup
    	$this->assign('controllerName','用户列表');
    	$this->assign('navSelectNo',8);
    	$this->display();
    }
    
    public function useradd(){
    	if($_POST){
    		$Musers=new \Admin\Model\UsersModel;
    		$_POST['password']=MD5($_POST['password']);
    		$_POST['register_time']=time();
    		//查询手机号是否已经存在
    		$phonecheck=$Musers->Mfindcheck(array('phone'=>$_POST['phone']));
    		if($phonecheck){//手机号已经被注册
    			lee_mess('添加失败，手机号已经被注册');
    		}
    		$res=$Musers->Madd();
    		if($res){
    			lee_mess('添加新用户成功，用户UID为'.$res);
    		}else{
    			lee_mess('添加失败');
    		}
    		
    	}
    	//cotrollerSetup
    	$this->assign('controllerName','添加用户');
    	$this->assign('navSelectNo',9);
    	$this->display();
    }
    
    
    
    
}