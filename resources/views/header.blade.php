<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- search Popup -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="index.html" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
    </form>
</div>
<!-- search Popup end -->

<!--sidebar menu start-->
<div class="sidebar-menu" id="sidebar-menu">
    <button class="sidebar-menu-close">X</button>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            {{Html::image("/img/logo.png", "")}}
        </div>
        <div class="sidemenu-text">
            <p>Creemos que la interacción de la marca es clave en la comunicación. Innovaciones reales y un cliente positivo
                la experiencia son el corazón de una comunicación exitosa.</p>
        </div>
        <div class="sidebar-contact">
            <h4>Contácto</h4>
            <ul>
                <li><i class="fa fa-map-marker"></i>Santiago, Chile</li>
                <li><i class="fa fa-envelope"></i>amartecrea@gmail.com</li>
                <li><i class="fa fa-phone"></i>(+56) 987016735</li>
            </ul>
        </div>
        <div class="sidebar-subscribe">
            <input type="text" placeholder="Email">
            <button><i class="fa fa-long-arrow-right"></i></button>
        </div>
        <div class="social-link">
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100066111364207"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/amartecrea/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!--sidebar menu end-->

<!-- navbar start -->
<div class="stoon-navbar">
    <div class="header-top dark-header-top d-none d-md-block">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-8">
                    <div class="contact">
                        <a href="tel:+56 987016735"><i class="icon-call-header"></i> (+56) 9 87016735 </a>
                        <a href="#"><i class="icon-email-subscribe"></i> amartecrea@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="social">
                        <ul class="nav-social justify-lg-content-center justify-content-center">
                            <li><a href="https://www.facebook.com/profile.php?id=100066111364207"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/amartecrea/"><i class="icon-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <div class="right-nav text-right">
                        <ul>
                            <li>
                                <div class="select-menu">
                                    <select class="menu-select">
                                        <option>Español</option>
                                    </select>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
        <div class="container-fluid nav-container">
            <div class="row">
                <div class="col-lg-3 col-4 order-1 align-self-center">
                    <div class="logo">
                        <a href="/Home">{{Html::image("/img/IDENTIDADAMARTE-06_opt.jpg", "")}}
                    </div>
                </div>
                <div class="col-lg-6 order-3 order-lg-2">
                    <div class="collapse navbar-collapse" id="shop-menu">
                        <ul class="navbar-nav menu-open">
                            <li class="menu-item-has-children">
                                <!--<a href="#">Home <i class="fa fa-angle-down"></i></a>-->
                                <ul class="sub-menu">
                                    <!--<li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-4.html">Home 04</a></li>
                                    <li><a href="index-5.html">Home 05</a></li>-->
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">COMPRAR <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <!--<li><a href="collection.html">Shop Grid</a></li>-->
                                    <li><a href="/Productos/">Productos</a></li>
                                   <!-- <li><a href="collection-full.html">Shop Full</a></li>-->
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">PÁGINAS <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="/blog/">Blog</a></li>
                                    <li><a href="/carrito/">Carrito</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">Sobre nosotros</a></li>
                            <li><a href="/Contacto/">Contácto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-8 justify-content-end d-flex order-2 order-lg-3">
                    <div class="nav-right-part nav-right-part-02">
                        <ul>
                            <li>
                                <a href="#" id="search"><i class="icon-search"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-heart"></i><span class="badge badge-green">2</span></a>
                            </li>
                            <li class="has-dropdown">
                                <a href="#"><i class="icon-add-to-cat"></i><span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span></a>
                                <form action="/compra" method="POST" id="carrito-form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <ul id="my-cart-checkout-id">
                                        <li>
                                            <h6 class="tprice"><span>Total precio: </span>$0</h6>
                                            <div class="btn-wrapper">
                                                <input type="submit" class="btn btn-cart" value="Go to cart">
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="responsive-mobile-menu">
                        <div class="menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-target="#shop-menu" aria-expanded="false" role="button">
                            <div class="icon-left"></div>
                            <div class="icon-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- navbar end -->
