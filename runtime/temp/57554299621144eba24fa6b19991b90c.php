<?php /*a:7:{s:73:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/adminuser/admin.html";i:1557917376;s:69:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/base.html";i:1557797260;s:69:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/head.html";i:1557889080;s:68:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/top.html";i:1557797260;s:70:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/style.html";i:1557797260;s:68:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/nav.html";i:1557890448;s:69:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/foot.html";i:1557797260;}*/ ?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/static/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/static/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/static/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/static/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/static/assets/css/app.css">
    <script src="/static/assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/static/assets/css/amazeui.min.css"/>
    <script src="/static/assets/js/app.js"></script>

    <style>

        /*分页*/
        
        .pagination {margin: 0 auto;}
        
        .pagination li {display: inline-block;margin-right: -1px;padding: 8px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;}
        
        .pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}
        
        .pagination li a {display: block;text-align: center;}
            
    </style>
</head>
<title>管理员列表</title>



<body data-type="index">
    <script src="/static/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
<header>
    <!-- logo -->
    <div class="am-fl tpl-header-logo">
        <a href="javascript:;"><img src="/static/assets/img/logo.png" alt=""></a>
    </div>
    <!-- 右侧内容 -->
    <div class="tpl-header-fluid">
        <!-- 侧边切换 -->
        <div class="am-fl tpl-header-switch-button am-icon-list">
            <span>

        </span>
        </div>
        <!-- 搜索 -->
        <div class="am-fl tpl-header-search">
            <form class="tpl-header-search-form" action="javascript:;">
                <button class="tpl-header-search-btn am-icon-search"></button>
                <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
            </form>
        </div>
        <!-- 其它功能-->
        <div class="am-fr tpl-header-navbar">
            <ul>
                <!-- 欢迎语 -->
                <li class="am-text-sm tpl-header-navbar-welcome">
                    <a href="javascript:;">欢迎你, <span><?php echo htmlentities(app('session')->get('admin_id')->name); ?></span> </a>
                </li>

                <!-- 新邮件 -->
                <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                    <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                        <i class="am-icon-envelope"></i>
                        <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                    </a>
                    <!-- 弹出列表 -->
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-menu-messages">
                            <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                <div class="menu-messages-ico">
                                    <img src="/static/assets/img/user04.png" alt="">
                                </div>
                                <div class="menu-messages-time">
                                    3小时前
                                </div>
                                <div class="menu-messages-content">
                                    <div class="menu-messages-content-title">
                                        <i class="am-icon-circle-o am-text-success"></i>
                                        <span>夕风色</span>
                                    </div>
                                    <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                    <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                </div>
                            </a>
                        </li>

                        <li class="tpl-dropdown-menu-messages">
                            <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                <div class="menu-messages-ico">
                                    <img src="/static/assets/img/user02.png" alt="">
                                </div>
                                <div class="menu-messages-time">
                                    5天前
                                </div>
                                <div class="menu-messages-content">
                                    <div class="menu-messages-content-title">
                                        <i class="am-icon-circle-o am-text-warning"></i>
                                        <span>禁言小张</span>
                                    </div>
                                    <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                    <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                </div>
                            </a>
                        </li>
                        <li class="tpl-dropdown-menu-messages">
                            <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                <i class="am-icon-circle-o"></i> 进入列表…
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- 新提示 -->
                <li class="am-dropdown" data-am-dropdown>
                    <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                        <i class="am-icon-bell"></i>
                        <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                    </a>

                    <!-- 弹出列表 -->
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-menu-notifications">
                            <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                <div class="tpl-dropdown-menu-notifications-title">
                                    <i class="am-icon-line-chart"></i>
                                    <span> 有6笔新的销售订单</span>
                                </div>
                                <div class="tpl-dropdown-menu-notifications-time">
                                    12分钟前
                                </div>
                            </a>
                        </li>
                        <li class="tpl-dropdown-menu-notifications">
                            <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                <div class="tpl-dropdown-menu-notifications-title">
                                    <i class="am-icon-star"></i>
                                    <span> 有3个来自人事部的消息</span>
                                </div>
                                <div class="tpl-dropdown-menu-notifications-time">
                                    30分钟前
                                </div>
                            </a>
                        </li>
                        <li class="tpl-dropdown-menu-notifications">
                            <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                <div class="tpl-dropdown-menu-notifications-title">
                                    <i class="am-icon-folder-o"></i>
                                    <span> 上午开会记录存档</span>
                                </div>
                                <div class="tpl-dropdown-menu-notifications-time">
                                    1天前
                                </div>
                            </a>
                        </li>


                        <li class="tpl-dropdown-menu-notifications">
                            <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                <i class="am-icon-bell"></i> 进入列表…
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- 退出 -->
                <li class="am-text-sm">
                    <a href="<?php echo url('index/loginOut'); ?>">
                        <span class="am-icon-sign-out"></span> 退出
                    </a>
                </li>
            </ul>
        </div>
    </div>

