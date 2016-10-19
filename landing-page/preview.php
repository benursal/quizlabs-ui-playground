<?php
/*
echo '<pre>';
print_r( $_POST );
echo '</pre>';
*/
$p = $_POST;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>QuizLabs</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/ionicons.min.css" rel="stylesheet">

    <link href="css/inspinia.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

    <link href="css/lp.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	</head>

	<body>
    <div id="landingPageContainer">
      <div class="lp-template lp-template-4" id="lpTemplate4">

        <div id="hero" class="section-darkgray">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 text-center">
                <img src="<?php echo $p['header_logo_url'];?>" id="" class="img-responsive image-align-center" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
				<?php if( !empty($p['hero_main_headline']) ) : ?>
                <h1 class="text-70 capitalize margin-top-50 text-extrabold text-blue"><?=$p['hero_main_headline'];?></h1>
				<?php endif; ?>
				
				<?php if( !empty($p['hero_lead_paragraph']) ) : ?>
                <p class="text-20">
                  <?=$p['hero_lead_paragraph'];?>
                </p>
				<?php endif; ?>

                <a href="thank-you.html" class="btn btn-lg btn-cta btn-yellow mtb">
                  Start Quiz <i class="ion-arrow-right-c" aria-hidden="true"></i>
                </a>

                <p class="text-12">
                  Powered by <a href="/">QuizLabs</a>
                </p>

              </div>
            </div><!--/row -->
          </div><!--/container -->
        </div><!-- /.IS Wrap -->

        <div class="section bg-white">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="text-blue text-60 text-light capitalize">How it works</h2>

                <p class="text-20 margin-top-30">
                  Lorem ipsum dolor sit amet lorem ipsum dolor sit amet dolor sit amet ipsum sit amet dolor sit amet ipsum dolor sit.
                </p>

                <img src="img/landing-pages/template4/quiz-funnel-flow.png" class="img-responsive image-align-center" />
              </div>
            </div>

            <div class="row margin-top-80">
              <div class="col-md-4 col-md-offset-2 col-md-sm-6">
                <div class="col-md-2">
                  <i class="ion-funnel text-50 text-blue"></i>
                </div>
                <div class="col-md-10 padding-left-30">
                  <h4 class="text-20 text-blue">Feature # 1</h4>
                  <p class="text-14">
                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet dolor sit. Lorem this is a very useful feature lorem ipsum dolor sit amet dolor sit.
                  </p>
                </div>
              </div>

              <div class="col-md-4 col-md-sm-6">
                <div class="col-md-2">
                  <i class="ion-email-unread text-50 text-blue"></i>
                </div>
                <div class="col-md-10 padding-left-30">
                  <h4 class="text-20 text-blue">Feature # 2</h4>
                  <p class="text-14">
                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet dolor sit. Lorem this is a very useful feature lorem ipsum dolor sit amet dolor sit.
                  </p>
                </div>
              </div>
            </div>

            <div class="row margin-top-30">
              <div class="col-md-4 col-md-offset-2">
                <div class="col-md-2">
                  <i class="ion-archive text-50 text-blue"></i>
                </div>
                <div class="col-md-10 padding-left-30">
                  <h4 class="text-20 text-blue">Feature # 3</h4>
                  <p class="text-14">
                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet dolor sit. Lorem this is a very useful feature lorem ipsum dolor sit amet dolor sit.
                  </p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="col-md-2">
                  <i class="ion-help-buoy text-50 text-blue"></i>
                </div>
                <div class="col-md-10 padding-left-30">
                  <h4 class="text-20 text-blue">Feature # 4</h4>
                  <p class="text-14">
                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet dolor sit. Lorem this is a very useful feature lorem ipsum dolor sit amet dolor sit.
                  </p>
                </div>
              </div>
            </div>


            <div class="row margin-top-30">
              <div class="col-md-4 col-md-offset-2">
                <div class="col-md-2">
                  <i class="ion-bonfire text-50 text-blue"></i>
                </div>
                <div class="col-md-10 padding-left-30">
                  <h4 class="text-20 text-blue">Feature # 5</h4>
                  <p class="text-14">
                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet dolor sit. Lorem this is a very useful feature lorem ipsum dolor sit amet dolor sit.
                  </p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="col-md-2">
                  <i class="ion-android-camera text-50 text-blue"></i>
                </div>
                <div class="col-md-10 padding-left-30">
                  <h4 class="text-20 text-blue">Feature # 6</h4>
                  <p class="text-14">
                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet dolor sit. Lorem this is a very useful feature lorem ipsum dolor sit amet dolor sit.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="section bg-mint">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-md-offset-0 text-center">
                <h2 class="text-blue text-60 text-light capitalize">Rave Reviews</h2>
                <p class="text-20 margin-top-30">Read what industry leaders say about Silent Selling.  We have <br />Fortune 500 clients and they love us!</p>

                <div class="row margin-top-40">
                  <div class="col-md-4 text-center the-testimonial">
                    <div class="testimonial-content">
                      <img src="img/quote.png" class="img-responsive image-align-center" />
                      <p class="margin-top-30">
                        Silent Selling helped us increase our leads up to 450% in just 3 days!  We haven't gotten that kind of growth for the past 8 years.
                        It's our new secret weapon.  Oh, it's not a secret anymore.
                      <p>
                      <img src="img/logos/blackandwhite/apple2.png" class="img-responsive image-align-center" style="height:50px;" />
                    </div>
                  </div>

                  <div class="col-md-4 text-center the-testimonial">
                    <div class="testimonial-content">
                      <img src="img/quote.png" class="img-responsive image-align-center" />
                      <p class="margin-top-30">
                        Silent Selling helped us increase our leads up to 450% in just 3 days!  We haven't gotten that kind of growth for the past 8 years.
                        It's our new secret weapon.  Oh, it's not a secret anymore.
                      <p>
                      <img src="img/logos/blackandwhite/ibm.png" class="img-responsive image-align-center" />
                    </div>
                  </div>

                  <div class="col-md-4 text-center the-testimonial">
                    <div class="testimonial-content">
                      <img src="img/quote.png" class="img-responsive image-align-center" />
                      <p class="margin-top-30">
                        Silent Selling helped us increase our leads up to 450% in just 3 days!  We haven't gotten that kind of growth for the past 8 years.
                        It's our new secret weapon.  Oh, it's not a secret anymore.
                      <p>
                      <img src="img/logos/blackandwhite/oracle.png" class="img-responsive image-align-center" />
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>


        <div id="footer">
          <div class="container">
            <div class="row" id="firstLevel">
              <div class="col-md-4 col-md-offset-2">
                <ul class="menu-horizontal">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Privacy</a></li>
                </ul>
              </div>
              <div class="col-md-4 text-right">
                <strong class="text-white text-16">Call Me: +1800-4324-443</strong>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <div class="social-icons">
                  <a href="#"><i class="ion-social-twitter text-white text-24"></i></a>
                  <a href="#"><i class="ion-social-facebook text-white text-24"></i></a>
                  <a href="#"><i class="ion-social-linkedin text-white text-24"></i></a>
                </div>
              </div>
            </div> <!-- row -->

            <div class="row copyright">
              <div class="col-md-12 text-center">
                <p>Copyright &copy; 2016 &nbsp; <a href="#">Company Name</p>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    
	</body>
</html>
