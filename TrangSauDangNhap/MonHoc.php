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
                    <li class="nav-item active">
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
                        <a class="nav-link" href="DiemSV.php">
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
            <form class="text-center" style="color: #757575;" action="addmonhoc.php" method='post'>

               
                <div class="md-form mt-3">
                    <input name='mamh' type="text" class="form-control">
                    <label >Mã môn học</label>
                </div>

                
                <div class="md-form">
                    <input name='tenmh' type="text"  class="form-control">
                    <label >Tên môn học</label>
                </div>
                <div class="md-form mt-3">
                    <input name='sotc' type="text" class="form-control">
                    <label >Số tín chỉ</label>
                </div>

                
                <div class="md-form">
                    <input name='lt' type="text"  class="form-control">
                    <label >Lý thuyết</label>
                </div>

                <div class="md-form mt-3">
                    <input name='th' type="text" class="form-control">
                    <label >Thực hành</label>
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
								<th class="column2">Mã môn học</th>
								<th class="column3">Tên môn học</th>
								<th class="column4">Số tín chỉ</th>
								<th class="column5">Lý thuyết</th>
								<th class="column6">Thực hành</th>
                                <td class="column4"></td>
                                <td class="column5"></td>
							</tr>
						</thead>
						<tbody>
                        <?php
                        
                        $query="Select * from monhoc";
                        $result=  mysqli_query($connect,$query);
                        if(mysqli_num_rows($result)>0){
                            $i=0;
                            while($r=mysqli_fetch_assoc($result)){
                                $i ++;
                                $mamh=$r['MaMH'];
                                $tenmh=$r['TenMH'];
                                $sotc=$r['SoTC'];
                                $lt=$r['LT'];
                                 $th=$r['TH'];
                               
                                echo "<tr>";
                                echo "<td class ='column1'>$i</td>";
                                echo "<td class ='column2'>$mamh</td>";
                                echo "<td class ='column3'>$tenmh</td>";
                                echo "<td class ='column4'>$sotc</td>";
                                echo "<td class ='column5'>$lt</td>";
                                echo "<td class ='column6'>$th </td>";
                               
                                echo "<td class ='column4' name='update' class='lop5 update_Khoa' onclick='ADD()'><a href='../TrangSauDangNhap/updategv.php?id=$mamh'><i class='fas fa-pencil-alt'></i></a></td>";
                                echo "<td  class='column5 remove_Khoa'><a href='../TrangSauDangNhap/deletegv.php?id=$mamh'><i class='fas fa-trash-alt'></i></a></td>";
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