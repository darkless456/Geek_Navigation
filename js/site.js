/* 
 * @Author: darkless
 * @Date:   2016-02-29 12:14:57
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-10 22:01:54
 */
(function($) {
    var el //站点全局变量
    $wrap = $('.carousel-inner');
    $.ajax({
        type: 'get',
        url: './script/display.php',
        dataType: 'json',
        data: {'display': 'site'},
        async: false, //关闭异步，用于给全局变量赋值
        success: function(data, status) {
            var category = ['front', 'back', 'blog', 'other'];
            $.each(data, function(index, value) {
                var $oDiv = $('<div>').addClass('item').appendTo($wrap);
                var $oDiv2 = $('<div>').addClass('jumbotron clearfix').attr('id', 'index-'+category[index]).appendTo($oDiv);
                for(var i = 0; i < 4; i++) {
                    var $oDiv3 = $('<div>').addClass('row').appendTo($oDiv2);
                    for(var j = 0; j < 6; j++) {
                        var $oDiv4 = $('<div>').addClass('col-md-2 col-sm-4 text-center').attr({
                            'id': (i * 6) + j
                        }).appendTo($oDiv3);
                        var tmp = $oDiv4.attr('id');
                        $('<span>').attr({
                            'data-id': value[tmp]['id'],
                            'data-toggle': 'modal',
                            'data-target': '#infoModal',
                            'data-title': value[tmp]['site'],
                            'data-intro': value[tmp]['intro'],
                            'data-url': value[tmp]['url']
                        }).html(value[tmp]['site']).appendTo($oDiv4);
                    }
                }
                var $oButton = $('<button>').addClass('btn btn-primary btn-lg center-block load-more').attr({
                    'type': 'button',
                    'data-serial': index
                }).html('加载更多').appendTo($oDiv2);
            })
            $('.item:first').addClass('active');
            el = $('.item').find('.col-md-2');
        }
    })
    $(el).on({
        mouseenter: function() {
            $(this).addClass('rubberBand animated');
        },
        mouseleave: function() {
            $(this).removeClass('rubberBand animated')
        }
    })

    $(el).find('span').on('click', function() {
        var site_title = $('.site-title').html('<i class="fa fa-home"> ' + $(this).attr('data-title'));
        // console.log($(this).parents('.jumbotron'));
        // return false;
        var site_category = $(this).parents('.jumbotron').attr('id');
        if(site_category == 'front') {
            var c = '前端设计类';
        } else if(site_category == 'back') {
            var c = '后台开发类';
        } else if(site_category == 'blog') {
            var c = '博客类';
        } else {
            var c = '其他类别';
        }
        $('#site-category').attr('data-category', site_category).html(c);
        $('.site-url').html($(this).attr('data-url'));
        $('.site-visit').attr({
            'href': $(this).attr('data-url'),
            'id': $(this).attr('data-id')
        });
        $('.site-intro').html($(this).attr('data-intro'));
    })

    var timer;
    $('.site-visit').eq(0).unbind('click').click(function(e) {
        e.preventDefault();
        clearTimeout(timer);
        var timer = setTimeout(function() {
            $.ajax({
                type: 'post',
                url: './script/handle.php',
                dataType: 'json',
                data: {
                    'category': $('#site-category').attr('data-category'),
                    'id': $('.site-visit').attr('id'),
                    'clicks': 1
                }
            })
        }, 100);
    })
    
    $('.load-more').on({
        click: function(e){
            e.preventDefault();
            var data_serial = $(this).attr('data-serial');
            window.open('./allsite.php?display='+data_serial);
        }
    })
})(jQuery);

