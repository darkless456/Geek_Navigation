-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-03-15 16:24:43
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `navdata`
--

-- --------------------------------------------------------

--
-- 表的结构 `backbook`
--

CREATE TABLE IF NOT EXISTS `backbook` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site` char(32) NOT NULL DEFAULT '',
  `url` varchar(128) NOT NULL DEFAULT '',
  `intro` text,
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  `uptime` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `backbook`
--

INSERT INTO `backbook` (`id`, `site`, `url`, `intro`, `clicks`, `uptime`) VALUES
(1, 'C#开发指南', 'https://msdn.microsoft.com/zh-cn/library/67ef8sbd.aspx', '微软官方的C#开发指南', 0, 1458049619),
(2, 'Github', 'https://github.com/', '国外著名的代码托管网站', 2, 1458049596),
(3, 'DevStore', 'http://www.devstore.cn/', '移动开发的流程、推广', 0, 1458049572),
(4, 'Android Tutorial', 'http://www.tutorialspoint.com/android/', 'TutorialSpoint的android开发指南', 0, 1458049548),
(5, 'Android Developers', 'http://developer.android.com/intl/zh-cn/index.html', 'android开发指南', 0, 1458049525),
(6, 'IBM developerWorks', 'http://www.ibm.com/developerworks/cn/opensource/os-android-devel/index.html', 'IBM的android开发权威指南', 0, 1458049499),
(7, 'Cocoa China', 'http://www.cocoachina.com/', 'iOS移动开发', 0, 1458049456),
(8, '编程入门网', 'http://www.bianceng.cn/', '各种编程语言教程，偏重后台开发', 0, 1458049434),
(9, '微学苑', 'http://www.weixueyuan.net/', 'JAVA编程语言学习站', 0, 1458049409),
(10, 'PHP开源网', 'http://www.php-open.org/', 'PHP开源项目导航', 0, 1458049387),
(11, 'ThinkPHP框架', 'http://www.thinkphp.cn/', '中文PHP开源框架', 0, 1458049364),
(12, 'PHP中文网', 'http://www.php.cn/', '国内PHP技术交流', 0, 1458049342),
(13, 'PHP-Z', 'http://www.php-z.com/', '传递有价值的互联网技术', 0, 1458049318),
(14, 'PHP1', 'http://www.php1.cn/', '国内PHP开源分享社区', 0, 1458049299),
(15, 'PHP官网', 'http://php.net/', '最权威的PHP官方文档', 0, 1458049278),
(16, '酷勤网', 'http://www.kuqin.com/', '后台架构、运维、系统优化等观点分享', 0, 1458049258),
(17, 'PHP100中文网', 'http://www.php100.com/', 'PHP资源分享门户', 0, 1458049237),
(18, 'SB-Admin', 'http://startbootstrap.com/template-overviews/sb-admin/', '基于boostrap的后台管理模板', 0, 1458049213),
(19, '笨办法学Python', 'http://old.sebug.net/paper/books/LearnPythonTheHardWay/', 'Python2系列简易教程', 0, 1458049190),
(20, 'Python程序员', 'http://www.pythoner.cn/', '学习Python，就是这么简单!', 0, 1458049167),
(21, 'PHP自学中心', 'http://www.phpblog.cc/index.html', '技术分享，经验分享，好文章分享！', 0, 1458049088),
(22, 'jQuery Flot', 'http://www.jqueryflottutorial.com/cn/', 'jQuery Flot图表插件说明', 0, 1458049066),
(23, 'Ckeditor', 'http://ckeditor.com/', 'The best web text editor for everyone', 0, 1458049043),
(24, '5iDev', 'http://www.5idev.com/', 'Web开发在线教程', 0, 1458049020),
(25, '易佰教程', 'http://www.yiibai.com/', '一个自由免费，专注于 IT 实例教程的网站', 0, 1458048998);

-- --------------------------------------------------------

--
-- 表的结构 `blogbook`
--

CREATE TABLE IF NOT EXISTS `blogbook` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site` char(32) NOT NULL DEFAULT '',
  `url` varchar(128) NOT NULL DEFAULT '',
  `intro` text,
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  `uptime` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `blogbook`
--

