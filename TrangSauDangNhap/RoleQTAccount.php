<?php
include ('head.php');
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
                                
								
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="Diem1"></td>
									<td class="Diem2"></td>
									<td class="Diem3"></td>
									<td class="Diem4"></td>
									<td class="Diem5"></td>
                                    <td class="Diem6"></td>
                                    <td class="Use7"></td>
									<td class="Diem8"></td>
									<td class="Diem9"></td>
                                    <td class="Diem10"></td>
                                    
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