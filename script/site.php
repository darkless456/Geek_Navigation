<?php 
include_once('./conn.php');
$fronts = array();
$backs = array();
$techs = array();
$others = array();
$query_front = 'SELECT site, url, intro, clicks FROM frontbook ORDER BY clicks DESC;';
$query_back = 'SELECT site, url, intro, clicks FROM backbook ORDER BY clicks DESC;';
$query_tech = 'SELECT site, url, intro, clicks FROM techbook ORDER BY clicks DESC;';
$query_other = 'SELECT site, url, intro, clicks FROM otherbook ORDER BY clicks DESC;';

$select_front = mysql_query($query_front);
while($get_front = mysql_fetch_array($select_front)){
    $fronts[] = $get_front;
}
$select_back = mysql_query($query_back);
while($get_back = mysql_fetch_array($select_back)){
    $backs[] = $get_back;
}
$select_tech = mysql_query($query_tech);
while($get_tech = mysql_fetch_array($select_tech)){
    $techs[] = $get_tech;
}
$select_other = mysql_query($query_other);
while($get_other = mysql_fetch_array($select_other)){
    $others[] = $get_other;
}

$sites = array(
    'front'=>$fronts,
    'back'=>$backs,
    'tech'=>$techs,
    'other'=>$others
);

$result = json_encode($sites);
echo $result;

?>