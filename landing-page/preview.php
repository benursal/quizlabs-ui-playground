<?php

echo '<pre>';
print_r( $_POST );
echo '</pre>';

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
      <div class="lp-template lp-template-4 margin-top-0" id="lpTemplate4">
		
		<?php
			$top_bar_style = ( !empty($p['header_bg_color']) ) ? 'background-color:' . $p['header_bg_color'] . ' !important;' : '';
		?>
		<div id="mainNavigation" class="navbar navbar-quizlabs" style="<?=$top_bar_style;?>">
			<div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">
						<?php if( !empty($p['header_logo_url']) ) : ?>
							<img src="<?php echo $p['header_logo_url'];?>" id="" class="img-responsive image-align-center" />
						<?php endif; ?>
				  </a>
				</div>
				<div class="collapse navbar-collapse">
				  <!--<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#chefs">About</a></li>
					<li><a href="#dishes">Services</a></li>
					<li><a href="#dishes">Blog</a></li>
					<li><a href="#dishes">Contact</a></li>
				  </ul>-->
				  
					<?php if( strpos($p['header_top_right_content'], '<ul') !== FALSE ) : ?>
					<?php
						$top_right_content = str_replace('<ul>', '<ul class="nav navbar-nav navbar-right">', $p['header_top_right_content']);
						echo $top_right_content;
					?>
					<?php else : ?>
				  
						<div class="nav-info">
							<?php echo $p['header_top_right_content']; ?>
						</div>
					
					<?php endif; ?>
					
				</div>
			</div>

		</div>
		
		<?php
			$hero_style = '';
			$hero_style .= ( !empty($p['hero_bg_color']) ) ? 'background-color:' . $p['hero_bg_color'] . ' !important;' : '';
			$hero_style .= ( !empty($p['hero_bg_image']) ) ? 'background-image:url(\'' . $p['hero_bg_image'] . '\') !important; background-size:cover;repeat:no-repeat' : '';
		?>
        <div id="hero" class="section-darkgray" style="<?=$hero_style;?>">
          <div class="container">
            <div class="row">
			
			<?php
				$img_mime = array('image/png', 'image/jpeg', 'image/gif');
				$img = getimagesize($p['hero_image_video_url']);
				//print_r($img);
				
				if( in_array($img['mime'], $img_mime) ) // it is an image
				{
					$image_or_file_content = '<img src="'.$p['hero_image_video_url'].'" class="img-responsive image-align-center" />';
				}
				else // it's a youtube video
				{
					$yt_video_embed = str_replace('watch?v=', 'embed/', $p['hero_image_video_url']);
					
					$image_or_file_content = '<iframe width="560" style="border:3px solid white" height="415" src="'.$yt_video_embed.'"
                  frameborder="0" allowfullscreen></iframe>';
				}
			?>
			
			
			<?php if( $p['hero_layout'] == 3 ) : // text on right ?>
				<div class="col-md-6 margin-top-30">
					<?php echo $image_or_file_content; ?>
				</div>
			<?php endif; ?>
			
			
			<?php
				if( $p['hero_layout'] == 1 )
				{
					$text_content_class = 'col-md-10 col-md-offset-1';
				}
				else
				{
					$text_content_class = 'col-md-6 text-left';
				}
			?>
			
              <div class="<?=$text_content_class;?>">
				
				<?php if( !empty($p['hero_main_headline']) ) : ?>
                <h1 class="text-70 capitalize margin-top-50 text-extrabold text-blue"><?=$p['hero_main_headline'];?></h1>
				<?php endif; ?>
				
				<?php if( !empty($p['hero_lead_paragraph']) ) : ?>
                <p class="text-20">
                  <?=$p['hero_lead_paragraph'];?>
                </p>
				<?php endif; ?>
				
				<?php
				$main_cta_style = '';
				
				$main_cta_text = ( !empty($p['hero_main_cta_text']) ) ? $p['hero_main_cta_text'] : 'Get it now!';
				$main_cta_url = ( !empty($p['hero_main_cta_url']) ) ? $p['hero_main_cta_url'] : '#';
				$main_cta_style .= ( !empty($p['hero_main_cta_bg_color']) ) ? 'background-color:' . $p['hero_main_cta_bg_color'] . ' !important;' : '';
				$main_cta_style .= ( !empty($p['hero_main_cta_text_color']) ) ? 'color:'.$p['hero_main_cta_text_color'].' !important' : '';
				?>
                <a href="<?=$main_cta_url; ?>" class="btn btn-lg btn-cta btn-yellow mtb" style="<?=$main_cta_style;?>">
					<?=$main_cta_text; ?>
                </a>
				
				
				<?php if( !empty($p['hero_secondary_cta_text']) ) : ?>
				<?php 
				$secondary_cta_style = '';
				
				$secondary_cta_text = ( !empty($p['hero_secondary_cta_text']) ) ? $p['hero_secondary_cta_text'] : 'Learn more';
				$secondary_cta_url = ( !empty($p['hero_secondary_cta_url']) ) ? $p['hero_secondary_cta_url'] : '#';
				$secondary_cta_style .= ( !empty($p['hero_secondary_cta_bg_color']) ) ? 'background-color:' . $p['hero_secondary_cta_bg_color'] . ' !important;' : '';
				$secondary_cta_style .= ( !empty($p['hero_secondary_cta_text_color']) ) ? 'color:'.$p['hero_secondary_cta_text_color'].' !important' : '';
				?>
				  &nbsp;
                <a href="<?=$secondary_cta_url; ?>" class="btn btn-lg btn-cta btn-yellow mtb" style="<?=$secondary_cta_style;?>">
					<?=$secondary_cta_text; ?>
                </a>
				
				<?php endif; ?>
                
              </div>
			  
			  <?php if( $p['hero_layout'] == 2 ) : // text on left ?>
				<div class="col-md-6 margin-top-30">
					<?php echo $image_or_file_content; ?>
				</div>
			  <?php endif; ?>
			  
			  
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