INSERT INTO `blogbook` (`id`, `site`, `url`, `intro`, `clicks`, `uptime`) VALUES
(1, 'Joy iOS', 'http://www.joyios.com/', '享受iOS开发之美', 0, 1458050295),
(2, '小松博客', 'http://www.phpsong.com/', '一个PHP程序猿分享的经验', 0, 1458050275),
(3, '李清波个人博客', 'http://www.liqingbo.cn/', '分享个人技术，分享个人心得', 0, 1458050254),
(4, '异次元软件', 'http://www.iplaysoft.com/', '分享一些有意思的软件', 0, 1458050233),
(5, '梦姬博客', 'http://blog.jixun.org/', '会分享一些小软件', 0, 1458050210),
(6, 'LaneBlog', 'http://www.lanecn.com/', 'PHP基础分享博客', 0, 1458050180),
(7, '菜鸟PHP', 'http://blog.iwshop.com/', '菜鸟PHP学习日志', 0, 1458050157),
(8, '阿福主机♂', 'https://rffan.info/', '虚拟主机租赁和使用', 0, 1458050135),
(9, '音風の部屋', 'http://www.otokaze.cn/', '初学者比较实用的博客', 0, 1458050088),
(10, '妖夏', 'http://bangumi.ga/', 'ACG+技术的博客', 1, 1458050065),
(11, '阿里妈妈UX', 'http://mux.alimama.com/', '一淘UX团队', 0, 1458050041),
(12, '畅游视觉设计中心', 'http://vc.changyou.com/', '搜狐畅游视觉设计团队博客', 0, 1458050018),
(13, '百度UE', 'http://ue.baidu.com/', '百度用户体验部博客', 0, 1458049996),
(14, '360UXC', 'http://uxc.360.cn/', '360用户体验设计中心', 0, 1458049974),
(15, '腾讯MXD', 'http://mxd.tencent.com/', 'Mobile experience design center', 0, 1458049946),
(16, '腾讯CDC', 'http://cdc.tencent.com/', '为用户创造优质在线生活体验', 0, 1458049920),
(17, 'i科技', 'http://www.iippcc.com/', '与你分享互联网的精彩', 0, 1458049897),
(18, 'ACGTOFE', 'http://acgtofe.com/', '动漫和前端技术的综合博客', 0, 1458049876),
(19, 'open开发经验库', 'http://www.open-open.com/lib/', '技术经验分享平台', 0, 1458049854),
(20, '海鹏的博客', 'http://www.tbdazhe.com/', '偏向运维方面技术', 0, 1458049830),
(21, 'W3C Plus', 'http://www.w3cplus.com/', '引领WEB前沿，打造前端精品教程', 0, 1458049803),
(22, 'AlloyTeam', 'http://www.alloyteam.com/', '腾讯全端 AlloyTeam 团队 Blog', 0, 1458049779),
(23, 'Javascript秘密花园', 'http://bonsaiden.github.io/JavaScript-Garden/zh/', 'JS的hack、小技巧', 0, 1458049754),
(24, 'Anotherhome', 'https://www.anotherhome.net/', 'Write the code, change the world', 0, 1458049728),
(25, '廖雪峰的官方网站', 'http://www.liaoxuefeng.com/', 'Python、JS、GIT学习教程', 0, 1458049702),
(26, '鱼C工作室', 'http://blog.fishc.com/', 'C、C++、Python等开发语言教学视频', 0, 1458049680),
(27, 'TAOBAO UED', 'http://ued.taobao.org/blog/', '淘宝网UED官方博客', 0, 1458049657);

-- --------------------------------------------------------

--
-- 表的结构 `checkingbook`
--

CREATE TABLE IF NOT EXISTS `checkingbook` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site` char(32) NOT NULL DEFAULT '',
  `url` varchar(256) NOT NULL DEFAULT '',
  `intro` text,
  `uptime` int(10) DEFAULT NULL,
  `email` varchar(40) NOT NULL DEFAULT '',
  `classify` char(8) NOT NULL DEFAULT 'other',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- 转存表中的数据 `checkingbook`
--

INSERT INTO `checkingbook` (`id`, `site`, `url`, `intro`, `uptime`, `email`, `classify`) VALUES
(5, 'w3schools', 'http://www.w3schools.com/', 'The world''s largest web developer site', 1458034833, 'narcissu456@gmail.com', 'front');

-- --------------------------------------------------------

--
-- 表的结构 `frontbook`
--

CREATE TABLE IF NOT EXISTS `frontbook` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site` char(32) NOT NULL DEFAULT '',
  `url` varchar(256) NOT NULL DEFAULT '',
  `intro` text,
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  `uptime` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `frontbook`
--

