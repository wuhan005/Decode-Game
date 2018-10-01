<?php
    $status = 0;

    $answer = ['2333', '6666', '0001'];

    if(isset($_POST['UID']) AND isset($_POST['Title']) AND isset($_POST['Content'])){
        if(in_array($_POST['UID'], $answer)){
            //Answer is right.
            $status = 1;
        }else{
            $status = 0;
        }
    }else{
        //Missing parm.
        $status = 9;
    }
?>

<!doctype html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

        <title>国庆解密 · 《我所理解的红客精神》</title>
    </head>
    <body>


    <?php if($status == 0){ ?>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">提交作业成功！</h1>
                <p class="lead">你已经成功提交作业。三秒后返回。</p>
            </div>
        </div>
        <meta http-equiv="refresh" content="2;URL=/jMYUdWISBD7Ix5Glh1ZrYRSQZsjReV6fi04oopzX/index.html">
    <?php } ?>

    <?php if($status == 9){?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">非法提交！</h1>
                <p class="lead">你的作业貌似有些空没有填写哦~。三秒后返回。</p>
            </div>
        </div>
        <meta http-equiv="refresh" content="2;URL=/jMYUdWISBD7Ix5Glh1ZrYRSQZsjReV6fi04oopzX/index.html">
    <?php }?>

    <?php if($status == 1){?>
        <style type="text/css"> 
            body{margin:0;font-size:.7em;font-family:Verdana,Arial,Helvetica,sans-serif;} 
            code{margin:0;color:#006600;font-size:1.1em;font-weight:bold;} 
            .config_source code{font-size:.8em;color:#000000;} 
            pre{margin:0;font-size:1.4em;word-wrap:break-word;} 
            ul,ol{margin:10px 0 10px 5px;} 
            ul.first,ol.first{margin-top:5px;} 
            fieldset{padding:0 15px 10px 15px;word-break:break-all;} 
            .summary-container fieldset{padding-bottom:5px;margin-top:4px;} 
            legend.no-expand-all{padding:2px 15px 4px 10px;margin:0 0 0 -12px;} 
            legend{color:#333333;;margin:4px 0 8px -12px;_margin-top:0px; 
            font-weight:bold;font-size:1em;} 
            a:link,a:visited{color:#007EFF;font-weight:bold;} 
            a:hover{text-decoration:none;} 
            h1{font-size:2.4em;margin:0;color:#FFF;} 
            h2{font-size:1.7em;margin:0;color:#CC0000;} 
            h3{font-size:1.4em;margin:10px 0 0 0;color:#CC0000;} 
            h4{font-size:1.2em;margin:10px 0 5px 0; 
            }#header{width:96%;margin:0 0 0 0;padding:6px 2% 6px 2%;font-family:"trebuchet MS",Verdana,sans-serif; 
            color:#FFF;background-color:#5C87B2; 
            }#content{margin:0 0 0 2%;position:relative;} 
            .summary-container,.content-container{background:#FFF;width:96%;margin-top:8px;padding:10px;position:relative;} 
            .content-container p{margin:0 0 10px 0; 
            }#details-left{width:35%;float:left;margin-right:2%; 
            }#details-right{width:63%;float:left;overflow:hidden; 
            }#server_version{width:96%;_height:1px;min-height:1px;margin:0 0 5px 0;padding:11px 2% 8px 2%;color:#FFFFFF; 
            background-color:#5A7FA5;border-bottom:1px solid #C1CFDD;border-top:1px solid #4A6C8E;font-weight:normal; 
            font-size:1em;color:#FFF;text-align:right; 
            }#server_version p{margin:5px 0;} 
            table{margin:4px 0 4px 0;width:100%;border:none;} 
            td,th{vertical-align:top;padding:3px 0;text-align:left;font-weight:normal;border:none;} 
            th{width:30%;text-align:right;padding-right:2%;font-weight:bold;} 
            thead th{background-color:#ebebeb;width:25%; 
            }#details-right th{width:20%;} 
            table tr.alt td,table tr.alt th{} 
            .highlight-code{color:#CC0000;font-weight:bold;font-style:italic;} 
            .clear{clear:both;} 
            .preferred{padding:0 5px 2px 5px;font-weight:normal;background:#006633;color:#FFF;font-size:.8em;} 
        </style>

        <div id="content"> 
            <div class="content-container"> 
            <h3>服务器错误 - Already Sumbitted</h3> 
            <h4>数据表 Homework 已存在数据。</h4> 
            </div> 
            <div class="content-container"> 
            <fieldset><h4>最可能的原因:</h4> 
            <ul> 	<li>提交的数据与数据库内数据重复。</li> 	<li>提交数据的格式存在问题。</li> 	<li>无数据库访问权限。</li> </ul> 
            </fieldset> 
            </div> 
            <div class="content-container"> 
            <fieldset><h4>可尝试的操作:</h4> 
            <ul> 	<li>重新检查并提交数据。</li> 	<li>联系管理员调试。</li> 	<li>尝试女装。</li> </ul> 
            </fieldset> 
            </div> 
            
            <div class="content-container"> 
            <fieldset><h4>详细错误信息:</h4> 
            <div id="details-left"> 
            <table border="0" cellpadding="0" cellspacing="0"> 
                <tbody><tr class="alt"><th>模块</th><td>&nbsp;&nbsp;&nbsp;NGINX Web Core</td></tr> 
                <tr><th>通知</th><td>&nbsp;&nbsp;&nbsp;MapRequestHandler</td></tr> 
                <tr class="alt"><th>处理程序</th><td>&nbsp;&nbsp;&nbsp;StaticFile</td></tr> 
                <tr><th>错误代码</th><td>&nbsp;&nbsp;&nbsp;0x80070002</td></tr> 
                
            </tbody></table> 
            </div> 
            <div id="details-right"> 
            <table border="0" cellpadding="0" cellspacing="0"> 
                <tbody><tr class="alt"><th>请求的 URL</th><td>&nbsp;&nbsp;&nbsp;https://decode.wuhan5.cc/jMYUdWISBD7Ix5Glh1ZrYRSQZsjReV6fi04oopzX/submit.php</td></tr> 
                <tr><th>物理路径</th><td>&nbsp;&nbsp;&nbsp;/www/wwwroot/decodeweb</td></tr> 
                <tr class="alt"><th>登录方法</th><td>&nbsp;&nbsp;&nbsp;<a href="/tSeozRdS4TmZaVeti6QyZoj8396uAPg7oFV21UkUCGZHefTlr5RL7238lCJth402C5RjBNIRTT20oIMRHyse9pXIQeaIe0hSFVa/index.php">网页端登录</a></td></tr> 
                <tr><th>登录用户</th><td>&nbsp;&nbsp;&nbsp;Administrator</td></tr> 
                
            </tbody></table> 
            <div class="clear"></div> 
            </div> 
            </fieldset> 
            </div> 
            
            <div class="content-container"> 
            </div> 
            </div>
    <?php }?>

    </body>
</html>