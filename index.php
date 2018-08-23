<?php 
$videos = buscaVideos();
function buscaVideos(){
	$curl = curl_init();
	curl_setopt_array($curl, 
	[
		CURLOPT_URL => "https://api.vimeo.com/users/nevesfilms/videos",
		CURLOPT_ENCODING => "utf8",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HTTPHEADER => [
			"Authorization: Bearer 1b85e889c8ad2d86c398bdae81d907e9"
		],
	]);
	$response = curl_exec($curl);
	$json = json_decode($response);
	return $json->data;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Neves Films Produtora de Vídeo</title>

	<meta name="keywords" content="Produtora, Video, Filmes, Gravações" />
	<meta name="description" content="Gravação de Vídeo Neves Films">
	<meta name="author" content="playerweb.com.br">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.min.css">
	<link rel="stylesheet" href="vendor/linear-icons/css/linear-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/skin.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom-dark.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

</head>

<body>
	<div class="body" id="app">
		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}">
			<div class="header-body">
				<div class="header-top">
					<div class="header-top-container container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<span class="d-none d-sm-flex align-items-center ml-4">
										<i class="fas fa-phone mr-1"></i>
										<a href="tel:+554733180431">(47) 3318-0431</a>
									</span>
								<ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
									<li class="social-icons-facebook">
										<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li class="social-icons-twitter">
										<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
									</li>
									<li class="social-icons-instagram">
										<a href="http://www.instagram.com/" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
							<div class="header-column justify-content-end">
								<span class="d-none d-sm-flex align-items-center">
										<i class="fas fa-map-marker-alt mr-1"></i>
										Gaspar - Santa Catarina
									</span>
							</div>
						</div>
					</div>
				</div>
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column justify-content-start">
							<div class="header-logo">
								<a href="index.html">
										<img alt="Neves Films" width="85" height="85" src="img/logo.webp">
									</a>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-nav">
								<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav flex-column flex-lg-row" id="mainNav">
											<li class="dropdown">
												<a class="dropdown-item dropdown-toggle" href="#">
														Menu Acessar
													</a>
												<a class="dropdown-item dropdown-toggle" href="#">
														Conteúdo
													</a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-button d-none d-sm-flex ml-3">
									<a href="https://themeforest.net/item/ezy-responsive-multipurpose-html5-template/21814871" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1" target="_blank">
											<span class="wrap">
												<span>(47) 3318-0431</span>
												<i class="fas fa-shopping-cart"></i>
											</span>
										</a>
								</div>
								<button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<span class="hamburguer">
											<span></span>
											<span></span>
											<span></span>
										</span>
										<span class="close">
											<span></span>
											<span></span>
										</span>
									</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div role="main" class="main">
			<section class="page-header mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-8 text-left">
							<span class="tob-sub-title text-color-primary d-block">Neves.Films</span>
							<h1 data-appear-animation="fadeIn" data-appear-animation-delay="800" class="font-weight-bold link-color-light text-10">O seu filme favorito</h1>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<div class="col-md-4">
							<ul class="breadcrumb justify-content-start justify-content-md-end">
								<li><a href="#">Home</a></li>
								<li class="active">Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<section class="section">
				<div class="container">
					<div class="row masonry-loader masonry-loader-showing portfolio-list portfolio-list-style-2" data-plugin-masonry data-plugin-options="{'itemSelector': '.isotope-item'}">
						<?php 
						foreach($videos as $video):
							$picture = $video->pictures->sizes[3]->link;
						?>
						
							<div class="col-sm-6 isotope-item mb-5 p-0" v-for="video in videos" :key="video.uri">
							<div class="portfolio-item">
								<article class="blog-post">
									<span class="top-sub-title text-color-primary">Janeiro 16, 2018</span>
									<h2 class="font-weight-bold text-4 mb-3">
										<a href="blog-single-post.html" class="link-color-dark">3L Prémoldados</a>
									</h2>
									<div class="image-frame hover-effect-2">
										<div class="image-frame-wrapper">
											<a href="blog-single-post.html"><img src="<?= $picture ?>" class="img-fluid" alt="" /></a>
										</div>
									</div>
									<div class="d-flex opacity-6 my-2">
										<span class="post-likes d-flex align-items-center border border-grey border-top-0 border-bottom-0 border-left-0 pl-0 pr-3"><i class="lnr lnr-heart text-3 mr-1" aria-label="13 users like this post"></i> 13</span>
										<a href="blog-single-post.html#comments">
												<span class="post-comments d-flex align-items-center px-3"><i class="lnr lnr-bubble text-3 mr-1" aria-label="2 users comment this post"></i> 2</span>
											</a>
									</div>
									<hr class="mt-0 mb-3">
									<p class="text-color-light-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="blog-single-post.html" class="text-color-primary font-weight-bold learn-more">SAIBA MAIS <i class="fas fa-angle-right text-3" aria-label="Read more"></i></a>
								</article>
							</div>
						</div>
						
						<?php 
						endforeach;
						?>
						
					</div>
					<hr class="mt-5 mb-4">
					<div class="row align-items-center justify-content-between">
						<div class="col-auto mb-3 mb-sm-0">
							<span>Showing 1-9 of 60 results</span>
						</div>
						<div class="col-auto">
							<nav aria-label="Page navigation example">
								<ul class="pagination mb-0">
									<li class="page-item">
										<a class="page-link prev" href="#" aria-label="Previous">
									        	<span><i class="fas fa-angle-left" aria-label="Previous"></i></span>
									      	</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">...</li>
									<li class="page-item"><a class="page-link" href="#">15</a></li>
									<li class="page-item">
										<a class="page-link next" href="#" aria-label="Next">
									        	<span><i class="fas fa-angle-right" aria-label="Next"></i></span>
									      	</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</section>

		</div>

		<footer id="footer" class="footer-hover-links-light mt-0">
			<div class="container">

				<div class="row">
					<div class="col-lg-5 mb-4 mb-lg-0">
						<a href="index.html" class="logo">
								<img alt="EZY Website Template" class="img-fluid mb-3" src="img/logo-footer.png">
							</a>
						<p>Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc.</p>
						<ul class="list list-icon list-unstyled">
							<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Address:</span> 1234 Street Name, City Name, USA</li>
							<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Phone:</span> <a href="tel:+1234567890">(123) 456-7890</a></li>
							<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Email:</span> <a href="mailto:mail@example.com" class="link-underline-light">mail@example.com</a></li>
						</ul>
					</div>
					<div class="col-lg-3 mb-4 mb-lg-0">
						<h2 class="text-3 mb-3">USEFUL LINKS</h2>
						<ul class="list list-icon list-unstyled">
							<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="https://themeforest.net/item/ezy-responsive-multipurpose-html5-template/21814871">Buy EZY Now</a></li>
							<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="contact-us-2.html">Contact Us</a></li>
							<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="contact-us-3.html">Hire Us</a></li>
							<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="#">Our Profile</a></li>
							<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="#">Get Support</a></li>
						</ul>
					</div>
					<div class="col-lg-3">
						<h2 class="text-3 mb-3">LATEST NEWS</h2>
						<div class="mb-3">
							<p class="mb-1"><a href="blog-single-post.html" class="d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent</a></p>
							<a href="blog-single-post.html" class="font-tertiary font-style-italic text-color-light">March 5, 2018</a>
						</div>
						<div>
							<p class="mb-1"><a href="blog-single-post.html" class="d-block">Dolor sit amet, consectetur adipiscing elit.</a></p>
							<a href="blog-single-post.html" class="font-tertiary font-style-italic text-color-light">March 5, 2018</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row text-center text-md-left align-items-center">
						<div class="col-md-7 col-lg-8">
							<ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-md-5 col-lg-4">
							<p class="text-md-right pb-0 mb-0">Copyrights © 2018. All Rights Reserved by Okler</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Vendor -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/common/common.min.js"></script>
	<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/vide/vide.min.js"></script>
	<script src="vendor/vivus/vivus.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>


	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

</body>
</html>
