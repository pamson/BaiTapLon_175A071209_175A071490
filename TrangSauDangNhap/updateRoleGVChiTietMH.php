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
                        <a class="nav-link" href="RoleGVMonHoc.php">
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
    <?php include ("HoSoADMIN.php")?>
    
        <div class="card" id="ADD" style="display:block;">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong style="color:white;">Hello!</strong>
        </h5>

        
        <div class="card-body px-lg-5">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" method="POST" action="../TrangSauDangNhap/xulyupdateRoleGVChiTietMH.php?id=<?php echo $_GET['id']?>" >

               <?php 
                    $sql = "SELECT * FROM ctmonhoc WHERE MaLop ='".$_GET['id']."'";
                    $result = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($result);
                    
               ?>
                <div class="md-form mt-3">
                    <input name='malop' type="text" class="form-control"  value="<?php echo $row['MaLop']?>">
                    <label >Mã lớp</label>
                </div>

                
                <div class="md-form">
                    <input name='mamh' type="text"  class="form-control"  value="<?php echo $row['MaMH']?>">
                    <label >Mã môn học</label>
                </div>
                <div class="md-form mt-3">
                    <input name='hk' type="text" class="form-control"  value="<?php echo $row['HK']?>">
                    <label >Học kì</label>
                </div>

                
                <div class="md-form">
                    <input name= 'namhoc' type="text"  class="form-control"  value="<?php echo $row['NamHoc']?>">
                    <label >Năm học</label>
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