<?php
namespace Admin\Controller;

use Think\Controller;

class ShoppingController extends CommonController
{
    public function index(){
        $car = M('Shoppingcart');
        //$shop1=$car->table('think_shoppingcart as a')->join('think_usermessage as b ON a.UserId=b.UserId')->field('ShopId,UserName, UserTelephone,FoodId,AddTime')->order('ShopId')->select();
        //$shop2=$car->table('think_shoppingcart as a')->join('think_foodmessage as b ON a.FoodId=b.FoodId')->field('ShopId,FoodName,FoodPrice,FoodURL,FoodUpdateTime')->order('ShopId')->select();
        $shop=$car->table('think_shoppingcart as a,think_usermessage as b,think_foodmessage as c')->where('a.UserId=b.UserId and a.FoodId=c.FoodId')->field('ShopId,UserName, UserTelephone,FoodName,FoodPrice,FoodURL,FoodUpdateTime,AddTime')->order('ShopId')->select();

        //$shop = array();
        //foreach ($shop1 as $k=>$v) {
             //$shop[$k] = array_merge($shop1[$k], $shop2[$k]);
        //}
        $this->assign('shop', $shop);
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
                 $id = I('ShopId', '');
                 $res = M('Shoppingcart');
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


     public function detail()
         {
             $id = I('ShopId', '');
             $car = M('Shoppingcart');
             //$shop1=$car->table('think_shoppingcart as a')->join('think_usermessage as b ON a.UserId=b.UserId')->field('ShopId,UserName, UserTelephone,FoodId,AddTime')->where(array('ShopId' => $id))->find();
             //$shop2=$car->table('think_shoppingcart as a')->join('think_foodmessage as b ON a.FoodId=b.FoodId')->field('ShopId,FoodName,FoodPrice,FoodURL,FoodUpdateTime')->where(array('ShopId' => $id))->find();
             $shop=$car->table('think_shoppingcart as a,think_usermessage as b,think_foodmessage as c')->where('a.UserId=b.UserId and a.FoodId=c.FoodId')->field('ShopId,UserName, UserTelephone,FoodName,FoodPrice,FoodURL,FoodUpdateTime,AddTime')->where(array('ShopId' => $id))->find();

             //if ($shop1||$shop2) {
                 //$this->assign('data1', $shop1);
                 //$this->assign('data2', $shop2);
                 //$this->display();
            // }
             if ($shop) {
                 $this->assign('data', $shop);
                 $this->display();
             } else {
                 $this->error('不存在该购物车!');
             }
         }

}