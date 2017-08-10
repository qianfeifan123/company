<?php
namespace Home\Controller;
use Think\Controller;
class NavController extends Controller {
    public function index(){
	   $biao=M("admin_index");
	   $id=I('get.id');
	   $cid=I('get.cid')?I('get.cid'):1;
		$sql=$biao->where('id')->select();
		$this->assign('sql',$sql);
		$db=M("admin_nav");
		$nav=$db->where('status=1 and pid=0')->order('id asc')->select();
		$this->assign('nav',$nav);
		$navs=$db->where("status=1 and pid='$id'")->order('id asc')->select();
		$this->assign('navs',$navs);
		$navs1=$db->where("status=1 and pid='$id' and id=".$cid)->order('id asc')->select();
		$this->assign('navs1',$navs1);
		$dbs=M("admin_service");
		$ser=$dbs->where('status=1 and pid=0')->order('id asc')->select();
		// var_dump($nav);die;
		$this->assign('service',$ser);
       $this->display();
    }
}