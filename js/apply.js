$(document).ready(function(){
    $('input.form-control').keydown(function(){
        $(this).css('background-color', '#fff');
    })

    $('#submit').click(function(e){
        // if($('#site').val() == ''){
        //     $('#site').focus().css('background-color', 'pink');
        //     return false;
        // }
        // if($('#url').val() == ''){
        //     $('#url').focus().css('background-color', 'pink');;
        //     return false;
        // }
        // if($('#email').val() == ''){
        //     $('#email').focus().css('background-color', 'pink');;
        //     return false;
        // }
        e.preventDefault();
        $('#apply').ajaxSubmit({
            dataType: 'json',
            url: './script/submit.php',
            beforeSend: function(){
                $('#submit').html('loading...')
            },
            success: function(data, status){
                // console.log(typeof(data));
                $('container').html(data);
                /*
                $('#container').html('<h2>感谢你的贡献</h2><p>提交的内容正在确认，稍后会以邮件形式通知你。</p><p>已提交内容</p><p class="site">网站名称：'+data.site+'</p><p class="url">网站地址：'+data.url+'</p class="intro">网站简介：'+data.intro+'</p><p class="email">联系邮箱：'+data.email+'</p>');*/
            },
            error: function(data, status){
                $('container').html(status+data.responseText);
            }
        })
    })

})