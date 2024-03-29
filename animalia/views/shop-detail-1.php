<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 $a=$_SESSION['i'];

// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

	 echo 'Votre login est <b>'.$_SESSION['l'].'</b><br>Votre role est : '.$_SESSION['r'].'</b><br>Votre id est : '.$_SESSION['i']; 
	echo '<a href="../session/logout.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="./../../themeforest_winkle/views/e-commerce/login.html">Cliquer pour se connecter</a>';

}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>
<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Shop Detail 1 | HTML Commerce Template</title>
		<link rel="shortcut icon" href="images/favicon.ico">

		<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/magnific-popup.css' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<?PHP
include "../core/CommC.php";
  $db = config::getConnexion();
$req4="SElECT * From produit";
$listeP=$db->query($req4);
$comm1C=new CommC();
$listeComm=$comm1C->afficherComms();
$reaction1C=new reactionC();
$listereaction=$reaction1C->afficherreactions();
$req="SELECT p.id, p.img, SUM(s.etat) total 
FROM produit p LEFT JOIN avis s
ON p.id = s.id_prod 

GROUP BY p.id";
$listePP=$db->query($req);


//var_dump($listeEmployes->fetchAll());
?>


	<body>


		<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<div class="offcanvas-user clearfix">
					<a class="offcanvas-user-wishlist-link" href="wishlist.html">
						<i class="fa fa-heart-o"></i> My Wishlist
					</a>
					<a class="offcanvas-user-account-link" href="my-account.html">
						<i class="fa fa-user"></i> Login
					</a>
				</div>
				<nav class="offcanvas-navbar">
					<ul class="offcanvas-nav">
						<li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href="./" class="dropdown-hover">Home <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="home-v2.html">Home v2</a></li>
								<li><a href="home-v3.html">Home v3</a></li>
								<li><a href="home-v4.html">Home v4</a></li>
								<li><a href="home-v5.html">Home v5</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="shop.html" class="dropdown-hover">Shop <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Women <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop-by-category.html">Maecenas</a></li>
										<li><a href="shop-by-category.html">Nulla</a></li>
										<li><a href="shop-by-category.html">Donec</a></li>
										<li><a href="shop-by-category.html">Aliquam</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Brands <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop-by-category.html">Evans</a></li>
										<li><a href="shop-by-category.html">Adesso</a></li>
										<li><a href="shop-by-category.html">Crocs</a></li>
										<li><a href="shop-by-category.html">Carvela</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Features <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop-fullwidth.html">Products Style 2</a></li>
										<li><a href="shop-detail-2.html">Single Product Style 2</a></li>
										<li><a href="shop-masonry.html">Shop Masonry</a></li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="cart-empty.html">Empty Cart</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li>
									<a title="Mega Menu" href="#">Mega Menu</a>
								</li>
							</ul>
						</li>
						<li><a href="collection.html">Collections</a></li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Blog <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="blog-default.html">Blog Default</a></li>
								<li><a href="blog-center.html">Blog Center</a></li>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="about-us.html">About us</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="404.html">404</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
				<div class="topbar">
					<div class="container topbar-wap">
						<div class="row">
							<div class="col-sm-6 col-left-topbar">
								<div class="left-topbar">
									Shop unique and handmade items directly 
									<a href="#">About<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-sm-6 col-right-topbar">
								<div class="right-topbar">
									<div class="user-login">
										<ul class="nav top-nav">
											<li><a data-rel="loginModal" href="#"> Login </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar-container">

					<div class="navbar navbar-default navbar-scroll-fixed">

						<div class="navbar-default-wrap">
							<div class="container">
								<div class="row">
									<div class="navbar-default-col">
										<div class="navbar-wrap">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar bar-top"></span>
													<span class="icon-bar bar-middle"></span>
													<span class="icon-bar bar-bottom"></span>
												</button>
												<a class="navbar-search-button search-icon-mobile" href="#">
													<i class="fa fa-search"></i>
												</a>


												<a class="cart-icon-mobile" href="#">
													<i class="elegant_icon_bag"></i><span>0</span>
												</a>
												<a class="navbar-brand" href="./">
													<img class="logo" alt="WOOW" src="images/logo.png">
													<img class="logo-fixed" alt="WOOW" src="images/logo-fixed.png">
													<img class="logo-mobile" alt="WOOW" src="images/logo-mobile.png">
												</a>
											</div>
											<nav class="collapse navbar-collapse primary-navbar-collapse">
												<ul class="nav navbar-nav primary-nav">
													<li class="current-menu-item menu-item-has-children dropdown">
														<a href="./" class="dropdown-hover">
															<span class="underline">Home</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="home-v2.html">Home v2</a></li>
															<li><a href="home-v3.html">Home v3</a></li>
															<li><a href="home-v4.html">Home v4</a></li>
															<li><a href="home-v5.html">Home v5</a></li>
														</ul>
													</li>

													<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
														<a href="shop.html" class="dropdown-hover">
															<span class="underline">Shop</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li class="mega-col-3">
																<h3 class="megamenu-title">Women <span class="caret"></span></h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-by-category.html">Maecenas</a></li>
																	<li><a href="shop-by-category.html">Nulla</a></li>
																	<li><a href="shop-by-category.html">Donec</a></li>
																	<li><a href="shop-by-category.html">Aliquam</a></li>
																</ul>
															</li>
															<li class="mega-col-3">
																<h3 class="megamenu-title">Brands <span class="caret"></span></h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-by-category.html">Evans</a></li>
																	<li><a href="shop-by-category.html">Adesso</a></li>
																	<li><a href="shop-by-category.html">Crocs</a></li>
																	<li><a href="shop-by-category.html">Carvela</a></li>
																</ul>
															</li>
															<li class="mega-col-3">
																<h3 class="megamenu-title">Features <span class="caret"></span></h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-fullwidth.html">Products Style 2</a></li>
																	<li><a href="shop-detail-2.html">Single Product Style 2</a></li>
																	<li><a href="shop-masonry.html">Shop Masonry</a></li>
																	<li><a href="my-account.html">My Account</a></li>
																	<li><a href="cart.html">Cart</a></li>
																	<li><a href="cart-empty.html">Empty Cart</a></li>
																	<li><a href="wishlist.html">Wishlist</a></li>
																</ul>
															</li>
															<li class="mega-col-3">
																<h3 class="megamenu-title">Mega Menu</h3>
																<div class="megamenu-sidebar">
																	<div class="widget widget_products commerce">
																		<ul class="product_list_widget">
																			<li>
																				<a href="shop-detail-1.html">
																					<img src="images/products/thumb/product_60x60.jpg" alt="2a"/> 
																					<span class="product-title">Cras rhoncus duis viverra</span>
																				</a>
																				<span class="amount">&pound;12.00</span>
																				&ndash;
																				<span class="amount">&pound;20.00</span>
																			</li>
																			<li>
																				<a href="shop-detail-1.html">
																					<img src="images/products/thumb/product_60x60.jpg" alt="3a"/> 
																					<span class="product-title">Morbi sed egestas</span>
																				</a>
																				<span class="amount">&pound;123.00</span>
																			</li>
																			<li>
																				<a href="shop-detail-1.html">
																					<img src="images/products/thumb/product_60x60.jpg" alt="4a"/> 
																					<span class="product-title">Creamy Spring Pasta</span>
																				</a>
																				<span class="amount">&pound;321.00</span>
																			</li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li><a href="collection.html"><span class="underline">Collections</span></a></li>
													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Blog</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="blog-default.html">Blog Default</a></li>
															<li><a href="blog-center.html">Blog Center</a></li>
															<li><a href="blog-masonry.html">Blog Masonry</a></li>
														</ul>
													</li>
													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Pages</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="about-us.html">About us</a></li>
															<li><a href="contact-us.html">Contact Us</a></li>
															<li><a href="faq.html">FAQ</a></li>
															<li><a href="404.html">404</a></li>
														</ul>
													</li>
												</ul>
											</nav>

											<div class="header-right">
												
												<div class="navbar-search">
													<a class="navbar-search-button" href="#">
														<i class="fa fa-search"></i>
													</a>
													<div class="search-form-wrap show-popup hide"></div>
												</div>
												<div class="navbar-minicart navbar-minicart-topbar">
													<div class="navbar-minicart">
														<a class="minicart-link" href="#">
															<span class="minicart-icon">
																<i class="fa fa-shopping-cart"></i>
																<span>0</span>
															</span>
														</a>
													</div>
												</div>
												<div class="navbar-wishlist">
													<a class="wishlist" href="wishlist.html">
														<i class="fa fa-heart-o"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="header-search-overlay hide">
							<div class="container">
								<div class="header-search-overlay-wrap">
									
										
                                        <form action = "verifform.php" method = "get">
                                            <input type = "search" name = "terme">
                                          
                                      
                                       <input  type = "submit" name = "s" value="Rechercher">
                                           
                                        </form>
									
									<button type="button" class="close">
										<span aria-hidden="true" class="fa fa-times"></span>
										<span class="sr-only">Close</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
			<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li>
								<span>
									<a class="home" href="#">
										<span>Home</span>
									</a>
								</span>
							</li>
							<li>
								<span>Shop Detail 1</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="content-container no-padding">
				<div class="container-full">
					<div class="row">
						<div class="col-md-12">
							<div class="main-content">
								<div class="commerce">
									<div class="style-1 product">
										<div class="container">
											<div class="row summary-container">
												<div class="col-md-7 col-sm-6 entry-image">
													<div class="single-product-images">
														<span class="onsale">Sale!</span>
														<div class="single-product-images-slider">
															<div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
																<div class="caroufredsel-wrap">
																	<ul class="caroufredsel-items">
																		<li><form>
																		<?php 
								foreach ($listePP as $row) {
								echo'<tr>' ;
								echo'<td>'.$row['img'].'</td>';
								
								echo'<td> Nombre de jaime: '.$row['total'].'</td>';
								$id_produit = $row['id'];
								?>
								</form>
						<form action="../core/like.php" method="POST">
						
					    <input type="hidden" value="<?php echo $id_produit ?>" name="id_produit" id="id_serv" > 
						<td>  <button class="btn btn-success" name="likeBTN"><span class="ti-thumb-up"></span></button>
						 <button class="btn btn-danger" name="dislikeBTN"><span class="ti-thumb-down"></span></button> </td>

						</form>
								<?php
						  		echo'</tr>';
						  		# code...
							}
							?>
						

																		</li>
																		<li class="caroufredsel-item">
																			<a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
																				<img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt=""/>
																			</a>
																		</li>
																		<li class="caroufredsel-item">
																			<a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
																				<img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt=""/>
																			</a>
																		</li>
																		<li class="caroufredsel-item">
																			<a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
																				<img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt=""/>
																			</a>
																		</li>
																		<li class="caroufredsel-item">
																			<a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
																				<img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt=""/>
																			</a>
																		</li>
																	</ul>
																	<a href="#" class="caroufredsel-prev"></a>
																	<a href="#" class="caroufredsel-next"></a>
																</div>
															</div>
														</div>
														<div class="single-product-thumbnails">
															<div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0">
																<div class="caroufredsel-wrap">
																	<ul class="single-product-images-slider-synchronise caroufredsel-items">
																		<li class="caroufredsel-item selected">
																			<div class="thumb">
																				<a href="#" data-rel="0">
																					<img width="300" height="300" src="images/products/thumb/product_72x72.jpg" alt=""/>
																				</a>
																			</div>
																		</li>
																		<li class="caroufredsel-item">
																			<div class="thumb">
																				<a href="#" data-rel="1">
																					<img width="300" height="300" src="images/products/thumb/product_72x72.jpg" alt=""/>
																				</a>
																			</div>
																		</li>
																		<li class="caroufredsel-item">
																			<div class="thumb">
																				<a href="#" data-rel="2">
																					<img width="300" height="300" src="images/products/thumb/product_72x72.jpg" alt=""/>
																				</a>
																			</div>
																		</li>
																		<li class="caroufredsel-item">
																			<div class="thumb">
																				<a href="#" data-rel="3">
																					<img width="300" height="300" src="images/products/thumb/product_72x72.jpg" alt=""/>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-5 col-sm-6 entry-summary">
													<div class="summary">
														<h1 class="product_title entry-title">Donec tincidunt justo</h1>
														<p class="price">
															<del>
																<span class="amount">&pound;20.50</span>
															</del> 
															<ins>
																<span class="amount">&pound;19.00</span>
															</ins>
														</p>
														<div class="product-excerpt">
															<p>
																Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id metus eget nibh imperdiet fermentum non in metus.
															</p>
														</div>
														<form class="cart">
															<div class="add-to-cart-table">
																<div class="quantity">
																	<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"/>
																</div>
																<button type="submit" class="button">Add to cart</button>
															</div>
														</form>
														<p><a href="#"><strong>Add to Wishlist</strong></a></p>
														<div class="clear"></div>
														<div class="product_meta">
															<span class="posted_in">
																Categories: 
																<a href="#">Maecenas</a>, <a href="#">Nulla</a>
															</span>
															<span class="posted_in">
																Brand: 
																<a href="#">Barbour</a>, <a href="#">Carvela</a>, <a href="#">Crocs</a>.
															</span>
														</div>
														<div class="share-links">
															<div class="share-icons">
																<span class="facebook-share">
																	<a href="#" title="Share on Facebook">
																		<i class="fa fa-facebook"></i>
																	</a>
																</span>
																<span class="twitter-share">
																	<a href="#" title="Share on Twitter">
																		<i class="fa fa-twitter"></i>
																	</a>
																</span>
																<span class="google-plus-share">
																	<a href="#" title="Share on Google +">
																		<i class="fa fa-google-plus"></i>
																	</a>
																</span>
																<span class="linkedin-share">
																	<a href="#" title="Share on Linked In">
																		<i class="fa fa-linkedin"></i>
																	</a>
																</span>
															</div>
														</div>
													</div> 
												</div>
											</div>
										</div>
										<div class="commerce-tab-container">
											<div class="container">
												<div class="col-md-12">
													<div class="tabbable commerce-tabs">
														<ul class="nav nav-tabs">
													    	<li class="vc_tta-tab active">
													    		<a data-toggle="tab" href="#tab-1">Description</a>
													    	</li>
													    	<li class="vc_tta-tab">
													    		<a data-toggle="tab" href="#tab-2">Reviews</a>
													    	</li>
													  	</ul>
													  	<div class="tab-content">
													    	<div id="tab-1" class="tab-pane fade in active">
													    		<h2>Product Description</h2>
																<h3>Nullam vulputate erat id enim lacinia</h3>
																<h3></h3>
																<p>Vel rutrum odio bibendum. Vestibulum quis metus euismod, porta odio et, lacinia eros. Vestibulum vel lobortis ligula, non mollis diam. Donec eu urna quis nibh consectetur pharetra eget vitae dolor. Duis volutpat orci at</p>
																<p>Curabitur rutrum tristique arcu eget tincidunt. Nullam cursus viverra condimentum. Fusce vel nisi sem. Suspendisse sit amet mauris laoreet velit pretium tempus in quis purus.</p>
																<h3></h3>
																<p>Nullam molestie vulputate magna ac tempus. Quisque ac nibh finibus, tempor nunc a, euismod nunc. Nunc lectus magna, mattis eget libero eu, pharetra dapibus tellus. Aliquam dignissim lacus arcu, eu gravida purus rhoncus nec. Aenean porta tempus diam sit amet consequat. Morbi condimentum hendrerit aliquam. Sed at neque faucibus</p>
																<h3></h3>
																<h3></h3>
																<h3>Aenean aliquet condimentum augue, ut tempor turpis sollicitudin in.</h3>
																<p>Nunc vitae odio mollis, euismod mauris at, finibus felis. Phasellus vestibulum, sem at varius imperdiet, velit risus laoreet tortor, in feugiat massa augue sed nibh. Ut fermentum, ligula eget dictum vulputate, orci risus viverra nulla, non posuere metus orci quis mauris. Vivamus aliquam, purus sit amet ultricies dignissim, libero massa rhoncus mi, et imperdiet mauris mi in leo. Ut viverra, erat non rutrum suscipit, nunc purus porta odio, sit amet egestas ex tellus quis nisl. Nullam vitae egestas lectus. Duis faucibus sagittis nunc non porta. Ut eget tempus justo. Donec iaculis id nibh at rhoncus. Nam sed ex lectus. Sed aliquam imperdiet libero ut sollicitudin.</p>
													    	</div>
													    	<div id="tab-2" class="tab-pane fade">
													    		<div id="comments" class="comments-area">
																	<h2 class="comments-title">There are <span>3</span> Comments</h2>
																	<table border="1">
