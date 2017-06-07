<?php
namespace Home\Controller;

use Think\Controller;

class BaseController extends Controller
{
    public function common(){
        $this->display();
    }
}
