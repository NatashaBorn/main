<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Mihstore</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="imagex/x-icon" href="images/favicon.ico">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<header>
		<div class="header_top">
			<div class="header_top_text">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.</div>
			<ul>
				<li><a href="#">my account</a></li>
				<li><a href="#">wishust</a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</div>
		<div class="header_center">
			<img src="images/icon.png" alt="Logo.image">
			<ul>
				<li class="vk"><a href="vk.com" target="_blank"></a></li>
				<li class="fb"><a href="facebook.com"></a></li>
				<li class="twitter"><a href="twitter.com"></a></li>
				<li class="ya"><a href="yandex.ru"></a></li>
				<li class="rss"><a href="rss.com"></a></li>
			</ul>
		</div>
		<nav class="navigation_menu clearfix">
			<ul class="navigation_menu_list">
				<li class="products"><a href="#">products</a></li>
				<li class="ideas"><a href="#">ideas</a></li>
				<li class="brands"><a href="#">brands</a></li>
				<li class="gifts"><a href="#">gifts</a></li>
				<li class="stores"><a href="#">stores</a></li>
			</ul>
			<div class="shopping_cart"> 
				<div class="shopping_cart_text">shopping cart:</div>
				<div class="num_items_in_cart">3 items</div>
				<div class="total_price">70$</div>
				<div class="button_cart"></div>
			</div>			
		</nav>
	<div class="description_line">
		<div class="page_title">page title</div>
		<div class="page_description">Page description The quick, brown fox jumps over a lazy dog. DJs flock by when TV ax quiz prog.</div> <!-- вылазиет если page_title сделать длинее -->
	</div>
	</header>

        @yield('content')

	<footer>
		<span>© All Rights Reserved - ICEwave Design</span>
	</footer>
	
</body>
</html>