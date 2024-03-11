<?php
// Upload configs.
// define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
// define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
$conn = mysqli_connect('localhost','root','','e-commerce') or die('connection failed');
define('UPLOAD_DIR', 'uploaded_img');
?>