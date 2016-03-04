$(document).ready(function() {
    $('input.form-control').keydown(function() {
        $(this).css('background-color', '#fff');
    })

    $('#submit').click(function(e) {
        if($('#site').val() == '') {
            $('#site').focus().css('background-color', '#FAEBCC');
            return false;
        }
        if($('#url').val() == '' || $('#url').val().indexOf('.') < 0) {
            $('#url').focus().css('background-color', '#FAEBCC').attr('placeholder', '请输入正确的网址');
            return false;
        }
        if($('#email').val() == '' || $('#email').val().indexOf('@') < 0) {
            $('#email').focus().css('background-color', '#FAEBCC').attr('placeholder', '请输入正确的邮箱地址');
            return false;
        }
        if($('#intro').val() == '') {
            $('#intro').val('none');
        }
        e.preventDefault();
        $('#apply').ajaxSubmit({
            dataType: 'json',
            url: './script/apply.php',
            beforeSend: function() {
                $('#submit').html('loading...');
            },
            success: function(data, status) {
                $('#container').html('<h2>感谢你的贡献</h2><p>提交的内容正在确认，稍后会以邮件形式通知你。</p><p>已提交内容</p><p class="site">网站名称：' + data.site + '</p><p class="url">网站地址：' + data.url + '</p class="intro">网站简介：' + data.intro + '</p><p class="email">联系邮箱：' + data.email + '</p>');
            }
        })
    })

})

