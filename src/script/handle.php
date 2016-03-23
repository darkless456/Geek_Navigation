<?php 

// 提交留言
if(isset($_POST['nickname'])){
    // 表单数据安全性检测
    // htmlspecialchars() 函数把一些特殊字符转换为 HTML 实体，返回一个字符串。
    if(get_magic_quotes_gpc()){
        $nickname = htmlspecialchars(trim($_POST['nickname']));
        $email = htmlspecialchars(trim($_POST['email']));
        $content = htmlspecialchars(trim($_POST['content']));
    } else{
        $nickname = addslashes(htmlspecialchars(trim($_POST['nickname'])));
        $email = addslashes(htmlspecialchars(trim($_POST['email'])));
        $content = addslashes(htmlspecialchars(trim($_POST['content'])));
    }

    if(strlen($nickname)>32){
        exit('nickname too long');
    }
    if(strlen($email)>40){
        exit('email too long');
    }

    include_once('./conn.php');

    $subtime = time();

    $insert_msg = $link->query("INSERT INTO messagebook(nickname, email, content, subtime) VALUES('$nickname', '$email', '$content', $subtime);");
    if($insert_msg){
        echo 1;
    } else{
        echo 0; //返回值0代表失败
    }

}

// 提交站点
if(isset($_POST['site'])){
    if(get_magic_quotes_gpc()){
        $site = htmlspecialchars(trim($_POST['site']));
        $email = htmlspecialchars(trim($_POST['email']));
        $url = htmlspecialchars(trim($_POST['url']));
        $classify = htmlspecialchars(trim($_POST['classify']));
        if(isset($_POST['intro'])){
            $intro = htmlspecialchars(trim($_POST['intro']));
        }
    } else{
        $site = addslashes(htmlspecialchars(trim($_POST['site'])));
        $email = addslashes(htmlspecialchars(trim($_POST['email'])));
        $url = addslashes(htmlspecialchars(trim($_POST['url'])));
        $classify = addslashes(htmlspecialchars(trim($_POST['classify'])));
        if(isset($_POST['intro'])){
            $intro = addslashes(htmlspecialchars(trim($_POST['intro'])));
        }
    }
    if(strlen($site)>32){
        echo 'site name too long';
    }
    if(strlen($url)>256){
        echo 'site url too long';
    }
    if(strlen($email)>40){
        echo 'email too long';
    }
    include_once('./conn.php');
    $uptime = time();
    $insert_site = $link->query("INSERT INTO checkingbook(site, url, email, intro, classify, uptime) VALUES('$site', '$url', '$email', '$intro', '$classify', $uptime);");
    if($insert_site){
        $result = array(
            'site'=>$site,
            'url'=>$url,
            'email'=>$email,
            'intro'=>$intro,
            'uptime'=>date("y-m-d H:i", $uptime)
        );
        echo json_encode($result);
    } else{
        echo 0;
    }
}

// 更新点击数
if(isset($_POST['clicks'])){
    $receive_category = $_POST['category'];
    $receive_id = $_POST['id'];
    $receive_clicks = $_POST['clicks'];
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

    $old_data = mysqli_fetch_array($link->query("SELECT id, clicks FROM $site_table WHERE id=$receive_id LIMIT 1"));
    $new_clicks =  $old_data['clicks']+$receive_clicks;
    $update_data = $link->query("UPDATE $site_table SET clicks=$new_clicks WHERE id=$receive_id");
    if($update_data){
        echo 1;
    } else{
        echo 0;
    }
}


