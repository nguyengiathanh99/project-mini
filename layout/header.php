<!DOCTYPE html>
<html>
<head>
    <title>Bài 15: Hướng dẫn tạo quản trị menu đa cấp trong PHP - Phần 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/admin_style.css" >
</head>
<body>
<div id="admin-heading-panel">
    <div class="container">
        <div class="left-panel">
            Xin chào <span><?php if (!empty($_SESSION['username'])) echo $_SESSION['username']; ?></span>
        </div>
        <div class="right-panel">
            <img height="24" src="public/images/home.png" />
            <a href="?mod=users">Trang chủ</a>
            <img height="24" src="public/images/logout.png" />
            <a href="?mod=users&action=logout">Đăng xuất</a>
        </div>
    </div>
</div>
<div id="content-wrapper">
    <div class="container">
        <div class="left-menu">
            <div class="menu-heading">Admin Menu</div>
            <div class="menu-items">
                <ul>
                    <li><a href="?mod=users">Quản lý thành viên</a></li>
                </ul>
            </div>
        </div>

