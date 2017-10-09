<?php
/**
 * 数据采集和入库
 */
class api_controller extends comm_controller{

	/**
	 * 初始化类
	 */
	public function __construct(){
	}

	/**
	 * 调用接口发送邮件类
	 * [feedback description]
	 * @return [type] [description]
	 */
	public function feedback(){
		$message=F::input('post.');//获取留言本的内容
		//$title=$messge['u_title'];//设置邮件的标题
		//$content=$message['u_content'];//设置邮件的内容
		$title="测试标题";
		$content="测试内容";
		if(empty($title) || strlen($title)>20){
			F::alert("留言标题为空或超过20字");//判断留言标题是否合法
		}else if(empty($content) || strlen($content)>200){
			F::alert("留言内容为空或超过200字");//判断留言内容是否合法
		}
		$email_sender=$message['site_config']['site_email_sender'];
		$email_password=$message['site_config']['site_email_password'];
		$email_smtp=$message['site_config']['site_email_smtp'];
		$email_receiver=$message['site_config']['site_email_receiver'];
		$this->send_mail($title,$content,$email_sender,$email_password,$email_smtp,$email_receiver);//调用comm_contoller.php 的send_mail方法发送邮件
	}
}




