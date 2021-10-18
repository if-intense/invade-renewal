<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$name = $_POST["name"];
		$furigana = $_POST["furigana"];
		$email = $_POST["email"];
    $tel = $_POST["tel"];
		$content  = $_POST["content"];
	}

	if (isset($_POST["submit"])) {

        	mb_language("ja");
		mb_internal_encoding("UTF-8");
		//
		
    // mb_send_mail("info@invade.co.jp", "お問合せ入りました", $name, $email, $content);

        	$subject = "［自動送信］お問い合わせ内容の確認";

		$body = <<< EOM
{$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$name}

【 ふりがな 】 
{$furigana}

【 メール 】 
{$email}

【 電話番号 】
{$tel}



【 内容 】 
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;
        

		$fromEmail = "fujiwara@invade.co.jp";


		$fromName = "お問い合わせ";

		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

    $headers = "From: " .mb_encode_mimeheader($email);

		mb_send_mail($email, $subject, $body, $header);
    mb_send_mail("rfujiwar@invade.co.jp", "$name 様からお問合せ入りました", $body, $headers);

		header("Location: thanks.php");

   
		exit;
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="../../css/style.css"> -->
  <link rel="stylesheet" href="../../css/contact.css">
  <link rel="stylesheet" href="../../css/contact-main.css">
  <link rel="stylesheet" href="../../css/normalize.css"/>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/5c2738e24d.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="../../image/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../image/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../image/favicon/favicon-16x16.png">
  <link rel="manifest" href="../../image/favicon/site.webmanifest">
  <title>株式会社インベード | INVADE Co., Ltd.</title>
  <script>
     $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
  </script>
</head>
<body>
  <!-- ======= Header ======= -->
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                <a href="../../index.html"><img src="../../../image/invade-logo.svg"></a>
               </div>
               <div class="menu">
                <ul>
                  <li><a href="../index.html">Home</a></li>
                  <li><a href="../about/index.html">About</a></li>
                  <!-- <li><a href="../business/index.html">Business</a></li> -->
                  <li><a href="../project/index.html">Project</a></li>
                  <li class="contact-nav"><a href="input.php">Contact</a></li>
               </ul>
               </div>
            </nav>
  <!-- ======= Hero Section ======= -->
    <!-- ======= title Section ======= -->
    <section id="title">
      <div class="title-container" data-aos="fade-up" style="padding-top:80px;">
        <h1>お問い合わせ</h1>
        <!-- <a href="#business" class="btn-get-started scrollto"><i class="fas fa-chevron-down"></i></a> -->
      </div>
    </section><!-- End title -->
    <div class="path-strip">
      <div class="container">
        <!-- <p class="path"><a href="../../index.html">Top</a> &gt; ABOUT</p> -->
      </div>
    </div>

  <main id="main">


    <!-- ======= About Section ======= -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contact</h2>
        </div>

        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12">

          </div>



        </div>

        <div class="row">


          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12 contact-us">
            <form action="confirm.php" method="post">
              <input type="hidden" name="name" value="<?php echo $name; ?>">
              <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
              <input type="hidden" name="email" value="<?php echo $email; ?>">
              <input type="hidden" name="content" value="<?php echo $content; ?>">
              <h5 class="contact-title">お問い合わせ 内容確認</h5>
              <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
              <div>
                  <div>
                      <label>お名前</label>
                      <p><?php echo $name; ?></p>
                  </div>
                  <div>
                      <label>ふりがな</label>
                      <p><?php echo $furigana; ?></p>
                  </div>
                  <div>
                      <label>メールアドレス</label>
                      <p><?php echo $email; ?></p>
                  </div>
                  <div>
                      <label>電話番号</label>
                      <p><?php echo $tel; ?></p>
                  </div>
                  <div>
                      <label>お問い合わせ内容</label>
                      <p><?php echo nl2br($content); ?></p>
                  </div>
              </div>
              <button type="button" class="btn btn-secondary" onclick="history.back(-1)">修正する</button>
              <button type="submit" class="btn btn-primary" name="submit">送信する</button>
            </form>
          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->




  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">



          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
            <h4>ウェブサイト内</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../about/index.html">ABOUT</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">BUSINESS</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="pages/news/">NEWS</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="input.php">CONTACT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../privacy-policy/index.html">PRIVACY POLICY</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="250">
            <h4>サービス</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.kamisma.com" target="_blank">KAMISMA BEAUTY</a><i class="fas fa-external-link-alt"></i></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">KAMISMAX</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="https://nile.inc" target="_blank">NiLe</a><i class="fas fa-external-link-alt"></i></li> -->
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
            <h4>インベード株式会社</h4>
            <p>
              <!-- <i class="fas fa-tenge"></i>104-0061 東京都中央区銀座6-10-1 GINZA SIX<br> -->
              TEL: 03-5962-8585 <br> email: <a href="mailto:info@invade.co.jp">info@invade.co.jp</a></p>


          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>INVADE Co., Ltd</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>

</html>

