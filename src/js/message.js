$(document).ready(function() {
    // 留言显示
    // 
    // $.get('./script/display.php?display=message', function(data, status){
    //     console.log(data);
    // });

    // 留言提交
    // 
    $('input.form-control, textarea.form-control').keydown(function() {
        $(this).css('background-color', '#fff');
    })

    $('#submit').click(function(e) {
        if($('#content').val() == '') {
            $('#content').focus().css('background-color', '#FAEBCC');
            return false;
        }
        if($('#nickname').val() == '') {
            $('#nickname').focus().css('background-color', '#FAEBCC').attr('placeholder', '请输入昵称');
            return false;
        }
        if($('#email').val() == '' || $('#email').val().indexOf('@') < 0) {
            $('#email').focus().css('background-color', '#FAEBCC').attr('placeholder', '请输入正确的邮箱地址');
            return false;
        }
        e.preventDefault();
        $('#message').ajaxSubmit({
            dataType: 'json',
            url: './script/handle.php',
            beforeSend: function() {
                $('#submit').html('loading...');
            },
            success: function(data, status) {
                if(data == 1){
                    $('#container').html('<h2>感谢你的留言</h2>');                    
                }
                if(data == 0){
                    $('#container').html('<h2>非常抱歉，留言提交失败，请刷新页面重新提交</h2>')
                }
            }
        })
    })

    //留言翻页
    //
    $('[aria-label="Previous"]').click(function(e){
        var $current_page_num = parseInt($('li.active').attr('id'));
        e.preventDefault();
        if($current_page_num>1){
            location.href="./message.php?p="+($current_page_num-1);
        } else{
            location.href="./message.php?p="+$current_page_num;
        }

    })

    $('[aria-label="Next"]').click(function(e){
        var $current_page_num = parseInt($('li.active').attr('id'));
        e.preventDefault();
        if($current_page_num<($('.pagination li').length-2)){
            location.href="./message.php?p="+($current_page_num+1);            
        } else{
            location.href="./message.php?p="+$current_page_num;
        }
    })
    

})