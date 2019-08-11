<?php
namespace app\admin\controller;
use think\Controller;

class news extends Controller{
	public function add(){
		if(request()->isPost()){
			$data=input('post.');
			halt($data);
		}else{
			return $this->fetch('',[
				'cats'=>config('cat.lists')
			]);
		}
	}	
}
?>
