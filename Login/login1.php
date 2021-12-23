<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'speedline_dp');
$loginErr="";
$userErr = $passErr ="";
$user= "";
$pass = "";

if(isset($_POST['Login'])) {
    $user = htmlspecialchars($_POST['name']);
    $pass = htmlspecialchars($_POST['password']);
    
    if (empty($user)) {  
      $userErr = "username is required";  
     }
     else if(empty($pass)){
     $passErr = "password  is required";  
 }

    $sql = "SELECT * FROM users WHERE name = '$user' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
   
	if($user) {
		$_SESSION['Login'] = 1;
		header("Location: ../wwwroot/alaa.php");
	}else {
		$loginErr= "Username or Password Incorrect, Please try again";
	}
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="../wwwroot/css/Login.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />
    <meta
      name="keywords"
      content="Internet, Speed Line,سبيد لاين, اتصالات, خدمات الاترنت, انترنت"
    />
    <meta name="description" content="شركة سبيد لاين للاتصالات " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <!-- Framework Css -->
     <link
      rel="stylesheet"
      type="text/css"
      href="../wwwroot/css/Framework/bootstrap.min.css"
    />
    <!--  RTL Bootstrap Css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../wwwroot/css/rtl/bootstrap-rtl.min.css"
    />
    <!-- Google Font -->
    <link
      rel="stylesheet"
      href="https://fontlibrary.org/face/droid-arabic-kufi"
    />
    <!-- Style Theme -->
    <link
      rel="stylesheet"
      href="../wwwroot/css/fontawsam/all.css"
    
    />
    <!-- Responsive Theme -->
    <link rel="stylesheet" type="text/css" href="wwwroot/css/responsive.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../wwwroot/css/responsive-rtl.css"
    />
    <style>  
        .error{
          color: red;
          font-size: 20px;
        }  
        </style>  
  </head>
  <body>
    <header id="header"  >
        <div class="container" style="margin-right: 10px">
          <div
            class="align-items-center"
            style="padding: -10px; margin-right: -30px"
          >
            <div class="col-xl-3 col-lg-2 col-md-12" id="logo">
              <h3>Speedline</h3>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 text-right">
              <!--===================== Header Block ========================-->
    
              <div
                style="
                  margin-left: -300px;
                  margin-top: -5px;
                  padding-right: 40px;
                "
              >
              <ul class="nav-menu list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="../index.php">الرئيسية<span>-</span></a>
              </li>
              <li class="list-inline-item">
                <a href="../Offers/index.php">العروض<span>-</span></a>
              </li>
              <li class="list-inline-item">
                <a href="../Agents/index.php">الوكلاء<span>-</span></a>
              </li>
              <li class="list-inline-item">
                <a href="../Contact/index.php"> تواصل معنا<span>-</span></a>
              </li>
              <li class="list-inline-item">
                <a href="../About/index.php">من نحن<span>-</span></a>
              </li>
                <a
                  class="nav-link"
                  style="color: white"
                  href="../Login/login1.php"
                  ><i class="fas fa-user-plus"></i
                ></a>
              </li>
            </ul>
              </div>
    
              <!--===================== End of Header Block ========================-->
                </div>
              </div>
            </div>
          </header>
    <div class="login-page">
      <div class="container animatedParent">
        <div class="row">
          <div class="col-xl-12 animated growIn">
            <!--===================== Custom Form ========================-->
            <form action="" class="custom-form" id="account" method="post">
              <h4>تسجيل الدخول</h4>
              <div class="form-group">
                <label name="UserName">اسم المستخدم</label>
                <input name="name" class="form-control"  />
                <span class="error">* <?php echo $userErr; ?> </span>  
              </div>
              <div class="form-group last">
                <label name="">كلمة المرور</label>
                <input type="password" name="password" class="form-control" />
                <span class="error">* <?php echo $passErr; ?> </span>  
              </div>
              <div class="text-center">
                <button type="submit" class="see-brd-btn"  name="Login" value="Login" >تسجيل الدخول</button> <span class="error"> <?php echo $loginErr; ?> </span>
              </div>
            </form>
            <!--===================== End of Custom Form ========================-->
          </div>
        </div>
      </div>
     
    </div>
    <footer class="border-top footer text-muted">
        <div class="container">
          <div class="row footer-menu-wrap">
            <br />
            <br />
            <br />
            <br />
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
              <div class="logo l" style="margin-top: -20px">
                <h3>Speedline</h3>
                <p
                  style="
                    margin-top: -10px;
                    color: #3a3864;
                    font-size: 16px;
                    line-height: 28px;
                    font-weight: 400;
                  "
                >
                  تقدم شركة سبيد لاين للاتصالات خدمات مميزة ومتميزة للمصالح
                  التجارية والافراد والشركات حيث تعمل الشركة في بيع وتاجير خطوط
                  الهاتف الخلوي والارضي والانترنت البيتي ولجميع المناطق .
                </p>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
              <div class="inside">
                <h4 class="title">الشركة</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="/index.html">الرئيسية</a>
                  </li>
                  <li>
                    <a href="/About/index.html">من نحن؟</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
              <div class="inside">
                <h4 class="title">الدعم</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="/Contact/index.html">تواصل معنا</a>
                  </li>
                </ul>
                <br />
                <div>
                  <div>
                    <a href="https://www.facebook.com/">
                      <i class="fab fa-facebook"></i> </a
                    >&nbsp;
                    <a href="https://www.instagram.com/">
                      <i class="fab fa-instagram"></i> </a
                    >&nbsp;
                    <a href="https://www.twitter.com/">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-6 col-12">
              <h4 class="title">تواصل معنا</h4>
              <ul class="list-unstyled">
                <li>
                  <p>
                    <i class="fas fa-envelope" style="color: black"></i>
                    &nbsp;<a href="mailto:info@speedline.co">info@speedline.co</a>
                  </p>
                </li>
                <li dir="ltr">
                  <a href="tel:0795599807">0795599807</a>&nbsp;&nbsp;<i
                    class="fas fa-phone-square"
                    style="color: black"
                  ></i>
                </li>
                <li>من جميع أنحاء العالم:</li>
  
                <li dir="ltr">
                  <a href="tel:+44 765 867 87">+44 765 867 87</a>&nbsp;&nbsp;<i
                    class="fas fa-phone-square"
                    style="color: black"
                  ></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    <script>
        window.onscroll = function () {
          scrollFunction();
        };
  
        function scrollFunction() {
          if (
            document.body.scrollTop > 50 ||
            document.documentElement.scrollTop > 50
          ) {
            document.getElementById("header").style.background = "#0030ff";
            document.getElementById("header").style.background =
              "linear-gradient(to bottom, #0030ff 0%, #006dff 100%)";
            document
              .getElementById("header")
              .getElementsByClassName("nav-menu").style.padding = "43px 21px";
          } else {
            document.getElementById("header").style =
              "right: 0, width: 100%,z-index: 999,position: fixed,transition: 0.2s linear";
          }
        }
      </script>
  </body>
</html>