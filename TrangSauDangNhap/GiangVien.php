<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'ADMIN'))
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
                        <a class="nav-link" href="admin.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Khoa.php">
                        <i class="fas fa-university"></i>
                            <p>Khoa</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Lop.php">
                        <i class="fas fa-store-alt"></i>
                            <p>Lớp</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="GiangVien.php">
                        <i class="fas fa-chalkboard-teacher"></i>
                            <p>Giảng viên</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="SinhVien.php?class=">
                        <i class="fas fa-graduation-cap"></i>
                            <p>Sinh viên</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="MonHoc.php">
                        <i class="fas fa-book"></i>
                            <p>Môn học</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="ChiTietMH.php">
                        <i class="fas fa-book-open"></i>
                            <p>Phân công giảng dạy</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="DiemSV.php?class=">
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
    <?php include ("HoSoADMIN.php")?>
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
            <form method='post' class="text-center" style="color: #757575;" action="addgv.php">

               
                <div class="md-form mt-3">
                    <input name='magv' type="text" class="form-control">
                    <label >Mã giảng viên</label>
                </div>

                
                <div class="md-form">
                    <input name='tengv' type="text"  class="form-control">
                    <label >Tên giảng viên</label>
                </div>
                <div class="md-form mt-3">
                    <input name='capbac' type="text" class="form-control">
                    <label >Cấp bậc</label>
                </div>

                
                <div class="md-form">
                    <input name='gioitinh' type="text"  class="form-control">
                    <label >Giới tính</label>
                </div>

                <div class="md-form mt-3">
                    <input name='sodienthoai' type="text" class="form-control">
                    <label >Số điện thoại</label>
                </div>

                
                <div class="md-form">
                    <input name='email' type="text"  class="form-control">
                    <label >Email</label>
                </div>
                <div class="md-form mt-3">
                    <input name='diachi' type="text" class="form-control">
                    <label >Địa chỉ</label>
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
								<th class="column1">STT</th>
								<th class="column2">Mã giảng viên</th>
								<th class="column3">Tên giảng viên</th>
								<th class="column4">Cấp bậc</th>
                                <th class="column5">Giới tính</th>
                                <th class="column6">Số điện thoại</th>
                                <th class="column7">Email</th>
                                <th class="column8">Địa chỉ</th>
                                <td class="column4"></td>
                                <td class="column5"></td>
								
							</tr>
						</thead>
						<tbody>
                        <?php
                        
                        $query="Select * from giangvien";
                        $result=  mysqli_query($connect,$query);
                        if(mysqli_num_rows($result)>0){
                            $i=0;
                            while($r=mysqli_fetch_assoc($result)){
                                $i ++;
                                $magv=$r['MaGV'];
                                $tengv=$r['TenGV'];
                                $capbac=$r['CapBac'];
                                $gioitinh=$r['GioiTinh'];
                                 $sodienthoai=$r['SĐT'];
                                $email=$r['Email'];
                                $diachi=$r['DiaChi'];
                                echo "<tr>";
                                echo "<td class ='column1'>$i</td>";
                                echo "<td class ='column2'>$magv</td>";
                                echo "<td class ='column3'>$tengv</td>";
                                echo "<td class ='column4'>$capbac</td>";
                                echo "<td class ='column5'>$gioitinh</td>";
                                echo "<td class ='column6'>$sodienthoai </td>";
                                echo "<td class ='column7'>$email</td>";
                                echo "<td>$diachi</td>";
                                echo "<td class ='column4' name='update' class='lop5 update_Khoa' onclick='ADD()'><a href='../TrangSauDangNhap/updateGV.php?id=$magv'><i class='fas fa-pencil-alt'></i></a></td>";
                                echo "<td  class='column5 remove_Khoa'><a href='../TrangSauDangNhap/deletegv.php?id=$magv'><i class='fas fa-trash-alt'></i></a></td>";
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