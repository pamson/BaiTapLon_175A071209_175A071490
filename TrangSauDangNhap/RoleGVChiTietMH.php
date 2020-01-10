<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'GV'))
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
                        <a class="nav-link" href="RoleGiangVien.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVLop.php?class=">
                        <i class="fas fa-store-alt"></i>
                            <p>Lớp</p>
                        </a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVSinhVien.php">
                        <i class="fas fa-graduation-cap"></i>
                            <p>Sinh viên</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVMonHoc.php?class=">
                        <i class="fas fa-book"></i>
                            <p>Môn học</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="RoleGVChiTietMH.php">
                        <i class="fas fa-book-open"></i>
                            <p>Chi tiết môn học</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVDiemSV.php">
                        <i class="fas fa-table"></i>
                            <p>Điểm sinh viên</p>
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
    <?php include ("HoSoGV.php")?>
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
            <form class="text-center" style="color: #757575;" action="addctmh.php" method='post'>

               
                <div class="md-form mt-3">
                    <input name='malop' type="text" class="form-control">
                    <label >Mã lớp</label>
                </div>

                
                <div class="md-form">
                    <input name='mamh' type="text"  class="form-control">
                    <label >Mã môn học</label>
                </div>
                <div class="md-form mt-3">
                    <input name='hk' type="text" class="form-control">
                    <label >Học kì</label>
                </div>

                
                <div class="md-form">
                    <input name= 'namhoc' type="text"  class="form-control">
                    <label >Năm học</label>
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
								<th class="lop1">STT</th>
								<th class="lop2">Mã lớp</th>
								<th class="lop3">Mã môn học</th>
								<th class="lop4">Học kì</th>
                                <th class="lop5">Năm học</th>
                                <td class="column4"></td>
                                <td class="column5"></td>
								
							</tr>
						</thead>
						<tbody>
                        <?php
                        
                        $query="Select * from ctmonhoc";
                        $result=  mysqli_query($connect,$query);
                        if(mysqli_num_rows($result)>0){
                            $i=0;
                            while($r=mysqli_fetch_assoc($result)){
                                $i ++;
                                $malop=$r['MaLop'];
                                $mamh=$r['MaMH'];
                                $hk=$r['HK'];
                                $namhoc=$r['NamHoc'];
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td>$malop</td>";
                                echo "<td>$mamh</td>";
                                echo "<td>$hk</td>";
                                echo "<td>$namhoc</td>";
                                echo "<td name='update' class='lop5 update_Khoa' onclick='ADD()'><a href='../TrangSauDangNhap/updatechitietmh.php?id=$malop'><i class='fas fa-pencil-alt'></i></a></td>";
                                echo "<td  class='lop5 remove_Khoa'><a href='../TrangSauDangNhap/deletectmh.php?id=$malop'><i class='fas fa-trash-alt'></i></a></td>";
                            }
                        }
                        ?>
               
                                					
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