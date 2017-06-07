<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
<meta charset="UTF-8">
<meta name="description" content="Bootstrap Metro Dashboard">
<meta name="author" content="">
<meta name="keyword" content="">
<!-- end: Meta -->

<title>花期酒店后台管理系统</title>

<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->

<!--公共样式-->
<link href="/menu/Public/Admin/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

<link href="/menu/Public/Admin/Bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link id="ie-style" href="/menu/Public/Admin/Css/ie.css" rel="stylesheet">
<![endif]-->

<!--[if IE 9]>
<link id="ie9style" href="/menu/Public/Admin/Css/ie9.css" rel="stylesheet">
<![endif]-->


<!--navside css-->
<link href="/menu/Public/Admin/Bootstrap/css/bootstrap-dialog.min.css" rel="stylesheet"/>

<link href="/menu/Public/Admin/Css/metisMenu.min.css" rel="stylesheet"/>

<link href="/menu/Public/Admin/Css/sb-admin-2.css" rel="stylesheet"/>

<link href="/menu/Public/Admin/Css/font-awesome.min.css" rel="stylesheet"/>



<!--navside start: JavaScript-->

<script src="/menu/Public/Admin/Js/jquery.min.js"></script>
<!--应该先引入jquery的js文件再引入bootstrap的css文件-->
<script src="/menu/Public/Admin/Bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>

<!-- 对话框js -->
<script src="/menu/Public/Admin/Bootstrap/js/bootstrap-dialog.min.js" type="text/javascript" ></script>



<script src="/menu/Public/Admin/Js/metisMenu.min.js"></script>
<!--nav收缩-->
<script src="/menu/Public/Admin/Js/sb-admin-2.js"></script>
<!--table        -->
<link href="/menu/Public/Admin/Bootstrap/css/bootstrap-table.css" rel="stylesheet"/>
<script src="/menu/Public/Admin/Bootstrap/js/bootstrap-table.js" type="text/javascript" ></script>

<script type="text/javascript" >
    <!-- 退出系统提示 -->
    $(function () {
        var $btn = $('#btn');
        $btn.on('click', function (event) {
            BootstrapDialog.confirm({
                title:  '信息提示',
                message:  '你确定要退出系统吗?',
                btnCancelLabel: '取消',
                btnOKLabel: '确定',
                callback:  function(result){
                    if(result) {
                        window.location.href="<?php echo U('/Admin/login');?>";
                    }else {
                    }
                }

            });

        });
    })

</script>

<!--navside end: JavaScript-->


<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->

</head>
<body>

    <!--主体-->
    <!-- start: navbar -->

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar  navbar-static-top" role="navigation" style="margin-bottom: 0">
        <!--header left start-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="pull-left" style="padding-left: 8px;" href="index.html"><img src="" class="center-block img-responsive"></a>
            <a class="navbar-brand" style="padding-left: 5px;" href="index.html">花期酒店后台管理系统</a>
        </div>
        <!--header left end-->

        <!-- header right start -->
        <ul class="nav navbar-top-links navbar-right">
            <span class="dropdown-toggle mya" data-toggle="dropdown" href="#" style="color: #fff;">
                <i class="icon-user"></i> <?php echo ($tid); ?>&nbsp;
                <!--<i class=" icon-caret-down"></i>-->
            </span>
            <li class="myli"><a class="btn mybtn-primary" id="btn"><i class="icon-circle-arrow-right"></i> 退出系统</a></li>
        </ul>
        <!-- header right end -->


        <div class="sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="menu">
                    <li id="indexId">
                        <a  href="<?php echo U('/Admin/index');?>">
                            <i class="icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <li id="userId">
                        <a href="<?php echo U('/Admin/User');?>"><i class="icon-user-md"></i>&nbsp;用户管理<span class=" icon-angle-right pull-right"></span></a>
                    </li>
                    <li id="menuId">
                        <a href="<?php echo U('/Admin/Menu');?>"><i class="icon-star-empty"></i>&nbsp;菜谱发布<span class=" icon-angle-right pull-right"></span></a>
                    </li>
                    <li id="roomId">
                        <a href="<?php echo U('/Admin/Room');?>"><i class="icon-building"></i>&nbsp;包间管理<span class=" icon-angle-right pull-right"></span></a>
                    </li>
                    <li id="diyId">
                        <a href="<?php echo U('/Admin/Diy');?>"><i class="icon-check"></i>&nbsp;个性菜谱<span class=" icon-angle-right pull-right"></span></a>
                    </li>
                    <li id="orderId">
                        <a href="<?php echo U('/Admin/Order');?>"><i class="icon-edit"></i>&nbsp;订单管理<span class=" icon-angle-right pull-right"></span></a>
                    </li>
                    <li id="shoppingId">
                        <a href="<?php echo U('/Admin/Shopping');?>"><i class="icon-truck"></i>&nbsp;购物车管理<span class=" icon-angle-right pull-right"></span></a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!--#page-wrapper -->

    <div id="page-wrapper" style="padding-top: 10px;">
        
