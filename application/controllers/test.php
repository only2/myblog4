<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function test1()
	{
		$this->load->view('test1');
	}
	public function test2()
	{	
		// var_dump($_POST);
 	// 	echo "<pre>";
 	// 	print_r($_POST);
 	// 	echo "</pre>";
		if(isset($_POST['sub'])){
			$username=$_POST['username'];
			$password=$_POST['password'];

			if($username=='admin' && $password=='12345'){
				$query=1;
				//数据库查询代码 （数据库有返回值就是TURE 无便是FALSE)

			}else{
				$query=0;
			}
			if($query){
				echo "登录成功";
			}else{
				echo "登录失败";
			}
		}






		// if(isset($_POST['sub'])){
		// 	$namenum=$_POST['username'];
		// 	// var_dump($namemum);
		// 	$name1=(int)$namenum;
		// 	var_dump($name1);
		// 	switch($namemum){
		// 		case 123 :
		// 		echo "数据正确";
		// 		break;
		// 		default :
		// 		echo "数据错误";
		// 		break;
		// 	}
		// }
	}	










}

/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */