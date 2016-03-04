<?php 
include_once('./conn.php');
$fronts = array();
$backs = array();
$blogs = array();
$others = array();
$query_front = 'SELECT id, site, url, intro, clicks FROM frontbook ORDER BY clicks DESC;';
$query_back = 'SELECT id, site, url, intro, clicks FROM backbook ORDER BY clicks DESC;';
$query_blog = 'SELECT id, site, url, intro, clicks FROM blogbook ORDER BY clicks DESC;';
$query_other = 'SELECT id, site, url, intro, clicks FROM otherbook ORDER BY clicks DESC;';

$select_front = mysql_query($query_front);
while($get_front = mysql_fetch_array($select_front)){
    $fronts[] = $get_front;
}
$select_back = mysql_query($query_back);
while($get_back = mysql_fetch_array($select_back)){
    $backs[] = $get_back;
}
$select_blog = mysql_query($query_blog);
while($get_blog = mysql_fetch_array($select_blog)){
    $blogs[] = $get_blog;
}
$select_other = mysql_query($query_other);
while($get_other = mysql_fetch_array($select_other)){
    $others[] = $get_other;
}

$sites = array($fronts,$backs,$blogs,$others
    // 'front'=>$fronts,
    // 'back'=>$backs,
    // 'blog'=>$blogs,
    // 'other'=>$others
);

$result = json_encode($sites);
echo $result;

?>