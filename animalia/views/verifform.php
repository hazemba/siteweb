<?php
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=projetweb", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET['terme'];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

 if (isset($terme))
 {
  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT name,login,comment FROM commentaire WHERE name LIKE ? OR comment LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
?>
<!DOCTYPE html>
<html>
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
    <style>
 .element {
width: 250px; 
height: 350px;
margin:0px;
position:relative;
display:inline-block;
vertical-align:top;    
}
div#columns figure {
    display: inline-block;
    background: #FEFEFE;
    border: 2px solid #FAFAFA;
    box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
    margin: 0 0px 15px;
    -webkit-column-break-inside: avoid;
    -moz-column-break-inside: avoid;
    column-break-inside: avoid;
    padding: 15px;
    padding-bottom: 5px;
    background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
    opacity: 1;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

#columns figure:hover{
    -webkit-transform: scale(1.1);
    -moz-transform:scale(1.1);
    transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
    opacity: 0.4;
}

</style>
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
                  <form class="searchform">
                    <input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
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
                          
                                
                            </p>

  <?php
  while($terme_trouve = $select_terme->fetch())
  {
  	  ?>  <div class="element" id="columns" >
                            
                        
                            <figure>
                            
                                
                                      
                                    
                                 
                                       <h4><?php echo $terme_trouve['name']; ?></h4>
                                       <p><?php echo $terme_trouve ['login']; ?></p>
                                       <div><?php echo $terme_trouve['comment']; ?></div>
                                   
                                </figure>     
                                        
                            </div>
                        
                                
                             
                             
                           
                    


                  <?php
  
  }
  $select_terme->closeCursor();
   ?>
 </body>
</html>