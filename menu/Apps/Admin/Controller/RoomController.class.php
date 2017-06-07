<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Upload;
class RoomController extends CommonController
{
    public function index(){
        $room = M('Bjlxmessage')->where(array('id' => $id))->select();
        $this->assign('room', $room);
        $this->display();
    }

    public function update(){
            $room=M('Bjlxmessage');
            $id=I('post.BjlxId');

            if(!$room->create()){
                $this->error($room->getError());
    		}
            $count=$room->where("BjlxId=$id")->save();
            if ($count > 0) {
                 $data = array(
                    'info' => '修改成功！'
                );

            } else {
                  $data = array(
                    'info' => '修改失败！'
                );
            }
            $this->ajaxReturn($data);
        }


     public function del(){
               $id = I('BjlxId', '');
               if (!empty($id)) {
                    $res = M('Bjlxmessage')->where(array('BjlxId' => $id))->delete();
                    if ($res) {
                         $this->success("删除成功",U('Room'));
                     } else {
                         $this->error("删除失败");
                     }
               } else {
                    $this->error("删除失败");
               }
         }

     public function create(){
             $id = I('id', '');
             $name = I('name', '');
             $size = I('size','');
             $count = I('count','');
             $photo = I('photo', '');
             $data = array();
             //$data['BjlxId'] = $id;
             $data['BjlxName'] = $name;
             $data['BjlxSize'] = $size;
             $data['BjlxCount'] = $count;
             $data['BjlxURL'] = $photo;

             $upload = new Upload();// 实例化上传类
                     $upload->maxSize = 3145728;// 设置附件上传大小
                     $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                     $upload->savePath = '/Admin/Img/'; // 设置附件上传目录
                     $file = $upload->upload();
                     if ($file) {
                         $url_t = $file['photo']['savepath'] . $file['photo']['savename'];
                         $data['BjlxURL'] = $url_t;
                     } else if ($photo == '') {
                         $this->error($upload->getError());
                     }

                  if(empty($id)){
                    $res = M('Bjlxmessage')->data($data)->add();
                         if ($res) {
                             $this->success("发布成功");
                         } else {
                             $this->error("发布失败");
                         }
                  }else{
                    $res = M('Bjlxmessage')->where(array('BjlxId' => $id))->data($data)->save();
                                if ($res) {
                                    $this->success("修改成功");
                                } else {
                                    $this->error("修改失败");
                                }
                  }
         }
     public function detail()
         {
             $id = I('BjlxId', '');
             $res = M('Bjlxmessage')->where(array('BjlxId' => $id))->find();
             if ($res) {
                 $this->assign('data', $res);
                 $this->display();
             } else {
                 $this->error('不存在该包间!');
             }
         }

}