<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends CommonController {
	/*public function _initialize(){
	//初始化方法，访问控制器就会先运行此方法
		if(!session('?admin')){
			$this->error("请登录!", U("Login/login"),1);
		}

	}*/
   public function index(){
	   $biao = M("admin_info");//实例化数据表
	   $row = $biao->order("id asc")->limit(0,1)->select();
	   $this->assign("list",$row[0]);//模板赋值；第一个参数是前台输出的变量名，第二个参数是要赋值的数据变量
	   if(IS_POST){
		   $idarr = implode(',',I('post.idarr'));
		   $shouye=M('admin_info');
		   $row = $shouye->delete($idarr);
		   if($row){
				alert('删除成功',U('Company/index'));
		   }else{
				alert('删除失败');
		   }
	   }
	   $this->display();
   }
  
   
   
   public function edit(){
	// $id = I("get.id");
	$user=M("admin_info");
	$sql = $user -> where("id=1")->find();
	// var_dump($sql);die;
	$this->assign("sql",$sql);
	if(isset($_POST['dosubmit'])){
	$name=I("post.name");
	$qq=I("post.qq");
	$tel=I("post.tel");
	$address=I("post.address");
	$email=I("post.email");
	$mail=I("post.mail");
	$admin=I("post.admin");
	if($_FILES['logo']['error']==0){
		   $upload = new \Think\Upload();                                    // 实例化上传类   
				$upload->maxSize   =     3145728 ;                               // 设置附件上传大小  
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');    // 设置附件上传类型   
				$upload->rootPath  =     'Uploads/';                           // 设置附件上传目录
				$upload->savePath  = '';                                      // 设置附件上传（子）目录
				$info   =   $upload->uploadOne($_FILES['logo']);             // 单文件上传方法引用
				if(!$info) {                                                // 判断上传错误提示错误信息 
					$this->error($upload->getError());    
				}else{                                                    // 上传成功 获取上传文件信息        
					$file=$info['savepath'].$info['savename'];   
		   }}else{
			   $file="";
		   }
	    // $times=time();
		$data['name']=$name;
		$data['tel']=$tel;
		$data['email']=$email;
		$data['mail']=$mail;
		$data['admin']=$admin;
		$data['address']=$address;
		$data['qq']=$qq;
		$data['logo']=$file;
		// $data['times']=$times;
		$sql = $user->where("id='1'")->save($data);
		 if($sql){
		   alert('更改成功',U('Company/index'));
	   }else{
	   	echo $user->getLastSql();die;
		   $this->error("更改失败！");
	   }
		  }
	$this->display();
   }
}