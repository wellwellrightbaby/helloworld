<?php
namespace Home\Controller;

use Think\Controller;

class PublicController extends Controller
{
    public function body(){
        $this->display();
    }
    public function header(){
        $this->display();
    }
    public function footer(){
        $this->display();
    }
    public function head(){
        $this->display();
    }
 }