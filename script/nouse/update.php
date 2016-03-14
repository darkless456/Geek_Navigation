<?php
/*
 * @Author: darkless
 * @Date:   2016-03-04 16:00:41
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-04 23:25:12
*/

$receive_category = $_POST['category'];
$receive_id = $_POST['id'];
$receive_clicks = $_POST['clicks'];

// $receive_category = 'front';
// $receive_id = '3';
// $receive_clicks = '1';
// print_r($_POST);
// exit;
include_once('./conn.php');

if(strpos($receive_category, 'front') !== false){
    $site_table = 'frontbook';
} elseif(strpos($receive_category, 'back') !== false){
    $site_table = 'backbook';
} elseif(strpos($receive_category, 'blog') !== false){
    $site_table = 'blogbook';
} elseif(strpos($receive_category, 'other') !== false){
    $site_table = 'otherbook';
} else{
    exit('Violation!');
}

$old_data = mysql_fetch_array(mysql_query("SELECT id, clicks FROM $site_table WHERE id=$receive_id LIMIT 1"));
$new_clicks =  $old_data['clicks']+$receive_clicks;
$update_data = mysql_query("UPDATE $site_table SET clicks=$new_clicks WHERE id=$receive_id");
if($update_data){
    echo 'Update Success.';
}
?>
