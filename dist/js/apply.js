$(document).ready(function(){$("input.form-control").keydown(function(){$(this).css("background-color","#fff")}),$("#submit").click(function(l){return""==$("#site").val()?($("#site").focus().css("background-color","#FAEBCC"),!1):""==$("#url").val()||$("#url").val().indexOf(".")<0?($("#url").focus().css("background-color","#FAEBCC").attr("placeholder","请输入正确的网址"),!1):""==$("#email").val()||$("#email").val().indexOf("@")<0?($("#email").focus().css("background-color","#FAEBCC").attr("placeholder","请输入正确的邮箱地址"),!1):(""==$("#intro").val()&&$("#intro").val("none"),l.preventDefault(),void $("#apply").ajaxSubmit({dataType:"json",url:"./script/handle.php",beforeSend:function(){$("#submit").html("loading...")},success:function(l,o){$("#container").html('<h2>感谢你的贡献</h2><p>提交的内容正在确认，稍后会以邮件形式通知你。</p><p>已提交内容</p><p class="site">网站名称：'+l.site+'</p><p class="url">网站地址：'+l.url+'</p><p class="intro">网站简介：'+l.intro+'</p><p class="email">联系邮箱：'+l.email+'</p><p = class="uptime">提交时间：'+l.uptime+"</p>")}}))})});