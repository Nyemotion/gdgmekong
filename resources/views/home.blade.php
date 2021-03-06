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
    <a href="trangchu.blade.php" class="w3-bar-item w3-btn" >Giới thiệu </a>
    <a href="course.blade.php" class="w3-bar-item w3-btn">Khóa học</a>
    <a href="event.blade.php" class="w3-bar-item w3-btn" >Sự kiện</a>
    <a href="member.blade.php" class="w3-bar-item w3-btn " >Thành viên</a>
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
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-lg-3">
          <h3 style ="color :#f4511e" class="my-4">Câu lạc bộ</h3>
          <div class="list-group">
            <a href="#" class="list-group-item">Giới thiệu sơ lược</a>
            <a href="#" class="list-group-item">Sự kiện mới</a>
            <a href="#" class="list-group-item">Sự kiện đã diễn ra</a>
            
          </div>
        </div>
    <div class="col-sm-8 w3-center">
      <h3 style ="color: #f4511e;">Giới thiệu về GDG Mekong</h3>
      <img src="image/slide3.jpg" alt ="image" width="300" height ="200"/>
      <br>
      <small class="text-muted">Organized by GDG Mekong</small>
      <h5> GDG Mekong (Google Developer Group Mekong) – Cộng đồng lập trình viên Google tại Đồng bằng Sông Cửu Long)
      
      <h5>Nhóm nhà phát triển Google (GDG) Mekong tổ chức các sự kiện tương tác như hack-a-thon, codelab, devfest.Các sự kiện của chúng tôi (trực tuyến hoặc ngoại tuyến) sẽ luôn miễn phí và mở cửa cho công chúng. Chúng tôi không chỉ tập trung vào các nhà phát triển nói chung mà còn cho các thành viên khác trong cộng đồng như học sinh trung học, trẻ em, các nhà phát triển nữ. Chúng tôi mong muốn cung cấp cơ hội công bằng cho mọi người trong cộng đồng để tiếp cận công nghệ mới, hòa nhập và vui chơi.</h5>
      <div>
      <h3 style ="color: #f4511e;">Sự kiện mới </h3>
      <h5> Sự kiện I/O GDG Mekong</h5>
      <img src ="image/5.png" alt = "image" width="300" height ="200" />
      <br>
      <small class="text-muted">Organized by GDG Mekong</small>
      <p> Sự kiện dành cho sinh viên học sinh</p>
      </div>
      <div>
      <h3 style ="color: #f4511e;">Sự kiện đã diễn ra </h3>
      <h5> Hướng dẫn dựng video chủ đề "kỷ niệm tuổi học trò" Trường THPT Hồ Thị Nhâm </h5>
      <img src="image/6.jpg" alt="image" width="300" height ="200" />
      <br>
      <small class ="text-muted">Organized by GDG Mekong</small>
      </div>
      
    <div>
       <h5> Sự kiện hướng dẫn quay dựng - sản xuất phim THPT Nguyễn Văn Hai</h5>
       
       <img src ="image/6.jpg" alt ="image" width ="300" height ="200"/>
      </div>
       <div
       <small class ="text-muted"> Sunday, May 27,2018 ,7:00 PM </small>
       <h5> MSite Women Techmakers - High School Nguyễn Văn Hai </h5>
       <img src ="image/2.jpg" alt="image" width="300" height ="200" />
       <br>
       <small class="text-muted">Hosted by GDG Mekong</small>
     </div>
    </div>
  </div>
      <!--<p style ="color:#f4511e;"> Số lượng thành viên hiện tại:15089</p>
      <p style ="color:#f4511e;"> Số lượng thành viên đang cập nhật:5476</p>-->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-lg-3">
          <h3 style ="color:#f4511e"; class="my-4">Thống kê</h3>
          <div class="list-group">
            <a href="#" class="list-group-item">Số lượng thành viên hiện tại:14758</a>
            <a href="#" class="list-group-item">Số lượng thành viên đang cập nhật:2345</a>
          </div>
    </div>
  </div>
</div>
 <!-- Contact -->
  <div class="footer" id="footer">
    <p>
      Địa chỉ: Số 7 Hoàng Văn Thụ Ninh Kiều Cần Thơ.<br />
      Email: tt@gmail.com <br />
      SĐT: 07103840483  <br />
      Face: <a href="//www.facebook.com/atgroupct">Pig Bull</a>
    </p>
    <footer>Powered by AT Group</footer>
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
