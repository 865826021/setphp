<?php
namespace Admin\Model;
use Think\Model;
class MenucateModel extends Model{
	public function Madd(){ //menucate add
		$this->create();
		return $this->add();
	}
	
	public function Mfind($id){
		return $this->find($id);
	}
	
	public function Mquery(){
		return $this->order('id desc')->select();	
	}
	
	public function MsetField($str,$id,$val){ //$str=要修改的字段 $id change $val
		return $this->where(array('id'=>$id))->setField($str,$val);
	}
	
	public function Mdelete($id){
		return $this->delete($id);
	}
}