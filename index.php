<?php 
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
$instagram = 'https://www.instagram.com/nevesfilms/';
$facebook = 'https://www.facebook.com/nevesfilm/';
$vimeo = 'https://vimeo.com/nevesfilms';
$tvGaspar = 'http://www.tvgaspar.com.br';
$grupoRaul = 'http://gruporaulneves.com.br';

$videos = getVideosFromVimeo();
function getVideosFromVimeo(){
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
define('DATA_LINK','https://pastebin.com/raw/Ku71Hb0z');
$data = json_decode(file_get_contents(DATA_LINK));
$customers = $data->customers;
$team = $data->team;
$aboutText = $data->aboutText;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Neves Films</title>

    <meta name="keywords" content="Filme, Vídeo, Gravação de Vídeo, Empresa, Divulgação" />
    <meta name="description" content="Produção de Filmes para Empresas">
    <meta name="author" content="vianasistemas">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

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

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/custom-gray.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body ng-app="app" ng-controller="SiteController">
    <div class="body">
        <header id="header" class="header-transparent header-with-borders-dark header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 30}">
            <div class="header-body">
                <div class="header-top header-top-dark">
                    <div class="header-top-container container-fluid">
                        <div class="header-row">
                            <div class="header-column justify-content-start">
                                <span class="d-none d-sm-flex align-items-center">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    Santa Catarina, Brasil
                                </span>
                                <span class="d-none d-sm-flex align-items-center ml-4">
                                    <i class="fas fa-phone mr-1"></i>
                                    <a href="tel:+55 47 9 9743-6800">47 9 9743-6800</a>
                                </span>
                            </div>
                            <div class="header-column justify-content-end">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact-us-1.html">Contate-nos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container p-0">
                    <div class="header-row">
                        <div class="header-column justify-content-start">
                            <div class="header-logo border-left-0 px-4 d-lg-none">
                                <a href="#">
                                    <img src="images/logo.svg" alt="Logomarca do site" data-change-src="images/logo.svg" width="55" height="55" alt="" style="z-index:1" />
                                </a>
                            </div>
                            <ul class="header-social-icons social-icons social-icons-transparent social-icons-icon-light border-left-0 d-none d-lg-flex px-2 px-xl-4">
                                <li class="social-icons-facebook"><a href="<?= $facebook ?>" target="_blank" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="<?= $vimeo ?>" target="_blank" title="Vimeo"><i
                                            class="fab fa-vimeo"></i></a></li>
                                <li class="social-icons-instagram"><a href="<?= $instagram ?>" target="_blank" title="Instagram"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="header-column justify-content-center">
                            <div class="header-nav justify-content-lg-center">
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav flex-column flex-lg-row align-items-center" id="mainNav">

                                            <li>
                                                <a class="active" href="#header" data-hash>
                                                    Home
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#who-we-are" data-hash>
                                                    Quem somos
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#portifolio" data-hash>
                                                    Portifólio
                                                </a>
                                            </li>

                                            <li class="d-none d-lg-flex px-4">
                                                <span class="header-logo border-0">
                                                    <a href="#header" data-hash>
                                                        <img src="images/logo.svg" data-change-src="images/logo.svg" width="65" height="65" alt="" />
                                                    </a>
                                                </span>
                                            </li>

                                            <li>
                                                <a class="dropdown-item dropdown-toggle" href="#customers" data-hash>
                                                    Clientes
                                                </a>
                                            </li>
                                            <li class="dropdown order-8">
                                                <a class="dropdown-item dropdown-toggle" href="#footer" data-hash>
                                                    Contato
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-button d-none d-sm-flex border-right-0 px-2 px-xl-4">
                                <a href="tel:+55 47 9 9743-6800" class="btn btn-outline btn-rounded btn-light btn-sticky-primary btn-4 btn-icon-effect-1">
                                    <span class="wrap">
                                        <span>47 9 9743-6800</span>
                                        <i class="fas fa-phone"></i>
                                    </span>
                                </a>
                            </div>
                            <button class="header-btn-collapse-nav header-btn-collapse-nav-light on-sticky-dark mx-3" data-toggle="collapse" data-target=".header-nav-main nav">
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
        </header>
        <div role="main" class="main">
            <div class="slider-container slider-container-height-720 rev_slider_wrapper">
                <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [720,720,720,720], 'disableProgressBar': 'off', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': true, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
                    <ul>

                        <li class="slide-overlay slide-overlay-level-0" data-transition="slideleft">
                            <img src="imagesCompressed/slides/f2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="3000"
                                data-offsetstart="250 100" class="rev-slidebg">

                            <h1 class="tp-caption text-color-light font-primary" data-x="center" data-y="center" data-voffset="['-55','-55','-55','0']"
                                data-start="1000" data-fontsize="['65','65','65','55']" data-transform_in="y:[-50%];opacity:0;s:500;"
                                data-transform_out="y:[-50%];opacity:0;s:500;">Neves Films
                            </h1>

                            <div class="tp-caption text-color-light font-primary font-weight-light" data-x="center" data-y="center" data-voffset="['10','10','10','70']"
                                data-start="1300" data-fontsize="['37','37','37','29']" data-transform_in="y:[-50%];opacity:0;s:500;"
                                data-transform_out="y:[-50%];opacity:0;s:500;">A sua empresa reconhecida</div>

                            <a class="tp-caption layer-border-width-1 popup-vimeo btn btn-light btn-outline rounded-circle d-flex align-items-center justify-content-center"
                                href="https://vimeo.com/288411014" data-x="center" data-y="center" data-voffset="['150','150','150','200']"
                                data-width="90" data-height="90" data-start="1900" data-fontsize="['22','22','22','22']" data-transform_in="opacity:0;s:500;"
                                data-transform_out="opacity:0;s:500;"><i class="fas fa-play"></i></a>

                        </li>

                        <li class="slide-overlay slide-overlay-level-0" data-transition="slideleft">
                            <img src="imagesCompressed/slides/jakob-owens-198234-unsplash.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-duration="3000" data-scalestart="100" data-scaleend="150" data-offsetstart="250 100" class="rev-slidebg">

                            <h1 class="tp-caption text-color-light font-primary pl-3" data-x="left" data-hoffset="['100','0','0','0']" data-y="center"
                                data-voffset="['150','0','0','0']" data-start="1000" data-fontsize="['40','40','40','40']" data-transform_in="y:[+100%];opacity:0;s:500;"
                                data-transform_out="y:[-50%];opacity:0;s:500;">Tecnologia de ponta</h1>

                            <div class="tp-caption text-color-light font-primary font-weight-light pl-3" data-x="left" data-hoffset="['100','0','0','0']"
                                data-y="center" data-voffset="['205','10','10','70']" data-start="1500" data-fontsize="['24','24','24','29']"
                                data-transform_in="y:[-50%];opacity:0;s:500;" data-transform_out="y:[-50%];opacity:0;s:500;">Vídeos
                                em 4k</div>

                        </li>

                        <li class="slide-overlay slide-overlay-level-0" data-transition="slideleft">
                            <img src="imagesCompressed/slides/lamp.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="3000"
                                data-scalestart="100" data-scaleend="150" data-offsetstart="250 100" class="rev-slidebg">

                            <h1 class="tp-caption text-color-dark font-weight-bold font-primary pr-3" data-x="right" data-hoffset="['100','0','0','0']"
                                data-y="center" data-voffset="['150','0','0','0']" data-start="1000" data-fontsize="['40','40','40','40']"
                                data-transform_in="y:[-100%];opacity:0;s:500;" data-transform_out="y:[-50%];opacity:0;s:500;">Criatividade
                                para inovar</h1>

                            <div class="tp-caption text-color-dark font-primary font-weight-light pr-3" data-x="right" data-hoffset="['100','0','0','0']"
                                data-y="center" data-voffset="['205','10','10','70']" data-start="1500" data-fontsize="['24','24','24','29']"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":1200,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>Conheça
                                nossos vídeos</div>

                        </li>

                    </ul>
                </div>
            </div>
            <section class="section" id="who-we-are">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"
                                style="animation-delay: 100ms;">
                                <span class="top-sub-title text-color-primary">REFERÊNCIA NA GRAVAÇÃO DE VÍDEOS</span>

                                <h2 class="font-weight-bold text-6 mb-3 title">Quem Somos</h2>
                            </div>
                            <p class="lead mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="300" style="animation-delay: 300ms;">Precisa gravar vídeos com qualidade profissional,
                                para comerciais, redes sociais e cobertua de eventos?</p>

                            <p class="text-color-light-4 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="500" style="animation-delay: 500ms;">
                                <?= $aboutText; ?>
                            </p>

                            <a href="contact-us-1.html" class="btn btn-outline btn-rounded btn-primary btn-v-3 btn-h-4 font-weight-bold text-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">Contato</a>
                        </div>
                        <div class="col-10 col-md-6 col-lg-5 ml-auto mr-auto mb-5 mt-5 center appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                            <img src="images/logo.svg" alt="Neves Films">
                        </div>
                    </div>
                </div>

            </section>

            <section class="bg-dark-2">
                <div class="container pb-3 pt-5">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"
                                style="animation-delay: 100ms;">
                                <span class="top-sub-title text-color-primary">COMPROMETIMENTO</span>

                                <h2 class="font-weight-bold text-color-light mb-3">Equipe profissional</h2>
                            </div>

                            <p class="lead mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="300" style="animation-delay: 400ms;">Profissionais experientes e com desejo de fazer o melhor trabalho. Conheça os integrantes dessa equipe:</p>

                            <div class="owl-carousel owl-theme nav-style-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 5}, '1199': {'items': 5}}, 'dots': false, 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'margin': 30}">

                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        <?php foreach($team as $person) : ?>
                                        <div class="owl-item cloned" style="width: 255px; margin-right: 30px;">

                                            <div class="image-frame image-frame-style-1 image-frame-effect-2 image-frame-effect-1">
                                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-align-end">
                                                    <img src="imagesCompressed/team/<?= $person->image ?>" class="frame-shadow" alt="">
                                                    <div class="image-frame-action">
                                                        <a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2"><?= $person->function ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div style="text-align: center">
                                                <h4 class="pt-2 text-color-light"><?= $person->name ?></h4>
                                                <p>
                                                    <?= $person->description ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button
                                        type="button" role="presentation" class="owl-next"></button></div>
                                <div class="owl-dots disabled"></div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <section class="pt-5 pb-5" id="customers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"
                                style="animation-delay: 100ms;">
                                <span class="top-sub-title text-color-primary">FOCO EM ATENDER</span>
                                <h2 class="font-weight-bold text-color-light text-6 mb-3">Clientes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="owl-carousel owl-theme nav-style-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'dots': false, 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'margin': 30, 'autoplay': true, 'autoplayHoverPause':true}">

                            <?php
                            foreach($customers as $customer) :
                            ?>
                            <div class="image-frame">
                                <img src="<?php echo $customer->image ?>" class="img-fluid" alt="">
                            </div>
                            <?php endforeach; ?>
                            
                        </div>

                    </div>
                </div>

            </section>

            <section class="section bg-dark-2" id="portifolio">

                <div class="container">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"
                                style="animation-delay: 100ms;">
                                <span class="top-sub-title text-color-primary">Conheça o nosso</span>

                                <h2 class="text-color-light font-weight-bold text-6 mb-3">Portifólio</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="portfolioLoadMoreWrapper">

                        <?php
                            $i = 0;
                            foreach($videos as $video):
                                $i++;
                                $picture = $video->pictures->sizes[3]->link;
                                $linkVimeo = $video->link;
                                $contentRating = sizeof($video->content_rating);
                                $userName = $video->user->name;
                                $videoName = $video->name;
                                $embedHtml = $video->embed->html;
                                $plays = $video->stats->plays;
                                $createdTime = date_create_from_format('Y-m-d\TH:i:se', $video->created_time);
                                $createdTimeString = $createdTime->format('d/m/Y H:i');
                            ?>

                        <div class="col-md-6 col-sm-12 vimeoVideo mb-5">

                            <div class="portfolio-item">
                                <article class="blog-post">
                                    <span class="top-sub-title text-color-light">
                                        <?= $createdTimeString ?>
                                    </span>
                                    <h2 class="font-weight-light text-4 mb-3">
                                        <a href="blog-single-post.html" class="link-color-light">
                                            <?= $videoName ?></a>
                                    </h2>
                                    <div class="image-frame frame-shadow">
                                        <div class="image-frame-wrapper">
                                            <a href="<?= $linkVimeo ?>" class="popup-vimeo"><img src="<?= $picture ?>" class="img-fluid"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                    <div class="d-flex opacity-6 my-2">

                                        <span class="post-likes d-flex align-items-center pr-3">
                                            <i class="text-color-light font-weight-bold lnr lnr-heart text-3 mr-1 " aria-label="<?= $contentRating ?> users like this video"
                                                title="<?= $contentRating ?> avaliações"></i>
                                            <span class="text-color-light font-weight-bold">
                                                <?= $contentRating ?>
                                            </span>
                                        </span>

                                        <span class="post-likes d-flex align-items-center border border-grey border-top-0 border-bottom-0 border-left-0 pr-3">
                                            <i class="text-color-light font-weight-bold lnr lnr-film-play text-3 mr-1" title="<?= $plays ?> visualizações" aria-label="<?= $plays ?> users played this video">
                                            </i>
                                            <span class="text-color-light font-weight-bold">
                                                <?= $plays ?>
                                            </span>
                                        </span>

                                    </div>

                                </article>
                            </div>
                        </div>
                        <?php 
                            endforeach;
                        ?>
                    </div>
                </div>
                <hr class="mt-5 mb-4">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader">
                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                        <button id="portfolioLoadMore" type="button" class="btn btn-primary btn-rounded btn-wide-5 btn-icon-effect-2 outline-none font-weight-semibold text-0">
                            <span>MAIS VÍDEOS</span>
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

            </section>
            
            <footer id="footer" class="footer-hover-links-light">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 mb-4 mb-lg-0">
							<a href="index.html" class="logo">
								<img alt="Logomarca do site da NevesFilms" class="img-fluid mb-3" src="images/logo.svg">
							</a>
							<p>Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc.</p>
							<ul class="list list-icon list-unstyled">
								<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Endereço:</span>Atitude Centro Empresarial <br> Rua São José, nº 253, 4 andar, Sala 407, Gaspar/SC </li>
								<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Whatsapp:</span> <a href="tel:+55 47 9 9743-6800">47 9 9743-6800</a></li>
								<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Email:</span> <a href="mailto:contato@nevesfilms.com.br" class="link-underline-light">contato@nevesfilms.com.br</a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h2 class="text-3 mb-3">LINKS ÚTEIS</h2>
							<ul class="list list-icon list-unstyled">
								<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?= $tvGaspar ?>">TV Gaspar</a></li>
								<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?= $grupoRaul ?>">Player Web</a></li>
                                <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?= $grupoRaul ?>">Painel de LED</a></li>
                                <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?= $grupoRaul ?>">Mídias Digitais</a></li>
                                <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?= $facebook ?>">Facebook</a></li>
                                <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?= $vimeo ?> ">Vimeo</a></li>
							</ul>
						</div>
						<div class="col-lg-3">
							<h2 class="text-3 mb-3">CONTEÚDO ADICIONAL</h2>
							<div class="card rounded bg-dark-2 border-0">
                                    <img src="imagesCompressed/atitude.jpg" class="card-img-top" alt="" />
                                <div class="pt-2">
                                    <span class="top-sub-title">Localização privilegiada</span>
                                    <h4 class="font-weight-bold mb-2">Centro Empresarial Atitude</h4>
                                    <p class="mb-0">Estamos localizados no centro da cidade de Gaspar. Venha conhecer nosso trabalho!</p>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row text-center text-md-left align-items-center">
							<div class="col-md-7 col-lg-8">
								<ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
									<li class="social-icons-facebook"><a href="<?= $facebook ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="<?= $vimeo ?>" target="_blank" title="Twitter"><i class="fab fa-vimeo"></i></a></li>
									<li class="social-icons-instagram"><a href="<?= $instagram ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="col-md-5 col-lg-4">
								<p class="text-md-right pb-0 mb-0">CC Sites</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
        </div>
        
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

    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

</body>

</html>