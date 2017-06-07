<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index(){

        $this->display();
    }

    public function check (){
           $man=M('Managermessage');
           $arr['ManagerName']=I('ManagerName','');
           $arr['ManagerPass']=I('ManagerPass','');
           $count=$man->where($arr)->find();
           //账号、管理员信息存入cookie
           $tid=$count['managername'];


            if ( $count>0) {
                 cookie('tid_cookie', $tid, 3600*4);
                 $data = array(
                    'status' => 1,
                    'info' => '恭喜，登录成功！'
                );

            } else {
                  $data = array(
                    'status' => 0,
                    'info' => '抱歉，账号或密码错误，登录失败！'
                );
            }
            $this->ajaxReturn($data);

        }
}