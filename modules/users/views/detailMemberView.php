<?php
get_header();
?>
<div id="member-listing" class="main-content">
    <h1>Chi tiết thành viên</h1>
    <p class="detail-member">Họ và tên: <span><?= $get_detail['fullname'] ?></span></p>
    <p class="detail-member">Tên đăng nhập: <span><?= $get_detail['username'] ?></span></p>
    <p class="detail-member">Giới tính: <span><?= $get_detail['gender'] ?></span></p>
    <p class="detail-member">Số điện thoại: <span><?= $get_detail['numphone'] ?></span></p>
</div>
<?php
get_footer();
?>
