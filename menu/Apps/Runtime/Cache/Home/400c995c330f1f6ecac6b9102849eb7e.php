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
    

    <!--<script type="text/javascript" src="__STATIC__/jquery-1.11.1.min.js"></script>-->



    <div id="main" class="container">
        <div class="detail_catalog"></div>
        <div class="banner">
            <div id="items">
                <div class="item" id="item11"></div>
                <div class="item"  id="item22" style=" display: block;"></div>
                <div class="item" id="item33" ></div>
            </div>
            <div class="sub_menu">
                <div class="submenuItem">
                    <ul>
                        <li><!-- 
                            <h3>管&nbsp;理</h3> -->
                            <div>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                            </div>
                        </li>
                        <li></li>
                        <li></li>

                    </ul>
                </div>
                <div class="submenuItem"></div>
                <div class="submenuItem"></div>
                <div class="submenuItem"></div>
                <div class="submenuItem"></div>
                <div class="submenuItem"></div>
            </div>
            <div class="menuContent">
                <div class="menuItem"><a href="<?php echo U('Login/index');?>">登录</a></div>
                <div class="menuItem"><a href="<?php echo U('Register/index');?>">注册</a></div>
                <div class="menuItem"><a href="<?php echo U('Menu/index');?>">菜谱</a></div>
                <div class="menuItem"><a href="<?php echo U('RoomBook/index');?>">包间预定</a></div>
                <div class="menuItem"><a href="<?php echo U('OnesMenu/index');?>">我的个性菜谱</a></div>
                <div class="menuItem"><a href="<?php echo U('Shop/cart');?>">购物车</a></div>
                <div class="menuItem"><a href="<?php echo U('Shop/myorder');?>">我的订单</a></div>
            </div>
            <div id="dotLists">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>



    <script src="/menu/Public/Home/Js/jquery-3.2.0.min.js"></script>
    <script src="/menu/Public/Home/Js/collapse.js"></script>

    <script type="text/javascript">
        $(function(){
            //调用轮播
            new Rotation($("#items"),$("#dotLists"));
        });
    </script>

    <div class="tuijianmenu-menu">

        <div class="tuijianmenu-item">
            <img src="/menu/Public/Home/Img/homepage/01.jpg"  alt="好吃的牛排买二送一！"  class="arealimg">

        </div>

        <div class="tuijianmenu-item">
            <img src="/menu/Public/Home/Img/homepage/02.jpg" alt="大大的虾肉只要59一碟！" class="arealimg">

        </div>

        <div class="tuijianmenu-item">
            <img src="/menu/Public/Home/Img/homepage/03.jpg"  alt="天啊这不是鱼这是艺术品"  class="arealimg">
        </div>

        <div class="tuijianmenu-item">
            <img src="/menu/Public/Home/Img/homepage/04.jpg" alt="番茄蛋面，让人胃口大开啊"  class="arealimg">


        </div>
    <!-- 图片模态框 -->
    <div class="motai" id="mo">
        <span class="close" id="close">×</span>
        <img class="amotaiimg" src="motaiimg" id="moimg">
        <div class="acaption" id="caption"></div>
    </div>
    </div>
    <!--调用图片放大-->
    <script>
        $(document).ready(function(){

            $('.tuijianmenu-item').click(function(e){

                var imgsrc=$(this).children("img.arealimg").attr('src');
                var imgalt=$(this).children("img.arealimg").attr('alt');

                var currentDivId = $(" .motai").attr('id');
                var currentCloseId=$(" .motai .close").attr("id");
                var currentMoImgId=$(" .motai img").attr('id');
                var currentCaptionId=$(" .motai div").attr('id');

                var motai=document.getElementById(currentDivId);
                var moimg=document.getElementById(currentMoImgId);
                var caption=document.getElementById(currentCaptionId);

                motai.style.display="block";

                moimg.src=imgsrc;
                caption.innerHTML=imgalt;

                var close=document.getElementById(currentCloseId);
                $('.motai .close').mousedown(function () {
                    motai.style.display="none";
                });
            });
        });

    </script>


    <div style="clear:both;"></div>
    <div class="menu_h2"><h2>· 特色菜谱 ·</h2></div>

    <div class="gedacaixi">
        <div class="gedacaixi-item item1" style="color:yellow;height:250px;">
            <span class="food_eat">脆皮炸蟹钳</span>
        </div>
        <div class="gedacaixi-item item2" style="color:yellow;height:250px;">
            <span class="food_eat">麒麟大桂鱼</span>
        </div>
        <div class="gedacaixi-item item3" style="color:yellow;height:250px;">
            <span  class="food_eat">游龙戏凤煲</span>
        </div>
        <div class="gedacaixi-item item4" style="color:yellow;height:250px;">
            <span  class="food_eat">香芋扣肉</span>
        </div>
        <div class="gedacaixi-item item5" style="color:yellow;height:250px;">
            <span  class="food_eat">酥炸羊腩</span>
        </div>
        <div class="gedacaixi-item item6" style="color:yellow;height:250px;">
            <span  class="food_eat">游龙戏凤煲</span>
        </div>
    </div>

    <div style="clear:both;"></div>
    <div style="height:100px;width:100%; background:yellow"></div>

    <!--<div><h1>hello i am the body of index</h1></div>-->
    <!--<h1 class="header_fir">hello world</h1>-->

    <!--<?php echo ($word); ?><br/>-->

    <!--<?php echo ($word); ?>-->


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