<?php
/*
 * @Author: darkless
 * @Date:   2016-02-29 11:07:45
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-10 15:08:35
*/
include_once('../conn.php');
$posttime = time();
$inst = "INSERT INTO frontbook(site, url, intro, uptime)VALUES('极客导航', 'http://www.geek.com/', '极客导航，大家的导航', $posttime);";
// $inst2 = "INSERT INTO otherbook(site, url, intro, uptime)VALUES('善用佳软', 'https://xbeta.info/', '善用佳软', $posttime);";
// $inst3 = "INSERT INTO otherbook(site, url, intro, uptime)VALUES('Greasy Fork', 'https://greasyfork.org/', '安全、有用的用户脚本大全', $posttime);";
// $inst4 = "INSERT INTO otherbook(site, url, intro, uptime)VALUES('EventID', 'http://www.eventid.net/', 'Troubleshooting Microsoft Event Logs', $posttime);";
// $inst5 = "INSERT INTO otherbook(site, url, intro, uptime)VALUES('维基教科书', 'https://zh.wikibooks.org/', '人人可编辑的自由教学读本', $posttime);";


// $inst_array = array($inst, $inst2, $inst3, $inst4, $inst5);

// for($i=0; $i<count($inst_array); $i++){
//      mysql_query($inst_array[$i]);
//     $j = $i+1;
//     echo "插入第".$j."条测试留言。<br/>";
// }
$link->query($inst);
echo "插入预设留言成功!";

?>
