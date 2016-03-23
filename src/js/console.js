/* 
 * @Author: darkless
 * @Date:   2016-03-02 14:47:42
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-14 21:44:57
 */

$(document).ready(function() {
    var categorys = {
        'front': '前端',
        'back': '后台',
        'blog': '博客',
        'other': '其他'
    }
    analyNum();
    var $wrap = $('.page-wrap');
    //页面载入后
    $('.side-nav li a').not('.exit, .index').click(function(e) {
        e.preventDefault();
        var $that = $(this)
        var url = $that.attr('href');
        $wrap.load(url, function() {
            $('.side-nav').find('li').attr('class', '');
            $that.parent().addClass('active');
            if($('.checking-site').length > 0) {
                outputChecking();
                outofCheck();
            }
        })
    })

    //统计图表
    var options = {
        series: {
            pie: {
                show: true,
                label: {
                    show: true,
                    radius: 180,
                    formatter: function(label, series) {
                        return '<div style="border:1px solid grey;font-size:8pt;text-align:center;padding:5px;color:white;">' +
                            label + ' : ' +
                            Math.round(series.percent) +
                            '%</div>';
                    },
                    background: {
                        opacity: 0.8,
                        color: '#000'
                    }
                }
            }
        },
        legend: {
            show: true
        },
        grid: {
            hoverable: true
        }
    };

    function analyNum() {
        if($('.flot-chart').length > 0) {
            $.getJSON('../script/analysis.php', function(data) {
                $.each($('.huge'), function(index, value) {
                    $(value).html(data.nums[index]);
                })
                var dataSet = [{
                    label: '前端类',
                    data: data.nums[0],
                    color: "#4f93ce"
                }, {
                    label: '后台类',
                    data: data.nums[1],
                    color: "#6ec06e"
                }, {
                    label: '博客类',
                    data: data.nums[2],
                    color: "#f0ad4e"
                }, {
                    label: '其他',
                    data: data.nums[3],
                    color: "#9966cc"
                }];

                $.plot($("#flot-chart-pie"), dataSet, options);

            })
        }
    }

    $("#flot-chart-pie").bind("plothover", function(event, pos, item) {
        if(item) {
            $("#chart-tooltips").html(item.series.label + " : " + item.datapoint[1][0][1] + "个")
                .css({
                    top: item.pageY + 8,
                    left: item.pageX + 8
                })
                .fadeIn(200);
        } else {
            $("#chart-tooltips").empty();
        }
    });

    //输出checking表
    function outputChecking() {
        $.getJSON('../script/display.php', {
            'display': 'checking'
        }, function(data) {
            var $tbody = $('.checking-site').eq(0);
            $.each(data['checkings'], function(index, value) {
                var $tr = $('<tr>').addClass(value['classify']).attr('id', value['id']).appendTo($tbody);
                $('<td>').text(value['uptime']).appendTo($tr);
                $('<td>').text(value['site']).appendTo($tr);
                $('<td>').text(value['url']).appendTo($tr);
                $('<td>').text(value['intro']).appendTo($tr);
                $('<td>').text(value['email']).appendTo($tr);
                $('<td>').text(categorys[value['classify']]).appendTo($tr);
                //审核按钮
                var $btn_group = $('<div>').addClass('btn-group').appendTo($tr);
                // var $default_btn = $('<button>').addClass('btn btn-info').html('详情').appendTo($btn_group);
                var $btn_dropdown = $('<button>').addClass('btn btn-primary dropdown-toggle').attr({
                    'data-toggle': 'dropdown',
                    'aria-haspopup': 'true',
                    'aria-expanded': 'false'
                }).html('审核').appendTo($btn_group);
                $('<span>').addClass('caret').appendTo($btn_dropdown);
                $('<span>').addClass('sr-only').html('Toggle Dropdown').appendTo($btn_dropdown);
                var $btn_ul = $('<ul>').addClass('dropdown-menu').appendTo($btn_group);
                var $li_0 = $('<li>').appendTo($btn_ul);
                $('<a>').attr('href', '2').html('<i class="fa fa-archive"></i>详情').appendTo($li_0);
                var $li_1 = $('<li>').appendTo($btn_ul);
                $('<a>').attr('href', '1').html('<i class="fa fa-check"></i>通过').appendTo($li_1);
                var $li_2 = $('<li>').appendTo($btn_ul);
                $('<a>').attr('href', '0').html('<i class="fa fa-ban"></i>不通过').appendTo($li_2);
            });
            checkingBtn();
        })
    }
    //输出outofcheck表
    function outofCheck() {
        $.getJSON('../script/display.php', {
            'display': 'checking'
        }, function(data) {
            var $tbody = $('.outofcheck-site').eq(0);
            $.each(data['outofchecks'], function(index, value) {
                var $tr = $('<tr>').addClass(value['classify']).attr('id', value['id']).appendTo($tbody);
                $('<td>').text(value['uptime']).appendTo($tr);
                $('<td>').text(value['site']).appendTo($tr);
                $('<td>').text(value['url']).appendTo($tr);
                $('<td>').text(value['intro']).appendTo($tr);
                $('<td>').text(value['email']).appendTo($tr);
                $('<td>').text(categorys[value['classify']]).appendTo($tr);
                $('<td>').text(value['conclusion']).appendTo($tr);
                var $btn1 = $('<button>').addClass('btn btn-info').appendTo($tr);
                $('<a>').attr('href', '2').css({
                    'color': '#fff',
                    'text-decoration': 'none'
                }).html('<i class="fa fa-angle-double-right"></i>详细').appendTo($btn1);
            });
            checkingBtn();
        })
    }


    function checkingBtn() {
        $('.checking-site a, .outofcheck-site a').unbind('click').on('click',function(e){
            e.preventDefault();
            var data_href = $(this).attr('href');
            var data_id = $(this).closest('tr').attr('id');
            var data_classify = $(this).closest('tr').attr('class');
            //通过
            if(data_href == 1){
                $.post('../script/handle.php', {'judge': data_href, 'id': data_id, 'classify': data_classify});
            }
            //未通过
            if(data_href == 0){
                $.post('../script/handle.php', {'judge': data_href, 'id': data_id, 'classify': data_classify, 'conclusion': '信息内容不完善'});
            }
            //详情
            if(data_href == 2){
                return false;
            }
        })
    }


})

