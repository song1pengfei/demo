<!DOCTYPE html>
<!-- saved from url=(0083)https://passport.cnblogs.com/user/signin?ReturnUrl=https%3A%2F%2Fwww.cnblogs.com%2F -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width">
    <title>用户登录 - 博客园</title>
    <link href="{{asset('css/signin_bundle.css')}}" type="text/css" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jsencrypt.min.js')}}"></script>
    <script>
        var return_url = 'https://www.cnblogs.com/';
        var ajax_url = '/user' + '/signin';
        var enable_captcha = false;
        var is_in_progress = false;

        function setFocus() {
            document.getElementById('input1').focus();
        }

        function check_enter(event) {
            if (event.keyCode == 13) {
                var target = event.target || event.srcElement;
                if (target.id == "input1") {
                    if (document.getElementById('input1').value == '') {
                        $('#tip_input1').html("请输入登录用户名");
                        return;
                    }
                    else if (document.getElementById('input2').value == '') {
                        document.getElementById("input2").focus();
                        return;
                    }
                }
                if (target.id == "input2") {
                    if (document.getElementById('input2').value == '') {
                        $('#tip_input2').html("请输入密码");
                        return;
                    }
                }
                signin_go();
            }
        }

        function signin_go() {
            if(is_in_progress){
                return;
            }

            $('#tip_input1').html('');
            $('#tip_input2').html('');

            var input1 = $.trim($('#input1').val());
            if (!input1) {
                $('#tip_input1').html("请输入登录用户名");
                $('#input1').focus();
                return;
            }
            var input2 = $.trim($('#input2').val());
            if (!input2) {
                $('#tip_input2').html("请输入密码");
                $('#input2').focus();
                return;
            }

            if(enable_captcha)
            {
                var captchaCode = $.trim($('#captcha_code_input').val());
                if (!captchaCode)
                {
                    $('#tip_captcha_code_input').html("请输入验证码");
                    $('#captcha_code_input').focus();
                    return;
                }
            }

            $('#tip_btn').html('提交中...');

            var encrypt = new JSEncrypt();
            encrypt.setPublicKey('MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCp0wHYbg/NOPO3nzMD3dndwS0MccuMeXCHgVlGOoYyFwLdS24Im2e7YyhB0wrUsyYf0/nhzCzBK8ZC9eCWqd0aHbdgOQT6CuFQBMjbyGYvlVYU2ZP7kG9Ft6YV6oc9ambuO7nPZh+bvXH0zDKfi02prknrScAKC0XhadTHT3Al0QIDAQAB');
            var encrypted_input1 = encrypt.encrypt($('#input1').val());
            var encrypted_input2 = encrypt.encrypt($('#input2').val());
            var ajax_data = {
                input1: encrypted_input1,
                input2: encrypted_input2,
                remember: $('#remember_me').prop('checked')
            };

            if(enable_captcha){
                var captchaObj = $("#captcha_code_input").get(0).Captcha;
                ajax_data.captchaId = captchaObj.Id;
                ajax_data.captchaInstanceId = captchaObj.InstanceId;
                ajax_data.captchaUserInput = $("#captcha_code_input").val();
            }
            is_in_progress = true;
            $.ajax({
                url: ajax_url,
                type: 'post',
                data: JSON.stringify(ajax_data),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                headers: {
                    'VerificationToken': 'EEDKt-2Ep-Dwwf6oF7TS1UJ30cH8vrIY6tGLF-xL1QPurjg3HoFgy7SpvHkNCBklI7LYB3vHFvoqV7Znip0A0WTPRJU1:aaYmtD6tSAkczMm4Beuu8JYxFuhzUNvrTegWGkZGlqfqbCIkwFE5La2KwyKdSCDGPvKDG3eD-d--q7B8kfN4_acko-c1'
                },
                success: function (data) {                    
                    if (data.success) {
                        $('#tip_btn').html('登录成功，正在重定向...');
                        location.href = return_url;
                    } else {
                        $('#tip_btn').html(data.message + "<br/><br/>联系 contact@cnblogs.com");
                        is_in_progress = false;
                        if(enable_captcha)
                        {
                            captchaObj.ReloadImage();
                        }
                    }
                },
                error: function (xhr) {
                    is_in_progress = false;
                    $('#tip_btn').html('抱歉！出错！联系 contact@cnblogs.com');
                }
            });
        }

        $(function () {
            $('#signin').bind('click', function () {
                signin_go();
            }).val('登 录');

        });
    </script>
</head>
<body onload="setFocus()">
    <div style="width: 100%;">
        <div align="center">
            <div id="Main">
                <noscript>
                    &lt;div style="font-size:15px;margin-bottom:20px;"&gt;
                        您的浏览器未启用Javascript，无法进行登录。
                    &lt;/div&gt;
                    &lt;style&gt;                       
                        form { display:none;}
                    &lt;/style&gt;
                </noscript>
                    <form method="post" onsubmit="return false;">
                        <div id="Heading">登录博客园 - 代码改变世界</div>
                        <div class="block">
                            <label class="label-line">登录用户名(<a href="" tabindex="-1" class="tb_right">找回</a>)</label>
                            <input type="text" id="input1" value="" class="input-text" onkeydown="check_enter(event)"> <span id="tip_input1" class="tip"></span>
                        </div>
                        <div class="block">
                            <label class="label-line">密码(<a href="" tabindex="-1" class="tb_right">重置</a>)</label>
                            <input type="password" id="input2" value="" class="input-text" onkeydown="check_enter(event)"> <span id="tip_input2" class="tip"></span>
                        </div>
                        <div class="block">
                            <input id="remember_me" type="checkbox" name="remember_me" onkeydown="check_enter(event)"><label for="remember_me" onkeydown="check_enter(event)">下次自动登录</label>
                        </div>
                        <div class="block">
                            <input type="submit" id="signin" class="button" value="登 录"> <span id="tip_btn" class="tip"></span>
                        </div>
                        <div class="block nav">
                            » <a href="" title="注册成为博客园用户">立即注册</a><br>
                            » <a href="">反馈问题</a>
                        </div>
                    </form>
                    <div style="clear: both">
</div>
        </div>
    </div>


</div></body></html>