INSERT INTO `frontbook` (`id`, `site`, `url`, `intro`, `clicks`, `uptime`) VALUES
(1, 'W3Help', 'http://www.w3help.org/zh-cn/kb/', '浏览器的CSS Hack说明', 1, 1458048963),
(2, '热前端', 'http://www.reqianduan.com/', '前端开发阅读分享网站', 0, 1458036130),
(3, '前端开发仓库', 'http://code.ciaoca.com/', '字体效果展示，jquery效果展示、中文文档，CSS效果预览', 0, 1458036109),
(4, 'WEB前端开发', 'http://www.css88.com/', '专注前端开发，关注用户体验', 0, 1458036085),
(5, '前端网', 'http://www.w3cfuns.com/', 'WEB开发工程师案例、整理资料分享', 0, 1458035413),
(6, 'Pinterest', 'https://www.pinterest.com/', '国外著名的创意图片分享平台', 0, 1458035374),
(7, 'Font Awesome', 'http://fontawesome.io/', 'The iconic font and CSS toolkit', 0, 1458035349),
(8, 'LESS', 'http://lesscss.org/', 'An overview of Less, how to download and use, examples and more.', 0, 1458035325),
(9, '站酷', 'http://www.zcool.com.cn/', '设计师互动平台', 3, 1458035302),
(10, 'Subtlepatterns', 'http://subtlepatterns.com/', '拥有丰富的无缝背景纹理资源', 0, 1458035280),
(11, 'Dribbble', 'https://dribbble.com/', '国外著名的设计师网站，有比较多的高水平的作品', 0, 1458035254),
(12, 'jQuery之家', 'http://www.htmleaf.com/', '自由分享jQuery、html5和css3的插件库', 0, 1458035230),
(13, '觉唯设计', 'http://www.jiawin.com/', '用户体验设计分享平台', 0, 1458035163),
(14, '优设', 'http://www.uisdc.com/', '国内人气较高的网页设计师学习平台', 0, 1458035139),
(15, '前端里', 'http://www.yyyweb.com/', '专注WEB开发技术', 0, 1458035114),
(16, 'AmazeUI', 'http://amazeui.org/', '中国首个开源 HTML5 跨屏前端框架', 0, 1458035090),
(17, 'AngularJS中文网', 'http://www.apjs.net/', 'AngularJS中文学习网站，内容全面', 0, 1458035064),
(18, 'NEJ', 'http://nej.netease.com/', '简洁，美观，真正的跨平台web前端开发框架', 0, 1458034985),
(19, 'NEC', 'http://nec.netease.com/', '更好的CSS解决方案，网易旗下CSS开发框架', 0, 1458034957),
(20, 'Can I use', 'http://caniuse.com/', 'Support tables for html5, css3, etc', 0, 1458034930),
(21, 'jQuery API中文文档', 'http://www.jquery123.com/', 'jQuery write less, do more', 0, 1458034899),
(22, 'Boostrap中文网', 'http://www.bootcss.com/', '简洁、直观、强悍的前端开发框架，让web开发更迅速、简单。', 0, 1458034860),
(23, 'Javascript | MDN', 'https://developer.mozilla.org/zh-CN/docs/Web/JavaScript', 'Mozilla旗下权威的原生Javascript网站，介绍的内容全面、深入、准确。', 0, 1458034802),
(24, 'html5jscss', 'http://www.html5jscss.com/', '偏重JS方面开发技能、模块、hack，包括jquery、angularJS', 0, 1458034775),
(25, 'DIVCSS5', 'http://www.divcss5.com/', '传统DIV+CSS布局学习，有比较全面的介绍，css hack等', 0, 1458034745),
(26, 'HTML5学堂', 'http://www.h5course.com/', 'HTML5基础开发讲解，描述了较为完整的前端开发流程', 0, 1458034702);

