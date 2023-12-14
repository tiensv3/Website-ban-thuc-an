<?php
session_start();
include("ketnoi.php");

if (isset($_POST['email']) && isset($_POST['matkhau'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);

    $sql1 = "SELECT * FROM taikhoan INNER JOIN khachhang ON taikhoan.ID = khachhang.TaiKhoanID WHERE Email = '$email' AND MatKhau = '$matkhau'";
    $sql2 = "SELECT * FROM taikhoan INNER JOIN nhanvien ON taikhoan.ID = nhanvien.TaiKhoanID WHERE Email = '$email' AND MatKhau = '$matkhau'";

    $kq1 = $conn->query($sql1);
    $kq2 = $conn->query($sql2);


    if (mysqli_fetch_array($kq2)) {
        $_SESSION["nhanvien"] = $email;

        // if (isset($_POST['ghinho'])) {
        //     setcookie("email", $email, time() + (86400 * 30), "/"); // 86400 giây là 1 ngày
        // }

        echo ("<script language=javascript>
        window.location='admin/index.php';
        </script> ");
    } 
    elseif (mysqli_fetch_array($kq1)) {
        $_SESSION["khachhang"] = $email;

        // if (isset($_POST['ghinho'])) {
        //     setcookie("email", $email, time() + (86400 * 30), "/");
        // }

        echo ("<script language=javascript>
        window.location='petshop/index.php';
        </script> ");
    }
    else {
        echo ("<script language=javascript> alert('Sai tên đăng nhập hoặc mật khẩu');
        window.location='dangnhap.php';
        </script> ");
    }
//  else {
//     // Nếu tồn tại cookie, tự động điền thông tin vào form
//     if (isset($_COOKIE["email"])) {
//         echo "<script>
//             document.getElementById('email').value = '" . $_COOKIE["email"] . "';
//             document.getElementById('ghinho').checked = true;
//         </script>";
//     }

//     echo ("Tài khoản hoặc mật khẩu không đúng");
// }

$conn->close();
}
?>