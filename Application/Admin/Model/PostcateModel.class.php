<?php
namespace Admin\Model;
use Think\Model;
class PostcateModel extends Model{
	//protected $tableName = 'postcate';
	public function Mcateshow(){ //获取分类目录数组 并且依次排序
		$postcate=$this->order("sort asc")->select();
		$lee=new \Think\Lee;
		$postcatearr=$lee::catefenji($postcate);
		return $postcateinfo=$lee::catefenjili($postcatearr);
	}
	
	public function Mfind($id){
		return $this->find($id);
	}
	
	public function Madd(){
		$this->create();
		return $this->add();
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
?>