<?php /*a:1:{s:69:"/www/wwwroot/mfmeat/meatAdmin/application/index/view/login/login.html";i:1557890508;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>点餐登录页面11</title>
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

</head>

<body data-type="login">
    <script src="/static/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
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
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">

                </div>



                <form class="am-form tpl-form-line-form">
                    <div class="am-form-group">
                        <input type="text" id="username" class="tpl-form-input" id="user-name" placeholder="请输入账号">

                    </div>

                    <div class="am-form-group">
                        <input type="password" id="password" class="tpl-form-input" id="user-name" placeholder="请输入密码">

                    </div>
                    <div class="am-form-group tpl-login-remember-me">
                        <label for="remember-me">
                        <a href="<?php echo url('user/lostPassword'); ?>">忘记密码？</a>
                        
                         </label>

                    </div>






                    <div class="am-form-group">

                        <button type="button" onclick="login()" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/static/assets/js/amazeui.min.js"></script>
    <script src="/static/assets/js/app.js"></script>

</body>

<script>
    function login()
    {
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            type    : 'post',
            url     : "<?php echo url('Login/checkLogin'); ?>",
            data    : {'username':username,'password':password},
            dataType: 'json',
            success : function(data){
                if(data.code === 1)
                {
                    alert(data.message);
                    window.location.href="<?php echo url('index/index/index'); ?>";
                }else{
                    alert(data.message);
                }
            }
        });
    }
</script>
</html>