<?php
namespace Home\Controller;
use Think\Controller;
class AnliController extends Controller {
	 public function anli(){
	 	$id=I('get.id');
	 	$this->assign('id',$id);
	 	$biao=M("admin_lunbo");
		$sqlssss=$biao->order("id desc")->limit(0,1)->select();
		$this->assign('banner',$sqlssss[0]);
	     $biao=M("admin_anli");
		$sql=$biao->select();
		$this->assign('sql',$sql);
		$dbs=M("admin_service");
		$ser=$dbs->where('status=1')->order('id asc')->limit(0,5)->select();
		$this->assign('ser',$ser);
		$ser1=$dbs->where('status=1')->order('id asc')->limit(0,1)->select();
		$this->assign('ser1',$ser1[0]);
		$list=$dbs->where('status=1')->order('id asc')->select();
        $array=unlimitedForLevel($list,$pid = 0, $pname = 'pid');
        $arr=array();  
        $result=array();
		foreach($array as $k=>$v){
		    $result[$v['level']][]=$v;
		}
        foreach($result[2] as $k=>$v){
		    $arr[$v['pid']][]=$v;    
		 }
        $this->assign('service',$result[1]);
        $list2=$dbs->where('status=1')->order('id asc')->limit(1,5)->select();
        $array=unlimitedForLevel($list2,$pid = 0, $pname = 'pid');
        $arr=array();  
        $result=array();
		foreach($array as $k=>$v){
		    $result[$v['level']][]=$v;
		}
        foreach($result[2] as $k=>$v){
		    $arr[$v['pid']][]=$v;    
		 }
        $this->assign('service2',$result[1]);
        $list1=$dbs->where('status=1')->limit(0,1)->order('id asc')->select();
        $array=unlimitedForLevel($list1,$pid = 0, $pname = 'pid');
        $arr=array();  
        $result=array();
		foreach($array as $k=>$v){
		    $result[$v['level']][]=$v;
		}
        foreach($result[2] as $k=>$v){
		    $arr[$v['pid']][]=$v;    
		 }
        $this->assign('service1',$result[1]);
		$db=M("admin_nav");
		$nav=$db->where('status=1 and pid=0')->order('id asc')->select();
		$this->assign('nav',$nav);
		$nav1=$db->where('status=1 and pid=0 and id='.$id)->order('id asc')->select();
		$this->assign('nav1',$nav1[0]);
		$biao1 = M("admin_info");//实例化数据表
	   $row = $biao1->order("id asc")->limit(0,1)->select();
	   $this->assign("company",$row[0]);	  
       $this->display(); 
    }
	public function anlis(){
	    $biao=M("admin_anli");
		$id=I("get.id");
		$this->assign('id',$id);
		$sql=$biao->where('id='.$id)->find();
		$this->assign('sql',$sql);
		$biao=M("admin_lunbo");
		$sqlssss=$biao->order("id desc")->limit(0,1)->select();
		$this->assign('banner',$sqlssss[0]);
		$dbs=M("admin_service");
		$ser=$dbs->where('status=1')->order('id asc')->limit(0,5)->select();
		$this->assign('ser',$ser);
		$ser1=$dbs->where('status=1')->order('id asc')->limit(0,1)->select();
		$this->assign('ser1',$ser1[0]);
		$db=M("admin_nav");
		$nav=$db->where('status=1 and pid=0')->order('id asc')->select();
		$this->assign('nav',$nav);
		$nav1=$db->where('status=1 and pid=0 and id='.$id)->order('id asc')->select();
		$this->assign('nav1',$nav1[0]);
		$list=$dbs->where('status=1')->order('id asc')->select();
        $array=unlimitedForLevel($list,$pid = 0, $pname = 'pid');
        $arr=array();  
        $result=array();
		foreach($array as $k=>$v){
		    $result[$v['level']][]=$v;
		}
        foreach($result[2] as $k=>$v){
		    $arr[$v['pid']][]=$v;    
		 }
        $this->assign('service',$result[1]);
        $biao1 = M("admin_info");//实例化数据表
	   $row = $biao1->order("id asc")->limit(0,1)->select();
	   $this->assign("company",$row[0]);   
        $this->display();
    }
	
}