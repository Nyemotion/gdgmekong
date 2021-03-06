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
    <a href="index.php" class="w3-bar-item w3-btn" >Sự kiện</a>
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

<div class="jumbotron ">
              
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="container-fluid text-center bg-grey" id="tn">
      
 
          <div class="row">
    <div class="col-sm-12">

      <h4 style ="color: #1c1c1c;">Giới thiệu chung </h4>
      <h5 style ="color: #1c1c1c;">Tổng số thành viên: 1081 thành viên </h5>
      <h5 style ="color: #1c1c1c;">Những sự kiện sắp tới</h5>
       <img src="images/templatemo_image_01.jpg" alt="image" />
       <p style="color: #1c1c1c"> giao lưu học hỏi</p>
    </div>
  </div>
</div>  
<div class="col-sm-8">
  <h2 style ="color: #1c1c1c;">Tất cả thành viên</h2>
    <div class="col-sm-4">
      <img src="images/templatemo_image_02.jpg" alt="image" />
    </div>
    <div class="col-sm-5">
      <h5 style ="color: #1c1c1c;"> Võ Thị My
      <br> Thành viên từ ngày 12/04/2018
      <br> Email:myvo@gmail.com
      </h5>
    </div>
    <br>
      <div class="text-align = margin-left">
        <br>
    <button type="submit" class="w3-button  " style="background-color: #f4511e;">Tham gia</button>
    <button type="submit" class="w3-button  " style=";background-color: #f4511e;">Đánh giá</button>
  </div>
     <!-- <button class="btn btn-lg" style="background-color: #ff3030; color: #ffffff margin-left:50px;" onclick="document.getElementById('chitiet').style.display='block'">Đánh giá</button>-->
        
        <div id="chitiet" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('chitiet').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h1 class="w3-center w3-margin w3-light-grey w3-padding">Đánh giá</h1> <br>
     <p class="w3-center">...............................................................................</p>
   
  </div>
</div>
</div>
      </div>      
    </div>    
  </div>
</div>
</div>

<div class="col-sm-4">
  <h3 style ="color: #1c1c1c;">Ban quản trị </h3>
    <div class="col-sm-4">
      <img src="images/templatemo_image_03.jpg" alt="image" />
    </div>
    <div class="col-sm-8">
      <h5 style ="color: #1c1c1c;"> Võ Thị Hương
    <br> Thành viên từ ngày 13/04/2018
    <br> Email:huongvo@gmail.com
    </h5>
    </div>
  </div>
  <!-- Contact -->
  <div class="footer" id="footer">
    <p>
      Địa chỉ: c15 khu dân cư Trần Khánh Dư, phường Xuân Khánh, quận Ninh Kiều, thành phố Cần Thơ.<br />
      Email: tutrinh@gmail.com <br />
      SĐT: 07103840483  <br />
      Face: <a href="https://www.facebook.com/trinhtu.052897">Trinh Bibooo</a>
    </p>
    <footer>CHỈ CÓ THỂ LÀ TÚ TRINH</footer>
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