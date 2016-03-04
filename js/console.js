/* 
 * @Author: darkless
 * @Date:   2016-03-02 14:47:42
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-03 23:35:25
 */

$(document).ready(function() {
    analyNum();
    var $wrap = $('.page-wrap');
    $('.side-nav li a').not('.exit, .index').click(function(e) {
        e.preventDefault();
        var $that = $(this)
        var url = $that.attr('href');
        $wrap.load(url, function() {
            $('.side-nav').find('li').attr('class', '');
            $that.parent().addClass('active');

        })
    })

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

})

