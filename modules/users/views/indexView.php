<?php
get_header();
?>

<div id="member-listing" class="main-content">
    <h1>Danh sách thành viên</h1>
    <div class="listing-items">
        <div class="buttons">
            <a href="?mod=users&action=addMember">Thêm thành viên</a>
        </div>
        <div class="total-items">
            <span>Có tất cả <strong><?php echo $nums_row; ?></strong> thành viên
        </div>
        <ul>
            <li class="listing-item-heading">
                <div class="listing-prop listing-fullname">Họ và tên</div>
                <div class="listing-prop listing-username">Số điện thoại</div>
                <div class="listing-prop listing-button">
                    Xóa
                </div>
                <div class="listing-prop listing-button">
                    Sửa
                </div>
                <div class="listing-prop listing-privilege">
                    Chi tiết
                </div>
                <div class="listing-prop listing-time">Ngày tạo</div>
                <div class="clear-both"></div>
            </li>
            <?php if (!empty($get_members)) {
                foreach ($get_members as $item) {
                    ?>
                    <li>
                        <div class="listing-prop listing-fullname"><?= $item['fullname']; ?></div>
                        <div class="listing-prop listing-username"><?= $item['numphone']; ?></div>
                        <div class="listing-prop listing-button">
                            <a href="?mod=users&action=deleteMember&id=<?= $item['id']; ?>" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                        </div>
                        <div class="listing-prop listing-button">
                            <a href="?mod=users&action=updateMember&id=<?= $item['id']; ?>">Sửa</a>
                        </div>
                        <div class="listing-prop listing-privilege">
                            <a href="?mod=users&action=detailMember&id=<?= $item['id']; ?>">Chi tiết</a>
                        </div>
                        <div class="listing-prop listing-time"><?= date('d/m/Y H:i', $item['created_time']); ?></div>
                        <div class="clear-both"></div>
                    </li>
                    <?php
                }
            } ?>
        </ul>
        <div class="clear-both"></div>
    </div>
</div>

<?php
get_footer();
?>
