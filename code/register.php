<?php
//开启session
session_start();
//检查是否提交post表单
if (!empty($_POST)) {
    //检查表单是否提交完整
    if (isset($_POST['username']) && $_POST['username'] != '' &&
        isset($_POST['password']) && $_POST['password'] != '') {
        try {
            $config = require_once './config.php';
            $pdo = new PDO($config['dsn'], $config['user'], $config['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //限制用户名中不可以输单引号 和 --，它们会影响sql语句执行
            //1.正则表达式替换 2.addslashes
            $username = addslashes($_POST['username']);
            $res = $pdo->query("select * from user where username='{$username}'");
            //检查数据库中是否已存在该用户记录
            if (empty($res->fetch())) {
                //MD5加密
                $salt = "tianwanggaidihu";
                $password = md5(md5($_POST['password']).$salt);
                $affectedRow = $pdo->exec("insert into user(username, password) values('{$username}', '{$password}')");
                if ($affectedRow > 0) {
                    $_SESSION['username'] = $username;
                    header('location:./admin.php');
                }else {
                    echo "<script>alert('注册失败')</script>";
                }
            } else{
                echo "<script>alert('注册账号已存在')</script>";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo "<script>alert('数据库出错')</script>";
        }
    }else {
        echo "<script>alert('表单未填完整')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

<style>
    .s_center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="s_center container">
    <form class="form-signin" method="post" action="register.php">
        <h2 class="form-signin-heading">请注册</h2>
        <label class="sr-only">用户名</label>
        <input type="text"  class="form-control" name="username" placeholder="请填写用户名" required autofocus>
        <br />
        <label  class="sr-only">密码</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码" required>
        <br />
        <button class="btn btn-lg btn-primary btn-block" id="login-button" type="submit" name="register">注册</button>
    </form>

</div>
</body>
</html>