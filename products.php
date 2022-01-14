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

	<section id="hero_section" class="products_hero_section">
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
				<div class="wrapper_text">
					<h2 class="secondary_heading">Master <span class="text_higlights_on_dark">your trades</span></h2>
					<p class="secondary_description">Sometimes it’s better to take a path with the least amount of resistance and not to swim against the tide simply because of the fact that it’s more comfortable and user-friendly. MetaTrader 4 (MT4) is a trading platform that manifests both these qualities. It’s the World’s most used trading platform which can be launched on Windows as well as on mobile devices (Android, iOS).</p>
				</div>
				<ul class="btn_apps_list">
					<li><a class="btn_google_play" href="#"></a></li>
					<li><a class="btn_app_store" href="#"></a><</li>
					<li><a class="btn_ms_store" href="#"></a></li>
				</ul>
			</div>
		</div>
	</section>
	<section id="features_section">
		<div class="wrapper">
			<div class="wrapper_section_content">
				<ul class="icons_features_list">
					<li>
						<div class="icon_flexibility"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">FLEXIBILITY</span>
							<span class="icon_text">MT4 allows you to trade currency pairs, CFDs, commodities and other highly liquid assets.</span>
						</div>
					</li>
					<li>
						<div class="icon_security"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">SECURITY</span>
							<span class="icon_text">MT4 is set with 129-bit encryption software, which protects data between traders and servers.</span>
						</div>
					</li>
					<li>
						<div class="icon_advisors"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">EXPERT ADVISORS</span>
							<span class="icon_text">MT4 allows you to trade currency pairs, CFDs, commodities and other highly liquid assets.</span>
						</div>
					</li>
					<li>
						<div class="icon_communication"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">COMMUNICATION</span>
							<span class="icon_text">MT4 links brokers and traders ensuring instant communication.</span>
						</div>
					</li>
					<li>
						<div class="icon_ux"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">USER EXPERIENCE</span>
							<span class="icon_text">MT4 offers an easy-to-use interface to both beginner and experienced traders.</span>
						</div>
					</li>
					<li>
						<div class="icon_resources"></div>
						<div class="wrapper_icons_features_text">
							<span class="icon_heading">LOW RESOURCES</span>
							<span class="icon_text">MT4 requires minimal resources to perform at an optimal rate and great speed.</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="products_about_section">
		<div class="subsection">
			<div class="wrapper">
				<div class="wrapper_subsection">
					<div class="wrapper_text">
						<h2 class="secondary_heading">FXITRADE <span class="text_higlights_on_white">MOBILE</span></h2>
						<div class="subheading">Try the new FXITrade mobile now</div>
						<p class="secondary_description">Traders can access their mobile trading system via any mobile browser. FXITrade Mobile Trading System is intuitive, user friendly and reliable. Brokers have full control over the URL the client sees and can easily embed the system into their mobile marketing campaigns.</p>
					</div>
					<div class="wrapper_img">
						<img class="img_mobile" src="imgs/products_mobile_img.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="subsection">
			<div class="wrapper">
				<div class="wrapper_subsection row_reverse">
					<div class="wrapper_text">
						<h2 class="secondary_heading">FXITRADE <span class="text_higlights_on_white">FIX API</span></h2>
						<div class="subheading">A FIX API to Trade via FXITRADE Accounts</div>
						<p class="secondary_description">FIX API using FIX Protocol 4.4 designed for real-time, pricing and execution. You will get full range of trading order types. All trades sent to FXITrade FIX API are synced with the Condor Back Office and can be used in tandem with FXITrade Terminal, FXITrade Web and FXITrade Mobile. In order to establish and maintain FIX connectivity, you must have an application that manages a network connection and which sends/receives FIX messages.</p>
					</div>
					<div class="wrapper_img">
						<img class="img_api" src="imgs/products_api_img.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="subsection bg_web">
			<div class="wrapper">
				<div class="wrapper_subsection">
					<div class="wrapper_text">
						<h2 class="secondary_heading">FXITRADE <span class="text_higlights_on_white">WEB</span></h2>
						<p class="secondary_description">FXITrade Web provides fast and easy access to clients Condor account from every browser.</p>
						<a class="btn_download" href="#">Go to Platform</a>
					</div>
					<div class="wrapper_img">
						<img class="img_web" src="imgs/products_web_img.png" alt="">
					</div>
				</div>
			</div>
		</div>
		
		<div class="subsection">
			<div class="wrapper">
				<div class="wrapper_subsection row_reverse">
					<div class="wrapper_text">
						<h2 class="secondary_heading">FXITRADE <span class="text_higlights_on_white">OVERVIEW</span></h2>
						<p class="secondary_description">Condor is a complete trading platform solution for Forex and CFD brokers to offer their traders. The platform is packed with a full range of features to cater to each and every investment preference imaginable.</p>
					</div>
					<div class="wrapper_img">
						<img class="img_overview" src="imgs/products_overview_img.png" alt="">
					</div>
				</div>
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
						<form id="main_form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" novalidate>
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
								<input id="POST-phone" type="tel" name="phone">
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
	<script type="text/javascript" src="utils.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>