<?php 
class login_controller extends controller{
	public function login(){

		$this->view('login.html');
	}

	public function check(){
	$name 	= 	F::input('post.admit');
	$pwd 	=	md5(F::input('post.pwd'));
	F::session('name',$name);
	F::session('pwd',$pwd);

	$sName = $this->db->table('login')->getval('admit');
	$sPwd  = $this->db->table('login')->getval('pwd');
	//存入
	F::session('sName',$sName);
    F::session('sPwd',$sPwd);

	header('location:/');
	}
		public function exitlogin(){
		F::session_del('name');
		F::alert('注销成功','/');
	}
}
 ?>