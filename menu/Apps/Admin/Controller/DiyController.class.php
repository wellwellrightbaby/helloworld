<?php
namespace Admin\Controller;

use Think\Controller;

class DiyController extends CommonController
{
    public function index(){
        $menu = M('Foodsave');
        $diy1=$menu->table('think_foodsave as a')->join('think_usermessage as b ON a.UserId=b.UserId')->field('CaipuId,UserName, UserTelephone,FoodId,AddTime')->order('CaipuId')->select();
        $diy2=$menu->table('think_foodsave as a')->join('think_foodmessage as b ON a.FoodId=b.FoodId')->field('CaipuId,FoodName,FoodPrice,FoodURL,FoodUpdateTime')->order('CaipuId')->select();
        $diy = array();
            foreach ($diy1 as $k=>$v) {
                 $diy[$k] = array_merge($diy1[$k], $diy2[$k]);
        }
        $this->assign('diy', $diy);
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


     public function del1(){
               $id = I('CaipuId', '');
               if (!empty($id)) {
                    $res = M('Foodsave')->where(array('FoodId' => $id))->delete();
                    if ($res) {
                         $this->success("删除成功");
                     } else {
                         $this->error("删除失败");
                     }
               } else {
                    $this->error("删除失败");
               }
         }

     public function del(){
            $id = I('CaipuId', '');
            $res = M('Foodsave');
            $count=$res->delete($id);
            if ($count > 0) {
                         $data = array(
                            'status' => 1,
                            'info' => '删除成功！'
                        );

                    } else {
                          $data = array(
                            'status' => 0,
                            'info' => '抱歉，删除失败！'
                        );
                    }
                    $this->ajaxReturn($data);
     }

     public function create(){
             $FoodId = I('FoodId', '');
             $FoodName = I('FoodName', '');
             $introduce = I('FoodIntroduce','');
             $item = I('FoodItemId','');
             $FoodPrice = I('FoodPrice', '');
             $data = array();
             $data['FoodId'] = $FoodId;
             $data['FoodName'] = $FoodName;
             $data['FoodIntroduce'] = $introduce;
             $data['FoodItemId'] = $item;
             $data['FoodPrice'] = $FoodPrice;

                  $res = M('Foodmessage')->data($data)->add();
                  if ($res) {
                       $this->success("发布成功");
                  } else {
                       $this->error("发布失败");
                  }
         }
     public function detail()
         {
             $id = I('CaipuId', '');
             $menu = M('Foodsave');
             $diy1=$menu->table('think_foodsave as a')->join('think_usermessage as b ON a.UserId=b.UserId')->field('CaipuId,UserName, UserTelephone,FoodId,AddTime')->where(array('CaipuId' => $id))->find();
             $diy2=$menu->table('think_foodsave as a')->join('think_foodmessage as b ON a.FoodId=b.FoodId')->field('CaipuId,FoodName,FoodPrice,FoodURL,FoodUpdateTime')->where(array('CaipuId' => $id))->find();
             if ($diy1||$diy2) {
                 $this->assign('data1', $diy1);
                 $this->assign('data2', $diy2);
                 $this->display();
             } else {
                 $this->error('不存在该菜谱!');
             }
         }

}