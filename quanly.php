<?php 
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/AD.css">
</head>

<body>
   
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/AD.css">
</head>

<body>
    <header>
        <div class="container-fluid pageHeader">
            <h1>HỆ THỐNG ĐĂNG KÍ HỌC - TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
            <div id="pageHeader_login" class="header_right">
                <span id="pageHeader_lbUserFullName"><?php echo $_SESSION['name'] ?></span>
                <span id="pageHeader_lbRoleTitle">Vai trò: </span>
                <span id="pageHeader_lbRole"><?php echo $_SESSION['lv'] ?></span>
                <ul class="nav justify-content-end nav_login">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thoát</a>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid main_page">
            <div class="row">
                <div class="col-sm-2 nav_left">
                    <nav class="nav flex-column">
                        <a class="nav-link active" href="#!"><i class="fas fa-home"></i>    Trang chủ</a>
                        <a class="nav-link" href="#!"><i class="fas fa-university"></i> Khoa</a>
                        <a class="nav-link" href="#!"><i class="fas fa-store-alt"></i>  Lớp</a>
                        <a class="nav-link" href="#!"><i class="fas fa-chalkboard-teacher"></i> Giảng viên</a>
                        <a class="nav-link" href="#!"><i class="fas fa-graduation-cap"></i> Sinh viên</a>
                        <a class="nav-link" href="#!"><i class="fas fa-book"></i>   Môn học</a>
                        <a class="nav-link" href="#!"><i class="fas fa-book-open"></i>  Chi tiết môn học</a>
                        <a class="nav-link" href="#!"><i class="fas fa-table"></i>  Điểm sinh viên</a>
                        <a class="nav-link" href="#!"><i class="fas fa-users"></i>  Thông tin tài khoản</a>
                        <a class="nav-link" href="#!"><i class="fas fa-users"></i>  User</a>
                    </nav>

                </div>
                <div class="col-sm-10">
                    <h1>right chưa viết </h1>
                </div>
            </div>

        </div>

    </main>

<?php include 'footer.php' ;?>