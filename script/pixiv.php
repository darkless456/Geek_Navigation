<?php
/*
 * @Author: darkless
 * @Date:   2016-02-23 11:13:40
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-02-26 13:41:51
*/

$subject=file_get_contents('http://www.pixiv.net/ranking.php?mode=daily');
preg_match_all('/class="ranking-item".*?data-rank="(\d+)".*?href="member_illust\.php\?.*?illust_id=(\d+)&.*?class=\"_thumbnail ui-scroll-view\".*?data-src=\"(http.*?)\".*?<h2><a .*?>(.*?)<\/a><\/h2>/is',$subject,$matches);

$img_rank=$matches?$matches[1] : die('匹配失败，找不到图片排名');
$img_id=$matches?$matches[2] : die('匹配失败,找不到link');
$img_url=$matches?$matches[3] : die('匹配失败,找不到图片url');
$img_name=$matches?$matches[4] : die('匹配失败,找不到图片名字');

// print_r($img_id);
// print_r("<br>url:". $img_url[0]);
// print_r("<br>name:". $img_name[0]);
// $api = array(
//     'img_id' => $img_id,
//     'img_url' => $img_url,
//     'img_name' => $img_name
//     );
// echo json_encode($api);
// 
for($i=0; $i<49; $i++){
    echo '<a class="box" target="_blank" href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id='.$img_id[$i]. '"><div class="content"><h4>TOP&nbsp;'. $img_rank[$i]. '</h4><img src="'. $img_url[$i]. '"><p>'. $img_name[$i]. '</p></div></a>';    
}


 ?>
