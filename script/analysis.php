<?php
include_once('./conn.php');
$front_data = array();
$back_data = array();
$blog_data = array();
$other_data = array();
$query_front = 'SELECT site, url, clicks FROM frontbook ORDER BY clicks DESC;';
$query_back = 'SELECT site, url, clicks FROM backbook ORDER BY clicks DESC;';
$query_blog = 'SELECT site, url, clicks FROM blogbook ORDER BY clicks DESC;';
$query_other = 'SELECT site, url, clicks FROM otherbook ORDER BY clicks DESC;';

$select_front = mysql_query($query_front);
while($get_front = mysql_fetch_array($select_front)){
    $front_data[] = $get_front;
}
$select_back = mysql_query($query_back);
while($get_back = mysql_fetch_array($select_back)){
    $back_data[] = $get_back;
}
$select_blog = mysql_query($query_blog);
while($get_blog = mysql_fetch_array($select_blog)){
    $blog_data[] = $get_blog;
}
$select_other = mysql_query($query_other);
while($get_other = mysql_fetch_array($select_other)){
    $other_data[] = $get_other;
}

$front_num = count($front_data);
$back_num = count($back_data);
$blog_num = count($blog_data);
$other_num = count($other_data);

$nums = array($front_num,$back_num,$blog_num,$other_num
    // 'front'=> $front_num,
    // 'back'=> $back_num,
    // 'blog'=> $blog_num,
    // 'other'=> $other_num
    );

$result = array(
    'nums'=> $nums
    );

echo json_encode($result);
?>
