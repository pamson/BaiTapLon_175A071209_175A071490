<?php 
	
	$sql = "SELECT * from sinhvien WHERE MaSV = '". $_SESSION['username']."'";
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
								<li><?php echo $row['MaSV'];?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>Name </b></li>
								<li><?php echo $row['TenSV'];?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>Class code </b></li>
								<li><?php echo $row['MaLop'];?></li>
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
								<li><b>Role </b></li>
								<li><?php echo $_SESSION['lv']; ?> </li>
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
								<li> <?php echo $row['DiaChi'];?></li>
							</ul>
						</li>
						
					</ul>
                </div>
                     </div>
                </div>