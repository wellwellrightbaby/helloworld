<?php
namespace Home\Controller;

use Think\Controller;

class RoomBookController extends Controller
{
    public function index(){
    $bookroom=M('bjlxmessage');
    $this->bookroom1=$bookroom->select();

    $this->display();
    }
    public function bookroom(){
    	header("Content-Type:text/html;charset=utf-8");
    	if(session('?username')){
	    	$bkid=I('id');
	    	$bookroom1=M('bjlxmessage');

	    	$_SESSION['bookroomid']=$bkid;

	    	$select=$bookroom1->query("select * from __PREFIX__bjlxmessage where bjlxid='$bkid'");
	    	$bjcount1=$select[0]['bjlxcount']-1;



	    	$data=array(
	    		'BjlxCount'=>$bjcount1,
	    		);
	    	$where['BjlxId']=$bkid;
	    	

	    	$update=$bookroom1->where($where)->save($data);
	    	
	        	   if($update){

           	 alertMes('预定包间成功！',U('RoomBook/index'));
	        		/*$this->success('预定包间成功！');*/
	        		}
	    }else{
	    	alertMes('您还未登录，请登陆！',U('Login/index'));/*
    		$this->error('您还未登录，请登陆！',U('Login/index'));*/
    	}



    }
}
