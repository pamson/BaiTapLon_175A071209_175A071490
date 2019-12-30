<?php 
	include ("../connect.php");
	$sql = "SELECT * from account WHERE UserName = '". $_SESSION['username']."'";
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
								<li><b>Name </b></li>
								<li><?php echo $row['Name'];?></li>
							</ul>
						</li>
						
						<li>
							<ul class="address-text">
								<li><b>Sex </b></li>
								<li><?php echo $row['Sex'];?></li>
							</ul>
                        </li>
                        <li>
							<ul class="address-text">
								<li><b>Role </b></li>
								<li> <?php echo $row['Role'];?></li>
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
								<li><?php echo $row['Address'];?> </li>
							</ul>
						</li>
						
					</ul>
                </div>
                     </div>
                </div>