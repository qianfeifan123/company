<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	    $biao=M("admin_fuwu");
		$sql=$biao->order("id desc")->limit(4)->select();
		$this->assign('fuwu',$sql);
		$biao=M("admin_xinwen");
		$sqls=$biao->order("times desc")->limit(6)->select();
		$this->assign('xinwen',$sqls);
		 $biao=M("admin_anli");
		$sqlss=$biao->order("id desc")->limit(4)->select();
		$this->assign('anli',$sqlss);
		 $biao=M("admin_index");
		$sqlsss=$biao->order("id asc")->select();
		$this->assign('hezuo',$sqlsss);
		 $biao=M("admin_guanyu");
		$sqlssss=$biao->select();
		$this->assign('sqlssss',$sqlssss);
		 $biao=M("admin_lunbo");
		$sqlssss=$biao->order("id desc")->limit(3)->select();
		$this->assign('sql',$sqlssss);
		$db=M("admin_nav");
		$nav=$db->where('status=1 and pid=0')->order('id asc')->select();
		$this->assign('nav',$nav);
		$dbs=M("admin_service");
		$ser=$dbs->where('status=1')->order('id asc')->limit(0,5)->select();
		$this->assign('ser',$ser);
		$ser1=$dbs->where('status=1')->order('id asc')->limit(0,1)->select();
		$this->assign('ser1',$ser1[0]);
		$list2=$dbs->where('status=1')->order('id asc')->select();
        $array=unlimitedForLevel($list2,$pid = 0, $pname = 'pid');
        $arr=array();  
        $result=array();
		foreach($array as $k=>$v){
		    $result[$v['level']][]=$v;
		}
        foreach($result[2] as $k=>$v){
		    $arr[$v['pid']][]=$v;    
		 }
        $this->assign('service',$result[1]);	
		$list=$dbs->where('status=1')->order('id asc')->limit(1,5)->select();
        $array=unlimitedForLevel($list,$pid = 0, $pname = 'pid');
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
        $table=M('admin_force');
        $force=$table->where('status=1')->order('id asc')->select();
        $this->assign('force',$force);
        $biao1 = M("admin_info");//实例化数据表
	   $row = $biao1->order("id asc")->limit(0,1)->select();
	   $this->assign("company",$row[0]);
       $this->display();
    }
}