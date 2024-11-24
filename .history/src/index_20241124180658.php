<?php
$servername = "localhost"; // hoặc tên máy chủ của MySQL
$username = "root";        // Tên người dùng MySQL
$password = "123456"; // Mật khẩu MySQL
$dbname = "demo1";  // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    echo "Kết nối MySQL thành công!";
}

// Đóng kết nối
mysqli_close($conn);
?>