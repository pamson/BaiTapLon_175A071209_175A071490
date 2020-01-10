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
                    <li class="nav-item active">
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
                    <li class="nav-item ">
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
                        <a class="nav-link" href="DiemSV.php?class=&lopmh=">
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
            <form class="text-center" style="color: #757575;" method="POST" action="../TrangSauDangNhap/addkhoa.php" >

               
                <div class="md-form mt-3">
                    <input name="makhoa" type="text" class="form-control" >
                    <label >Mã khoa</label>
                </div>

                
                <div class="md-form">
                    <input name="tenkhoa" type="text"  class="form-control">
                    <label >Tên khoa</label>
                </div>

                
                <button name="ADD" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">ADD</button>

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
								<th class="column2">Mã khoa</th>
								<th class="column3">Tên khoa</th>
                                
                                <th class="lop5"></th>
                                <th class="lop5"></th>
							</tr>
						</thead>
						<tbody>
                        
                        <?php
                        
                        $query="Select * from Khoa";
                        $result=  mysqli_query($connect,$query);
                        if(mysqli_num_rows($result)>0){
                            $i=0;
                            while($r=mysqli_fetch_assoc($result)){
                                $i ++;
                                $makhoa=$r['MaKhoa'];
                                $tenkhoa=$r['TenKhoa'];
                                echo "<tr>";

                                echo "<td class='column1'>$i</td>";
                                echo "<td class='column2'>$makhoa</td>";
                                echo "<td class='column3'>$tenkhoa</td>";
                                echo "<td name='update' class='lop5 update_Khoa' onclick='ADD()'><a href='../TrangSauDangNhap/updatekhoa.php?id=$makhoa'><i class='fas fa-pencil-alt'></i></a></td>";

                                echo "<td  class='lop5 remove_Khoa'><a href='../TrangSauDangNhap/deletekhoa.php?id=$makhoa'><i class='fas fa-trash-alt'></i></a></td>";
                                echo "</tr>";
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