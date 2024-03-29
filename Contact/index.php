<?php  

session_start();
	$db = mysqli_connect('localhost', 'root', '', 'speedline_dp');
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr =  $companyErr  = $messageErr = "";  
$name = $email = $mobileno = $company = $message =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    //String Validation  
    if (empty($_POST["name"])) {  
        $nameErr = "Name is required";  
   } else {  
       $name = input_data($_POST["name"]);  
           // check if name only contains letters and whitespace  
           if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
               $nameErr = "Only alphabets and white space are allowed";  
           }  
   }  
     
   //Email Validation   
   if (empty($_POST["email"])) {  
           $emailErr = "Email is required";  
   } else {  
           $email = input_data($_POST["email"]);  
           // check that the e-mail address is well-formed  
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
               $emailErr = "Invalid email format";  
           }  
    }  
   
   //Number Validation  
   if (empty($_POST["telNum"])) {  
           $mobilenoErr = "Mobile no is required";  
   } else {  
           $mobileno = input_data($_POST["telNum"]);  
           // check if mobile no is well-formed  
           if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
           $mobilenoErr = "Only numeric value is allowed.";  
           }  
       //check mobile no length should not be less and greator than 10  
       if (strlen ($mobileno) != 10) {  
           $mobilenoErr = "Mobile no must contain 10 digits.";  
           }  
   }  
     
   //company Validation      
   if (empty($_POST["company"])) {  
       $companyErr = "companyErr is required";  
   } else {  
    $company = input_data($_POST["company"]);
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$company)) {  
                $companyErr = "Only alphabets and white space are allowed";  
            }        
   }  
     
   //messege Validation  
   if (empty ($_POST["message"])) {  
           $messageErr = "message is required";  
   } else {  
           $message = input_data($_POST["message"]);  
           if (!preg_match("/^[a-zA-Z ]*$/",$message)) {  
            $messageErr = "Only alphabets and white space are allowed";  
        }
      
} }
 
if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $$companyErr == "" && $messageErr == "" && $agreeErr == "") {  
        mysqli_query($db, "INSERT INTO contact (name,email,telNum,company,message) VALUES ('$name', '$email','$mobileno','$company','$message')"); 
        $_SESSION['message'] = "Offer saved"; 
        header('location: index.php'); 
    }   
    }  
function input_data($data) {  
 $data = trim($data);  //removes whitespace and other predefined characters from both sides of a string
 $data = stripslashes($data);  //Remove the backslash
 $data = htmlspecialchars($data);  // converts some predefined characters to HTML entities.
 return $data;  
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا </title>
    <link rel="stylesheet" href="../wwwroot/css/Contact.css">
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
  <link rel="stylesheet" type="text/css" href="wwwroot/css/responsive.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="wwwroot/css/responsive-rtl.css"
  />
</head>
<style>  
        .error {color: #FF0001;}  
        </style> 
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
    <div class="wrapper" dir="rtl">
        <div class="first-section not-images">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text">
                            <h1>اتصل بنا</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cloud">&nbsp;</div>
            <div class="cloud-two">&nbsp;</div>
            <div class="mini-cloud"></div>
            <div class="mini-cloud two"></div>
        </div>
    
        <div class="contact-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-12 pr-lg-0" style="padding:0px">
                        <div class="bg">
                            <h4>أرسل لنا رسالة</h4>
                            <form class="custom-form" action="" method="post">
                                <div class="form-group">
                                    <label name="name">الاسم</label>
                                    <input name="name" type="text" class="form-control" 
                                    required>
                                    <span class="error" style="color:red;">* <?php echo $nameErr; ?> </span> 

                                </div>
                                <div class="form-group">
                                    <label name="email">الايميل</label>
                                    <input name="email" type="email" class="form-control" required>
                                    <span class="error" style="color:red;">* <?php echo $emailErr; ?> </span> 
                                </div>
                                <div class="form-group">
                                    <label name="telNum">رقم الهاتف</label>
                                    <input name="telNum" type="text" class="form-control" required>
                                    <span class="error" style="color:red;">* <?php echo $mobilenoErr; ?> </span>
                                </div>
                                <div class="form-group">
                                    <label name="company">الشركة</label>
                                    <input name="company" type="text" class="form-control" required >
                                    <span class="error" style="color:red;">* <?php echo $companyErr ; ?> </span>
                                </div>
                                <div class="form-group last">
                                    <label name="message">الرسالة</label>
                                    <textarea name="message"></textarea required>
                                    <span class="error" style="color:red;">* <?php echo $messageErr; ?> </span>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="submit" class="see-brd-btn">أرسل</button>
   
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-12 pl-lg-0" style="padding:0px">
                        <div class="contact-info">
                            <h4>معلومات الاتصال</h4>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center">
                                    <img src="../wwwroot/img/map-marker.svg" alt="">
                                    <span>غزة-النصر-مفترق اللبابيدي</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <img src="../wwwroot/img/phone.svg" alt="phone">
                                    <a href="tel:+44 765 867 87" dir="ltr">+20 765 867 87</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <img src="../wwwroot/img/email.svg" alt="email">
                                    <span><a href="mailto:info@quickline.co.il">info@speedline.co.il</a></span>
                                </li>
                            </ul>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ******************************** FOOTER-->
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
