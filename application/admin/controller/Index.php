<?php
namespace app\admin\controller;
use think\Controller;

class index extends Controller
{
    public function index()
    {
		
        return $this->fetch();
		
	}
	public function welcome()
    {
		
        return "ddd";
		
	}
}
