<?php
namespace Home\Controller;

use Think\Controller;

class OnesMenuController extends Controller
{
    public function index(){
    	header("Content-Type:text/html;charset=utf-8");
	   	if(session('?username')){
	   		$userid=$_SESSION['userid'];
	    	$onemenus=M('foodsave');
	        $save=$onemenus->join('think_foodmessage ON think_foodmessage.FoodId = think_foodsave.FoodId')->join('think_usermessage ON think_usermessage.UserId = think_foodsave.UserId')->where('think_usermessage.UserId='.$userid)->select();

	        $this->fss=$save;

	        $this->display();
	       
    	}else{
    		alertMes('您还未登录，请登陆！',U('Login/index'));
    		/*$this->error(,U('Login/index'));*/
    	}
  	}
}
