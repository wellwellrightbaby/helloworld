<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function _initialize(){
   // 初始化的时候检查用户权限
        $tid=cookie('tid_cookie');
        if (!empty($tid)) {
                 $this->assign('tid',$tid);
              }else{            
                 $this->error('当前用户未登录或登录超时，请重新登录!', U('/Admin/Login'));  }
        
    }
    


   public function delcookie(){
        cookie('tid_cookie',null);
        cookie('teacher_cookie',null);
         $data = array(
                'status' => 1    
            );
           $this->ajaxReturn($data);
    }
 
    
}