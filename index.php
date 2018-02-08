<!DOCTYPE HTML>
<!--
	Justice by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html lang="eu" xml:lang="eu" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MigasAmigas &mdash; Euskal Herriko ogi onena</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/bread.png">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			cursor: url(images/bread.png), auto;
		}

		body:active {
			cursor: url(images/bite.png), auto;
		}

		img:hover {
			cursor: pointer;
		}


		.product_view .modal-dialog {
			max-width: 800px;
			width: 100%;
		}

		.pre-cost {
			text-decoration: line-through;
			color: #a5a5a5;
		}

		.space-ten {
			padding: 10px 0;
		}
	</style>


</head>

<body>
	<div class="modal fade product_view col-md-12" id="product_view">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn btn-primary pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
					<h3 class="modal-title" id="product_title">Izenburua</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 product_img">
							<img src="loader.gif" id="producto" class="img-responsive img-rounded" alt="migasamigas">
						</div>
						<div class="col-md-6 product_content">
							<p id="product_description">Deskripzioa</p>
							<div class="space-ten"></div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal"><b>Itxi</b></button>
				</div>
			</div>
		</div>
	</div>

	<div class="gtco-loader"></div>

	<div id="page">
		<nav class="gtco-nav" role="navigation">

			<div class="container">
				<!--<div class="row">-->
				<!--	<div class="col-md-10"></div>-->

				<!--	<div class="col-md-2">-->

				<!--	<div id="google_translate_element" class="float-right"></div>-->
				<!--	</div>-->
				<!--</div>-->

				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index.html">Migas<em>Amigas</em></a></div>
					</div>
					<div class="col-xs-10 text-right  menu-1 main-nav">
						<div class="col-md-10  menu-1 main-nav">
							<ul>
								<li class="active"><a href="#" data-nav-section="home">Hasiera</a></li>
								<li><a href="#" data-nav-section="about">Nortzuk gara</a></li>
								<li><a href="#" data-nav-section="photos">Argazkiak</a></li>
								<li class="btn-cta"><a href="#" data-nav-section="contact"><span>Kontaktua</span></a></li>

								<!-- For external page link -->
								<!-- <li><a href="http://freehtml5.co/" class="external">External</a></li> -->
							</ul>
						</div>

						<div class="col-md-2  menu-1 main-nav">
							<div id="google_translate_element"></div>
						</div>

					</div>

				</div>

			</div>
		</nav>

		<section id="gtco-hero" class="gtco-cover" style="background-image: url(images/bg.gif);" data-section="home" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">
						<div class="display-t">
							<div class="display-tc">
								<h1 class="animate-box" data-animate-effect="fadeIn"> Euskal Herriko ogi onena</h1>
								<p class="gtco-video-link animate-box" data-animate-effect="fadeIn"><a data-toggle="modal" data-target="#myModal" class="popup-vimeo"><i class="material-icons">play_circle_outline</i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn btn-primary pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
					<div class="modal-body">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Bc7KNDrheaQ?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen>
						</iframe>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><b>Itxi</b></button>
					</div>
				</div>

			</div>
		</div>


		<section id="gtco-about" data-section="about">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
						<h1>Nortzuk gara</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
						<img src="images/img_1.jpg" class="img-responsive" alt="migasamigas">
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="heading-colored">MigasAmigas &amp; family</h2>
						<p>Bi zutabe nagusitan oinarritzen da Dorronsoro okindegia: kalitatean eta zerbitzuan. Hori dela-eta, lehen mailako lehengaiak erabiltzen ditu bere produktuak egiteko, masa izoztuak edota aurrez egositako ogiak bezalako irtenbide azkarrak saihestu
							eta egunean egunekoari arretaz eta mimo handiz erantzunez. Bezeroen premiei erantzutea da erronka nagusia, bakoitzak dituen beharrei egokitzea, kalitatea duten produktuei garrantzia emanez eta gertuko zerbitzu ezin hobea eta azkarra eskainiz. Bere
							txikian, beraz, desafio handiak ditu Dorronsoro okindegiak, prezioen konpetentzia handiari erantzuteko modu bakarra ezagutzen baitu: kalitatea. Ogiak duen prozesua ikusi nahi? azpian duzu laburpen txiki bat.</p>
						<!--<p><a href="#" class="read-more">Gehiago ikusi <i class="icon-chevron-right"></i></a></p>-->
					</div>
				</div>
			</div>
		</section>

		<section id="gtco-our-team" data-section="photos">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
						<h1>Gure produktuak</h1>
						<p class="sub">Gure produktuak %100 euskal herriko etxeko ogia da</p>
						<p class="subtle-text animate-box" data-animate-effect="fadeIn"></p>
					</div>
				</div>
				<div class="row md-col-12">



					<div id="irudiak"></div>

				</div>
			</div>
		</section>

		<section id="gtco-contact" data-section="contact">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
						<h1>Gurekin kontaktatu</h1>
						<p class="sub">Eibarren gaude kokatuta edozertarako!
						</p>
						<p class="subtle-text animate-box" data-animate-effect="fadeIn">Kontaktua</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-push-6 animate-box">
						<form action="#" method="post" enctype="text/plain" id="mezua_bidali">
							<div class="form-group">
								<label for="name" class="sr-only">Izena</label>
								<input type="text" class="form-control" placeholder="Izena" id="name" name="name">
							</div>
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" placeholder="Posta elektronikoa" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="message" class="sr-only">Mezua</label>
								<textarea name="message" id="message" class="form-control" cols="30" rows="7" placeholder="Mezua" name="message"></textarea>
							</div>
							<div class="form-group">
								<input type="reset" value="Ezabatu mezua" class="btn btn-danger">

								<input type="submit" value="Bidali mezua" id="btn_bidali" class="btn btn-primary">
							</div>
						</form>
					</div>
					<div class="col-md-4 col-md-pull-6 animate-box">
						<div class="gtco-contact-info">
							<ul>
								<li><span class="fa fa-map-marker heading-colored"></span><a href="https://www.google.es/maps/place/IES+Uni+Eibar-Ermua+BHI" target="blank"> Gipuzkoa, Eibar 48260</a></li>
								<li><span class="fa fa-phone heading-colored"></span><a href="tel://943208444"> 943 20 84 44</a></li>
								<li><span class="fa fa-envelope heading-colored"></span><a href="mailto:dw3-2-10.17@uni.eus"> info@migasamigas.com</a></li>
								<li><span class="fa fa-globe heading-colored"></span><a href="https://migasamigas-bittorpoza.c9users.io/index.html"> https://migasamigas.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer id="gtco-footer" role="contentinfo">
			<div class="container">

				<div class="row copyright">
					<div class="col-md-12">
						<p class="pull-left">
							<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
							<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
						<p class="pull-right">
							<ul class="gtco-social-icons pull-right">
								<li><a href="https://twitter.com/?lang=es" target="blank" class="fa fa-twitter"></a></li>
								<li><a href="https://www.facebook.com/" target="blank" class="fa fa-facebook"></a></li>
								<li><a href="https://es.linkedin.com/" target="blank" class="fa fa-linkedin"></a></li>
								<li><a href="https://dribbble.com/" target="blank" class="fa fa-dribbble"></a></li>
							</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="material-icons">keyboard_arrow_up</i></a>
	</div>


	<div class="row">
		<div class="container"> 
		<div id="fixedButton">
			<form id="fixedForm">
				<input type="text" name="" placeholder="Idatzi..." />
				<input type="submit" value="Submit" />
			</form>
			<a class="btn btn-primary"><i class="material-icons">info outline</i></a>
		</div>
		</div>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- jQuery Validation -->
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({ pageLanguage: 'eu', includedLanguages: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
		}

		function aldatu(id) {
			document.getElementById("producto").src = document.getElementById(id).src;

			switch (id) {
				case '1':
					document.getElementById("product_title").innerHTML = 'MOLDEKO OGI INTEGRALA';
					document.getElementById("product_description").innerHTML = 'Zapore handiko moldeko ogia, gosarietan hartzeko aproposa.';
					break;
				case '2':
					document.getElementById("product_title").innerHTML = 'SESAMODUNA OGIA';
					document.getElementById("product_description").innerHTML = 'Ogi oso osasuntsua, magnesioan eta fosforoan aberatsa.';
					break;
				case '3':
					document.getElementById("product_title").innerHTML = 'PIPADUN OGIA';
					document.getElementById("product_description").innerHTML = 'Ogi integrala Pipaz inguratua.';
					break;
				case '4':
					document.getElementById("product_title").innerHTML = 'OGI INTEGRALA OLOAREKIN';
					document.getElementById("product_description").innerHTML = 'Hirin integraleko ogia Oloarekin, osasuntsua eta oso goxoa.';
					break;
				case '5':
					document.getElementById("product_title").innerHTML = 'MOLDEKO OGI TXURIA';
					document.getElementById("product_description").innerHTML = 'Gosariak edo sandwichak egiteko aproposa, kontserbante eta aditiborik gabe.';
					break;
				case '6':
					document.getElementById("product_title").innerHTML = 'OGI ERROMATARRA';
					document.getElementById("product_description").innerHTML = 'Ogi kurruskaria mozketarik gabe azalean.';
					break;
				default:
					// code
			}

		}


		var image;
		var fullImage = "<div class='col-md-6 animate-box' data-animate-effect='fadeInRight'><div class='img-shadow'><img src='images/1.png' onclick='aldatu(this.id)' data-toggle='modal' data-target='#product_view' class='img-responsive' alt='migasamigas' id=1></div></div>";
		for (var a = 2; a <= 6; a++) {

			if (a % 2 != 0) {
				image = "<div class='col-md-6 animate-box' data-animate-effect='fadeInRight'><div class='img-shadow'><img src='images/" + a + ".png' onclick='aldatu(this.id)' data-toggle='modal' data-target='#product_view' class='img-responsive' alt='migasamigas' id=" + a + "></div></div>";
				fullImage = fullImage + image;
				console.log("bikoiti");
			}
			else {
				image = "<div class='col-md-6 animate-box' data-animate-effect='fadeInLeft' style='margin-bottom:3%'><div class='img-shadow'><img src='images/" + a + ".png' onclick='aldatu(this.id)' data-toggle='modal' data-target='#product_view' alt='migasamigas'class='img-responsive' id=" + a + "></div></div>";
				fullImage = fullImage + image;
				console.log("Bakoiti");
			}
		}
		document.getElementById('irudiak').innerHTML = fullImage;

		$("#myModal").on('hidden.bs.modal', function(e) {
			$("#myModal iframe").attr("src", $("#myModal iframe").attr("src"));
		});
	</script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<script>
		$(document).ready(function() {
			$("#btn_bidali").click(function(event) {
				event.preventDefault();
				
				var data = { 'name': $('#name').val(), 'message': $('#message').val(), 'email': $('#email').val() }
				

				$.ajax({
					url: "php/bidali.php",
					type: "get",
					data: data,
					success: function(a) {
						alert("test");
					},
					error: function(xhr, ajaxOptions, thrownError) {
						console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
					}
				});
			});
		})
	</script>

	<script>
		$(document).ready(function() {
			$("#fixedForm").hide();
			$("#fixedButton").click(function() {
				$("#fixedForm").toggle("fast");
			});
		});
	</script>
</body>

</html>
