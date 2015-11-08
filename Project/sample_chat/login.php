

<?php
session_start();

if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['user']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}
if(!isset($_POST['submit'])){
    exit('非法访问!');
}


include('conn.php');
$check_query = mysql_query("select id from messages where username='$user' and password='$pd' 
limit 1");
if($result = mysql_fetch_array($check_query)){
    $_SESSION['user'] = $user;
    $_SESSION['userid'] = $result['id'];
    echo $username,' 欢迎你！<br />';
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>
