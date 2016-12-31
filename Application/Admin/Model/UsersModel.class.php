<?php
namespace Admin\Model;
use Think\Model;
class UsersModel extends Model{
	public function Madd(){
		$this->create();
		return $this->add();
	}
	
	public function Mselectfenye($fenye){ //$fenye=每页显示的条数
		$count      = $this->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,$fenye);// 实例化分页类 传入总记录数和每页显示的记录数($fenye)
		$Page->setConfig('prev','前页');
		$Page->setConfig('next','后页');
		$Page->baseUrl = U().'/p/';
		$Page->houzhui = '';
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $this->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$arr = array('list'=>$list,'page'=>$show);
		return $arr;
	}
	
	public function Mfindcheck($arr){
		return $this->where($arr)->find();
	}
}