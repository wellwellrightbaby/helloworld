<?php
namespace Admin\Controller;

use Think\Controller;

class OrderController extends CommonController
{
    public function index(){
        $order=M('Haspaymessage');
        $new_order=$order->table('think_haspaymessage as a,think_usermessage as b,think_bjlxmessage as c,think_swduiying as d,
        think_foodmessage as e')->where('a.UserId=b.UserId and a.BjlxId=c.BjlxId and a.BookId=d.BookId and d.FoodId=e.FoodId')
        ->field('a.BookId as BookId,SwId,UserName, UserTelephone,BjlxName, BjlxSize,BjlxCount,BjlxURL,FoodName, FoodURL,BookPrice,
        BookTime')->order('BookId')->select();

        $this->assign('book', $new_order);
       // $new_order->BookTime=date('Y-m-d H:i:s');
       // $new_order->date=date('Y-m-d');
        $this->display();
    }
    public function detail()
             {
                 $id = I('SwId', '');
                 $order=M('Haspaymessage');
                 $food=M('Swduiying');
                 $new_order=$food->table('think_haspaymessage as a,think_usermessage as b,think_bjlxmessage as c,think_swduiying
                 as d,think_foodmessage as e')->where('a.UserId=b.UserId and a.BjlxId=c.BjlxId and a.BookId=d.BookId and d.FoodId
                 =e.FoodId')->field('a.BookId as BookId,SwId,UserName, UserTelephone,BjlxName, BjlxSize,BjlxCount,BjlxURL,FoodName,
                 FoodURL,BookPrice,BookTime')->where(array('SwId' => $id))->find();

                 if ($new_order) {
                     $this->assign('data', $new_order);
                     $this->display();
                 } else {
                        $this->error('不存在该订单!');
                 }
             }

             public function del(){
                         $id = I('BookId', '');
                         $res = M('Haspaymessage');
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

}