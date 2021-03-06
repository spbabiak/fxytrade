<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Work+Sans:wght@300;700&display=swap" rel="stylesheet">
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

	<section id="hero_section" class="main_hero_section">
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
				<h1 class="hero_heading">
					<?php echo $langArray['home_page']['hero_header']['trade']; ?>
					<span class="text_higlights_on_dark"><?php echo $langArray['home_page']['hero_header']['forex']; ?></span> 
					<?php echo $langArray['home_page']['hero_header']['bitcoin']; ?>
				</h1>
				<p class="hero_description"><?php echo $langArray['home_page']['hero_description']; ?></p>
			</div>
		</div>
	</section>
	<div class="wrapper_features">
		<div class="wrapper">
			<ul class="features_list">
				<li>
					<span class="feature_item_heading"><?php echo $langArray['home_page']['features_list']['feature_1']['feature_heading']; ?></span>
					<span class="feature_item_text"><?php echo $langArray['home_page']['features_list']['feature_1']['feature_text']; ?></span>
				</li>
				<li>
					<span class="feature_item_heading"><?php echo $langArray['home_page']['features_list']['feature_2']['feature_heading']; ?></span>
					<span class="feature_item_text"><?php echo $langArray['home_page']['features_list']['feature_2']['feature_text']; ?></span>
				</li>
				<li>
					<span class="feature_item_heading"><?php echo $langArray['home_page']['features_list']['feature_3']['feature_heading']; ?></span>
					<span class="feature_item_text"><?php echo $langArray['home_page']['features_list']['feature_3']['feature_text']; ?></span>
				</li>
				<li>
					<span class="feature_item_heading"><?php echo $langArray['home_page']['features_list']['feature_4']['feature_heading']; ?></span>
					<span class="feature_item_text"><?php echo $langArray['home_page']['features_list']['feature_4']['feature_text']; ?></span>
				</li>
				<li>
					<span class="feature_item_heading"><?php echo $langArray['home_page']['features_list']['feature_5']['feature_heading']; ?></span>
					<span class="feature_item_text"><?php echo $langArray['home_page']['features_list']['feature_5']['feature_text']; ?></span>
				</li>
				<li>
					<span class="feature_item_heading"><?php echo $langArray['home_page']['features_list']['feature_6']['feature_heading']; ?></span>
					<span class="feature_item_text"><?php echo $langArray['home_page']['features_list']['feature_6']['feature_text']; ?></span>
				</li>
			</ul>
		</div>
	</div>
	<section id="about_section">
		<div class="wrapper">
			<div class="wrapper_section_content">
				<div class="wrapper_text">
					<h2 class="secondary_heading"><span class="text_higlights_on_white">WHO</span> WE ARE</h2>
					<p class="secondary_description">We are multi-functional forex platform. We were established as a way for traders to invest in the financial markets on a platform that is user friendly. We offer worldwide coverage, multiple payment options and a 24/7 support which are all brought to you by our time-proven platform stability, giving the necessary stability and safety to your assets and data.</p>
				</div>
				<div class="wrapper_main_content">
					<ul class="icons_about_list">
						<li>
							<span class="icon_about_overlay">
								<span class="icon_license"></span>
							</span>
							<div class="icons_about_list_text">
								<span class="icon_about_heading">LICENCED & REGULATED</span>
								<span class="icon_about_text">We are 100% Europian owned, operated and regulated</span>
							</div>
						</li>
						<li>
							<span class="icon_about_overlay">
								<span class="icon_funds"></span>
							</span>
							<div class="icons_about_list_text">
								<span class="icon_about_heading">FUNDS SECURITY</span>
								<span class="icon_about_text">Your money is held with AA-rate europian banking institution</span>
							</div>
						</li>
						<li>
							<span class="icon_about_overlay">
								<span class="icon_specialists"></span>
							</span>
							<div class="icons_about_list_text">
								<span class="icon_about_heading">INDUSTRY SPECIALIST</span>
								<span class="icon_about_text">We are founded by traders with years of experience in the markets</span>
							</div>
						</li>
						<li>
							<span class="icon_about_overlay">
								<span class="icon_global"></span>
							</span>
							<div class="icons_about_list_text">
								<span class="icon_about_heading">GLOBAL APPROACH</span>
								<span class="icon_about_text">We provide multilingual support and services to assist your journey</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="benefits_section">
		<div class="wrapper">
			<div class="wrapper_section_content">
				<div class="wrapper_text">
					<h2 class="secondary_heading"><span class="text_higlights_on_dark">WHY</span> TRADE WITH US</h2>
					<p class="secondary_description">We are dedicated to helping you at every stage of your trading journey, here to make your strategies work better. We???re doing this because we want you to grow and succeed together with us.</p>
				</div>
				<div class="wrapper_main_content">
					<div class="benefits_col">
						<span class="benefits_heading">BRINGING TRADING TO YOU</span>
						<ul class="benefits_list">
							<li>
								<div class="benefits_icon_1"></div>
								<p class="benefits_text">We provide an intuitive trading platform designed with the latest technological advancements that???s geared towards new traders as well as professionals.</p>
							</li>
							<li>
								<div class="benefits_icon_2"></div>
								<p class="benefits_text">We place great emphasis on education, providing a well-rounded library of V.O.D. seminars, webinars, daily news, analysis and more.</p>
							</li>
							<li>
								<div class="benefits_icon_3"></div>
								<p class="benefits_text">Our customer service and support is always available to meet your needs, and our account managers know that your success is our success.</p>
							</li>
						</ul>
					</div>
					<div class="benefits_col">
						<span class="benefits_heading">SAFE AND SECURE</span>
						<ul class="benefits_list">
							<li>
								<div class="benefits_icon_4"></div>
								<p class="benefits_text">We provide you with a safe and secure way to conduct forex trading.</p>
							</li>
							<li>
								<div class="benefits_icon_5"></div>
								<p class="benefits_text">We offer fair prices, fair and discreet delivery.</p>
							</li>
							<li>
								<div class="benefits_icon_6"></div>
								<p class="benefits_text">We do not store your banking information, such as your credit card details - we only keep the last four digits of your card.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="markets_section">
		<div class="wrapper">
			<div class="wrapper_section_content">
				<div class="wrapper_text">
					<h2 class="secondary_heading">ACCESS THE FINANCIAL MARKETS <span class="text_higlights_on_white">ALL IN ONE PLACE</span></h2>
					<p class="secondary_description">Gain access to a range of instruments across six classes. Trade forex, metals, indices, energies, shares and cryptocurrencies securely and conveniently</p>
				</div>
				<div class="wrapper_main_content">
					<ul class="icons_markets_list">
						<li>
							<div class="icon_forex"></div>
							<span class="icon_heading">Forex</span>
							<span class="icon_text">Trade 50+ currency pairs from the biggest majors</span>
						</li>
						<li>
							<div class="icon_metals"></div>
							<span class="icon_heading">Metals</span>
							<span class="icon_text">Trade the most popular pairs with precious metals</span>
						</li>
						<li>
							<div class="icon_indices"></div>
							<span class="icon_heading">Indices</span>
							<span class="icon_text">Trade 10 of the world???s biggest indices</span>
						</li>
						<li>
							<div class="icon_energies"></div>
							<span class="icon_heading">Energies</span>
							<span class="icon_text">Trade the most popular energies</span>
						</li>
						<li>
							<div class="icon_crypto"></div>
							<span class="icon_heading">Crypto</span>
							<span class="icon_text">Trade popular cryptocurrencies</span>
						</li>
						<li>
							<div class="icon_shares"></div>
							<span class="icon_heading">Shares</span>
							<span class="icon_text">Trade 50 of the biggest shares</span>
						</li>
					</ul>
				</div>
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
	<section id="download_section">
		<div class="wrapper">
			<div class="wrapper_section_content">
				<div class="wrapper_text">
					<h2 class="secondary_heading">TRADE WITH <span class="text_higlights_on_white">MARKET LEADING SOFTWARE</span></h2>
						<div class="subheading">MetaTrader</div>
						<p class="secondary_description">With numerous advanced features and ttrading tools, combined with an intuitive interface our proprietary trading platform for desktop is everything you need to start trading Forex and CFD.</p>
				</div>
				<a class="btn_download" href="#">Download</a>
			</div>
		</div>
	</section>
	<section id="faq_section">
		<div class="wrapper">
			<div class="wrapper_section_content">
				<h2 class="secondary_heading">FAQ</h2>
				<ul class="faq_list">
					<li class="faq_list_item">
						<h3 class="question">What is Forex?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
					<li class="faq_list_item">
						<h3 class="question">How do I start trading Forex?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
					<li class="faq_list_item">
						<h3 class="question">I want to open an account. What information do I need?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
					<li class="faq_list_item">
						<h3 class="question">What do I do if I can???t subscribe?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
					<li class="faq_list_item">
						<h3 class="question">How do I download the Trading Platforms?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
					<li class="faq_list_item">
						<h3 class="question">What are the working hours of Forex market?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
					<li class="faq_list_item">
						<h3 class="question">Can I lose more than what I invest in Forex?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
					<li class="faq_list_item">
						<h3 class="question">What is a pip?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
					<li class="faq_list_item">
						<h3 class="question">How to read a forex chart?</h3>
						<span class="icon_faq_arrow"></span>
						<div class="wrapper_answer">
							<p class="answer">You will need to register your email account with a Forex broker, such as NameofCompany. Then you can start using the Forex client program to buy and sell currencies. This will take less than 5 minutes of your time! Start your aplication now.</p>
						</div>
					</li>
				</ul>
				<a class="btn_show_more">Show more</a>
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
		<div class="copyrights">?? 2020 BARCLAYS BANK UK AND HSBC BANK. All Rights Reserved</div>	
	</footer>

<script type="text/javascript" src="scripts.js"></script>	
</body>

</html>