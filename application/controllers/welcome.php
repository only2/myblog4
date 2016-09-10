<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}
	public function test1()
	{
		$this->load->view('test1');
	}
	public function login()
	{
		$this->load->view('test');
	}
	public function check_log()
	{
		@mysql_connect("localhost","root","") or die("数据库连接失败");
		@mysql_select_db("user") or die("选择数据库失败");
		if(isset($_POST['sub'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			echo $username."/ ".$password;
			$sql="select * from user1 where username= '$username' and password='$password'";
			echo $sql;
			 $query=mysql_query($sql);
			 $result=mysql_fetch_array($query);
			 var_dump($result);
			 die();
			 var_dump($query);

			 die();
			 assert();
			if($result){
				echo "登录成功";
			}else{
				echo "登录失败";
			}
		}
		$uname = $_POST['uname'];
	 	$pwd = $_POST['pwd'];

	 if(strlen($uname) < 6){
	 	$this->load->view('error');
	 }else{
	 	$this->load->view('welcome');
	 }
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function message()
	{
		$username = $this -> input -> post('username');
		$email = $this -> input -> post('email');
		$message = $this -> input -> post('message');
		

		if($username == '' || $email == '' || $message == ''){
			// 
			echo 'fail';
		}else{
			$this -> load -> model('message_model');
			$this -> message_model -> save($username, $email, $message);
			echo "<script>alert('保存成功');location.href='../welcome/contact';</script>";

		}
	}
	public function test2()
	{	
		// var_dump($_POST);
 	// 	echo "<pre>";
 	// 	print_r($_POST);
 	// 	echo "</pre>";
		echo "成功";
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
	}
	public function test3()
	{
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		
		if($username == '' ||  $password == ''){
			// 
			echo 'fail';
		}else{
			$this -> load -> model('test3_model');
			$this -> test3_model -> save($username, $password);
			echo "<script>alert('保存成功');location.href='../welcome/test1';</script>";

		}
	}
	public function fengezifuchuan()
	{
		$this->load->view('fengezifuchuan');
	}
	public function fenge()
	{
		if(isset($_POST['sub'])){
			$year=$_POST['year'];
			$arr=explode("-", $year);
			if(count($arr)==3){
				$year=$arr[0];
				$month=$arr[1];
				$day=$arr[2];

				echo $year."=".$month."=".$day;
			}
			else{
			echo "<script>alert('格式不对')</script>";
			}
		}
	}
	public function jiami()
	{
		$this->load->view('jiami');
	}	
	public function jiamitest()
	{
		// if(isset($_POST['sub'])){
		// 	$cr=$_POST['cr'];
		// 	$cr1=substr($cr, 10);
		// 	$http=base64_decode($cr1);
		// 	echo "$http";//反解码
			// echo md5($cr);
			// laoshanbaby
			// 196915d4e293426e44081a6c363a64b5
			// echo base64_encode($cr);
			// www.163.com/1.rmvb
			// d3d3LjE2My5jb20vMS5ybXZi
			// $http=base64_encode($cr);
			// $th="thunder://".$http;
			 // thunder://d3d3LjE2My5jb20vMS5ybXZi;

		// }
	}	
	// public function jisuanqi()
	// {
	// 	$this->load->view('jisuanqi');
	// }	
	public function jisuanqi()
	{
		$this->load->view('jisuanqi');
	}	
	public function jisuanqi1()
	{
		if(isset($_GET['sub'])){
			echo "<tr><td colspan=5>";
			echo "123";
			echo "</td></tr>";
		}
	}	
}

/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */