<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/reset.css">
    <link rel="stylesheet" href="public/login.css">
    <title>Trang đăng nhập</title>
</head>
<body>
<div id="wp-form-login">
    <h1>Đăng Nhập</h1>
    <form action="" method="post" id="form-login">
        <input type="text" name="username" id="username" value="<?php if (isset($_COOKIE['username']))  echo $_COOKIE['username']; ?>" placeholder="Tên đăng nhập">
        <p class="error"><?php echo form_error('username') ?></p>
        <input type="password" name="password" id="password" placeholder="Mật khẩu" value="<?php if (isset($_COOKIE['password']))  echo $_COOKIE['password']; ?>">
        <p class="error"><?php echo form_error('password') ?></p>
        <div class="remember-me">
            <input type="checkbox" name="remember_me" id="remember"/ <?php if (isset($_COOKIE['userlogin']))  echo "checked"; ?>>
            <label for="remember">Remember me</label><br>
        </div>
        <input type="submit" name="btn-login" value="Đăng Nhập" id="btn-login">
        <p class="error"><?php echo form_error('acount'); ?></p>
    </form>
</div>
</body>
</html>
