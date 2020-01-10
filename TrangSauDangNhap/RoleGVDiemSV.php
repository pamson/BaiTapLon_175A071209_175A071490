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
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVChiTietMH.php">
                        <i class="fas fa-book-open"></i>
                            <p>Chi tiết môn học</p>
                        </a>
                    </li>

                    <li class="nav-item active">
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
            <form class="text-center" style="color: #757575;" action="addiemsv.php" method='post'>
            
            <div class="md-form mt-3">
                    <input name='mamh' type="text" class="form-control">
                    <label >Mã môn học</label>
                </div>

                
                
                <div class="md-form mt-3">
                    <input name='sotc' type="text" class="form-control">
                    <label >Số tín chỉ</label>
                </div>
                <div class="md-form mt-3">
                    <input name='lanhoc' type="text" class="form-control">
                    <label >Lần học</label>
                </div>

                
                <div class="md-form">
                    <input name='lanthi' type="text"  class="form-control">
                    <label >Lần thi</label>
                </div>
               
               
                <div class="md-form mt-3">
                    <input name='masv' type="text" class="form-control">
                    <label >Mã sinh viên</label>
                </div>

                
                <div class="md-form">
                    <input name='diemqt' type="text"  class="form-control">
                    <label >Điểm quá trình</label>
                </div>
                <div class="md-form mt-3">
                    <input name='diemthi' type="text" class="form-control">
                    <label >Điểm thi</label>
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
								<th class="Diem2">Mã môn học</th>
                                
								
								<th class="Diem4">Số tín chỉ</th>
                                <th class="Diem2">Lần học</th>
								
                                <th class="Diem5">Lần thi</th>
                                <th class="Diem6">Đánh giá</th>
                               
                                <th class="Diem8">Mã sinh viên</th>
                                <th class="Diem9">Điểm quá trình</th>
                                <th class="Diem10">Điểm thi</th>
                                <th class="Diem11">TKHP</th>
                                <th class="Diem12">Điểm chữ</th>
                                <td class="Diem5"></td>
                                <td class="Diem5"></td>
								
							</tr>
						</thead>
						<tbody>
                        <?php
                        
                        $query="Select * from diemsv";
                        $result=  mysqli_query($connect,$query);
                        if(mysqli_num_rows($result)>0){
                            $i=0;
                            while($r=mysqli_fetch_assoc($result)){
                                $i ++;
                                $mamh=$r['MaMH'];
                               
                                $sotinchi=$r['SoTC'];
                                $lanhoc=$r['LanHoc'];
                                $lanthi=$r['LanThi'];
                                 $danhgia=$r['DanhGia'];
                               
                                $masv=$r['MaSV'];
                                $diemqt=$r['QuaTrinh'];
                                $diemthi=$r['Thi'];
                                $tkhp=$r['TKHP'];
                                $diemchu=$r['Diemchu'];
                                echo "<tr>";
                                echo "<td class ='column1'>$i</td>";
                                echo "<td class ='column2'>$mamh</td>";
                                
                                echo "<td class ='column4'>$sotinchi</td>";
                                echo "<td class ='column4'>$lanhoc</td>";
                                echo "<td class ='column5'>$lanthi</td>";
                                echo "<td class ='column6'>$danhgia </td>";
                              
                                echo "<td class ='column7'>$masv</td>";
                                echo "<td class ='column7'>$diemqt</td>";
                                echo "<td class ='column7'>$diemthi</td>";
                                echo "<td class ='column7'>$tkhp</td>";
                                echo "<td class ='column7'>$diemchu</td>";
                                echo "<td class ='column4' name='update' class='lop5 update_Khoa' onclick='ADD()'><a href='../TrangSauDangNhap/updateRoleGVDiemSV.php?id=$mamh'><i class='fas fa-pencil-alt'></i></a></td>";
                                echo "<td  class='column5 remove_Khoa'><a href='../TrangSauDangNhap/deletediemsv.php?id=$mamh'><i class='fas fa-trash-alt'></i></a></td>";
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