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

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <header>
    <div class="top-bar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 search-w" >
            <div class="logo text-left">
              <a href="#"><img src="img/logo.jpg.png" alt="logo"></a>
            </div>
          </div>
          <div class="col-md-4" >
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Tìm kiếm truyện...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                  </span>
                </div><!-- Tìm kiếm-->
          </div>
          <div class="col-md-4" >
            <div class="dang-nhap">
              <form>
                 <input  type="button"  value='Đăng nhập' onclick="location.href='dangnhap.php'" />
                 <input  type="button" value= 'Đăng ký' onclick="location.href='dangky.php'" />
              </form>
            </div>  
          </div>
        </div>
      </div>
    </div><!--ket thuc top-bar-->
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="10">
    <div class="menu">
      <div class="container">
        <div class="row">
          <ul class="nav nav-pills">
            <li class="active">
              <a href="index.php"><i class="glyphicon glyphicon-home"></i>  Trang chủ</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thể loại <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <div>
                   <table class="table">
                       <tr>
                            <td><li><a href="#">Anime</a></li></td>
                            <td><li><a href="#">Chuyển Sinh</a></li></td>
                            <td><li><a href="#">Cooking</a></li></td>
                            <td><li><a href="#">Cổ đại</a></li></td>
                            <td><li><a href="#">Drama</a></li></td>
                            <td><li><a href="#">Ecchi</a></li></td>
                            <td><li><a href="#">Historical</a></li></td>
                            <td><li><a href="#">Horror</a></li></td>
                       </tr>
                       <tr>
                            <td><li><a href="#">Josei</a></li></td>
                            <td><li><a href="#">Manhua</a></li></td>
                            <td><li><a href="#">Ngôn tình</a></li></td>
                            <td><li><a href="#">Tạp chí truyện tranh</a></li></td>
                            <td><li><a href="#">Xuyên không</a></li></td>
                            <td><li><a href="#">Thiếu nhi</a></li></td>
                            <td><li><a href="#">Tragedy</a></li></td>
                            <td><li><a href="#">Trinh thám</a></li></td>
                       </tr>
                       <tr>
                            <td><li><a href="#">Sports</a></li></td>
                            <td><li><a href="#">Webtoon</a></li></td>
                            <td><li><a href="#">Shoujo</a></li></td>
                            <td><li><a href="#">Smut</a></li></td>
                            <td><li><a href="#">Truyện scan</a></li></td>
                            <td><li><a href="#">Tryện màu</a></li></td>
                            <td><li><a href="#">Việt Nam</a></li></td>
                            <td><li><a href="#">Advanture</a></li></td>
                        </tr>
                        <tr>
                            <td><li><a href="#">Comedy</a></li></td>
                            <td><li><a href="#">Comic</a></li></td>
                            <td><li><a href="#">Romance</a></li></td>

                       </tr>
                   </table>
                </div>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sắp xếp<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Top tuần</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Top ngày</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Top tháng</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Mới đăng</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Yêu thích</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
          </ul> 
        </div>
      </div>
    </div><!--ket thuc menu-->
  </header>
  
</body>
</html>