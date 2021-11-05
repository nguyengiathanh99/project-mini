<?php
get_header();
?>
    <div id="member-listing" class="main-content">
        <h1 style="margin-bottom: 20px">Cập nhật thành viên</h1>
        <form id="editing-form" method="POST" action="">
            <div class="clear-both"></div>
            <div class="wrap-field">
                <label>Họ tên: </label>
                <input type="text" name="fullname" value="<?php echo $info_member['fullname']; ?>" />
                <div class="clear-both"></div>
            </div>
            <p class="error-member"><?php echo form_error('fullname') ?></p>
            <div class="wrap-field">
                <label>Tên đăng nhập: </label>
                <input id="username" type="text" name="username" value="<?php echo $info_member['username']; ?>" readonly="readonly"  />
                <div class="clear-both"></div>
            </div>
            <div class="wrap-field">
                <label>Số điện thoại: </label>
                <input type="number" name="numphone" id="numphone" placeholder="Số điện thoại" value="<?php echo $info_member['numphone']; ?>">
                <div class="clear-both"></div>
            </div>
            <p class="error-member"><?php echo form_error('numphone') ?></p>
            <input type="submit" name="btn-update" value="Lưu thành viên">
            <div class="clear-both"></div>
            <p class="error-member"><?php echo form_error('acount') ?></p>
        </form>
    </div>
<?php
get_footer();
?>