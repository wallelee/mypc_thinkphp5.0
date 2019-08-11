<?php
namespace app\admin\controller;
use think\Controller;

class login extends Controller
{
    public function index()
    {
		
        return $this->fetch();
		
	}
	public function check()
    {
		if(request()->isPost()){
				$data=input('post.');
				if(!captcha_check($data['code'])){
					$this->error('验证码不正确');
				}
				$uer=model('AdminUser')->get(['username'=>$data['username']])
				halt($user);
				//验证
		}else{
			$this->error('请求不合法');
		}
	}
	public function welcome()
    {
		
        return "ddd";
		
	}
}
