<?php
namespace Home\Controller;

use Think\Controller;

class RegisterController extends Controller
{
    public function index(){
        $this->display();
    }

    public function add(){
        $username=I('username');
        $userpwd=I('pwd');
        $usertele=I('tele');

        $usermessage=M('usermessage');
        if($usermessage->query("select * from __PREFIX__usermessage where UserName='".$username."'")){
              $this->redirect('Register/index','',1,"该用户名已被使用，请重新输入。this is a wrong page");
        }
        $data['UserId']='NULL';
        $data['UserName']=$username;
        $data['UserPass']=$userpwd;
        $data['UserTelephone']=$usertele;
        $insert=$usermessage->data($data)->add();
        if($insert){
            $this->success('添加成功！',U('Index/index'));
        }else{
            $this->error('添加失败，请稍后重试！',U('Register/index'));
        }
    }
}
