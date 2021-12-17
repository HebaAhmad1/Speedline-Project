
<?php
$db = mysqli_connect('localhost', 'root', '', 'speedline_dp');
$results = mysqli_query($db, "SELECT * FROM agent"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> اضافو وكلاء</title>
    <link rel="stylesheet" href="Create.css" />
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
      href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
    />
    <!--  RTL Bootstrap Css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css"
    />
    <!-- Google Font -->
    <link
      rel="stylesheet"
      media="screen"
      href="https://fontlibrary.org/face/droid-arabic-kufi"
      type="text/css"
    />
    <!-- Style Theme -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />

    <!-- Responsive Theme -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../wwwroot/css/responsive.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../wwwroot/css/responsive-rtl.css"
    />
  </head>
  <body class="about">
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
                  <a href="../index.html">الرئيسية<span>-</span></a>
                </li>
                <li class="list-inline-item">
                  <a href="/Offers/index.html">العروض<span>-</span></a>
                </li>
                <li class="list-inline-item">
                  <a href="/Agents/index.html">الوكلاء<span>-</span></a>
                </li>
                <li class="list-inline-item">
                  <a href="/Contact/index.html"> تواصل معنا<span>-</span></a>
                </li>
                <li class="list-inline-item">
                  <a href="/About/index.html">من نحن<span>-</span></a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    style="color: white"
                    href="/Login/index.html"
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
    <div class="first-section">
      <div class="container">
        <div class="row">
          <div id="sync1" class="owl-carousel owl-theme">
            <div class="text">
              <h1> العروض</h1>
              <span class="d-flex align-items-center">
                <b class="a1" style="color: white"
                  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;أهلا وسهلا بكم</b
                >
                <b class="line">&nbsp;</b>
              </span>
            </div>
          </div>
          <div
            class="
              col-xl-6 col-lg-6 col-md-6 col-12
              animated
              bounceInRight
              position-relative
            "
          >
            <img src="../wwwroot/img/about-img-1.png" alt="about-img" />
          </div>
        </div>
      </div>
      <div class="cloud">&nbsp;</div>
      <div class="cloud-two">&nbsp;</div>
      <div class="mini-cloud"></div>
      <div class="mini-cloud two"></div>
      <div class="mini-cloud three"></div>
    </div>
    <h2 class="text-info" style="padding: 50px; margin-top: -150px">
       الوكلاء
    </h2>
    

    <table class="table table-striped border">
        <thead>
            <tr class="table-secondary">
                <th>AgentName</th>
                <th>discription</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['AgentName']; ?></td>
                <td><?php echo $row['discription']; ?></td>
                <td>
                    <a href="editA.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="deleteA.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    
    <form>
    





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