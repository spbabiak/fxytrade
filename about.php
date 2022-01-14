<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Work+Sans:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="intlTelInput.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>fxytrade</title>
</head>
<body>
	<?php 
	if(!isset($_GET['langID'])) 
		$lang = 'en';
	else
		$lang = $_GET['langID'];

	include('locale/' . $lang . '.php');
	?>
	<header class="header">
		<div class="wrapper">
			<div class="mobile_header">
				<div class="logo">
					<a href="index.php">
						<img src="imgs/logo.png" width="157px" height="41px" alt="">
					</a>
					
						<span class="arrow_langs"></span>
						<ul class="langs">
							<li class="en active"></li>
							<li class="de"></li>
							<li class="it"></li>
						</ul>
						<div class="hidden_langs">
							<ul class="langs_column">
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
						
				</div>

				<div class="wrapper_nav">	
					<div class="social_btns">
						<ul class="social_icons_list">
							<li><a class="icon_facebook" href="#"></a></li>
							<li><a class="icon_twitter" href="#"></a></li>
							<li><a class="icon_youtube" href="#"></a></li>
						</ul>
					</div>
					<div class="nav_btn"></div>
				</div>
			</div>

			<div class="mobile_nav">
					<ul class="mobile_nav_list">
						<li><a class="mobile_nav_item" href="index.php"><?php echo $langArray['menu']['home']; ?></a></li>
						<li><a class="mobile_nav_item" href="products.php"><?php echo $langArray['menu']['products']; ?></a></li>
						<li><a class="mobile_nav_item" href="about.php"><?php echo $langArray['menu']['about']; ?></a></li>
					</ul>
					<div class="mobile_nav_cta">
							<div class="left_cta">
								<ul class="social_icons_list">
									<li><a class="icon_facebook" href="#"></a></li>
									<li><a class="icon_twitter" href="#"></a></li>
									<li><a class="icon_youtube" href="#"></a></li>
								</ul>
								<a class="sign_up_cta" href="#">Sign up</a>
							</div>
							<div class="right_cta">
								<a class="login_cta" href="#">Log in</a>
							</div>
					
					</div>
				</div>

		</div>			
	</header>

	<section id="hero_section" class="about_hero_section">
		<div class="bar"></div>
		<div class="wrapper">

			<!-- Desktop nav ------------------------------------------------------->
			
				<div class=wrapper_desktop_nav>	
					<div class="logo">
						<a href="index.php">
							<img src="imgs/logo.png" width="157px" height="41px" alt="">
						</a>
					</div>

					<ul class="desktop_nav_list">
						<li><a class="desktop_nav_item" href="index.php"><?php echo $langArray['menu']['home']; ?></a></li>
						<li><a class="desktop_nav_item" href="products.php"><?php echo $langArray['menu']['products']; ?></a></li>
						<li><a class="desktop_nav_item" href="about.php"><?php echo $langArray['menu']['about']; ?></a></li>
					</ul>
						
					<div class="social_btns">
							<ul class="social_icons_list">
								<li><a class="icon_facebook" href="#"></a></li>
								<li><a class="icon_twitter" href="#"></a></li>
								<li><a class="icon_youtube" href="#"></a></li>
							</ul>
						</div>
					
					<div class="desktop_cta">
						<a class="btn_login" href="#">Log in</a>
						<ul class="langs_row">
							<li class="en"></li>
							<li class="de"></li>
							<li class="it"></li>
						</ul>
					</div>
				</div>

			<!----------------------------------------------------------------------->
			
			</div>
		<div class="wrapper">
			<div class="wrapper_hero_text">
				<div class="about_hero_text_content">
					<h2 class="secondary_heading"><span class="text_higlights_on_dark">OUR MISSION </span>IS TO BRING TRADING TO THE MASSE</h2>
					<p class="secondary_description">We do so by providing an intuitive trading platform designed with the latest technological advancements that’s geared towards new traders as well as professionals.</p>
					<p class="secondary_description">We place great emphasis on education, providing a well-rounded library of V.O.D. seminars, webinars, daily news, analysis and more. Our customer service and support is always available to meet your needs, and our account managers know that your success is our success.</p>
				</div>
				<div class="about_hero_img_content">
					<img class="img_globe" src="imgs/globe.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<section id="about_vision_section">
		<div class="subsection">
			<div class="wrapper">
				<div class="wrapper_subsection">
					<div class="wrapper_text">
						<h2 class="secondary_heading"><span class="text_higlights_on_white">OUR VISION</span></h2>
						<p class="secondary_description">Surmontfx was established as a way for traders to invest in the financial markets on a platform that is user friendly.</p>
						<p class="secondary_description">Your success is a testament of our commitment to any investor who chooses to trade with Surmontfx. That is why we strive to provide you with an expanding asset selection, dedicated support and personal assistance.</p>
					</div>
					<div class="wrapper_img">
						<img class="img_vision" src="imgs/our_vision_img.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="about_our_commitment">
		<div class="wrapper">
			<div class="wrapper_section_content">
				<div class="wrapper_text">
					<h2 class="secondary_heading">OUR <span class="text_higlights_on_white">COMMITMENT</span></h2>
				</div>
				<ul class="icons_features_list">
					<li>
						<div class="icon_opportunities"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">CONNECTING OPPORTUNITIES</span>
							<span class="icon_text">Opportunities arise daily and are numerous, and we provide you with the means to connect from one to the other</span>
						</div>
					</li>
					<li>
						<div class="icon_control"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">MAINTAIN CONTROL</span>
							<span class="icon_text">Maintaining control is the ability to drive your success however – and whichever – way you want.</span>
						</div>
					</li>
					<li>
						<div class="icon_support"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">PERSONAL PROFESSIONAL SUPPORT</span>
							<span class="icon_text">When market volatility equals trading opportunities, count on steady, dedicated support to assist you every step of the way</span>
						</div>
					</li>
					<li>
						<div class="icon_choice"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">FREEDOM OF CHOICE</span>
							<span class="icon_text">Benefit from tailored solutions that meet your needs. Over 100 tradable assets and unlimited market access</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="cta_section">
		<div class="wrapper">
			<div class="wrapper_section_content">
			<div class="wrapper_text">
				<h2 class="secondary_heading">READY TO TRADE?</h2>
				<p class="secondary_description">Quick and easy to get started in only a few small steps. We do all the job for you.</p>
			</div>
			<a class="btn_register" href="#">Register</a>
		</div>
		</div>
	</section>

	<section id="contact_form_section">
		<div class="wrapper_section_content">
			<div class="wrapper">
				<div class="wrapper_form_content">
					<div class="form_icons">
						<h2 class="secondary_heading">YOUR EASE OF MIND IS <span class="text_higlights_on_dark">OUR PRIORITY</h2>
						<ul class="form_icons_list">
							<li class="form_icon_item">
								<span class="icon_regulation"></span>
								<span class="icon_text">We're authorised by top European regulators.</span>
							</li>
							<li class="form_icon_item">
								<span class="icon_safe"></span>
								<span class="icon_text">Your funds are kept safe at reputable banks.</span>
							</li>
							<li class="form_icon_item">
								<span class="icon_privacy"></span>
								<span class="icon_text">We value and respect your privacy.</span>
							</li>
						</ul>
					</div>	
					<div class="wrapper_form">
						<h2 class="form_heading">Contact with Us</h2>
						<form id="main_form" action="" method="post" novalidate>
							<label>
								<input id="POST-name" type="text" name="name" placeholder="Name">
								<span class="error_name" aria-live="polite"></span>
							</label>
								
							<label>
								<input id="POST-surname" type="text" name="surname" placeholder="Surname">
								<span class="error_surname" aria-live="polite"></span>
							</label>
					
							<label>
								<input id="POST-email" type="email" name="email" placeholder="Email">
								<span class="error_email" aria-live="polite"></span>
							</label>
						
							<label>
								<input id="POST-phone" type="tel" name="phone" placeholder="">
								<span id="valid-msg" class="hide">✓ Valid</span>
								<span id="error-msg" class="hide"></span>
								<span class="error_phone" aria-live="polite"></span>
							</label>
						
						 	<button class="btn_submit" type="submit">Send</button>
							
				  		</form>
				  	</div>
				</div>
			</div>
		</div>	
	</section>

	<footer class="footer">
		<div class="footer_top">
			<div class="wrapper">
				<div class="wrapper_footer_nav">
					<div class="left">
						<div class="logo">
							<a href="index.php">
								<img src="imgs/logo_footer.png" alt="">
							</a>
						</div>
						<div class="footer_nav">
							<a class="footer_nav_item" href="products.php"><?php echo $langArray['menu']['products']; ?></a>
							<a class="footer_nav_item" href="about.php"><?php echo $langArray['menu']['about']; ?></a>
						</div>
					</div>
				
						<ul class="payments_icons_list">
							<li><div class="icon_master"></div></li>
							<li><div class="icon_visa"></div></li>
							<li><div class="icon_bank"></div></li>
							<li><div class="icon_bitcoin"></div></li>
						</ul>
					
				</div>
			</div>
		</div>
		
		<div class="footer_bottom">
			<div class="wrapper">
				<div class="social_btns">
					<ul class="social_icons_list">
						<li><a class="icon_facebook" href="#"></a></li>
						<li><a class="icon_twitter" href="#"></a></li>
						<li><a class="icon_youtube" href="#"></a></li>
					</ul>
				</div>
				<div class="disclaimer">
					<p class="disclaimer_text">Risk Warning: Trading CFDs, which are leveraged products, carries a high level of risk and can result in the loss of all of your investment. It is a good practice to never invest more than you are willing to part with. Before deciding to trade, please ensure you understand all the risks associated with the OTC CFDs trading and take into account your level of experience. Therefore, Trading Forex and CFDs is a difficult to understand product and may not be suitable for all investors. Please seek independent advice if necessary. Past performance of CFDs is not a reliable indicator of future results. Please read the full Risk Disclosure.</p>
					<p class="disclaimer_text">Surmont Fx is a tradename of Barclays Bank UK and HSBC Bank located at TOWER 42, 25 OLD BROAD ST., LONDON, EC2N 1HN. Barclays Bank UK and HSBC Bank are authorised and regulated by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and the Prudential Regulation Authority (Financial Services Register number: 759676 and UK FCA reference number: 114216 respectively). SURMONT FX does not offer Contracts for Difference to residents of certain jurisdictions such as the USA, Belgium, Iran, Canada and North Korea.</p>
				</div>
			</div>
		</div>
		<div class="copyrights">© 2020 BARCLAYS BANK UK AND HSBC BANK. All Rights Reserved</div>	
	</footer>
	
	<script type="text/javascript" src="intlTelInput.js"></script>
	<script type="text/javascript" src="scripts.js"></script>	
	<script type="text/javascript" src="utils.js"></script>

</body>
</html>