<tr>
<td>Name</td>
<td style="width: 20%">Comment</td>
<td style="width: 5%">Supprimer</td>
<td >Modifier</td>
</tr>

<?PHP
foreach($listeComm as $row){
	?>
	<tr>
	<td><?PHP echo $row['name']; ?></td>
	<td><?PHP echo $row['comment']; ?></td>
	<td><form method="POST" action="supprimerComm.php">
	<input type="submit" name="supprimer" value="Supprimer">
	<input type="hidden" value="<?PHP echo $row['login']; ?>" name="login">
	</form>
	</td>
	<td><a href="modifierComm.php?login=<?PHP echo $row['login']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

																	<div class="comment-respond">
																		<form method="POST" action="ajoutComm.php">
																			<table>
																			<caption>Ajouter Commentaire</caption>
																			<tr>
																			<td>Name</td>
																			<td><input type="text" name="name" id="id"
																				placeholder="Anonymous" required></td>
																			<td><span id="missid"></span></td>
																			</tr>
																	
																			<tr>
																			<td>Comment</td>
																			<td><input type="text" name="comment" id="idcomm" class="form-control" required></td>
																			<td><span id="missidcomm"></span></td>

																			</tr>
																			<tr>
																			<td></td>
																			<td><input type="submit" name="ajouter" value="Ajouter" id="bouton"></td>
																			</tr>
																			</table>
																			</form>
																			<form method="POST" action="ajoutreaction.php">
																			<table>
																			<caption>Ajouter Reclamation</caption>
																			<tr>
																			<td>Sujet</td>
																			<td><input type="text" name="idr" id="idr"required></td>
																			<td><span id="missidr"></span></td>
																			</tr>
																			<tr>

																			<td>Reclamation</td>
																			<td><input type="text" name="type" id="type" required></td>
																			<td><span id="misstype"></span></td>
																	
																			</tr>
																			<tr>
																			<td></td>
																			<td><input type="submit" name="ajouter" value="Ajouter" id="bouton1"></td>
																			</tr>
																			</table>
																			</form>
																	</div>
																</div>
													    	</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="container">
											<div class="row">
												<div class="col-sm-12">
													<div class="related products">
														<div class="related-title">
															<h3><span>We know you will love</span></h3>
														</div>
														<ul class="products columns-4" data-columns="4">
															<li class="product product-no-border style-2">
																<div class="product-container">
																	<figure>
																		<div class="product-wrap">
																			<div class="product-images">
																				<span class="onsale">Sale!</span>
																				<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""/></a>
																				</div>
																				<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""/></a>
																				</div>
																			</div>
																		</div>
																		<figcaption>
																			<div class="shop-loop-product-info">
																				<div class="info-meta clearfix">
																					<div class="star-rating">
																						<span style="width:0%"></span>
																					</div>
																					<div class="loop-add-to-wishlist">
																						<div class="yith-wcwl-add-to-wishlist">
					                                                                        <div class="yith-wcwl-add-button">
					                                                                            <a href="#" class="add_to_wishlist">
					                                                                                Add to Wishlist
					                                                                            </a>
					                                                                        </div>
					                                                                    </div>
					                                                                </div>
																				</div>
																				<div class="info-content-wrap">
																					<h3 class="product_title">
																						<a href="shop-detail-1.html">Daniel Stromborg Round</a>
																					</h3>
																					<div class="info-price">
																						<span class="price">
																							<del><span class="amount">£23.00</span></del> <ins><span class="amount">£20.00</span></ins>
																						</span>
																					</div>
																					<div class="loop-action">
																						<div class="loop-add-to-cart">
																							<a href="#" class="add_to_cart_button">
																								Add to cart
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</figcaption>
																	</figure>
																</div>
															</li>
															<li class="product product-no-border style-2">
																<div class="product-container">
																	<figure>
																		<div class="product-wrap">
																			<div class="product-images">
																				<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""/></a>
																				</div>
																				<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""/></a>
																				</div>
																			</div>
																		</div>
																		<figcaption>
																			<div class="shop-loop-product-info">
																				<div class="info-meta clearfix">
																					<div class="star-rating">
																						<span style="width:0%"></span>
																					</div>
																					<div class="loop-add-to-wishlist">
																						<div class="yith-wcwl-add-to-wishlist">
					                                                                        <div class="yith-wcwl-add-button">
					                                                                            <a href="#" class="add_to_wishlist">
					                                                                                Add to Wishlist
					                                                                            </a>
					                                                                        </div>
					                                                                    </div>
					                                                                </div>
																				</div>
																				<div class="info-content-wrap">
																					<h3 class="product_title">
																						<a href="shop-detail-1.html">Hans Wegner Shell Chair</a>
																					</h3>
																					<div class="info-price">
																						<span class="price">
																							<span class="amount">&pound;10.75</span>
																						</span>
																					</div>
																					<div class="loop-action">
																						<div class="loop-add-to-cart">
																							<a href="#" class="add_to_cart_button">
																								Add to cart
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</figcaption>
																	</figure>
																</div>
															</li>
															<li class="product product-no-border style-2">
																<div class="product-container">
																	<figure>
																		<div class="product-wrap">
																			<div class="product-images">
																				<span class="onsale">Sale!</span>
																				<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""/></a>
																				</div>
																				<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""/></a>
																				</div>
																			</div>
																		</div>
																		<figcaption>
																			<div class="shop-loop-product-info">
																				<div class="info-meta clearfix">
																					<div class="star-rating">
																						<span style="width:0%"></span>
																					</div>
																					<div class="loop-add-to-wishlist">
																						<div class="yith-wcwl-add-to-wishlist">
					                                                                        <div class="yith-wcwl-add-button">
					                                                                            <a href="#" class="add_to_wishlist">
					                                                                                Add to Wishlist
					                                                                            </a>
					                                                                        </div>
					                                                                    </div>
					                                                                </div>
																				</div>
																				<div class="info-content-wrap">
																					<h3 class="product_title">
																						<a href="shop-detail-1.html">Hans Wegner Two Seat Sofa</a>
																					</h3>
																					<div class="info-price">
																						<span class="price">
																							<del><span class="amount">£20.50</span></del> 
																							<ins><span class="amount">£19.00</span></ins>
																						</span>
																					</div>
																					<div class="loop-action">
																						<div class="loop-add-to-cart">
																							<a href="#" class="add_to_cart_button">
																								Add to cart
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</figcaption>
																	</figure>
																</div>
															</li>
															<li class="product product-no-border style-2">
																<div class="product-container">
																	<figure>
																		<div class="product-wrap">
																			<div class="product-images">
																				<span class="onsale">Sale!</span>
																				<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""/></a>
																				</div>
																				<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																					<a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""/></a>
																				</div>
																			</div>
																		</div>
																		<figcaption>
																			<div class="shop-loop-product-info">
																				<div class="info-meta clearfix">
																					<div class="star-rating">
																						<span style="width:0%"></span>
																					</div>
																					<div class="loop-add-to-wishlist">
																						<div class="yith-wcwl-add-to-wishlist">
					                                                                        <div class="yith-wcwl-add-button">
					                                                                            <a href="#" class="add_to_wishlist">
					                                                                                Add to Wishlist
					                                                                            </a>
					                                                                        </div>
					                                                                    </div>
					                                                                </div>
																				</div>
																				<div class="info-content-wrap">
																					<h3 class="product_title">
																						<a href="shop-detail-1.html">Hans Wegner Desk</a>
																					</h3>
																					<div class="info-price">
																						<span class="price">
																							<del><span class="amount">£20.50</span></del> 
																							<ins><span class="amount">£19.00</span></ins>
																						</span>
																					</div>
																					<div class="loop-action">
																						<div class="loop-add-to-cart">
																							<a href="#" class="add_to_cart_button">
																								Add to cart
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</figcaption>
																	</figure>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div> 
									<div class="woo-instagram">
										<h3 class="heading-center-custom">
											<span>Instashop</span>
										</h3>
										<div class="instagram">
											<div class="instagram-wrap">
												<div class="caroufredsel caroufredsel-item-no-padding" data-height="variable" data-scroll-fx="scroll" data-scroll-item="1" data-visible-min="1" data-visible-max="4" data-responsive="1" data-infinite="1" data-autoplay="0" data-circular="1">
													<div class="caroufredsel-wrap">
														<ul class="caroufredsel-items row">
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7HXbHJjB" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7GdlHJi-" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7F21HJi9" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7E8jHJi6" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7DlgnJi2" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7CicnJi1" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T7AWbHJiz" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T6_MAnJix" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T6-PbnJiw" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T69ipHJit" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T68pOHJiq" title="Instagram Image" target="_blank">
																	<img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
															<li class="caroufredsel-item col-sm-3 col-xs-6">
																<a href="//instagram.com/p/6T672znJip" title="Instagram Image" target="_blank">
																	<img src="../images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
																</a>
															</li>
														</ul>
														<a href="#" class="caroufredsel-prev"></a>
														<a href="#" class="caroufredsel-next"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div>
			<footer id="footer" class="footer">
				<div class="footer-newsletter">
					<div class="container">
						<div class="footer-newsletter-wrap">
							<h3 class="footer-newsletter-heading">NEWSLETTER</h3>
							<form class="mailchimp-form">
								<div class="mailchimp-form-content clearfix">
									<label for="subscribe_email" class="hide">Subscribe</label>
									<input type="email" id="subscribe_email" class="form-control" required="required" placeholder="Enter your email..." name="email">
									<button type="submit" class="btn mailchimp-submit">sign up</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="footer-featured">
					<div class="container">
						<div class="row">
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-money"></i>
								<h4 class="footer-featured-title">
									100% <br> return money
								</h4>
								free return standard order in 30 days 
							</div>
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-globe"></i>
								<h4 class="footer-featured-title">
									world wide <br> delivery
								</h4>
								free ship for payment over $100
							</div>
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-clock-o"></i>
								<h4 class="footer-featured-title">
									24h <br> shipment 
								</h4>
								for standard package 
							</div>
						</div>
					</div>
				</div>
				<div class="footer-widget">
					<div class="container">
						<div class="footer-widget-wrap">
							<div class="row">
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_text">
										<div class="textwidget">
											<ul class="address">
												<li>
													<i class="fa fa-home"></i>
													<h4>Address:</h4>
													<p>132 Jefferson Avenue, Suite 22, Redwood City, CA 94872, USA</p>
												</li>
												<li>
													<i class="fa fa-mobile"></i>
													<h4>Phone:</h4>
													<p>(00) 123 456 789</p>
												</li>
												<li>
													<i class="fa fa-envelope"></i>
													<h4>Email:</h4>
													<p><a href="mailto:email@domain.com">email@domain.com</a></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_nav_menu">
										<h3 class="widget-title">
											<span>infomation</span>
										</h3>
										<div class="menu-infomation-container">
											<ul class="menu">
												<li><a href="#">About Us</a></li>
												<li><a href="#">Contact Us</a></li>
												<li><a href="#">Term &#038; Conditions</a></li>
												<li><a href="#">Gift Voucher</a></li>
												<li><a href="#">BestSellers</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_nav_menu">
										<h3 class="widget-title">
											<span>Customer Care</span>
										</h3>
										<div class="menu-customer-care-container">
											<ul class="menu">
												<li><a href="#">Support</a></li>
												<li><a href="#">Sitemap</a></li>
												<li><a href="#">FAQ</a></li>
												<li><a href="#">Shipping</a></li>
												<li><a href="#">Returns</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_text">
										<h3 class="widget-title">
											<span>open house</span>
										</h3>
										<div class="textwidget">
											<ul class="open-time">
												<li><span>Mon - Fri:</span><span>8am - 5pm</span> </li>
												<li><span>Sat:</span><span>8am - 11am</span> </li>
												<li><span>Sun: </span><span>Closed</span></li>
											</ul>
											<h3 class="widget-title">
												<span>payment Menthod</span>
											</h3>
											<div class="payment">
												<a href="#"><i class="fa fa-cc-mastercard"></i></a>
												<a href="#"><i class="fa fa-cc-visa"></i></a>
												<a href="#"><i class="fa fa-cc-paypal"></i></a>
												<a href="#"><i class="fa fa-cc-discover"></i></a>
												<a href="#"><i class="fa fa-credit-card"></i></a>
												<a href="#"><i class="fa fa-cc-amex"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright text-center">
					© 2015 WOOW - Responsive Commerce Theme
				</div>
			</footer>
		</div>

		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
							</div>
							<div class="checkbox clearfix">
								<label class="form-flat-checkbox pull-left">
									<input type="checkbox" name="rememberme" id="rememberme" value="forever">
									<i></i>&nbsp;Remember Me
								</label>
								<span class="lostpassword-modal-link pull-right">
									<a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
								</span>
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Not a Member yet?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userregisterModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Register account</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="user_password">Password</label>
								<input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="user_password">Retype password</label>
								<input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="minicart-side">
			<div class="minicart-side-title">
				<h4>Shopping Cart</h4>
			</div>
			<div class="minicart-side-content">
				<div class="minicart">
					<div class="minicart-header no-items show">
						Your shopping bag is empty.
					</div>
					<div class="minicart-footer">
						<div class="minicart-actions clearfix">
							<a class="button no-item-button" href="#">
								<span class="text">Go to the shop</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/easing.min.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		<script type='text/javascript' src='js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='js/jquery.cookie.min.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel.js'></script>
		<script type='text/javascript' src='js/jquery.magnific-popup.js'></script>

		<script type='text/javascript' src='js/core.min.js'></script>
		<script type='text/javascript' src='js/widget.min.js'></script>
		<script type='text/javascript' src='js/mouse.min.js'></script>
		<script type='text/javascript' src='js/slider.min.js'></script>
		<script type='text/javascript' src='js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='js/price-slider.js'></script>
		<script>
    var formValid = document.getElementById('bouton');
            var id = document.getElementById('id');
            var missid = document.getElementById('missid');
            var idValid = /^[A-Z-a-z]/;
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (id.validity.valueMissing){
                    event.preventDefault();
                    missid.textContent = 'Nom manquant';
                    missid.style.color = 'red';
                //Si le format de données est incorrect
                }else if (idValid.test(id.value) == false){
                    event.preventDefault();
                    missid.textContent = 'Format incorrect';
                    missid.style.color = 'orange';
                }
            }
    </script>
    <script>
    	var formValid = document.getElementById('bouton');
            var idlogin = document.getElementById('idlogin');
            var missidlogin = document.getElementById('missidlogin');
            var idloginValid = /[0-9]/;
            
            formValid.addEventListener('click', validation3);
            
            function validation3(event){
				//Si le champ est vide
                if (idlogin.validity.valueMissing){
                    event.preventDefault();
                    missidlogin.textContent = 'Login manquant';
                    missidlogin.style.color = 'red';
                //Si le format de données est incorrect
                }else if (idloginValid.test(idlogin.value) == false){
                    event.preventDefault();
                   missidlogin.textContent = 'Format incorrect';
                   missidlogin.style.color = 'orange';
               }
            }</script>
            <script>
    	var formValid = document.getElementById('bouton');
            var idcomm = document.getElementById('idcomm');
            var missidcomm = document.getElementById('missidcomm');      
            formValid.addEventListener('click', validation4);
            
            function validation4(event){
				//Si le champ est vide
                if (idcomm.validity.valueMissing){
                    event.preventDefault();
                    missidcomm.textContent = 'Commentaire manquant';
                    missidcomm.style.color = 'red';
                }
            }</script>
        <script>
    	var formValid = document.getElementById('bouton1');
            var idr = document.getElementById('idr');
            var missidr = document.getElementById('missidr');
        
            
            formValid.addEventListener('click', validation6);
            
            function validation6(event){
				//Si le champ est vide
                if (idr.validity.valueMissing){
                    event.preventDefault();
                    missidr.textContent = 'Sujet manquant';
                    missidr.style.color = 'red';
            
                }
            }</script>
            <script>
    	var formValid = document.getElementById('bouton1');
            var type = document.getElementById('type');
            var misstype = document.getElementById('misstype');
        
            
            formValid.addEventListener('click', validation7);
            
            function validation7(event){
				//Si le champ est vide
                if (type.validity.valueMissing){
                    event.preventDefault();
                    misstype.textContent = 'Reclamation manquant';
                    misstype.style.color = 'red';
            
                }
            }</script>
	</body>
</html>