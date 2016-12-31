<?php
namespace Admin\Model;
use Think\Model;
class MenuModel extends Model{
	public function Madd(){
		$this->create();
		return $this->add();
	}
	
	public function Mquery($cid=1){
		return $this->where(array('cid'=>$cid))->order('sort asc')->select();
	}
	
	public function MsetField($str,$id,$val){ //$str=要修改的字段 $id change $val
		return $this->where(array('id'=>$id))->setField($str,$val);
	}
	
	public function Mdelete($id){
		return $this->delete($id);
	}
	
	public function Mupdate($arr,$id){ //arr传入修改字段 $id save
		return $this->where(array('id'=>$id))->save($arr);
	}
}