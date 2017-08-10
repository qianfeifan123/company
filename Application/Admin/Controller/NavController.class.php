<?php
namespace Admin\Controller;
use Think\Controller;
class NavController extends CommonController {
	/*public function _initialize(){
	//初始化方法，访问控制器就会先运行此方法
		if(!session('?admin')){
			$this->error("请登录!", U("Login/login"),1);
		}

	}*/
   public function index(){
	   /*$biao = M("user");//实例化数据表
	   $row = $biao->order("id asc")->limit(5)->select();
	   //var_dump($row);die;*/
	   $db=M("admin_nav");
	   $count = $db->count();
	   $Page = new \Think\Page($count,10);
       $show = $Page->show();
	   $list=$db->where('status=1')->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
	   // $data=$this->pagelink('admin_nav','','id asc',10);
	   // $show = $data['show'];
	   // $list = $data['list'];
	   $this->assign('page',$show);
	   $this->assign("list",$list);//模板赋值；第一个参数是前台输出的变量名，第二个参数是要赋值的数据变量
	   if(IS_POST){
		   $idarr = implode(',',I('post.idarr'));
		   $shouye=M('admin_nav');
		   $row = $shouye->delete($idarr);
		   if($row){
				alert('删除成功',U('nav/index'));
		   }else{
				alert('删除失败');
		   }
	   }
	   $this->display();
   }
   public function add(){
	   if(isset($_POST["dosubmit"])){
		   $title = I("post.title");
		   $link = I("post.link");
		   // $content = I("post.content");
		   // $pid = I("post.pid");
		   // $times=time();
		   $user = M("admin_nav");
		   $data['title']=$title;
		   $data['link']=$link;
		   // $data['img']=$file;
		   // $data['content']=$content;
		   // $data['times']=$times;
		   // $data['pid']=$pid;
		   $row = $user -> add($data);
		   if($row){
			   alert('插入成功',U('nav/index'));
		   }else{
			   $this->error("插入失败！");
		   }
	   }
	$this->display();
   }
   
   public function del(){
	$id = I("get.id");
	$user=M("admin_nav");
	$sql = $user -> where("id=".$id)->delete();
	   if($sql){
		  alert('删除成功',U('nav/index'));
	   }else{
	   	// echo $user->getLastSql();die;
		   $this->error("删除失败！");
	   }
   }
   public function edit(){
	$id = I("get.id");
	$user=M("admin_nav");
	$sql = $user -> where("id=".$id)->find();
	$this->assign("sql",$sql);
	if(isset($_POST['dosubmit'])){
	$title=I("post.title");
	$link=I('post.link');
	// $chang=I("post.chang");
	// $content=I("post.content");
	    // $times=time();
		$data['title']=$title;
		$data['link']=$link;
		// $data['content']=$content;
		// $data['img']=$file;
		// $data['times']=$times;
		$sql = $user->where("id='$id'")->save($data);
		 if($sql){
		   alert('更改成功',U('Nav/index'));
	   }else{
		   $this->error("更改失败！");
	   }
		  }
	$this->display();
   }
}