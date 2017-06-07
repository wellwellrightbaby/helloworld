<?php
namespace Home\Controller;

use Think\Controller;

class MenuController extends Controller
{
    public function index(){
        $Data1=M('foodmessage');
        $count=$Data1->count();
        $p=getpage($count,10);
        $list = $Data1->query("select * from think_foodmessage order by foodid  limit $p->firstRow,$p->listRows");
        /*$list=$Data1->field(true)->limit($p->fisrtRow,$p->listRows)->order('foodid')->select();*/
        $this->assign('data',$list);

        $this->assign('page',$p->show());
        $this->display();
    }

   


}