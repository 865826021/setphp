<?php
namespace Admin\Model;
use Think\Model;
class PostsModel extends Model{
	public function Madd(){ //添加文章入库
		$this->create(); //creat收集 未填写字段为空值
		return $this->add();
	}
	
	public function Mquery($pid,$state,$fenye){ //(参数1：要查询的分类->PID) (参数2：state = 1 显示回收站文章) (参数3：每页显示条数)   
		//分页
		//$count      = $this->where(array('empty'=>0))->count();// 查询满足要求的总记录数
		
		if($pid){
			if($state==1){
				//分页
				$count      = $this->where(array('pid'=>$pid,'empty'=>1))->count();// 查询满足要求的总记录数
				//return $this->where(array('pid'=>$pid,'empty'=>1))->order('id desc')->select();
			}else{
				//分页
				$count      = $this->where(array('pid'=>$pid,'empty'=>0))->count();// 查询满足要求的总记录数
				//return $this->where(array('pid'=>$pid,'empty'=>0))->order('id desc')->select();
			}
			
		}else{

			if($state==1){
				//分页
				$count      = $this->where(array('empty'=>1))->count();// 查询满足要求的总记录数
				//return $this->where(array('empty'=>1))->order('id desc')->select();
			}else{
				//分页
				$count      = $this->where(array('empty'=>0))->count();// 查询满足要求的总记录数
				//return $this->where(array('empty'=>0))->order('id desc')->select();
			}	
		}
		//分页
		$Page       = new \Think\Page($count,$fenye);// 实例化分页类 传入总记录数和每页显示的记录数($fenye)
		$Page->setConfig('prev','前页');
		$Page->setConfig('next','后页');
		$Page->baseUrl = U('',array('pid'=>$pid)).'/p/';
		$Page->houzhui = '';
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//再来一遍如上逻辑
		if($pid){
			if($state==1){
				//分页
				$list = $this->where(array('pid'=>$pid,'empty'=>1))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			}else{
				//分页
				$list = $this->where(array('pid'=>$pid,'empty'=>0))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			}
				
		}else{
			if($state==1){
				//分页
				$list = $this->where(array('empty'=>1))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			}else{
				//分页
				$list = $this->where(array('empty'=>0))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			}
		}
		
		//$this->assign('list',$list);// 赋值数据集
		//$this->assign('page',$show);// 赋值分页输出
	
		$arr = array('list'=>$list,'page'=>$show);
		return $arr;
		//P($list);
		//P($show);
		//exit();
		
	}
	
	public function Mfind($id){
		return $this->where(array('empty'=>0))->find($id);
	}
	
	public function Mdelete($id){
		return $this->delete($id);
	}
	
	public function Mhuishou($id,$state){ //ID传入回收ID state代表回收状态 1->扔进回收站 2->从回收站恢复
		if($state==1){//扔进回收站
			return $this->where(array('id'=>$id))->setField('empty',1);
		}else if($state==2){ //从回收站恢复文章recover
			return $this->where(array('id'=>$id))->setField('empty',0);
		}
	}
	
	
	public function Mupdate($arr,$id){
		return $this->where(array('id'=>$id))->save($arr);
	}
}