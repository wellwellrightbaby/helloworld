<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    
<title>花期酒店</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 

<!--公共样式-->
<link href="/menu/Public/Home/Css/public.css" rel="stylesheet"/>

<!--头部样式-->
<link href="/menu/Public/Home/Css/header.css" rel="stylesheet"/>

<!--主体样式-->
<link href="/menu/Public/Home/Css/body.css" rel="stylesheet"/>

<!--底部样式-->
<link href="/menu/Public/Home/Css/footer.css" rel="stylesheet"/>

<!--注册页面样式-->
<link href="/menu/Public/Home/Css/register.css" rel="stylesheet"/>


<!--登录页面样式-->
<!--<link href="/menu/Public/Home/Css/login.css" rel="stylesheet">-->

<!--菜谱页面样式-->
<link rel="stylesheet" href="/menu/Public/Home/Css/menu.css">

<!--RoomBook页面样式-->
<link rel="stylesheet" href="/menu/Public/Home/Css/roombook.css">

<!--菜谱定制样式-->
<link rel="stylesheet" href="/menu/Public/Home/Css/onesmenu.css">

<link href="/menu/Public/Home/Css/xiangqingshow.css" rel="stylesheet"/>

<!--aboutus页面样式-->
<link href="/menu/Public/Home/Css/aboutus.css" rel="stylesheet"/>

<script src="/menu/Public/Home/Bootstrap/Js/bootstrap.min.js" type="text/javascript" ></script>

<script src="/menu/Public/Home/Bootstrap/Js/jquery.js" type="text/javascript" ></script>

<script src="/menu/Public/Home/Js/lunbo.js" type="text/javascript" ></script>

<script src="/menu/Public/Home/Js/jquery-3.2.0.min.js" type="text/javascript" ></script>




<!--<![endif]-->
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->

</head>
<body>
    <!--头部-->
    <header>
        <script>
            $(function(){
                $(".header .nav_zone li").hover(function(){
                    var h = $(this).find(".down").outerHeight();
                    $(".hd_bg").stop().animate({height:h});
                    $(this).find(".down").slideDown();
                },function(){
                    $(".hd_bg").stop().animate({height:0});
                    $(this).find(".down").slideUp();
                })
            })
        </script>
    </head>

    <body>
    <div class="header">
        <a href="#" class="logo">我是logo</a> hello  !    <font style="color:blue;"> <?php echo $_SESSION['username'] ?>    </font><a href="<?php echo U('Login/logout');?>">  登录/退出</a>

        <ul class="nav_zone">
            <li>
                <a href="/menu/index.php/Home/Index">首页</a>

            </li>

            <li>
                <a href="/menu/index.php/Home/Menu">菜谱</a>
                <!-- <div class="down">
                    <a href="#">海鲜</a>
                    <a href="#">花炒</a>
                    <a href="#">饮料</a>
                    <a href="#">小吃</a>
                </div>  -->
            </li>

            <li>
                <a href="/menu/index.php/Home/RoomBook">包间预定</a>
               <!--  <div class="down">
                   <a href="#">豪华单间</a>
                   <a href="#">豪华双人间</a>
                   <a href="#">豪华套房</a>
               </div> -->
            </li>

            <li>
                <a href="<?php echo U('Shop/cart');?>">购物车</a>
                <div class="down">
                    <a href="<?php echo U('Shop/cart');?>">我的购物车</a>
                    <a href="<?php echo U('OnesMenu/index');?>">个性菜谱</a>
                </div>
            </li>

            <!--<li>
                <a href="/menu/index.php/Home/AboutUs">关于我们</a>
                <div class="down">
                    <a href="#">婚席置办</a>
                    <a href="#">商务合作</a>
                </div>
            </li>-->
            <li>
                <a href="/menu/index.php/Home/Login" >个人中心</a>
                <div class="down">
                    <a href="/menu/index.php/Home/Login">登录</a>
                    <a href="/menu/index.php/Home/Register">注册</a>
                </div>
            </li>

        </ul>
        <div class="hd_bg"></div>
    </div>

</header>


    <!--/头部-->



    <!--主体-->
    



<div class="menu">

