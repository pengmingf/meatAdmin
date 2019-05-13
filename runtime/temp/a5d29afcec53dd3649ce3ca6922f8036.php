<?php /*a:7:{s:72:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/student/insert.html";i:1555377256;s:69:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/base.html";i:1554692824;s:69:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/head.html";i:1555388196;s:68:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/top.html";i:1555476474;s:70:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/style.html";i:1554691860;s:68:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/nav.html";i:1555377996;s:69:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/public/foot.html";i:1554739024;}*/ ?>

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

</head>
<title>新增用户</title>



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
                <img src="/static/assets/img/user04.png" alt="">
            </div>
            <span class="user-panel-logged-in-text">
      <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
      禁言小张
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
                    <a href="table-list.html">
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
                    <a href="table-list.html">
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
                    <a href="table-list.html">
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
                    <a href="table-list.html">
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
    <div class="container-fluid am-cf">
        <div class="row">

            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">边框表单</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">

                        <form class="am-form tpl-form-border-form tpl-form-border-br" id="form">
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">昵称 <span
                                        class="tpl-form-line-small-title">nicheng</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="name" name="name" placeholder="请输入昵称">
                                    <small>请填写昵称2-8字。</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">学号 <span
                                        class="tpl-form-line-small-title">xuehao</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="xuehao" name="xuehao" placeholder="请输入学号">
                                    <small>请填写8位数学号。</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">密码 <span
                                        class="tpl-form-line-small-title">password</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="password" name="password" placeholder="请输入密码">
                                    <small>请填写6-16位由数字和字母组成的密码。</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">身份 <span
                                        class="tpl-form-line-small-title">shenfen</span></label>
                                <div class="am-u-sm-9">
                                    <input type="radio" class="tpl-form-input" value="1" name="shenfen"
                                        id="shenfen" checked>学生
                                    <input type="radio" class="tpl-form-input" value="2" name="shenfen"
                                        id="shenfen">教师
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span
                                        class="tpl-form-line-small-title">iphone</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="iphone" name="iphone" placeholder="请输入手机号">
                                    <small>请填写11位手机号。</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">邮箱 <span
                                        class="tpl-form-line-small-title">email</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="email" name="email" placeholder="请输入邮箱">
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
                                        onclick="insertStudent()">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function insertStudent() 
    {
        // var name = $('#name').val();
        // var xuehao = $('#xuehao').val();
        // var password = $('#password').val();
        // var shenfen = $('input:radio:checked').val();
        // var iphone = $('#iphone').val();
        // var email = $('#email').val();
        // var image = $('#image').val();
        var form =  document.getElementById("form");
        var formData = new FormData(form);
        var files = $('#image').prop('files');
        formData.append('file',files[0]);
        $.ajax({
            url     :   "<?php echo url('student/insertStudent'); ?>",
            type    :   "post",
            // enctype :   'multipart/form-data',
            // data    :   {'name':name,'xuehao':xuehao,'password':password,'shenfen':shenfen,'iphone':iphone,'email':email,'image':image},
            data    :   formData,
            cache   :   false,
            contentType: false,    
            processData: false, 
            dataType:   "json",
            success :   function(data){
                if(data.code === 1)
                {
                    alert(data.message);
                    window.location.href="<?php echo url('student/studentList'); ?>";
                }else{
                    alert(data.message);
                }
            }
            
        });
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
