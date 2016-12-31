<?php
namespace Think;
class Lee{
	//无限级分类数组处理压缩到数组 假设PID是0 也就是顶级
	static public function catefenji($cate,$pid=0){
		$arr=array();
		foreach($cate as $v){
			if($v['pid']==$pid){
				$v['child']=self::catefenji($cate,$v['id']);
				$arr[]=$v;
			}
		}
		return $arr;
	}
	
	//无限极分类读取
	static public function catefenjili($arr,$fenge=''){
		$arrli=array();
		foreach ($arr as $k=>$v){
			$arrli[]=array($v['id'],$fenge.$v['name'],$v['pid'],$v['name'],$v['sort']);
		
			if($v['child']){
				//将两个数组合并 虽然合并了 但是self这里还是开新栈 没有实际组合
				$arrli=array_merge($arrli,self::catefenjili($v['child'],$fenge.'—'));
				//print_r($v['child']);
			}
		}
		return $arrli;
	}
	
	//无限极分类菜单读取
	static public function menuli($arr,$fenge=''){
		$arrli=array();
		foreach ($arr as $k=>$v){
		$arrli[]=array($v['id'],$fenge.$v['name'],$v['pid'],$v['url'],$v['sort'],$v['cid']);
		
			if($v['child']){
				//将两个数组合并 虽然合并了 但是self这里还是开新栈 没有实际组合
				$arrli=array_merge($arrli,self::menuli($v['child'],$fenge.'-'));
				//print_r($v['child']);
			}
		}
		return $arrli;
	}
	
	//前台菜单处理
	public static function menushow($menu,$pid=0,$cid=1,$loop=0){
	/*	$arr=array();
		//用于二次入栈
		if($loop==1){
			foreach($menu as $v){
				if($v['pid']==$pid && $v['cid']==$cid){
					$v['child']=self::fenji($menu,$v['id']);
					$arr[]=$v;
				}
			
					
			}
			return $arr;
		}*/
		//先将cate所属分类压进来
		/*$menucate=D('menucate')->select();
		foreach($menucate as $k=>$v){
			$arr[$k]['cname']=$v['name'];
			//再将分类内容循环到ARR数组中
			foreach($menu as $k2=>$v2){
				if($v2['pid']==$pid && $v2['cid']==$v['id']){
					$v2['child']=self::menushow($menu,$v2['id'],$v['id'],1);
					$arr[$k][]=$v2;
				}
			}
		}*/
	/*	$menucate=D('menucate')->select();
		foreach($menu as $k=>$v){
			foreach($menucate as $k2=>$v2){
				if($v['pid']==$pid && $v2['id']==$v['cid']){
					$v['child']=self::menushow($menu,$v['id'],$v2['id'],1);
					$arr[]=$v;
				}
			}
		}
		return $arr;*/
		
	}
	
}