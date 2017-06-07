<?php
namespace Home\Controller;

use Think\Controller;

class ShopController extends Controller
{
    public function cart(){
        header("Content-Type:text/html;charset=utf-8");
        if(session('?username')){
            $shopcart=M('shoppingcart');
            $userid=$_SESSION['userid'];
            
            $cart=$shopcart->join('think_foodmessage ON think_foodmessage.FoodId = think_shoppingcart.FoodId')->join('think_usermessage ON think_usermessage.UserId = think_shoppingcart.UserId')->where('think_usermessage.UserId='.$userid)->select();
            /*dump($cart);*/
            $this->cart1=$cart;
            $this->display();   
         }else{
            alertMes('您还未登录，请登陆！',U('Login/index'));
            /*
            $this->error('您还未登录，请登陆！',U('Login/index'));*/
        }
    }
    
    //加入购物车
    public function joincart(){
    	header("Content-Type:text/html;charset=utf-8");
    	//判断有无id传入
    	/*$id = !empty($_REQUEST['id'])?intval($_REQUEST['id']):1;*/
    	if(session('?username')){
    		$id1=I('id');
    		$foodmessage1=M('foodmessage');


    		$select=$foodmessage1->query("select * from __PREFIX__foodmessage where foodid='$id1'");

    		$foodid1=$select[0]['foodid'];
    		/*$foodname1=$select[0]['foodname'];
    		$foodintroduce1=$select[0]['foodintroduce'];
    		$fooditemid1=$select[0]['fooditemid'];
    		$foodprice1=$select[0]['foodprice'];
    		$foodurl1=$select[0]['foodurl'];
    		$foodupdatetime1=$select[0]['foodupdatetime'];*/

    		$userid1=$_SESSION['userid'];

    		$addtime1=date("Y-m-d H:i:s");

    		$shopmessage1=M('shoppingcart');

  
            $data=array(
                'ShopId'=>NULL,
                'UserId'=>$userid1,
                'FoodId'=>$foodid1,
                'AddTime'=>$addtime1
            );

            $insert=$shopmessage1->data($data)->add();
            if($insert){
                alertMes('添加购物车成功！',U('Menu/index'));
        		/*$this->success('添加购物车成功！');*/

        	}
    	}else{
    		$this->error('您还未登录，请登陆！',U('Login/index'));
    	}	
    }

    //加入定制菜谱
    public function joinsave(){
        header("Content-Type:text/html;charset=utf-8");
        //判断有无id传入
        /*$id = !empty($_REQUEST['id'])?intval($_REQUEST['id']):1;*/
        if(session('?username')){
            $id1=I('id');
            $foodmessage1=M('foodmessage');

            $select=$foodmessage1->query("select * from __PREFIX__foodmessage where foodid='$id1' ");

            $foodid1=$select[0]['foodid'];

            $userid1=$_SESSION['userid'];

            $addtime1=date("Y-m-d H:i:s");

            $foodsave1=M('foodsave');

  
            $data=array(
                'CaipuId'=>NULL,
                'UserId'=>$userid1,
                'FoodId'=>$foodid1,
                'AddTime'=>$addtime1
                );

            $insert=$foodsave1->data($data)->add();
               if($insert){
                alertMes('添加个性菜谱成功',U('Menu/index'));
                /*$this->success('添加个性菜谱成功！');*/
                }
        }else{
            $this->error('您还未登录，请登陆！',U('Login/index'));
        }   

    }
    //商品购物车删除
    public function deletecartitem(){
        header("Content-Type:text/html;charset=utf-8");
        if(session('?username')){
            $id=I('id');
            $cart=M('Shoppingcart');

            $select=$cart->where('FoodId='.$id)->delete();

            if($select){
                alertMes('购物车商品删除成功',U('Shop/cart'));
               /* $this->success('购物车商品删除成功');*/
            }
        }else{
            $this->error('您还未登录，请登陆！',U('Login/index'));
        } 

    }
    public function deletemore(){
            $foodid1=I('idid');
            $shoppingcart1=M('shoppingcart');
            foreach ($foodid1 as $hi => $hi1) {
                $delete=$shoppingcart1->query("select * from __PREFIX__shoppingcart where foodid='$hi1'")->delete();
            }
            $this->display();
     

    }


    //个性菜谱删除
    public function deletesaveitem(){
        header("Content-Type:text/html;charset=utf-8");
        if(session('?username')){
            $saveid=I('saveid');
            $save=M('foodsave');

            $select=$save->where('FoodId='.$saveid)->delete();

            if($select){
                alertMes('收藏商品删除成功',U('OnesMenu/index'));
               /* $this->success('收藏商品删除成功');*/
            }
        }else{
            $this->error('您还未登录，请登陆！',U('Login/index'));
        } 

    }

    public function jiesuan(){
        $foodid=I('id1');
        
        $foodmessage1=M('foodmessage');
        $select=$foodmessage1->query("select * from __PREFIX__foodmessage where foodid='$foodid'");
        $foodprice1=$select[0]['foodprice'];
        $this->price1=$foodprice1;
        $_SESSION['bookprice']=$foodprice1;

        
        $this->display();
    }

    public function jiesuanmore(){
            $foodid1=I('idid');
            $foodmessage1=M('foodmessage');
            foreach ($foodid1 as $hi => $hi1) {
                $select=$foodmessage1->query("select * from __PREFIX__foodmessage where foodid='$hi1'");
                $sum=$select[0]['foodprice']+$sum;
            }
            $this->sum1=$sum;
            $_SESSION['bookprice']=$sum;
            $this->display();
     
    }

    public function haspay(){
        //bookid userid bjlxid bookprice booktime
        header("Content-Type:text/html;charset=utf-8");

        $sum=$_SESSION['bookprice'];
        $room=$_SESSION['bookroomid'];
        $sum1=$_SESSION['bookprice'];
        if(strcmp($room,'null')==0||strcmp($room,'')==0){
             alertMes('请先预定包间',U('RoomBook/index'));/*
            $this->error('请预定包间',U('RoomBook/index'));*/
        }
       /* dump($room);
        dump($room=='null');
        dump(strcmp($room,'null'));*/
        if($sum1=='NULL'){
            alertMes('您还未点餐，请点餐！',U('Menu/index'));
        /*    $this->error('您还未点餐，请点餐！',U('Menu/index'));*/
        }
        $userid=$_SESSION['userid'];
        $booktime=date("Y-m-d H:i:s");
        $haspaymessage=M('haspaymessage');
        $data=array(
                'BookId'=>NULL,
                'UserId'=>$userid,
                'BjlxId'=>$room,
                'BookPrice'=>$sum1,
                'BookTime'=>$booktime
                );

            $insert=$haspaymessage->data($data)->add();
               if($insert){
                alertMes('添加订单成功！',U('Shop/myorder'));/*
                $this->success('添加订单成功！',U('Shop/myorder'));*/
                }
        
    }
    public function myorder(){
        header("Content-Type:text/html;charset=utf-8");
        if(session('?username')){
            $userid=$_SESSION['userid'];
            $haspaymessage=M('haspaymessage');
            $select=$haspaymessage->join('think_bjlxmessage ON think_bjlxmessage.BjlxId = think_haspaymessage.BjlxId')->where('think_haspaymessage.UserId='.$userid)->select();
            /*$select=$haspaymessage->query("select * from __PREFIX__haspaymessage where userid='$userid'");*/
            $this->select1=$select;
            $this->display();
        }else{
        $this->error('您还未登录，请登陆！',U('Login/index'));
    } 
    }
}