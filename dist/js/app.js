!function(e){function n(){d.column_num=t();for(var n="",o=0;o<d.column_num;o++)n+='<div class="'+m.column_className+'" style="width:'+m.column_width+"px; display:inline-block; *display:inline;zoom:1; margin-left:"+m.column_space/2+"px;margin-right:"+m.column_space/2+'px; vertical-align:top; overflow:hidden"></div>';return f.prepend(n),e("."+m.column_className,f)}function t(){var e=Math.floor(f.innerWidth()/(m.column_width+m.column_space));return 1>e&&(e=1),e}function o(n,t){if(e(n).length){d.$columns;e(n).each(function(o){if(!m.auto_imgHeight||2==m.insert_type)return 1==m.insert_type?l(e(n).eq(o),m.fadein&&t):2==m.insert_type&&c(e(n).eq(o),o,m.fadein&&t),!0;if("img"==e(this)[0].nodeName.toLowerCase()||e(this).find(m.img_selector).length>0){var i=new Image,r="img"==e(this)[0].nodeName.toLowerCase()?e(this).attr("src"):e(this).find(m.img_selector).attr("src");i.onload=function(){i.onreadystatechange=null,1==m.insert_type?l(e(n).eq(o),m.fadein&&t):2==m.insert_type&&c(e(n).eq(o),o,m.fadein&&t),i=null},i.onreadystatechange=function(){"complete"==i.readyState&&(i.onload=null,1==m.insert_type?l(e(n).eq(o),m.fadein&&t):2==m.insert_type&&c(e(n).eq(o),o,m.fadein&&t),i=null)},i.src=r}else 1==m.insert_type?l(e(n).eq(o),m.fadein&&t):2==m.insert_type&&c(e(n).eq(o),o,m.fadein&&t)})}}function i(e){o(e,!0)}function l(e,n){n?e.css("opacity",0).appendTo(d.$columns.eq(r())).fadeTo(m.fadein_speed,1):e.appendTo(d.$columns.eq(r()))}function c(e,n,t){t?e.css("opacity",0).appendTo(d.$columns.eq(n%d.column_num)).fadeTo(m.fadein_speed,1):e.appendTo(d.$columns.eq(n%d.column_num))}function r(){var n=d.$columns.eq(0).outerHeight(),t=0;return d.$columns.each(function(o){e(this).outerHeight()<n&&(n=e(this).outerHeight(),t=o)}),t}function u(){return e.waterfall.load_index++,m.getResource(e.waterfall.load_index,i)}function a(){clearTimeout(d._scrollTimer),d._scrollTimer=setTimeout(function(){var e=d.$columns.eq(r()),n=e.offset().top+e.outerHeight(),t=document.documentElement.scrollTop||document.body.scrollTop||0,i=document.documentElement.clientHeight||document.body.clientHeight||0;t>=n-i&&o(u(),!0)},100)}function s(){if(t()!=d.column_num){var e=d.$container.find(m.cell_selector);d.$columns.remove(),d.$columns=n(),o(e,!1)}}var m={column_width:210,column_className:"waterfall_column",column_space:0,cell_selector:".box",img_selector:"img",auto_imgHeight:!0,fadein:!0,fadein_speed:600,insert_type:1,getResource:function(e){}},d=e.waterfall={},f=null;d.load_index=0,e.fn.extend({waterfall:function(t){t=t||{},m=e.extend(m,t),f=d.$container=e(this),d.$columns=n(),o(e(this).find(m.cell_selector).detach(),!1),d._scrollTimer2=null,e(window).bind("scroll",function(){clearTimeout(d._scrollTimer2),d._scrollTimer2=setTimeout(a,300)}),d._scrollTimer3=null,e(window).bind("resize",function(){clearTimeout(d._scrollTimer3),d._scrollTimer3=setTimeout(s,300)})}}),d._scrollTimer=null}(jQuery);