<!-- <aside class="menu_aside">
        <div class="container">
            <nav>
                <ul class="mcd-menu">
                    <li>
                        <a href="#discount_today">
                            <i class="fa fa-home"></i>
                            <strong>今日特惠</strong>
                            <small>Discount Today</small>
                        </a>
                    </li>
                    <li>
                        <a href="" class="active">
                            <i class="fa fa-edit"></i>
                            <strong>推荐食谱</strong>
                            <small>sweet home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-gift"></i>
                            <strong>Features</strong>
                            <small>sweet home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-globe"></i>
                            <strong>News</strong>
                            <small>sweet home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-comments-o"></i>
                            <strong>Blog</strong>
                            <small>what they say</small>
                        </a>
                        <ul>
                            <li><a href="#"><i class="fa fa-globe"></i>Mission</a></li>
                            <li>
                                <a href="#"><i class="fa fa-group"></i>Our Team</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                            <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                            <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-picture-o"></i>
                            <strong>Portfolio</strong>
                            <small>sweet home</small>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

    </aside>
 -->
    <div class="discount_scroll" >
        <div id="discount_today" style="text-align:center; margin:10px 0;"><h3>今日特惠</h3><br></div>
        <!-- "discount_prev page" link -->
        <a class="discount_prev" href="#"><</a>
        <div class="discount_box">
            <div class="discount_scroll_list">
                <ul>
                    <li><a href="<?php echo U('Xiangqingshow/index',array('showid'=>'6'));?>"><img src="/menu/Public/Home/img/meishi/6.jpg"></a></li>
                    <li><a href="<?php echo U('Xiangqingshow/index',array('showid'=>'9'));?>"><img src="/menu/Public/Home/img/meishi/9.jpg"></a></li>
                    <li><a href="<?php echo U('Xiangqingshow/index',array('showid'=>'12'));?>"><img src="/menu/Public/Home/img/meishi/12.jpg"></a></li>
                    <li><a href="<?php echo U('Xiangqingshow/index',array('showid'=>'15'));?>"><img src="/menu/Public/Home/img/meishi/15.jpg"></a></li>
                    <li><a href="<?php echo U('Xiangqingshow/index',array('showid'=>'18'));?>"><img src="/menu/Public/Home/img/meishi/18.jpg"></a></li>
                    <li><a href="<?php echo U('Xiangqingshow/index',array('showid'=>'21'));?>"><img src="/menu/Public/Home/img/meishi/21.jpg"></a></li>
                    <li><a href="<?php echo U('Xiangqingshow/index',array('showid'=>'3'));?>"><img src="/menu/Public/Home/img/meishi/3.jpg"></a></li>
                    <li><a href="<?php echo U('Xiangqingshow/index',array('showid'=>'1'));?>"><img src="/menu/Public/Home/img/meishi/1.jpg"></a></li>
                </ul>
            </div>
        </div>
        <!-- "discount_next page" link -->
        <a class="discount_next" href="#">></a>
    </div>
    <br><br>

    <script type="text/javascript">
        $(function(){
            var page= 1;
            var i = 4;
            $(".discount_next").click(function(){
                var v_wrap = $(this).parents(".discount_scroll");
                var v_show = v_wrap.find(".discount_scroll_list");
                var v_cont = v_wrap.find(".discount_box");
                var v_width = v_cont.width();
                var len = v_show.find("li").length;
                var page_count = Math.ceil(len/i);
                if(!v_show.is(":animated")){
                    if(page == page_count){
                        v_show.animate({left:'0px'},"slow");
                        page =1;
                    }else{
                        v_show.animate({left:'-='+v_width},"slow");
                        page++;
                    }
                }
            });

            $(".discount_prev").click(function(){
                var v_wrap = $(this).parents(".discount_scroll");
                var v_show = v_wrap.find(".discount_scroll_list");
                var v_cont = v_wrap.find(".discount_box");
                var v_width = v_cont.width();
                var len = v_show.find("li").length;
                var page_count = Math.ceil(len/i);
                if(!v_show.is(":animated")){
                    if(page == 1){
                        v_show.animate({left:'-='+ v_width*(page_count-1)},"slow");
                        page =page_count;
                    }else{
                        v_show.animate({left:'+='+ v_width},"slow");
                        page--;
                    }
                }
            });
        });
    </script>

    <table style="text-align: center;margin:10px auto;" class="menu_table">
        <tr>
            <th>今日美食</th>
            <th>名称</th>
            <th>介绍</th>
            <th>商品价格</th>
            <th>操作</th>
        </tr>

        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr  class="menu_list">
                <td><a href="<?php echo U('Xiangqingshow/index',array('showid'=>$vo['foodid']));?>"><img src="<?php echo ($vo["foodurl"]); ?>" alt="dilicious" class="menu_img"></a></td>
                <td><a href="<?php echo U('Xiangqingshow/index',array('showid'=>$vo['foodid']));?>"><?php echo ($vo["foodname"]); ?></a></td>
                <td><?php echo ($vo["foodintroduce"]); ?></td>
                <td><?php echo ($vo["foodprice"]); ?>.00</td>
                
                <td><button  class="menu_button menu_button1" id><a href="<?php echo U('Shop/joincart',array('id'=>$vo['foodid']));?>">加入购物车</a></button>
                    <button class="menu_button menu_button2"><a href="<?php echo U('Shop/joinsave',array('id'=>$vo['foodid']));?>">加入个性菜谱</a></button></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        <tr><td colspan="5"><br>
        <div class="pages">
            <?php echo ($page); ?></td></tr>
        </div>
    
    </table>
    

    <div style="text-align:center;clear:both"></div>


</div>

    <script>
        $(window).scroll(function () {

            var x=$('.menu_aside').offset().top;
    
        });

    </script>

    <!--/主体-->

    <!--底部-->
    
<!-- 底部
================================================== -->
<footer>
    <div class="f_footer">
        <!--<p class="f_p1">友情链接： | 华为官网 | 华为消费者业务 | 荣耀官网 | 花粉俱乐部 | 莫塞尔商城 | 爱旅官网 | 华为应用市场 | 万表网 | 中商情报网 | 刷机精灵 | 华为手机 | 优购物官网 | 智能电视 | UC浏览器 |</p>-->
        <!--<p class="f_p1">阿里巴巴生意经 | 手机大全 | 安卓软件园 | 卓大师刷机 | 智机论坛 | 电子产品世界 | 历趣网 | 网购返利 | Apple110 | 91手机门户网 | 移动叔叔 | 奥特莱斯 | 荣耀Magic | 携程租车 | <font color="#FF0000">申请链接 >></font></p>-->
        <!--<p class="f_p2">隐私政策 服务协议 Copyright © 2012-2016 VMALL.COM 版权所有 保留一切权利</p>-->
        <p class="f_p2"> 版权所有：北京理工大学珠海学院计算机学院14级网络工程2班廖小凤&陈珊萍</font></p>
        <p class="f_p2"> 联系电话：13160678112/13160661309 |<a href="/menu/index.php/Admin/Login.html">管理中心</a></font></p>
        <!--<p class="f_p2"><img src="img/foot/2.png" /><img src="img/foot/3.png" /><img src="img/foot/4.png" /></p>-->
    </div>
</footer>



    <!--底部-->

</body>
</html>