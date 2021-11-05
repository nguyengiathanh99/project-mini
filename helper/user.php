<?php
function is_login(){
    if (isset($_SESSION['is_login'])) {
        return $_SESSION['is_login'];
    }
}
function user_login() {
    if (!empty($_SESSION['username'])) {
        return $_SESSION['username'];
    }
}