//新网站审核结果
if(isset($_POST['judge'])){
    $checking_id = $_POST['id'];
    $checking_judge = $_POST['judge'];
    $checking_classify = $_POST['classify'];
    // $checking_id = 3;
    // $checking_judge = 0;
    // $checking_classify = 'front';
    include_once('../script/conn.php');

    $select_checking = $link->query("SELECT site, url, intro, uptime, email FROM checkingbook where id=$checking_id LIMIT 1;");
    if($select_checking){
        $get_checking = mysqli_fetch_assoc($select_checking);
        $checking_site = $get_checking['site'];
        $checking_url = $get_checking['url'];
        $checking_intro = $get_checking['intro'];
        $checking_uptime = $get_checking['uptime'];
        $checking_email = $get_checking['email'];
        if($checking_judge == 1){
            $insert_table = $checking_classify.'book';
            $insert_ok = $link->query("INSERT INTO $insert_table(site, url, intro, uptime) VALUES('$checking_site', '$checking_url', '$checking_intro', $checking_uptime);");
            if($insert_ok){
                $recipients = $checking_email; //收件人
                $subject = '提交成功，感谢您的贡献 - 极客导航'; //标题
                $body = "<p>Dears, 您提交的网站已经通过，感谢您的贡献。</p>
                <p>您提交的网站信息：</p>
                <p>网站：$checking_site</p>
                <p>URL：$checking_url</p>
                <p>简介：$checking_intro</p>
                <p>时间：".date('y-m-d H:i', $checking_uptime)."</p>"; //正文
                include('./email.php');
                    // 发送邮件
                $mail = new SendMail();
                $mail->setServer("smtp.aliyun.com", "geeknavigation@aliyun.com", "geekadmin159", 465, true); //设置smtp服务器，到服务器的SSL连接
                $mail->setFrom("geeknavigation@aliyun.com"); //设置发件人
                $signature = '<br/><div style="padding:10px 10px 0;border-top:1px solid #ccc;color:#999;margin-bottom:20px;line-height:1.3em;font-size:12px;"><p style="margin-bottom:15px; margin-right:auto; margin-left:auto;">极客导航邮件系统自动提醒,请不要回复<br /></p></div>';
                $mail->setReceiver($recipients); //设置收件人，多个收件人，调用多次
                $mail->addAttachment(''); //添加附件，多个附件，调用多次
                $mail->setMail($subject, $body.$signature); //设置邮件主题、内容
                $mail->sendMail(); //发送  
                $delete_checking = $link->query("DELETE FROM checkingbook where id=$checking_id;");
                echo 1;
            } else{
                echo 0;
            }
        } elseif($checking_judge == 0){
            $insert_table = 'outofcheck';
            if(get_magic_quotes_gpc()){
                $checking_conclusion = htmlspecialchars(trim($_POST['conclusion']));
            } else{
                $checking_conclusion = addslashes(htmlspecialchars(trim($_POST['conclusion'])));
            }
            $insert_out = $link->query("INSERT INTO $insert_table(site, url, intro, uptime, email, classify, conclusion) VALUES('$checking_site', '$checking_url', '$checking_intro', $checking_uptime, '$checking_email', '$checking_classify', '$checking_conclusion');");
            if($insert_out){
                $recipients = $checking_email; //收件人
                $subject = '非常抱歉，您的提交申请未获通过 - 极客导航'; //标题
                $body = "<p>Dears, 您提交的网站因以下原因未获通过：</p>
                <div style='background-color: #fff !important; line-height: 1.3em; border-bottom: 1px solid #ccc; margin-top: 10px; margin-bottom: 10px; padding: 10px;'><p>$checking_conclusion</p></div>
                <p>您提交的网站信息：</p>
                <p>网站：$checking_site</p>
                <p>URL：$checking_url</p>
                <p>简介：$checking_intro</p>
                <p>时间：".date('y-m-d H:i', $checking_uptime)."</p>"; //正文
                include('./email.php');
                    // 发送邮件
                $mail = new SendMail();
                $mail->setServer("smtp.aliyun.com", "geeknavigation@aliyun.com", "geekadmin159", 465, true); //设置smtp服务器，到服务器的SSL连接
                $mail->setFrom("geeknavigation@aliyun.com"); //设置发件人
                $signature = '<br/><div style="padding:10px 10px 0;border-top:1px solid #ccc;color:#999;margin-bottom:20px;line-height:1.3em;font-size:12px;"><p style="margin-bottom:15px; margin-right:auto; margin-left:auto;">极客导航邮件系统自动提醒,请不要回复<br /></p></div>';
                $mail->setReceiver($recipients); //设置收件人，多个收件人，调用多次
                $mail->addAttachment(''); //添加附件，多个附件，调用多次
                $mail->setMail($subject, $body.$signature); //设置邮件主题、内容
                $mail->sendMail(); //发送  
                $delete_checking = $link->query("DELETE FROM checkingbook where id=$checking_id;");
                echo 1;
            } else{
                echo 0;
            }
        }
    }
}

?>