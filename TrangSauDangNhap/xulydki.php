<?php
//sử dụng PDO
$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$passh= password_hash($pass,PASSWORD_DEFAULT);
if($_POST){
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    // posted email must not be empty
    if(empty($email)){
        echo "<div>Email cannot be empty.</div>";
    }
    // must be a valid email address
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<div>Your email address is not valid.</div>";
    }
    else
    {
        $connect = mysqli_connect('localhost', 'root', '', 'baitaplon_congngheweb');

        // Check connection
        if(!$connect){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else
            {
                //Kiem tra ban ghi ton tai
            $query = "SELECT UserName FROM account WHERE Email = ? and verified = '1'"; //? thay the gia tri
            $stmt = $connect->prepare( $query );
            $stmt->bindParam('1', $email); //chen gia tri vao ? thu 1
            $stmt->execute(); //run
            $num = $stmt->rowCount(); //so hang
    
            if($num>0){
                echo "<div>Tai khoan cua ban da duoc kich hoat</div>";
            }
            else
            {
                // kiểm tra trước nếu có email chưa được xác minh liên quan
                $query = "SELECT UserName FROM account WHERE Email = ? and verified = '0'";
                $stmt = $connect->prepare( $query );
                $stmt->bindParam(1, $email);
                $stmt->execute();
                $num = $stmt->rowCount();
    
                if($num>0){
    
                    // bạn phải tạo một kịch bản xác minh gửi lại
                    echo "<div>Email của bạn đã có trong hệ thống nhưng chưa được xác minh. <a href='taotaikhoan.html'>Quay Lại.</a></div>";
                }
                //bay gio se xac minh
                else
                {
                    $verificationCode = md5(uniqid("TRINHTU165", true));// Tạo mã xác minh
                    // send the email verification
                    $verificationLink = "http://http://localhost/BaiTapLon_175A071209_175A071490/TrangSauDangNhap/register.php?code=" . $verificationCode;// noi dung mail
                    $to = "$email";
                    $subject = "Send Email from Localhost";
                    $txt = "Vui Lòng Click vào link để xác nhận :" .$verificationLink;
                    $headers = "From: duonghanu789@gmail.com";
                    $test = mail($to,$subject,$txt,$headers);
                    if($test){
                        echo "<div>MỘt mã đã Gửi về email :<b>" . $email . "</b>,. Bạn hãy mở hộp thư lên và click vào link để kích hoạt tài khoản.</div>";
                        $query = "INSERT INTO 
                                    account
                                SET 
                                    Email = ?, 
                                    verification_code = ?, 
                                    verified = '0',
                                    UserName =?,
                                    PassWord = ?";
    
                        $stmt = $con->prepare($query);
    
                        $stmt->bindParam(1, $email);
                        $stmt->bindParam(2, $verificationCode);
                        $stmt->bindParam(3, $user);
                        $stmt->bindParam(4, $passh);
    
                        // Execute the query
                        if($stmt->execute()){
                            //echo "<div>Unverified email was saved to the database.</div>";
                        }else{
                            echo "<div>Email đã tồn tại. <a href='taotaikhoan.html'>Quay Lại.</a></div>";
                            //print_r($stmt->errorInfo());
                        }
                        
                    }
                    else
                    {
                        echo "email loi";
                    }
                
                }
            }
            
        }
}
}
?>