</header>



<div class="tpl-skiner">
    <div class="tpl-skiner-toggle am-icon-cog">
    </div>
    <div class="tpl-skiner-content">
        <div class="tpl-skiner-content-title">
            选择主题
        </div>
        <div class="tpl-skiner-content-bar">
            <span class="skiner-color skiner-white" data-color="theme-white"></span>
            <span class="skiner-color skiner-black" data-color="theme-black"></span>
        </div>
    </div>
</div>



<div class="left-sidebar">
    <!-- 用户信息 -->
    <div class="tpl-sidebar-user-panel">
        <div class="tpl-user-panel-slide-toggleable">
            <div class="tpl-user-panel-profile-picture">
                <img src="/userimage/<?php echo htmlentities(app('session')->get('admin_id')->image); ?>" alt="">
            </div>
            <span class="user-panel-logged-in-text">
      <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
      <?php echo htmlentities(app('session')->get('admin_id')->name); ?>
  </span>
            <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
        </div>
    </div>

    <!-- 菜单 -->
    <ul class="sidebar-nav">
        <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>
        
        <!-- 用户管理列表 -->
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 用户管理
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('student/studentList'); ?>">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 用户列表
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 消费日志
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 登录日志
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 修改密码日志
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 行为明细
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 异常用户
                    </a>
                </li>
            </ul>
        </li>

        <!-- 商家管理列表 -->
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 商家管理
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('buseruser/buserlist'); ?>">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 商家列表
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 登录日志
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 行为明细
                    </a>
                </li>
            </ul>
        </li>

        <!-- 订单管理列表 -->
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 订单管理
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('dingdan/dingdanList'); ?>">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 订单列表
                    </a>
                </li>
            </ul>
        </li>

        <!-- 管理员管理列表 -->
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 管理员管理
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('adminuser/admin'); ?>">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 管理员列表
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 权限管理
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 登录日志
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 行为明细
                    </a>
                </li>
            </ul>
        </li>

        <!-- 菜品管理 -->
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 菜品管理
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('food/foodlist'); ?>">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 菜品列表
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 菜品类别
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 菜品审核
                    </a>
                </li>
            </ul>
        </li>

        <!-- 统计中心 -->
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 统计中心
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="table-list.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 新增用户统计
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 活跃用户统计
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 用户流水统计
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 商家流水统计
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 订单流水统计
                    </a>
                </li>
            </ul>
        </li>

        <!-- 开发人员 -->
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 开发者
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="table-list.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 开发者列表
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="sidebar-nav-link">
            <a href="tables.html">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 表格
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="calendar.html">
                <i class="am-icon-calendar sidebar-nav-link-logo"></i> 日历
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="form.html">
                <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 表单

            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="chart.html">
                <i class="am-icon-bar-chart sidebar-nav-link-logo"></i> 图表

            </a>
        </li>

        <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li>
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 数据列表
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="table-list.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文字列表
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 图文列表
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-nav-link">
            <a href="sign-up.html">
                <i class="am-icon-clone sidebar-nav-link-logo"></i> 注册
                <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="login.html">
                <i class="am-icon-key sidebar-nav-link-logo"></i> 登录
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="404.html">
                <i class="am-icon-tv sidebar-nav-link-logo"></i> 404错误
            </a>
        </li>

    </ul>
</div>



