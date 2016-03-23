<?php
/*
 * @Author: darkless
 * @Date:   2016-03-08 17:39:20
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-09 21:52:04
*/

$pagesize = 10;
$p = _get('p')?_get('p'):1;
$offset = ($p-1)*$pagesize;

//读取留言
//
include_once('./script/conn.php');
$select_msg = $link->query("SELECT id, nickname, content, subtime FROM messagebook ORDER BY id DESC LIMIT $offset, $pagesize;");
while($get_msg = mysqli_fetch_array($select_msg)){
    echo '<div class="row"><div class="col-lg-9 col-lg-offset-1"><p class=msg-text>网友：'.$get_msg['nickname'].'&nbsp;&nbsp;发表于：', date('y-m-d H:i', $get_msg['subtime']).'</p>';
    echo '<p>'.$get_msg['content'].'</p></div></div>';
    echo '<hr>';
}

//分页显示
//
$count_msg = mysqli_fetch_array($link->query("SELECT count(id) as amount FROM messagebook;"));
$sum_page = ceil($count_msg['amount']/$pagesize);
    if($sum_page>1){
        echo '<div class="row"><div class="col-lg-3 col-lg-offset-1"><nav><ul class="pagination"><li><a href="" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
        for($i=1;$i<=$sum_page;$i++){
            if($i==$p){
                echo '<li id="'.$i.'" class="active"><a href="#">'.$i.'<span class="sr-only">(current)</span></a></li>';
            } else{
                echo '<li id="'.$i.'"><a href="./message.php?p='.$i.'">'.$i.'</a></li>';
            }
        }
        echo '<li><a href="" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li></ul></nav></div></div>';
    }

function _get($str){
    $val = !empty($_GET[$str])? $_GET[$str]:null;
    return $val;
}
?>
