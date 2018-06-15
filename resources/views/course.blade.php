<!DOCTYPE html>
<html>
<title>GDG Mekong</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.theme.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  .footer{
  padding: 5px;
  color: white;
  background-color: #1c1c1c;
  clear: both;
  text-align: center;
  font-size: 15px;
  opacity: 0.5;
}
.container-fluid {
      padding: 40px 20px;
}
.panel-heading {
      color: #fff !important;
      background-color: #ff3030 !important;
      padding: 10px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
#header{
  background-image: url('image/bc1.jpg');
  height: 400px;
  width: 1500px;
  background-size: cover;
  background-repeat: no-repeat;
  color: #ffffff;
  font-size: 17px;
  z-index: 20;

}
a{
  margin-top: 4px; margin-right: 10px
}
a:hover{
  text-decoration: none;
  border-color: #1c1c1c;
  border-radius: 30px;
}
a:focus{
  text-decoration: none;
}
#in{
  background-image: url('image/bc1.jpg');
  z-index: 9;
}

</style>
<body>
<div id="header" class="w3-center">
  <nav class="navbar navbar-default navbar-fixed-top" id="in">
<!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">GDG Mekong</a>
-->
  <div class="w3-bar " style="bottom:-16px; padding: 5px;" >
    <a href="index.php" class="w3-bar-item w3-btn" >Giới thiệu </a>
    <a href="khoahoc.php" class="w3-bar-item w3-btn">Khóa học</a>
    <a href="qlsk.php" class="w3-bar-item w3-btn" >Sự kiện</a>
    <a href="thanhvien.php" class="w3-bar-item w3-btn " >Thành viên</a>
    <a href="#" class="w3-bar-item w3-btn " >Liên hệ</a>
    <a href="#" class="w3-bar-item w3-btn " >Đăng nhập</a>
    <form class="w3-bar-item" style="width: 400px; margin-left: 50px;" >
    <div class="input-group">
      <input type="text" class="form-control" size="50" placeholder="Nhập sự tên sự kiện" required >
      <div class="input-group-btn">
        <button type="button" class="btn w3-hover-light-grey" style="background-color: #ff3030;">Tìm kiếm</button>
      </div>
    </div>
  </form>
  </div>
  </nav>
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">GDG Mekong</h1>
    <h5 class="w3-hide-large" style="white-space:nowrap">......</h5>
    <h3 class="w3-hide-medium w3-hide-small">AT Group Office CT</h3>
  </div>
  </div>

<!-- Page content -->
  <div id="pricing" class="container-fluid">
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Khóa học C# từ GDG MEKONG</h4>
        </div>
        <div class="panel-body">
          <p>Học C# từ thầy Nguyễn Văn A</p>
<p>Học phí khóa học: 200.000 đồng</P>
<p>Thời gian học: 60 ngày</p> 
<p>Giáo viên: Nguyễn Văn A</p>
          <img src="img/b.png" alt="" style = "height: 200px; width: 200px;">

        </div>
        <div class="panel-footer">
          <h4>29-4-2018</h4>
          <button class="btn btn-lg" style="background-color: #ff3030; color: #ffffff" onclick="document.getElementById('chitiet').style.display='block'">Xem chi tiết</button>
        </div>
      </div>      
    </div> 
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Khóa học HTML từ GDG MEKONG</h4>
        </div>
        <div class="panel-body">
		<p>Học HTML từ thầy Nguyễn Văn B</p>
          <p>Học phí khóa học: 400.000 đồng</P>
<p>Thời gian học: 90 ngày</p> 
<p>Giáo viên: Nguyễn Văn B</p>
          <img src="img/c.png" alt="" style = "height: 200px; width: 200px;">

        </div>
        <div class="panel-footer">
          <h4>30-06-2018</h4>
          <button class="btn btn-lg" style="background-color: #ff3030; color: #ffffff" onclick="document.getElementById('chitiet').style.display='block'">Xem chi tiết</button>
        </div>
      </div>      
    </div> 
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Khóa học JQUERY từ GDG MEKONG</h4>
        </div>
        <div class="panel-body">
          <p>Học HTML từ thầy Nguyễn Văn C</p>
          <p>Học phí khóa học: 600.000 đồng</P>
<p>Thời gian học: 120 ngày</p> 
<p>Giáo viên: Nguyễn Văn C</p>
          <img src="img/d.png" alt="" style = "height: 200px; width: 200px;">

        </div>
        <div class="panel-footer">
          <h4>13-05-2018</h4>
          <button class="btn btn-lg" style="background-color: #ff3030; color: #ffffff" onclick="document.getElementById('chitiet').style.display='block'">Xem chi tiết</button>
        </div>
      </div>      
    </div>         
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Khóa học PHP từ GDG MEKONG</h4>
        </div>
        <div class="panel-body">
          <p>Học HTML từ thầy Nguyễn Văn D</p>
          <p>Học phí khóa học: 800.000 đồng</P>
<p>Thời gian học: 150 ngày</p> 
<p>Giáo viên: Nguyễn Văn D</p>
         <img src="img/7.jpg" alt="" style = "height: 200px; width: 200px;">

        </div>
        <div class="panel-footer">
          <h4>10-04-2018</h4>
          <button class="btn btn-lg" style="background-color: #ff3030; color: #ffffff" onclick="document.getElementById('chitiet').style.display='block'">Xem chi tiết</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Khóa học JavaScript từ GDG MEKONG</h4>
        </div>
        <div class="panel-body">
         <p>Học HTML từ thầy Nguyễn Văn E</p>
          <p>Học phí khóa học: 1.000.000 đồng</P>
<p>Thời gian học: 150 ngày</p> 
<p>Giáo viên: Nguyễn Văn E</p>
      <img src="img/8.jpg" alt="" style = "height: 200px; width: 200px;">
        </div>
        <div class="panel-footer">
          <h4>29-01-2018</h4>
          <button class="btn btn-lg" style="background-color: #ff3030; color: #ffffff" onclick="document.getElementById('chitiet').style.display='block'">Xem chi tiết</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
<div id="chitiet" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('chitiet').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h1 class="w3-center w3-margin w3-light-grey w3-padding">Chi tiết sự kiện</h1> <br>
     <p class="w3-center">...............................................................................</p>
    <div class="text-center">
    <button type="submit" class="w3-button  " style="background-color: #f4511e;">Tham gia</button>
    <button type="submit" class="w3-button  " style=";background-color: #f4511e;">Đánh giá</button>
  </div>
  </div>
</div>
</div>

  <!-- Contact -->
  <div class="footer" id="footer">
    <p>
      Địa chỉ: c15 khu dân cư Trần Khánh Dư, phường Xuân Khánh, quận Ninh Kiều, thành phố Cần Thơ.<br />
      Email: tutrinh@gmail.com <br />
      SĐT: 07103840483  <br />
      Facebook: <a href="https://www.facebook.com/trinhtu.052897">Trinh Bibooo</a>
    </p>
    <footer>CHỈ CÓ THỂ LÀ TÚ TRINH QUÁ TÀO LAO</footer>
  </div>
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

<!-- End page content -->

</body>
</html>