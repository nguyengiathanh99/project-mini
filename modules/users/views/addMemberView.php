<?php
get_header();
?>
    <div id="member-listing" class="main-content">
        <h1 style="margin-bottom: 20px">Thêm thành viên</h1>
        <form id="editing-form" method="POST" action="">
            <div class="clear-both"></div>
            <div class="wrap-field">
                <label>Họ tên: </label>
                <input type="text" name="fullname" value="" />
                <div class="clear-both"></div>
            </div>
            <p class="error-member"><?php echo form_error('fullname') ?></p>
            <div class="wrap-field">
                <label>Tên đăng nhập: </label>
                <input type="text" name="username" value="" />
                <div class="clear-both"></div>
            </div>
            <p class="error-member"><?php echo form_error('username') ?></p>
            <div class="wrap-field">
                <label>Mật khẩu: </label>
                <input type="password" name="password" value="" />
                <div class="clear-both"></div>
            </div>
            <p class="error-member"><?php echo form_error('password') ?></p>
            <div class="wrap-field">
                <label>Giới tính: </label>
                <select name="gender" id="gender">
                    <option value="">---Chọn giới tính---</option>
                    <option value="male">Nam</option>
                    <option value="female">Nữ</option>
                </select>
                <div class="clear-both"></div>
            </div>
            <p class="error-member"><?php echo form_error('gender') ?></p>
            <div class="wrap-field">
                <label>Số điện thoại: </label>
                <input type="number" name="numphone" id="numphone" placeholder="Số điện thoại" value="">
                <div class="clear-both"></div>
            </div>
            <p class="error-member"><?php echo form_error('numphone') ?></p>
                <input type="submit" name="btn-addMember" value="Lưu thành viên">
            <div class="clear-both"></div>
            <p class="error-member"><?php echo form_error('acount') ?></p>
        </form>
    </div>
<?php
get_footer();
?>