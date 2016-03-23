<?php
/*
 * @Author: darkless
 * @Date:   2016-03-10 12:51:26
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-14 20:17:32
*/
include_once('./script/conn.php');
// include_once('./conn.php');
$sites = array();
$fronts = array();
$backs = array();
$blogs = array();
$others = array();
$catalog = '';
if(_get('display')==0 || !isset($_GET['display'])){
    $queue_front = 'SELECT id, site, url, intro, uptime FROM frontbook ORDER BY id DESC;';
    $select_front = $link->query($queue_front);
    while($get_front = mysqli_fetch_row($select_front)){
        $fronts[] = $get_front;
    }
    if(_get('display')==0){
        $sites = $fronts;
        $catalog = '前端设计';
    }
}
if(_get('display')==1 || !isset($_GET['display'])){
    $queue_back = 'SELECT id, site, url, intro, uptime FROM backbook ORDER BY id DESC;';
    $select_back = $link->query($queue_back);
    while($get_back = mysqli_fetch_row($select_back)){
        $backs[] = $get_back;
    }
    if(_get('display')==1){
        $sites = $backs;
        $catalog = '后台开发';        
    }
}
if(_get('display')==2 || !isset($_GET['display'])){
    $queue_blog = 'SELECT id, site, url, intro, uptime FROM blogbook ORDER BY id DESC;';
    $select_blog = $link->query($queue_blog);
    while($get_blog = mysqli_fetch_row($select_blog)){
        $blogs[] = $get_blog;
    }
    if(_get('display')==2){
        $sites = $blogs;
        $catalog = '个人博客';      
    }
}
if(_get('display')==3 || !isset($_GET['display'])){
    $queue_other = 'SELECT id, site, url, intro, uptime FROM otherbook ORDER BY id DESC;';
    $select_other = $link->query($queue_other);
    while($get_other = mysqli_fetch_row($select_other)){
        $others[] = $get_other;
    }
    if(_get('display')==3){
        $sites = $others;
        $catalog = '其他推荐';       
    }
}
if(!isset($_GET['display'])){
    $catalog = '全部';
    $sites = array_merge($fronts, $backs, $blogs, $others);
    usort($sites, function($a, $b){
        $tmp_a = $a[4];
        $tmp_b = $b[4];
        if($tmp_a == $tmp_b){
            return 0;
        }
        return $tmp_a>$tmp_b? -1:1;
    });
}
$sites_sum = count($sites);
echo '<caption><h3>'.$catalog.'&nbsp;<small>网站列表</small></h3></caption>';
echo '<thead><tr><th>时间</th><th>网站</th><th>访问地址</th><th>简介</th></tr></thead><tbody>';
for($i=0;$i<$sites_sum;$i++){
    echo '<tr><td>'.date('y/m/d', $sites[$i][4]).'</td><td>'.$sites[$i][1].'</td><td><a href="'.$sites[$i][2].'">'.$sites[$i][2].'</a></td><td>'.$sites[$i][3].'</td></tr>';
}

echo '</tbody>';

function array_multiToSingle($array,$clearRepeated=false){
    if(!isset($array)||!is_array($array)||empty($array)){
        return false;
    }
    if(!in_array($clearRepeated,array('true','false',''))){
        return false;
    }
    static $result_array=array();
    foreach($array as $value){
        if(is_array($value)){
            array_multiToSingle($value);
        }else{
            $result_array[]=$value;
        }
    }
    if($clearRepeated){
        $result_array=array_unique($result_array);
    }
    return $result_array;
}
function _get($str){
    $result = !empty($_GET[$str])?$_GET[$str]:null;
    return $result;
}
?>
