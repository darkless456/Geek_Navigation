<?php
/*
 * @Author: darkless
 * @Date:   2016-03-07 21:51:27
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-13 23:23:29
*/
if(isset($_GET['display'])){
    // 显示已收录站点
    if($_GET['display'] == 'site'){
        include_once('./conn.php');
        $fronts = array();
        $backs = array();
        $blogs = array();
        $others = array();
        $query_front = 'SELECT id, site, url, intro, clicks FROM frontbook ORDER BY clicks DESC;';
        $query_back = 'SELECT id, site, url, intro, clicks FROM backbook ORDER BY clicks DESC;';
        $query_blog = 'SELECT id, site, url, intro, clicks FROM blogbook ORDER BY clicks DESC;';
        $query_other = 'SELECT id, site, url, intro, clicks FROM otherbook ORDER BY clicks DESC;';

        $select_front = $link->query($query_front);
        while($get_front = mysqli_fetch_assoc($select_front)){
            $fronts[] = $get_front;
        }
        $select_back = $link->query($query_back);
        while($get_back = mysqli_fetch_assoc($select_back)){
            $backs[] = $get_back;
        }
        $select_blog = $link->query($query_blog);
        while($get_blog = mysqli_fetch_assoc($select_blog)){
            $blogs[] = $get_blog;
        }
        $select_other = $link->query($query_other);
        while($get_other = mysqli_fetch_assoc($select_other)){
            $others[] = $get_other;
        }

        $sites = array($fronts,$backs,$blogs,$others);

        $result = json_encode($sites);
        echo $result;
    }

    elseif($_GET['display'] == 'checking'){
        include_once('../script/conn.php');
        $checkings = array();
        $select_checking = $link->query("SELECT * FROM checkingbook ORDER BY id DESC;");
        while($get_checking = mysqli_fetch_assoc($select_checking)){
            $get_checking['uptime'] = date('m/d H:i',$get_checking['uptime']);
            $checkings[] = $get_checking;

        }

        $outofchecks = array();
        $select_outofcheck = $link->query("SELECT * FROM outofcheck ORDER BY id DESC;");
        while($get_outofcheck = mysqli_fetch_assoc($select_outofcheck)){
            $get_outofcheck['uptime'] = date('m/d H:i',$get_outofcheck['uptime']);
            $outofchecks[] = $get_outofcheck;

        }
        echo json_encode(array('checkings'=>$checkings,'outofchecks'=>$outofchecks));
    }

}
if(!isset($_GET['display'])){
    exit('Voilation!');
}

?>