<div class="tpl-content-wrapper">
    <div class="row-content am-cf">
        <div class="row">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title  am-cf">文章列表</div>


                    </div>
                    <div class="widget-body  am-fr">

                        <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                            <div class="am-form-group">
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <button type="button" onclick="insert()" class="am-btn am-btn-default am-btn-success"><span
                                                class="am-icon-plus"></span> 新增</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-6 am-u-lg-3" >
                            <div class="am-form-group tpl-table-list-select" >
                                
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                            <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                <input type="text" class="am-form-field ">
                                <span class="am-input-group-btn">
                                    <button
                                        class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"
                                        type="button"></button>
                                </span>
                            </div>
                        </div>

                        <div class="am-u-sm-12">
                            <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                <thead>
                                    <tr>
                                        <th>头像</th>
                                        <th>昵称</th>
                                        <th>学号</th>
                                        <th>手机号</th>
                                        <th>邮箱</th>
                                        <th>状态</th>
                                        <th>注册时间</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <tr class="gradeX">
                                            <td>
                                                <img src="/userimage/<?php echo htmlentities($vo['image']); ?>" class="tpl-table-line-img" alt="">
                                            </td>
                                            <td class="am-text-middle"><?php echo htmlentities($vo['name']); ?></td>
                                            <td class="am-text-middle"><?php echo htmlentities($vo['username']); ?></td>
                                            <td class="am-text-middle"><?php echo htmlentities($vo['iphone']); ?></td>
                                            <td class="am-text-middle"><?php echo htmlentities($vo['email']); ?></td>
                                            <td class="am-text-middle"><?php echo htmlentities($vo['status']); ?></td>
                                            <td class="am-text-middle"><?php echo htmlentities($vo['create_time']); ?></td>
                                            <td class="am-text-middle">
                                                <div class="tpl-table-black-operation">
                                                        <button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus" data-am-modal="{target: '#my-popup'}" onclick="update(<?php echo htmlentities($vo['Id']); ?>)";>编辑</button></i> 
                                                    
                                                        <button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus" onclick="delet(<?php echo htmlentities($vo['Id']); ?>)";>删除</button>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <script type="text/javascript">
                            jQuery(".am-popup am-popup-inner").slide({
                                titCell:"h3", //鼠标触发对象
                                targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
                                effect:"slideDown", //targetCell下拉效果
                                delayTime:300 , //效果时间
                                triggerTime:150, //鼠标延迟触发时间（默认150）
                                defaultPlay:true,//默认是否执行效果（默认true）
                                returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
                                });
                        </script> 
                        <script type="text/javascript">
                            function update(id)
                            {
                                $.ajax({
                                    url     :   "<?php echo url('adminuser/update'); ?>",
                                    type    :   "post",
                                    data    :   {'Id':id},
                                    dataType:   "json",
                                    success :   function(data){
                                        $('#name').val(data.name);
                                        $('#xuehao').val(data.username);
                                        $('#password').val(data.password);
                                        $('#shenfen').val(data.status);
                                        $('#iphone').val(data.iphone);
                                        $('#email').val(data.email);
                                    }
                                });
                            }
                        </script>
                        
                        <div class="am-popup am-popup-inner" style="position: absolute;top: 50%;left: 50%;width:60%;transform: translate(-50%, -50%);margin-left: -6%;margin-top: -1%;height:80%;background-color:#4B5357;" id="my-popup">
                            <div class="am-popup-hd" style="background-color:#4B5357;">
                              <h4 class="am-popup-title" style="color:white;">修改用户</h4>
                              <span data-am-modal-close
                                  class="am-close" style="background-color:white;">&times;</span> </div>
                                  <div class="widget am-cf">
                                        <div class="widget-body am-fr">
                                            <form class="am-form tpl-form-border-form tpl-form-border-br" id="form">
                                                <div class="am-form-group">
                                                    <label for="user-name" class="am-u-sm-3 am-form-label">昵称 <span
                                                            class="tpl-form-line-small-title">nicheng</span></label>
                                                    <div class="am-u-sm-9">
                                                        <input type="text" class="tpl-form-input" style="color:gray;" id="name" name="name" placeholder="请输入昵称">
                                                        <small>请填写昵称2-8字。</small>
                                                    </div>
                                                </div>
                    
                                                <div class="am-form-group">
                                                    <label for="user-name" class="am-u-sm-3 am-form-label">账号 <span
                                                            class="tpl-form-line-small-title">zhanghao</span></label>
                                                    <div class="am-u-sm-9">
                                                        <input type="text" class="tpl-form-input" id="xuehao" style="color:gray;" name="xuehao" readonly="readonly" placeholder="请输入账号">
                                                        <small>请填写8位数学号。</small>
                                                    </div>
                                                </div>
                    
                                                <div class="am-form-group">
                                                    <label for="user-name" class="am-u-sm-3 am-form-label">密码 <span
                                                            class="tpl-form-line-small-title">password</span></label>
                                                    <div class="am-u-sm-9">
                                                        <input type="text" class="tpl-form-input" id="password" style="color:gray;" name="password" placeholder="请输入密码">
                                                        <small>请填写6-16位由数字和字母组成的密码。</small>
                                                    </div>
                                                </div>
                    
                                                <div class="am-form-group">
                                                        <label for="user-name" class="am-u-sm-3 am-form-label">身份 <span
                                                            class="tpl-form-line-small-title">shenfen</span></label>
                                                    <div class="am-u-sm-9">
                                                        <input type="text" class="tpl-form-input" id="shenfen" style="color:gray;" name="shenfen" placeholder="请输入身份">
                                                        <small>请填写1位数学号。</small>
                                                    </div>
                                                </div>
                    
                                                <div class="am-form-group">
                                                    <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span
                                                            class="tpl-form-line-small-title">iphone</span></label>
                                                    <div class="am-u-sm-9">
                                                        <input type="text" class="tpl-form-input" style="color:gray;" id="iphone" name="iphone" placeholder="请输入手机号">
                                                        <small>请填写11位手机号。</small>
                                                    </div>
                                                </div>
                    
                                                <div class="am-form-group">
                                                    <label for="user-name" class="am-u-sm-3 am-form-label">邮箱 <span
                                                            class="tpl-form-line-small-title">email</span></label>
                                                    <div class="am-u-sm-9">
                                                        <input type="text" class="tpl-form-input" style="color:gray;" id="email" name="email" placeholder="请输入邮箱">
                                                        <small>请填写正确的邮箱。</small>   
                                                    </div>
                                                </div>
                    
                    
                    
                                                <div class="am-form-group">
                                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">头像 <span
                                                            class="tpl-form-line-small-title">Images</span></label>
                                                    <div class="am-u-sm-9">
                                                        <div class="am-form-group am-form-file">
                                                            <input id="image" name="image" type="file" >
                                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                                <i class="am-icon-cloud-upload"></i> 添加头像图片</button>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <div class="am-form-group">
                                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success"
                                                            onclick="updateAdmin()">提交</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                          </div>
                          <script>
                              function updateAdmin()
                              {
                                var form =  document.getElementById("form");
                                var formData = new FormData(form);
                                var files = $('#image').prop('files');
                                if(!files[0])
                                {
                                    formData.append('picture','null');
                                }else{
                                    formData.append('picture','true');
                                    formData.append('file',files[0]);
                                }
                                  $.ajax({
                                      url       :   "<?php echo url('adminuser/updateadmin'); ?>",
                                      type      :   "post",
                                      data      :   formData,
                                      dataType  :   "json",
                                      cache     :   false,
                                      contentType:  false,
                                      processData:  false,
                                      success   :   function(data){
                                        if (data.code === 1) {
                                            alert(data.message);
                                            window.location.href = "<?php echo url('adminuser/admin'); ?>";
                                        } else {
                                            alert(data.message);
                                        }
                                      }


                                  });
                              }
                          </script>
                        
                        
                        <!-- 页码 -->
                        <div class="am-u-lg-12 am-cf">
                                <div class="am-fr">
                                    <?php echo $page; ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function insert()
    {
        window.location.href = "<?php echo url('adminuser/insert'); ?>";
    }
</script>

<script>
        function delet(id)
        {
            var res = confirm('你确定要删除吗?');
            if(res)
            {
                $.ajax({
                    url     :   "<?php echo url('adminuser/delete'); ?>",
                    type    :   "post",
                    data    :   {"Id":id},
                    dataType:   "json",
                    success :   function(data){
                        if(data.code == 1)
                        {
                            alert(data.message);
                            window.location.href = "<?php echo url('adminuser/admin'); ?>";
                        }
                        else
                        {
                            alert(data.message);
                        }
                    }
                });
            }
        }
    </script>




        <!-- 头部 -->
        
        <!-- 风格切换 -->
        
        <!-- 侧边导航栏 -->
        


        <!-- 内容区域 -->

    </div>
    </div>
    <script src="/static/assets/js/amazeui.min.js"></script>
    <script src="/static/assets/js/amazeui.datatables.min.js"></script>
    <script src="/static/assets/js/dataTables.responsive.min.js"></script>
    <script src="/static/assets/js/app.js"></script>

</body>

</html>
