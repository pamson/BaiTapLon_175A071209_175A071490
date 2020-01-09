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
    <?php include ("HoSoADMIN.php")?>
    
        <div class="card" id="ADD" style="display:block;">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong style="color:white;">Hello!</strong>
        </h5>

        
        <div class="card-body px-lg-5">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" method="POST" action="../TrangSauDangNhap/xulyupdateRoleQTAccount.php?id=<?php echo $_GET['id']?>" >

               <?php 
                    $sql = "SELECT * FROM account WHERE UserName ='".$_GET['id']."'";
                    $result = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($result);
                    $username=$row['UserName'];
                    $password=$row['PassWord'];
                    $ConfirmPassword=$row['ConfirmPassword'];                  
                    $name=$row['Name'];
                    $sex=$row['Sex'];
                    $role=$row['Role'];
                    $email=$row['Email'];
                    $address=$row['Address'];
                    
               ?>
                <div class="md-form mt-3">
                    <input name='username' type="text" class="form-control" value="<?php echo $username?>">
                    <label >UserName</label>
                </div>

                
                <div class="md-form">
                    <input name='password' type="text"  class="form-control" value="<?php echo $password?>">
                    <label >Password</label>
                </div>
                <div class="md-form mt-3">
                    <input name='confirmpassword' type="text" class="form-control" value="<?php echo $ConfirmPassword?>">
                    <label >Confirm Password</label>
                </div>

                
                
                <div class="md-form mt-3">
                    <input name='name' type="text" class="form-control" value="<?php echo $name?>">
                    <label >Name</label>
                </div>

                
                <div class="md-form">
                    <input name='sex' type="text"  class="form-control" value="<?php echo $sex?>">
                    <label >Sex</label>
                </div>
                <div class="md-form mt-3">
                    <input name='role' type="text" class="form-control" value="<?php echo $role?>">
                    <label >Role</label>
                </div>

                
                <div class="md-form">
                    <input name='email' type="text"  class="form-control" value="<?php echo $email?>">
                    <label >Email</label>
                </div>
                <div class="md-form">
                    <input name='address' type="text"  class="form-control" value="<?php echo $address?>">
                    <label >Address</label>
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