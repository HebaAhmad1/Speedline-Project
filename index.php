<?php
$db = mysqli_connect('localhost', 'root', '', 'speedline_dp');
 $results = mysqli_query($db, "SELECT * FROM info ORDER BY id DESC LIMIT 10"); 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>شركة سبيد لاين لخدمات الاتصالات</title>
    <link
      rel="stylesheet"
      href="./wwwroot/css/lib/all.css"
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
      href="./wwwroot/css/Framework/bootstrap.min.css"
    />
    <!--  RTL Bootstrap Css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./wwwroot/css/rtl/bootstrap-rtl.min.css"
    />
    <!-- Google Font -->
    <link
      rel="stylesheet"
      href="https://fontlibrary.org/face/droid-arabic-kufi"
    />
    <!-- Style Theme -->
    <link
      rel="stylesheet"
      href="./wwwroot/css/fontawsam/all.css"
    
    />

    <!-- Responsive Theme -->
    <link rel="stylesheet" type="text/css" href="wwwroot/css/responsive.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="wwwroot/css/responsive-rtl.css"
    />
    <link rel="stylesheet" type="text/css" href="../Speedline-Project/wwwroot/css/home.css" />
  </head>
  <body dir="rtl">
    <div>
      <!--===================== Header ========================-->
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
                style="
                  margin-left: -300px;
                  margin-top: -5px;
                  padding-right: 40px;
                "
              >
              <ul class="nav-menu list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="/index.php">الرئيسية<span>-</span></a>
                </li>
                <li class="list-inline-item">
                  <a href="./Offers/index.php">العروض<span>-</span></a>
                </li>
                <li class="list-inline-item">
                  <a href="./Agents/index.php">الوكلاء<span>-</span></a>
                </li>
                <li class="list-inline-item">
                  <a href="./Contact/index.php"> تواصل معنا<span>-</span></a>
                </li>
                <li class="list-inline-item">
                  <a href="./About/index.php">من نحن<span>-</span></a>
                </li>
                  <a
                    class="nav-link"
                    style="color: white"
                    href="../Speedline-Project/Login/login1.php"
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
      <div dir="rtl">
        <!--===================== Slider ========================-->
        <div class="courusel-container">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div
                  id="sync1"
                  class="owl-carousel owl-theme"
                  onclick="carousel()"
                >
                  <div class="item1">
                    <div class="inside">
                      <h1>التغطية فل والسرعة بتكفي الكل، تمتع بخصم 25%</h1>
                      <a
                        href="https://www.textvoice.co.il/"
                        class="blue-brd-btn"
                        >المزيد</a
                      >
                    </div>
                  </div>
                  <div class="item1">
                    <div class="inside">
                      <h1>يوتيوب مجاني لمدة ثلاث أشهر مع باقات كويك نت</h1>
                      <a
                        href="https://www.textvoice.co.il/"
                        class="blue-brd-btn"
                        >المزيد</a
                      >
                    </div>
                  </div>
                  <div class="item1">
                    <div class="inside">
                      <h1>
                        اشترك أو جدد باقات كويك نت و عندك فرصه تكسب بلايستيشن 5
                      </h1>
                      <a
                        href="https://www.textvoice.co.il/"
                        class="blue-brd-btn"
                        >المزيد</a
                      >
                    </div>
                  </div>
                </div>
                <div class="main-slider-logo-block owl-carousel owl-theme">
                  <div class="item">
                    <img src="wwwroot/img/slider-logo-1.jpg" alt="images" />
                  </div>
                  <div class="item">
                    <img src="wwwroot/img/slider-logo-2.jpg" alt="images" />
                  </div>
                  <div class="item">
                    <img src="wwwroot/img/slider-logo-3.jpg" alt="images" />
                  </div>
                  <div class="item">
                    <img src="wwwroot/img/slider-logo-4.jpg" alt="images" />
                  </div>
                  <div class="item">
                    <img src="wwwroot/img/slider-logo-5.jpg" alt="images" />
                  </div>
                  <div class="item">
                    <img src="wwwroot/img/slider-logo-6.jpg" alt="images" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--===================== End of Slider ========================-->
      <!--===================== Reasons Block ========================-->
      <div class="container animatedParent">
        <div class="row reasons-block">
          <h2
            class="h2-main"
            style="padding: 5px; text-align: center; margin-top: 60px"
          >
            أهلا وسهلا بكم في شركة
            <br />
            سبيد لاين للاتصالات
          </h2>

          <div class="ra">
            <div class="row">
              <!--===================== Reason Block Cont ========================-->
              <div class="reason-block-cont">
                <div class="reasons-icon-div">
                  <img src="wwwroot/img/reason-icon1.svg" alt="images" />
                </div>
                <div class="reasons-desc-div">
                  <h4>بيع وتأجير سيرفرات الاستضافة المحمية</h4>
                  <p>والتي تعمل بجودة عالية دون انقطاع</p>
                </div>

                <!--===================== End of Reason Block Cont ========================-->
              </div>
              <div class="">
                <!--===================== Reason Block Cont ========================-->
                <div class="reason-block-cont">
                  <div class="reasons-icon-div">
                    <img src="wwwroot/img/reason-icon2.svg" alt="images" />
                  </div>
                  <div class="reasons-desc-div">
                    <h4>تزويد خدمة المقسم الهاتفي</h4>
                    <p>
                      وغرف الدردشة الجماعية وخدمة<br />
                      اظهار الرقم المخفي
                    </p>
                  </div>
                </div>
                <!--===================== End of Reason Block Cont ========================-->
              </div>
            </div>
            <div class="row">
              <div class="">
                <!--===================== Reason Block Cont ========================-->
                <div class="reason-block-cont">
                  <div class="reasons-icon-div">
                    <img src="wwwroot/img/reason-icon3.svg" alt="images" />
                  </div>
                  <div class="reasons-desc-div">
                    <h4>
                      تزويد المؤسسات والشركات بأرقام ارضية وخلويه وبمقدمات
                      مختلفة
                    </h4>
                    <p>تعمل على منظومة السنترال الهاتفي وفي جميع البلدان</p>
                  </div>
                </div>
                <!--===================== End of Reason Block Cont ========================-->
              </div>
              <div class="">
                <!--===================== Reason Block Cont ========================-->
                <div class="reason-block-cont">
                  <div class="reasons-icon-div">
                    <img src="wwwroot/img/reason-icon4.svg" alt="images" />
                  </div>
                  <div class="reasons-desc-div">
                    <h4>خدمة فاكسك في تلفونك ( fax to mail)</h4>
                    <p>
                      والتي تمكنكم من الارسال والاستقبال الفاكس في كل مكان وزمان
                      دون الحاجه الى جهاز فاكس
                    </p>
                  </div>
                </div>
                <!--===================== End of Reason Block Cont ========================-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--===================== End of Reasons Block ========================-->
      <!--===================== philosophy Block ========================-->
      <div class="philosophy-block">
        <div class="container-fluid">
          <div class="row animatedParent">
            <div class="col-md-6 philosophy-div1"></div>
            <div class="col-md-6 philosophy-div2">
              <h4>احنا مين؟</h4>

              <h2 class="h2-main">شركة سبيد لاين للاتصالات</h2>

              <p>
                وكيل رسمي ومعتمد لجميع الشركات ( سلكوم – بارتنر- بلفون – هوت
                موبايل – جولان تلكوم – وي فور جي – رامي ليفي )
              </p>
              <p>
                تأسس شركة سبيد لاين عام 2009 حيث بدأت مشوارها في بيع وتأجير
                الخطوط الخليوية في المناطق الفلسطينيه والخط الاخضر .
              </p>
              <a href="./About/index.php" class="see-brd-btn">المزيد عنا</a>
            </div>
          </div>
        </div>
      </div>
      <!--===================== End of philosophy Block ========================-->
      <!--===================== Iphone Block ========================-->
      <div class="iphone-block animatedParent">
        <div class="container">
          <div class="row">
            <div class="text-center growIn">
              <div class="icon">
                <img src="wwwroot/img/icon-phone.svg" alt="icon-phone" />
              </div>
              <h2 class="h2-main">أهم الإعلانات</h2>
              <p>
                شريحة سلكوم 50-GB سعر الشريحه 19 ش.ج مرة واحدة<br />
                سعر الفاتورة شهري 59 ش.ج<br />
              </p>
              <a href="./Offers/index.php" class="see-brd-btn">اذهب للعروض</a>
            </div>
          </div>
        </div>
      </div>
      <!--===================== End of Iphone Block ========================-->

      <!--===================== Price Plan Wrapper ========================-->
      <div class="price-plan-block">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h2 class="h2-main">عروضنا</h2>
            </div>
          </div>
          <div class="row justify-content-center animatedParent">

            <div class="row ">
              <?php while ($row =mysqli_fetch_array($results)) { ?>
               
                <div class="col-xl-3 col-lg-6 col-md-6 custom">
                    <div class="price-plan-item-inside">
                        <div class="price-plan-icon-wrap plan-item-icon-1">
                            <img class="price-plan-item-icon" src="./wwwroot/img/shop-icon1.png" alt="images">
                        </div>
                        <br>
                        <br>
                        <p class="price-plan-text-1"><?php echo $row['description']; ?></p>
                        <h3><?php echo $row['price']; ?></h3>
                    </div>
                </div>
                <?php } ?>
              
            </div>

       
            
          </div>
        </div>
      </div>
      <!--===================== End of Price Plan Wrapper ========================-->
      <!--===================== Reviews Wrapper ========================-->
      <div class="philosophy-block">
        <div class="container-fluid">
          <div class="row animatedParent" style="margin-right: -50px">
            <div class="col-md-6 philosophy-div1" ></div>
            <div class="col-md-6 philosophy-div2">
              <h4>خدماتنا</h4>
              <ul style="padding-top: 20px; margin-top: 25px">
                <li>
                  بيع وتأجير سيرفرات الاستضافة المحمية وبجودة عالية دون انقطاع.
                </li>
                <br />
                <li>
                  تزويد خدمة المقسم الهاتفي وغرف الدردشة الاجتماعية وخدمة إظهار
                  الرقم المخفي.
                </li>
                <br />
                <li>
                  تزويد المشتركين برزم دقائق للاتصالات الدولية والشبكات
                  الفلسطينية.
                </li>
                <br />
                <li>بيع أرقام النجمة المختصرة للشركات والمؤسسات والمصالح.</li>
                <br />
                <li>تقديم الشركة خدمة بيع الأرقام المميزة.</li>
                <br />
                <li>خدمات بناء وتصميم المواقع الإلكترونية.</li>
              </ul>
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

                <p style="margin-top: -10px">
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
                    <a href="./index.html">الرئيسية</a>
                  </li>
                  <li>
                    <a href="./About/index.php">من نحن؟</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
              <div class="inside">
                <h4 class="title">الدعم</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="/Contact/index.php">تواصل معنا</a>
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
    </div>

    <script src="../Speedline-Project/wwwroot/js/main.js"></script>
  </body>
</html>
