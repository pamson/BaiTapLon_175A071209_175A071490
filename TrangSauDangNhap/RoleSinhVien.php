<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Đăng nhập
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/datepicker3.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link href="../css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="../css/admin.css">
  <!--Css phan trang chủ-->
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/k.css">
</head>

<body class="dark-edition">
    <div class="row">
    <div class="col-sm-2">
    <div class="sidebar" data-color="purple" data-background-color="black" >
        <div class="logo"><span>Xin chào! Phạm Thế Sơn</span>
            <div class="nav_user">
            <nav class="nav flex-column ">
                <a class="nav-link active" href="#!"><i class="fas fa-home"></i>Trang chủ</a>
                <a class="nav-link" href="#!"><i class="fas fa-users"></i>Hồ sơ</a>
                <a class="nav-link" href="#!"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </nav>
            </div>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav menu">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="RoleSinhVien.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleSVDiem.php">
                        <i class="fas fa-table"></i>
                            <p>Điểm sinh viên</p>
                        </a>
                    </li>
                  
        </ul>
      </div>
    </div>
    </div>
    <div class="col-sm-10 page_right">
    <header>
        <div class="container-fluid pageHeader">
            <h1>HỆ THỐNG ĐĂNG KÍ HỌC - TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
        </div>
    </header>
    <main>
        <div class="container-fluid main_page">
            <div class="panel panel-container">
			    <div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">New Orders</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>


		<div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Site Traffic Overview
                       
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body" >
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row footer_main">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>New Orders</h4>
                        <div class="easypiechart" id="easypiechart-blue" data-percent="92"><span class="percent">92%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Comments</h4>
                        <div class="easypiechart" id="easypiechart-orange" data-percent="65"><span class="percent">65%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>New Users</h4>
                        <div class="easypiechart" id="easypiechart-teal" data-percent="56"><span class="percent">56%</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Visitors</h4>
                        <div class="easypiechart" id="easypiechart-red" data-percent="27"><span class="percent">27%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->


    </main>
    <footer>
        <div class="container-fluid  pageFooter">

            <div class="row">
                <div class="col-sm-4">
                    <div class="img">
                        <img src="../images/logo_TLU.png" alt="logo">
                        <p>© 2019 - TRƯỜNG ĐẠI HỌC THỦY LỢI</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="Content">
                        TRƯỜNG ĐẠI HỌC THỦY LỢI Địa chỉ : 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI. Điện thoại: (024) 3852 2201 - Fax: (024) 3563 3351 Email: phonghcth@tlu.edu.vn
                    </p>
                </div>
                <div class="col-sm-4" id="Social">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts" class="fb"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Daihocthuyloihn" class="tw"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="gp"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../js/chart.min.js"></script>
    <script src="../js/chart-data.js"></script>
    <script src="../js/easypiechart.js"></script>
    <script src="../js/easypiechart-data.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/jv.js"></script>
    <script>
        $(document).ready(function () {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
        }); 
    </script>
</body>

</html>