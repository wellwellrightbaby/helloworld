<?php
namespace Home\Controller;

use Think\Controller;

class XiangqingshowController extends Controller
{
    public function index(){
    	$id=I('showid');
    	$foodmessage1=M('foodmessage');
    	$select=$foodmessage1->query("select * from __PREFIX__foodmessage where foodid='$id'");
    	$foodurl1=$select[0]['foodurl'];
    	$foodname1=$select[0]['foodname'];
    	$foodintroduce1=$select[0]['foodintroduce'];
    	$foodprice1=$select[0]['foodprice'];
    	$fooditemid1=$select[0]['fooditemid'];
    	$foodid1=$select[0]['foodid'];
    	$this->assign('showurl',$foodurl1);
    	$this->assign('showname',$foodname1);
    	

    	$fooditemmessage1=M('fooditemmessage');
    	$select2=$fooditemmessage1->query("select * from __PREFIX__fooditemmessage where fooditemid='$fooditemid1'");
    	$fooditemname1=$select2[0]['fooditemname'];

    	if(!strcmp($fooditemid1, '1')){
    		$fooditemid1=$fooditemname1;
    		$this->assign('showintroduce',$foodintroduce1);
    	}elseif(!strcmp($fooditemid1, '2')){
    		$fooditemid1=$fooditemname1;
    		$this->assign('showintroduce',$foodintroduce1);
    	}elseif(!strcmp($fooditemid1, '3')){
    		$fooditemid1=$fooditemname1;
    		$this->assign('showintroduce',$foodintroduce1);
    	}


    	$this->assign('showprice',$foodprice1);
    	$this->assign('showitemid',$fooditemid1);
    	$this->assign('showid',$foodid1);

        $foodcomment=M('foodcomment');
        $selectcomment=$foodcomment->query("select * from __PREFIX__foodcomment");
        $this->selectcomment1=$selectcomment;
        $com=$foodcomment->table('think_foodcomment as a,think_usermessage as b,think_foodmessage as c')->where('a.UserId=b.UserId
        and a.FoodId=c.FoodId')->field('CommentId,UserName, UserTelephone,FoodName,FoodPrice,FoodURL,FoodUpdateTime,Comment,CommentTime')->
        order('CommentId')->select();
        $this->assign('com', $com);
        $this->display();
    }

    public function comment(){
        if(session('?username')){
            $comment=I('commentthing');
            $userid1=$_SESSION['userid'];
            $foodid1=I('showid');
            $commenttime=date("Y-m-d H:i:s");
           
            $foodcomment1=M('foodcomment');


            $data=array(
                    'CommentId'=>NULL,
                    'UserId'=>$userid1,
                    'FoodId'=>$foodid1,
                    'CommentTime'=>$commenttime,
                    'Comment'=>$comment
                    );

            $insert=$foodcomment1->data($data)->add();
            if($insert){
                     $this->success('评论成功！');
                    }
        }else{
            $this->error('您还未登录，请登陆！',U('Login/index'));
        }   
    	$this->display();
    }
}
