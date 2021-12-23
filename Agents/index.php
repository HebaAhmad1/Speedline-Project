<?php
$db = mysqli_connect('localhost', 'root', '', 'speedline_dp');
 $results = mysqli_query($db, "SELECT * FROM agent"); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الوكلاء</title>
    <link rel="stylesheet" href="../wwwroot/css/Agents.css">
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
</head>




<body>
  <body  dir="rtl">
    <header id="header">
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
              style="margin-left: -300px; margin-top: -5px; padding-right: 40px"
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
    <div class="first-section" style="background: url(../wwwroot/css/img/first-section-bg.png) ;" >
        <div class="text" >
            <h1 class="h1Style">الوكلاء</h1>
            <span >
         تعرف على الوكلاء المرتبطين بشركتنا 
            </span>
        </div>
    <div class="photo">
        <img src="../wwwroot/css/img/about-img-1.png" alt="about-img">
    </div>
</div>
<div class="price-plan-block" style="background: url('../wwwroot/css/img/background-price-block.png') no-repeat center;">
<div class="container">

<div class="row ">
  <div class="row ">
    <?php while ($row = mysqli_fetch_array($results)) { ?>
      <div class="col-xl-3  aa">
        <div class="price-plan-item-inside">
            <p class="price-plan-text-1"><?php echo $row['AgentName']; ?></p>
            <h3><?php echo $row['discription']; ?></h3>
            </div>
        </div>
      <?php } ?>
  </div>  
        </div> 
        </div>       
</div>
<footer class="border-top footer text-muted" id="footerStyle" style="background-image: url(../wwwroot/css/img/bg-footer.png);">
    <div class="container">
      <div class="row footer-menu-wrap">
        <br />
        <br />
        <br />
        <br />
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
          <div class="logo l" style="margin-top: -20px">
            <h3>Speedline</h3>
            <p style="margin-top: -10px;   color: #3a3864;
            font-size: 16px;
            line-height: 28px;
            font-weight: 400;">
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
                <a href="../index.php">الرئيسية</a>
              </li>
              <li>
                <a href="../About/index.php">من نحن؟</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
          <div class="inside">
            <h4 class="title">الدعم</h4>
            <ul class="list-unstyled">
              <li>
                <a href="../Contact/index.php">تواصل معنا</a>
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
                &nbsp;<a href="mailto:info@speedline.co"
                  >info@speedline.co</a
                >
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