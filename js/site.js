/* 
* @Author: darkless
* @Date:   2016-02-29 12:14:57
* @Last Modified by:   darkless
* @Last Modified time: 2016-03-01 10:42:30
*/

(function($){
    $wrap = $('.carousel-inner');
    $.ajax({
        type: 'get',
        url: './script/site.php',
        dataType: 'json',
        success: function(data, status){
            $.each(data, function(index, value){
                // for(el in name){
                    // var key = el;
                    var $oDiv = $('<div>').addClass('item').appendTo($wrap);
                    var $oDiv2 = $('<div>').addClass('jumbotron clearfix').appendTo($oDiv);
                    for(var i=0; i<4; i++){
                        var $oDiv3 = $('<div>').addClass('row').appendTo($oDiv2);
                        for(var j=0; j<6; j++){
                            var $oDiv4 = $('<div>').addClass('col-md-2 text-center').attr({'id': (i*6)+j}).appendTo($oDiv3);
                            var tmp = $oDiv4.attr('id');
                            $('<a>').attr({
                                'data-toggle': 'tooltip',
                                'data-placement': 'top',
                                'target': '_blank',
                                'title': '',
                                'data-original-title': value[tmp]['intro'],
                                'href': value[tmp]['url']
                            }).html(value[tmp]['site']).appendTo($oDiv4);
                        }
                    }
                // }
            })
        $('.item:first').addClass('active');
        }
    })
})(jQuery);