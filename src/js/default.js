/* 
* @Author: darkless
* @Date:   2016-03-08 14:22:43
* @Last Modified by:   darkless
* @Last Modified time: 2016-03-10 11:51:47
*/

(function($){
    $('#word').keydown(function(){
        $(this).css('background-color', '#fff')
    })
    $('#search button').on({
        click: function(e){
            if($('#word').val()==''){
                $('#word').focus().css('background-color', '#FAEBCC');
                return false;
            }
            $tmp = $('#word').val();
            $('#word').val($tmp+' '+'site:geeknav.applinzi.com');
        },
        focusout: function(e){
            $('#word').val('').css('background-color', '#fff');
        }
    })



})(jQuery);