<?php
session_start();
/*
 * ---------------------------------------------------------
 * BASE URL
 * ---------------------------------------------------------
 * Cấu hình đường dẫn gốc của ứng dụng
 * Ví dụ: 
 * http://hocweb123.com đường dẫn chạy online 
 * http://localhost/yourproject.com đường dẫn dự án ở local
 * 
 */

$config['base_url'] = "http://localhost/Unitop.vn/back-end/project/project-mini/";


$config['default_module'] = 'users';
$config['default_controller'] = 'homeMember';
$config['default_action'] = 'index';












