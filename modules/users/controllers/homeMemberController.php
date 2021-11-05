<?php

function construct() {
    load_model('index');
    load('helper','validation');
}
#Index
function indexAction() {
    $get_members = get_member();
    $nums_row = num_record();
    $data = array(
        'get_members' => $get_members,
        'nums_row' => $nums_row
    );
    load_view('index',$data);
}

#Login
function loginAction() {
    global $error;
    if (isset($_POST['btn-login'])) {
        $error = array();
        #Tên đăng nhập
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập!";
        }
        else {
            $pattent = "/^[A-Za-z0-9_\.]{6,32}$/";
            if (!preg_match($pattent,$_POST['username'])) {
                $error['username'] = "Tên đăng nhập sai định dạng!";
            }
            else {
                $username = $_POST['username'];
            }
        }
        #Mật khẩu
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu!";
        }
        else {
            $pattent = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            if (!preg_match($pattent,$_POST['password'])) {
                $error['password'] = "Mật khẩu sai định dạng!";
            }
            else {
                $password = md5($_POST['password']);
                $pass = $_POST['password'];
            }
        }
        #Not error
        if (empty($error)) {
            if (check_login($username,$password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username;
                #Check_bock
                if (!empty($_POST['remember_me'])) {
                    $remember_me = $_POST['remember_me'];
                    #Set cookie
                    setcookie('username',$username,time()+3600*24*7);
                    setcookie('password',$pass,time()+3600*24*7);
                    setcookie('userlogin',$remember_me,time()+3600*24*7);
                }
                else {
                    setcookie('username',$username,30);
                    setcookie('password',$pass,30);
                }
                redirect("?mod=users");
            }
            else {
                $error['acount'] = "Không tồn tại tài khoản!";
            }
        }
    }
    load_view('login');
}
#Add member
function addMemberAction() {
    global $error;
    if (isset($_POST['btn-addMember'])) {
        $error = array();
        #Check fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên!";
        }
        else {
            $fullname = $_POST['fullname'];
        }
        #Check username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập!";
        }
        else {
            $pattent = "/^[A-Za-z0-9_\.]{6,32}$/";
            if (!preg_match($pattent,$_POST['username'])) {
                $error['username']= "Tên đăng nhập không đúng định dạng!";
            }
            else {
                $username = $_POST['username'];
            }
        }
        #Check password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu!";
        }
        else {
            $pattent = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            if (!preg_match($pattent,$_POST['password'])) {
                $error['password'] = "Mật khẩu sai định dạng!";
            }
            else {
                $password = md5($_POST['password']);
            }
        }
        #Chech gender
        if (empty($_POST['gender'])) {
            $error['gender'] = "Không được để trống giới tính!";
        }
        else {
            $gender = $_POST['gender'];
        }
        #Check phone
        if (empty($_POST['numphone'])) {
            $error['numphone'] = "Không được để trống số điện thoại!";
        }
        else {
            $pattent = "/^(09|08|01[2|6|8|9])+([0-9]{8})$/";
            if (!preg_match($pattent,$_POST['numphone'])) {
                $error['numphone'] = "Số điện thoại không đúng định dạng!";
            }
            else {
                $numphone = $_POST['numphone'];
            }
        }
        #Not error
        if (empty($error)) {
            if (!user_exists($username)) {
                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => $password,
                    'gender' => $gender,
                    'numphone' => $numphone,
                    'created_time' => time()
                );
                add_member($data);
                redirect("?mod=users");
            }
            else {
                $error['acount'] = "Tài khoản đã tồn tại !";
            }
        }
    }
    load_view('addMember');
}
#Details member
function detailMemberAction(){
    $detail_id = $_GET['id'];
    $get_detail = get_detail_member($detail_id);
    $data['get_detail'] = $get_detail;
    load_view('detailMember',$data);

}
#Update member
function updateMemberAction() {

    global $error;
    #Get infor-user
    $info_member = get_info_member($_SESSION['username']);
    $data['info_member'] = $info_member;
    #Update member
    if (isset($_POST['btn-update'])) {
        $error = array();
        #Update fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên!";
        }
        else {
            $fullname = $_POST['fullname'];
        }

        #Update phone
        if (empty($_POST['numphone'])) {
            $error['numphone'] = "Không được để trống số điện thoại!";
        }
        else {
            $pattent = "/^(09|08|01[2|6|8|9])+([0-9]{8})$/";
            if (!preg_match($pattent,$_POST['numphone'])) {
                $error['numphone'] = "Số điện thoại không đúng định dạng!";
            }
            else {
                $numphone = $_POST['numphone'];
            }
        }
        #Update not error
        if (empty($error)) {
                $data = array(
                    'fullname' => $fullname,
                    'numphone' => $numphone,
                    'created_time' => time()
                );
                update_member($data,$_SESSION['username']);
                redirect("?mod=users");
        }
    }
    load_view('updateMember',$data);
}

#Delete member
function deleteMemberAction(){
    $del_id = $_GET['id'];
    $del_member = delete_member($del_id);
    redirect("?mod=users");
}

#Logout member
function logoutACtion(){
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        setcookie('username',$_COOKIE['username'],time()-60);
        setcookie('password',$_COOKIE['password'],time()-60);
    }
    redirect("?mod=users&action=login");
}