-- --------------------------------------------------------

--
-- 表的结构 `messagebook`
--

CREATE TABLE IF NOT EXISTS `messagebook` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` char(32) NOT NULL DEFAULT '',
  `email` varchar(40) DEFAULT NULL,
  `content` text NOT NULL,
  `subtime` int(10) DEFAULT NULL,
  `reply` text,
  `replytime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `otherbook`
--

CREATE TABLE IF NOT EXISTS `otherbook` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site` char(32) NOT NULL DEFAULT '',
  `url` varchar(128) NOT NULL DEFAULT '',
  `intro` text,
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  `uptime` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `otherbook`
--

INSERT INTO `otherbook` (`id`, `site`, `url`, `intro`, `clicks`, `uptime`) VALUES
(1, '京东商城', 'https://www.jd.com/', '在线购物商城', 0, 1458050896),
(2, '日语学习网', 'http://jp.tingroom.com/', '日语学习网站', 0, 1458050877),
(3, '直线网', 'http://www.linecg.com/', '数字艺术在线学习平台', 0, 1458050858),
(4, '网易云课堂', 'http://study.163.com/', '在线学习平台，有较多的免费资源', 0, 1458050838),
(5, 'Old Version', 'http://www.oldversion.com/', '老版本软件下载', 0, 1458050817),
(6, '少数派', 'http://sspai.com/', '高质量应用推荐', 0, 1458050796),
(7, 'Pixiv', 'http://www.pixiv.net/', '日本最大同人、插画分享站', 0, 1458050772),
(8, 'DLL-files', 'http://www.dll-files.com/', '系统DLL文件下载', 0, 1458050751),
(9, 'ZD423', 'http://www.zdfans.com/', '软件分享平台，你懂得', 0, 1458050729),
(10, 'ubuntu中文论坛', 'http://forum.ubuntu.org.cn/', 'ubuntu中文社区', 0, 1458050709),
(11, 'cnBeta', 'http://www.cnbeta.com/', '中文资讯站', 0, 1458050688),
(12, '普特英语', 'http://www.putclub.com/', '在线英语学习网站', 0, 1458050667),
(13, '硕鼠网', 'http://www.flvcd.com/', '在线视频下载', 0, 1458050645),
(14, 'MBA智库百科', 'http://wiki.mbalib.com/', '中文经管百科', 0, 1458050625),
(15, '句子迷', 'http://www.juzimi.com/', '美句佳句的分享社区', 0, 1458050605),
(16, '萌娘百科', 'https://zh.moegirl.org/Mainpage', 'ACG百科网站', 0, 1458050585),
(17, 'Intel Processors', 'http://ark.intel.com/', 'Intel各型号处理器参数', 0, 1458050564),
(18, '伯乐在线', 'http://www.jobbole.com/', 'IT互联网职业社区', 0, 1458050539),
(19, '360个人图书馆', 'http://www.360doc.com/index.html', '免费个人与企业知识管理网站', 0, 1458050517),
(20, 'KnewOne', 'https://knewone.com/', '分享高品质消费品和使用体验的网络社区', 0, 1458050497),
(21, '浏览迷', 'http://liulanmi.com/', '浏览器最新信息', 0, 1458050472),
(22, '知乎日报', 'http://daily.zhihu.com/', '知乎每日精选', 0, 1458050449),
(23, 'ACG批评', 'http://www.acgpiping.net/', 'ACG作品评价博客', 0, 1458050427),
(24, '推酷', 'http://www.tuicool.com/', '开源社区、技术博客集合', 1, 1458050358),
(25, '简书', 'http://www.jianshu.com/', '基于内容分享的社区', 0, 1458050377);

-- --------------------------------------------------------

--
-- 表的结构 `outofcheck`
--

CREATE TABLE IF NOT EXISTS `outofcheck` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site` char(32) NOT NULL DEFAULT '',
  `url` varchar(256) NOT NULL DEFAULT '',
  `intro` text,
  `uptime` int(10) DEFAULT NULL,
  `email` varchar(40) NOT NULL DEFAULT '',
  `classify` char(8) NOT NULL DEFAULT 'other',
  `conclusion` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
