<?php
namespace Admin\Controller;

use Think\Controller;

class BaseController extends CommonController
{
    public function common(){
        $this->display();
    }
}