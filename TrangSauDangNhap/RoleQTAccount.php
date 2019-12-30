<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'QL'))
{
 header("Location:../dangnhap.php");
exit();}


?>
<?php
include ("leftBody.php");
?>
<div class="sidebar-wrapper">
        <ul class="nav menu">
                    <li class="nav-item   ">
                        <a class="nav-link" href="RoleQuanTri.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="RoleQTAccount.php">
                        <i class="fas fa-users"></i>
                            <p>Thông tin tài khoản</p>
                        </a>
                    </li>
                    
        </ul>
	  </div>
	  </div>
    </div>
<div class="col-sm-10 page_right">
    <?php
    include ("headerLogin.php");
    ?>
    <main>
    <?php include ("HoSoQT.php")?>
    <button class="ADD" id="add" onclick="ADD()">ADD</button>
            <script>
            function ADD() {
                document.getElementById("ADD").style.display = "block";
                document.getElementById("add").style.display = "none";
            }
            </script>
            
        <div class="card" id="ADD">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong style="color:white;">Hello!</strong>
        </h5>

        
        <div class="card-body px-lg-5">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="#!">

               
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >UserName</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Password</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Confirm Password</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Verified</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Name</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Sex</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" class="form-control">
                    <label >Role</label>
                </div>

                
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Email</label>
                </div>
                <div class="md-form">
                    <input type="text"  class="form-control">
                    <label >Address</label>
                </div>
                
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">ADD</button>

            </form>
            <!-- Form -->

            </div>

        </div>
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="Diem1">STT</th>
								<th class="Diem2">Username</th>
								<th class="Diem3">Password</th>
								<th class="Diem4">Confirm Password</th>
                                <th class="Diem5">Verified</th>
                                <th class="Diem6">Name</th>
                                <th class="Use7">Sex</th>
                                <th class="Diem8">Role</th>
                                <th class="Diem9">Email</th>
                                <th class="Diem10">Address</th>
                                <td class="lop5"></td>
                                <td class="lop5"></td>
                                
								
							</tr>
						</thead>
						<tbody>
								<tr class="rowkhoa">
									<td class="Diem1">1</td>
									<td class="Diem2">175A071209</td>
									<td class="Diem3">175A071204</td>
									<td class="Diem4">175A071204</td>
									<td class="Diem5">Null</td>
                                    <td class="Diem6">Phạm Thế Sơn</td>
                                    <td class="Use7">Nam</td>
									<td class="Diem8">SV</td>
									<td class="Diem9">SonPT72@wru.vn</td>
                                    <td class="Diem10">Nam Định</td>
                                    <td class="lop5 update_Khoa" onclick="ADD()"><i class="fas fa-pencil-alt"></i></td>
                                    <td class="lop5 remove_Khoa"><i class="fas fa-trash-alt"></i></td>
                                </tr>	
                                					
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
    </main>
    <?php
    include ("footerLogin.php");
    ?>
</div>
<?php
include ("foot.php");
?>