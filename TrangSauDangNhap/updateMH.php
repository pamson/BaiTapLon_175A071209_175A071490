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
                        <a class="nav-link" href="SinhVien.php">
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
    
        <div class="card" id="ADD" style="display:block;">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong style="color:white;">Hello!</strong>
        </h5>

        
        <div class="card-body px-lg-5">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" method="POST" action="../TrangSauDangNhap/xulyupdateMH.php?id=<?php echo $_GET['id']?>" >

               <?php 
                    $sql = "SELECT * FROM MonHoc WHERE MaMH ='".$_GET['id']."'";
                    $result = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($result);
                    
               ?>
                <div class="md-form mt-3">
                    <input name='mamh' type="text" class="form-control" value="<?php echo $row['MaMH']?>">
                    <label >Mã môn học</label>
                </div>

                
                <div class="md-form">
                    <input name='tenmh' type="text"  class="form-control" value="<?php echo $row['TenMH']?>">
                    <label >Tên môn học</label>
                </div>
                <div class="md-form mt-3">
                    <input name='sotc' type="text" class="form-control" value="<?php echo $row['SoTC']?>">
                    <label >Số tín chỉ</label>
                </div>

                
                <div class="md-form">
                    <input name='lt' type="text"  class="form-control" value="<?php echo $row['LT']?>">
                    <label >Lý thuyết</label>
                </div>

                <div class="md-form mt-3">
                    <input name='th' type="text" class="form-control" value="<?php echo $row['TH']?>">
                    <label >Thực hành</label>
                </div>

                
                <button name="update" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">UPDATE</button>
                
            </form>
            
            <!-- Form -->

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