<!--中文-->
<script src="/menu/Public/Admin/Bootstrap/js/bootstrap-table-zh-CN.js" type="text/javascript" ></script>
    <div class="panel panel-default">
        <div class="panel-body">
            <div id="toolbar">
                <div class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                    <span class="icon-plus" aria-hidden="true"></span>添加用户</div>
            </div>
            <!--表格start-->
            <table id="table" data-toggle="table"
                   data-striped ="true"
                   data-toolbar="#toolbar"
                   data-pagination="true"
                   data-page-size="8">
                <thead>
                <tr>
                    <th>ID</th>
                    <th data-field="1">用户名</th>
                    <th data-field="2">用户密码</th>
                    <th data-field="3">联系电话</th>
                    <th data-field="5">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($arr["userid"]); ?></td>
                        <td><?php echo ($arr["username"]); ?></td>
                        <td><?php echo ($arr["userpass"]); ?></td>
                        <td><?php echo ($arr["usertelephone"]); ?></td>
                        <td>
                            <a  class="btn btn-sm btn-danger"  href="javascript:void(0)" onclick="delInfo(this);">
                                <span class="icon-remove" aria-hidden="true"></span>删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <!--表格end-->
        </div>
    </div>

    <!--添加用户的触发框start-->
    <div class="modal fade" id="addModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">添加用户</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo ($UserId); ?>"/>
                        <label>用户名</label>
                        <input type="text"  class="form-control" id="add_name" name="add_name" placeholder="请输入用户"/>
                    </div>
                    <div class="form-group">
                        <label>用户密码</label>
                        <input type="text"  class="form-control" id="add_pwd" name="a_pwd" placeholder="请输入密码"/>
                    </div>
                    <div class="form-group">
                        <label>联系电话</label>
                        <input type="text"  class="form-control" id="add_tel" name="add_tel"   placeholder="请输入联系电话"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn  btn-success " id="btn_add" > 保存</button>
                    <button type="button" class="btn  btn-default "  data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!--添加用户的触发框end-->


    <!-- 删除触发框start-->
    <div class="modal fade" id="delModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">操作提示</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <input type="hidden" name="id" id="del_id"  />
                        <span class="icon-exclamation-sign  icon-large" aria-hidden="true"></span> 你确定要删除吗？
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn  btn-primary " id="btn_del" >确定</button>
                    <button type="button" class="btn  btn-default "  data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>

    <script>

    // 触发删除模态框的同时调用此方法
    function delInfo(obj) {
    var tds = $(obj).parent().parent().find('td');
    $('#del_id').val(tds.eq(0).text());
    $('#delModal').modal('show');
    }

    //删除ajax交互
    $(function () {
        $('#btn_del').click(function (event) {
            //获取模态框数据
            var id = $('#del_id').val();
            $.ajax({
                type: "post",
                url: "/menu/index.php/Admin/User/del",
                data: {UserId: id},
                dataType: 'text',
                contentType: "application/x-www-form-urlencoded; charset=utf-8",
                success: function (data) {
                    $('#delModal').modal('hide');
                    var obj = new Function("return" + data)();
                    alert(obj.info);
                    location.reload();
                }

            });

        });
    });
    //删除ajax交互end


    //添加用户ajax交互
    $(function(){
        $('#btn_add').click(function(event){
            //获取数据
            var id = $('#id').val();
            var name = $('#add_name').val();
            var pwd = $('#add_pwd').val();
            var tel = $('#add_tel').val();
            if(name=="" || name==null){
                alert("用户名不能为空！");
                $("#add_name").focus();
                return false;
            }
            if(pwd=="" || pwd==null){
                alert("密码不能为空！");
                $("#add_pwd").focus();
                return false;
            }
            if(tel=="" || tel==null){
                alert("联系电话不能为空！");
                $("#add_tel").focus();
                return false;
            }else if(tel.length!=11) {
                alert("电话号码必须为11位");
                $("#add_tel").focus();
                return false;
            }
            $.ajax({
                type: "post",
                url: "/menu/index.php/Admin/User/create",
                data: {UserId:id,UserName:name,UserPass:pwd,UserTelephone:tel},
                dataType: 'text',
                contentType: "application/x-www-form-urlencoded; charset=utf-8",
                success: function(data) {
                    $('#addModal').modal('hide');
                    var obj = new Function("return" + data)();
                    alert(obj.info);
                    //刷新
                    location.reload();
                }

            });

        });
    });
</script>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script type="text/javascript">
    //$('#<?php echo ($light); ?>').addClass('active');
    <!--nav-->
    var urlstr = location.href;
    //alert(urlstr);
    var urlstatus = false;
    $("#menu a").each(function() {
        if((urlstr + '/').indexOf($(this).attr('href')) > -1 && $(this).attr('href') != '') {
            $(this).addClass('cur');
            urlstatus = true;
        } else {
            $(this).removeClass('cur');
        }
    });
    if(!urlstatus) {
        $("#menu a").eq(0).addClass('cur');
    }
</script>
<style type="text/css">
    .cur {
        font-weight: bold;
        background: #235282;
        padding: 4px 0;
    }
</style>



    <!--/主体-->

    <!--底部-->
    
    <!--底部-->

</body>
</html>