$(document).ready(function(){$("input.form-control, textarea.form-control").keydown(function(){$(this).css("background-color","#fff")}),$("#submit").click(function(e){return""==$("#content").val()?($("#content").focus().css("background-color","#FAEBCC"),!1):""==$("#nickname").val()?($("#nickname").focus().css("background-color","#FAEBCC").attr("placeholder","请输入昵称"),!1):""==$("#email").val()||$("#email").val().indexOf("@")<0?($("#email").focus().css("background-color","#FAEBCC").attr("placeholder","请输入正确的邮箱地址"),!1):(e.preventDefault(),void $("#message").ajaxSubmit({dataType:"json",url:"./script/handle.php",beforeSend:function(){$("#submit").html("loading...")},success:function(e,a){1==e&&$("#container").html("<h2>感谢你的留言</h2>"),0==e&&$("#container").html("<h2>非常抱歉，留言提交失败，请刷新页面重新提交</h2>")}}))}),$('[aria-label="Previous"]').click(function(e){var a=parseInt($("li.active").attr("id"));e.preventDefault(),a>1?location.href="./message.php?p="+(a-1):location.href="./message.php?p="+a}),$('[aria-label="Next"]').click(function(e){var a=parseInt($("li.active").attr("id"));e.preventDefault(),a<$(".pagination li").length-2?location.href="./message.php?p="+(a+1):location.href="./message.php?p="+a})});
//# sourceMappingURL=message.js.map
