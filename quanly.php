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
   
    <header >
        <div class="container-fluid pageHeader">
            <h1>HỆ THỐNG ĐĂNG KÍ HỌC - TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
            <div id="pageHeader_login" class="header_right">
                <p>
                    <span id="pageHeader_lbUserFullName"> Chào <?php echo $_SESSION['name'] ;?> </span>
                    <span id="pageHeader_lbRoleTitle">Vai trò: </span>
                    <span id="pageHeader_lbRole"> <?php echo $_SESSION['lv'] ; ?></span>
                </p>
            </div>
        </div>

    </header>
    <main>
        <p>content</p>
</main>
<?php include 'footer.php' ;?>