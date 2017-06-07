<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index(){
        $this->display();
    }
    public function loginyz(){
    	$username1=I('username');
    	$userpass1=I('pwd');
    	$usermessage1=M('usermessage');
        $logintime=date("Y-m-d H:i:s");

        $select=$usermessage1->query("select * from __PREFIX__usermessage where username='$username1' and userpass='$userpass1'");
   
    	if(!empty($select)){
    			$this->success('登陆成功！');
    			session_start();
                $_SESSION['userid']=$select[0]['userid'];
                $_SESSION['username']=$select[0]['username'];
                $_SESSION['userpass']=$select[0]['userpass'];
                $_SESSION['userlogintime']=$logintime;
                $this->redirect('Index/index');
    	}else{
    		$this->error('用户名或密码错误,请重新输入！');
    		$this->redirect('Login/index');
    	}
    }

    public function logout(){
        //用于判断username这个session值
        if(session('?username')){
            session('username',null);
            session('userpass',null);
            session('logintime',null);
            session('bookroomid',null);
            session('bookprice',null);
            $this->success('您已成功退出。',U('Index/index'));
        }else{
            $this->error('您还未登录，请登录',U('Login/index'));
        }
    }
}
