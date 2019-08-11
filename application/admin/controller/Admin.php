<?php
namespace app\admin\controller;
use think\Controller;

class admin extends Controller
{
    public function add()
    {
		
		if(request()->isPost()){
			dump(input("post."));
			$data=input("post.");
			$validate=validate("AdminUser");
			if(!$validate->check($data)){
				if(!is_array($data)){
					
					
				}
				$this->error($validate->getError());
				return $this->id;
				
			}
			
		}else{
			return $this->fetch();
		}
        
		
	}
}
