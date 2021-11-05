<?php
#Get all members
function get_member() {
    $get_members = db_fetch_array("SELECT * FROM `tbl_member`");
    return $get_members;
}
#Count record
function num_record() {
    $num_rows = db_num_rows("SELECT * FROM `tbl_member`");
    return $num_rows;
}

//Login
function check_login($username,$password) {
    $check_login = db_num_rows("SELECT * FROM  `tbl_member` WHERE username = '$username' AND password = '$password'");
    if ($check_login > 0) {
        return true;
    }
    return false;
}

#Check_user
function user_exists($username) {
    $check_user = db_num_rows("SELECT * FROM `tbl_member` WHERE `username` = '$username'");
    if ($check_user > 0) {
        return true;
    }
    return false;
}

#Add member
function add_member($data) {
    $add_member = db_insert("tbl_member",$data);
    return $add_member;
}

#Get_info_member
function get_info_member($username) {
    $item = db_fetch_row("SELECT * FROM `tbl_member` WHERE `username` = '{$username}'");
    return $item;
}

#Update member
function update_member($data,$username) {
    $update_member = db_update("tbl_member",$data,"`username` = '{$username}'");
    return $update_member;
}

#Detail member
function get_detail_member($detail_id) {
    $get_detail = db_fetch_row("SELECT * FROM `tbl_member` WHERE `id` = {$detail_id}");
    return $get_detail;
}

#Delete member
function delete_member($del_id) {
    $del_member = db_delete("tbl_member","`id` = $del_id");
    return $del_member;
}
