<?php
namespace Home\Controller;
use Think\Controller;
class FuwuController extends Controller {
    public function fuwu(){
	   $biao=M("admin_fuwu");
		$sql=$biao->select();
		$this->assign('sql',$sql);  
       $this->display();
    }
}