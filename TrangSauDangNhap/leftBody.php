<?php session_start();
?>
<div class="row">
    <div class="col-sm-2">
    <div class="sidebar" data-color="purple" data-background-color="black" >
        <div class="logo"><span>Xin chào! <?php echo $_SESSION['name']; ?> </span>
            <div class="nav_user">
            <nav class="nav flex-column ">
                <a class="nav-link active" href="#!"><i class="fas fa-home"></i>Trang chủ</a>
                <a class="nav-link" href="#!"><i class="fas fa-users"></i>Hồ sơ</a>
                <a class="nav-link" href="../TrangSauDangNhap/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </nav>
            </div>
      </div>
      
    