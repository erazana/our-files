<?php 
$fileForRead = fopen("text.txt","r");	
$content = fread($fileForRead,5000);
$content = explode('|&|',$content);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon">
		<Link href="css/style.css" rel="stylesheet" type ="text/css" />
		<title> Home </title>
	</head>
	<body>
		<div class="top">
		<div class="top conteiner">
			<div class="topMenu">
				<ul class="topMenu">
					<li><a href="index.html">HOME</a></li>
					<li><a href="partnersipOpportunities.html">PARTNERSHIP OPPORTUNITIES</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="contacts.html">CONTACT</a></li>
					<li> 
						<form>
							<input type="search" name="" placeholder="search" class="topSearch"  />
							<input type="submit" value="" />
						</form>
					</li>
				</ul>
			</div>
			</div>
		</div>
		<div class="header conteiner">
			<h3>Learn How to Overcome Fear, Make Better Decisions, </br> and Take Action toBuild Your Real Estate Business</h3>
			<div class="headerLogo"><img src="images/logoForHeader.png" alt="logo" /></div>
			<div class="headerBottom"></div>
		</div>
		<div class="content conteiner">
			<div class="contentBlock">
				<div class="contentBlockLeft">
					<img src="images/contentLeft.jpg">
				</div>			
				<div class="contentBlockRight">
					<img src="images/contentRight.jpg" width="369px" height="319px">
					<button class="courseInfoButton">Send Me The Course</button>
				</div>			
			</div>
			<div class="contentBlock">
				<h2><?php echo $content[0];?></h2>
				<p><?php echo $content[1];?></p>
			</div>
		</div>
		<div class="footer">
			<div class="footer conteiner">
			<div class="footerTopLine"> </div>
				<div class="footerLeft">
					<ul class="footerMenu1">
						<li>SITE NAVIGATOR</li>
						<li><a href="index.html">Home</a></li>
						<li><a href="">Privacy Policy</a></li>
						<li><a href="partnersipOpportunities.html">Partnershi Opportunities</a></li>
						<li><a href="">Terms of Use</a></li>
					</ul>			
					<ul class="footerMenu2">
						<li><a href="">Blog</a></li>
						<li><a href="">Disclaimer</a></li>
						<li><a href="">Contact Us</a><li/>
					</ul>	
				</div>
				<div class="footerLogo">
					<img src="images/footerlogo.png" alt="logo" width="70" height="115" class="footerimg" />
				</div>
				<div class="footerRight">
					<ul>
						<li><a href="https://www.facebook.com/"><img src="images/fb1.png"></a></li>
						<li><a href="https://www.google.am/"><img src="images/google1.png"></a></li>
						<li><a href="https://www.youtube.com/"><img src="images/youtube1.png"></a></li>
						<li><a href="https://twitter.com/" ><img src="images/twitter1.png"></a></li>
					</ul>		
				</div>			
				<div class="footerBottom"> 
					<div class="footerBottomLine"></div> 
					<div class="footerBottomLine2"></div> 
					<p> © 2014 J-Arm Investments, LLC All Rights Reserved.</p>
				</div>	
			</div>			
		</div>
	</body>
</html>