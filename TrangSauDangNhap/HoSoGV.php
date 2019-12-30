<?php 
	include ("../connect.php");
	$sql = "SELECT * from giangvien WHERE MaGV = '". $_SESSION['username']."'";
	$result = mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_assoc($result);
		
	}
?>
				<div class="col-sm-7 " id = "information">
                    <div class="banner-info">
                    <div class=" header-right">
					<h1>Hi !</h1>
					<h6><?php echo $_SESSION['name'];?></h6>
					<ul class="address">
					
					<li>
							<ul class="address-text">
								<li><b>ID </b></li>
								<li><?php echo $row['MaGV'];?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>Name </b></li>
								<li><?php echo $row['TenGV'];?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>Rank </b></li>
								<li><?php echo $row['CapBac'];?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>Sex </b></li>
								<li><?php echo $row['GioiTinh'];?></li>
							</ul>
                        </li>
                        <li>
							<ul class="address-text">
								<li><b>Phone number </b></li>
								<li><?php echo $row['SĐT'];?> </li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>Email </b></li>
								<li><?php echo $row['Email'];?> </li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>Address </b></li>
								<li><?php echo $row['DiaChi'];?> </li>
							</ul>
						</li>
						
					</ul>
                </div>
                     </div>
                </div>