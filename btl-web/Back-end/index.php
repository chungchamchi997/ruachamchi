<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>beetruyen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div>
      <style>
        text-align: center;
      </style>
    <h1> wellcome to Admin web</h1>
    
    </div>
<form method="POST" action="index.php">
    <fieldset>
        <legend>Đăng nhập</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" size="30"></td><br>
                </tr>
                
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" size="30"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
                </tr>
            </table>
    </fieldset>
</form>
    <?php 
//conect csld
$link = new mysqli('localhost', 'root', '' ,'btl-web') or die("Không thể kết nối CSDL");
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
    // lấy thông tin người dùng
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    

    if ($username == "" || $password =="") {
        echo "Username hoặc password bạn không được để trống!";
    }else{
        $sql = "select * from adminuser where username = '$username' and password = '$password' ";
        $query = mysqli_query($link,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo "Tên đăng nhập hoặc mật khẩu không đúng !";
        }else
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là giaodienchinh.php
            header('Location: noidung/index.php');
        
    }
}
?>

</body>
</html>