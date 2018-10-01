<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
<head>
    <title>国庆解谜 · 数字杭电 | Digitalized DCP</title>
    <style type="text/css">
        .login-button{
            margin-top: 15px;
        }
        .m_dom{
            display: none;
        }
        .mobile #username {
            color: #fff !important;
        }

        .mobile .mistake_notice{
            height: auto;
            opacity: 1;
            margin-top: 0;
            margin-bottom: 10px;
            color: #ff3;
            font-size: 13px;
            line-height: 26px;
            text-align: center;
            display: block;
        }
        
        .mobile input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px #4C94DB inset;
            -webkit-text-fill-color: #fff !important;
        }
    </style>
    
    <link href="/static/css/login_i.css" rel="stylesheet" type="text/css">
    <link href="/static/css/loginpage.css" rel="stylesheet" type="text/css">
</head>

	<body id="login">
		<div id="wrapper" class="loginpage_wrrap"><div class="loginpage_head" id="header"><div class="loginpage_head_center"><img src="/static/img/nb_logo.png" width="335" height="65"><button class="loginpage_head_icon" onClick="javascript:Hint();">帮助</button></div></div><div id="main" class="loginpage_center"><div class="loginpage_center_main"> 
					<form id="login_form" name="login_form" class="login_form" action="http://cas.hdu.edu.cn/cas/login" method="post">
						<span class="loginpage_center_text">
							用户登录
						</span>
						
                        <div class="loginpage_center_row login_wrap">
                            <span for="username" class="loginpage_center_font">帐号：</span>
                            <label for="username"></label>
                            <input class="loginpage_center_input login_input" id="username" name="username" type="text" tabindex="1" placeholder="学号/工号" style="color: rgb(0, 0, 0);">

                            <div class="loginpage_center_row pwd">
                                <span class="hack_border"></span>
                                <span for="password" class="loginpage_center_font">密码：</span>
                                <label for="password">            </label>
                                <input class="loginpage_center_input login_input" id="password" name="password" value="" tabindex="2" type="password" placeholder="密码">
						    </div>
                     
                        <div class="loginpage_center_chrow login_hidden">
                            <input type="checkbox" name="autoLogin" id="autoLogin" value="true" tabindex="5" class="loginpage_center_check">
                            <font class="loginpage_center_checkfont">保存登录信息</font>
                        </div>

                        <div class="loginpage_center_chrow">
                            <input type="button" id="login" class="loginpage_center_btn" value="登录" tabindex="4" onclick="javascript:Login();">

								<div class="login-button m_dom" tabindex="4">登录</div>
								<input type="checkbox" id="auto-login-hack" class="m_dom">
							
                            
                            <label class="hack_input auto-login-label m_dom" for="auto-login-hack"></label>
                            <input type="button" id="login1" class="loginpage_center_btn" value="忘记密码" tabindex="5" onClick="javascript:forgotPassword();">
                            
								<a class="forget-pass m_dom">忘记密码</a>
							
                        </div>

					</div>
					</form>
		</div></div></div><div class="loginpage_foot"><font class="loginpage_foot_font"><img src="/static/img/nb_logo_s.png" style="width: 115px;height: 22px;"><a href="http://cas.hdu.edu.cn/cas/login?service=http%3A%2F%2Fi.hdu.edu.cn%2Fdcp%2Fforward.action%3Fpath%3D%2Fportal%2Fportal%26p%3DwkHomePage#" class="left">数字杭电</a>    <font class="left">Copyright@ 2013</font></font><font class="right loginpage_foot_font">【数字杭电】由杭州电子科技大学信息中心提供技术支持</font></div> 
        <br>
        <div style="color:red;font-size:20px;">
        <b>注意！这并不是真正的 数字杭电 网站！</b>设计这个界面只是游戏需要，请勿输入你的任何真实信息！
        </div>

        <?php if(isset($_GET['code'])){
            if($_GET['code'] == md5('HDUHDUHDU')){
        ?>
            https://decode.wuhan5.cc/wElReZsPhnvLnOR5D4JYcFs4CaW2zPtmDmMVKz3TJBD15owEpkw5HuHMIx16ouBAgwXjSFHKRWvuxmt9/
        <?php }}?>

        <script src="/static/js/tSeozRdS4TmZaVeti6QyZoj8396uAPg7oFV21UkUCGZHefTlr5RL7238lCJth402C5RjBNIRTT20oIMRHyse9pXIQeaIe0hSFVa/message.js"></script>
</body></html>