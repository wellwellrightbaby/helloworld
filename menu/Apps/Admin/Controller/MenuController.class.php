<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Upload;
class MenuController extends CommonController
{
    public function index(){
        $menu = M('Foodmessage')->where(array('id' => $id))->select();
        $men = M('Foodmessage');
        $list = M('Fooditemmessage')->where(array('id' => $id))->select();
        $new_list=$men->table('think_foodmessage as a')->join('think_fooditemmessage as b ON a.FoodItemId=b.FoodItemId')->field('FoodId,FoodName, b.FoodItemName as name,FoodIntroduce,FoodPrice,FoodURL,FoodUpdateTime')->order('FoodId')->select();
        $this->assign('new_list',$new_list);
        $this->assign('list',$list);
        $this->assign('menu', $menu);
        $this->display();
    }

    public function update(){
            $menu=M('Foodmessage');
            $id=I('post.FoodId');
            if(!$menu->create()){
                $this->error($menu->getError());
    		}
            $count=$menu->where("FoodId=$id")->save();
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
               $id = I('FoodId', '');
               if (!empty($id)) {
                    $res = M('Foodmessage')->where(array('FoodId' => $id))->delete();
                    if ($res) {
                         $this->success("删除成功");
                     } else {
                         $this->error("删除失败");
                     }
               } else {
                    $this->error("删除失败");
               }
         }

     public function create(){
             $men = M('Foodmessage');
            // $new_list=$men->table('think_foodmessage as a')->join('think_fooditemmessage as b ON a.FoodItemId=b.FoodItemId')
             //->field('FoodId,FoodName, b.FoodItemName as name,FoodIntroduce,FoodPrice,FoodURL,FoodUpdateTime')->order('FoodId')
             //->select();

             $id = I('id', '');
             $name = I('name', '');
             $photo = I('photo', '');
             $introduce = I('introduce','');
             $item = I('add_item','');
             $price = I('price', '');
             $data = array();
             //$data['FoodId'] = $id;
             $data['FoodName'] = $name;
             $data['FoodURL'] = $photo;
             $data['FoodIntroduce'] = $introduce;
             $data['FoodItemId'] = $item;
             $data['FoodPrice'] = $price;

             $upload = new Upload();// 实例化上传类
             $upload->maxSize = 3145728;// 设置附件上传大小
             $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
             $upload->savePath = '/Admin/Img/'; // 设置附件上传目录
             $file = $upload->upload();
             if ($file) {
                  $url_t = $file['photo']['savepath'] . $file['photo']['savename'];
                   $data['FoodURL'] = $url_t;
             } else if ($photo == '') {
                  $this->error($upload->getError());
             }
             if(empty($id)){
                    //$res = $men->table('think_foodmessage as a,think_fooditemmessage as b')->where('a.FoodItemId=b.FoodItemId')
                    //->field('FoodId,FoodName, b.FoodItemName as name,FoodIntroduce,FoodPrice,FoodURL,FoodUpdateTime')->data($data)
                    //->add();
                    //$res=$men->table('think_foodmessage as a')->join('think_fooditemmessage as b ON a.FoodItemId=b.FoodItemId')->
                    //field('FoodId,FoodName, b.FoodItemName as name,FoodIntroduce,FoodPrice,FoodURL,FoodUpdateTime')
                    //->data($data)->add();
                    $res = $men->data($data)->add();

             if ($res) {
                    $this->success("发布成功");
             } else {
                   $this->error("发布失败");
                }
             }else{
                   $res = $new_list->where(array('FoodId' => $id))->data($data)->save();
                   if ($res) {
                        $this->success("修改成功");
                   } else {
                        $this->error("修改失败");
                   }
              }
         }
     public function detail()
         {
             $id = I('FoodId', '');
             $men = M('Foodmessage');
             $res=$men->table('think_foodmessage as a')->join('think_fooditemmessage as b ON a.FoodItemId=b.FoodItemId')
             ->field('FoodId,FoodName, b.FoodItemName as name,FoodIntroduce,FoodPrice,FoodURL,FoodUpdateTime')->where(array
             ('FoodId' => $id))->find();
             if ($res) {
                 $this->assign('data', $res);
                 $this->display();
             } else {
                 $this->error('不存在该菜谱!');
             }
         }

}