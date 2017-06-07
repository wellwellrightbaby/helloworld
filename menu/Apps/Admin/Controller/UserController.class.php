<?php
namespace Admin\Controller;

use Think\Controller;

class UserController extends CommonController
{
    public function index(){
        $user = M('Usermessage')->where(array('id' => $id))->select();
        $this->assign('user', $user);

        $this->display();
    }


     public function del(){
               $id = I('UserId', '');
               if (!empty($id)) {
                    $res = M('Usermessage')->where(array('UserId' => $id))->delete();
                    if ($res) {
                         $this->success("删除成功");
                     } else {
                         $this->error("删除失败");
                     }
               } else {
                    $this->error("删除失败1");
               }
         }

     public function create(){
             $id = I('UserId', '');
             $name = I('UserName', '');
             $pwd = I('UserPass','');
             $tel = I('UserTelephone','');
             $data = array();
             $data['UserId'] = $id;
             $data['UserName'] = $name;
             $data['UserPass'] = $pwd;
             $data['UserTelephone'] = $tel;

                  $res = M('Usermessage')->data($data)->add();
                  if ($res) {
                       $this->success("添加成功");
                  } else {
                       $this->error("添加失败");
                  }
         }

}