@extends('layout')
@section('title', 'Home')
@section('content')
<!-- banner start -->
<div class="banner-style-02">
    <div class="banner-slider-02 mb-0">
        <div>
            <!--portada principal -->
            <div class="banner__bg2 d-flex align-items-center justify-content-center text-center" style="background: url('portada-1.jpg') no-repeat center center/cover">
                <!--portada principal -->
                <div class="container-fluid px-5">
                    <div class="banner-content">
                        <h3 class="subtitle" data-animation-in="fadeInLeft">FIND YOUR</h3>
                        <h2 class="title" data-animation-in="fadeInRight">EVERYDAY FASHION</h2>
                        <div class="margin-top-50 pl-1">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-black" href="#">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="banner__bg2 d-flex align-items-center justify-content-center text-center" style="background: url('portada2.jpg') no-repeat center center/cover">
                <div class="container-fluid px-5">
                    <div class="banner-content">
                        <h3 class="subtitle" data-animation-in="fadeInLeft">30% OFF</h3>
                        <h2 class="title" data-animation-in="fadeInRight">FAVOURITE CLOTHING</h2>
                        <div class="margin-top-50 pl-1">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-black" href="#">GET COLLECTION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- collection banner start / portada women, accesorios y men's -->

<div class="collection-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="collection-style-02 margin-top-20">
                    <div class="thumb">
                        <img src="portada-women.jpg", "">
                        <div class="content">
                            <h3>WOMEN'S</h3>
                            <h6>Collection</h6>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-collection">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="collection-style-02 margin-top-20">
                    <div class="thumb">
                        <img src="portada-accessories.jpg", "">
                        <div class="content">
                            <h3>ACCESSORIES</h3>
                            <h6>Collection</h6>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-collection">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="collection-style-02 margin-top-20">
                    <div class="thumb">
                        {{Html::image("img/collection/8.png", "")}}
                        <div class="content">
                            <h3>MEN'S</h3>
                            <h6>Collection</h6>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-collection">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- collection area end  -->

<!-- tranding area start  // portada new, women, men-->
<div class="tranding-area margin-top-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-02 text-cent// portada new, women, mener">
                    <h6>DISCOVER SOMETHING</h6>
                    <h3>NEW ARRIVALS</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills tranding-tab">
                    <li class="mt-2"><a data-toggle="pill" href="#one" class="active">NEW IN</a></li>
                    <li class="mt-2"><a data-toggle="pill" href="#two">MEN</a></li>
                    <li class="mt-2"><a data-toggle="pill" href="#three">WOMEN</a></li>
                </ul>
            </div>
        </div>

        <!-- new-portada-->

        <div class="tab-content">
            <div class="tab-pane fade in show active" id="one">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                <img src="portada-new.jpg", "">
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$15.000</span>
                                        <span class="new-price">$10.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/5.png", "")}}
                                <span class="new">NEW</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Round neck sweater</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/6.png", "")}}
                                <span class="sale">SALE! 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/1.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/2.png", "")}}
                                <span class="sale">SALE 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">FPlaid Cotton Oxford Shirt</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/3.png", "")}}
                                <span class="sale">SALE 13%</span>
                                <span class="new margin-top-35">NEW</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="two">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/4.png", "")}}
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/5.png", "")}}
                                <span class="new">NEW</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Round neck sweater</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/6.png", "")}}
                                <span class="sale">SALE! 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/1.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/2.png", "")}}
                                <span class="sale">SALE 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">FPlaid Cotton Oxford Shirt</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/3.png", "")}}
                                <span class="sale">SALE 13%</span>
                                <span class="new margin-top-35">NEW</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="three">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/6.png", "")}}
                                <span class="sale">SALE! 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/3.png", "")}}
                                <span class="sale">SALE 13%</span>
                                <span class="new margin-top-35">NEW</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/1.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/2.png", "")}}
                                <span class="sale">SALE 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">FPlaid Cotton Oxford Shirt</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/4.png", "")}}
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/tranding/5.png", "")}}
                                <span class="new">NEW</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Round neck sweater</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$400.00</span>
                                        <span class="new-price">$450.00</span>
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
<!-- tranding area end  -->

<!-- collection section start  -->
<div class="collection-section margin-top-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="collection-slider-02">
                    <div class="collection-slider-item margin-top-20">
                        <div class="thumb">
                            {{Html::image("img/collection/13.png", "")}}
                            <div class="thumb-content">
                                <h4>MENS COLLECTION</h4>
                                <h2>SALE</h2>
                                <h3>FLAT 20%</h3>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-collection">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collection-slider-item margin-top-20">
                        <div class="thumb">
                            {{Html::image("img/collection/14.png", "")}}
                            <div class="thumb-content">
                                <h4>TOP TENDING</h4>
                                <h2>40%</h2>
                                <h3>OFF EVERYTHING</h3>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-collection">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collection-slider-item margin-top-20">
                        <div class="thumb">
                            {{Html::image("img/collection/13.png", "")}}
                            <div class="thumb-content">
                                <h4>MENS COLLECTION</h4>
                                <h2>SALE</h2>
                                <h3>FLAT 20%</h3>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-collection">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collection-slider-item margin-top-20">
                        <div class="thumb">
                            {{Html::image("img/collection/14.png", "")}}
                            <div class="thumb-content">
                                <h4>TOP TENDING</h4>
                                <h2>40%</h2>
                                <h3>OFF EVERYTHING</h3>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-collection">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- collection section end  -->

<!-- arrivals area start  -->
<div class="arrivals-area margin-top-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-02 text-center">
                    <h6 class="mb-0">EVERYDAY ITEMS AND MORE</h6>
                    <h3 class="mb-0">LATEST COLLECTION</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills collection-tab mt-0">
                    <li class="margin-top-20"><a data-toggle="pill" href="#hot" class="active">Hot Collection</a>
                    </li>
                    <li class="margin-top-20"><a data-toggle="pill" href="#best">Best Sellers</a></li>
                    <li class="margin-top-20"><a data-toggle="pill" href="#sale">Sale Product</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade in show active" id="hot">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/8.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/3.png", "")}}
                                <span class="sale">SALE 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Plaid Cotton Oxford Shirt</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/13.png", "")}}
                                <span class="sale">SALE 13%</span>
                                <span class="new margin-top-35">NEW</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="best">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/1.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/3.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Plaid Cotton Oxford Shirt</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/13.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sale">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/8.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/2.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Plaid Cotton Oxford Shirt</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-04 margin-top-40">
                            <div class="thumb">
                                {{Html::image("img/arrival/13.png", "")}}
                                <span class="out">SOLD OUT</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                </div>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add
                                            to cart</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="new-price">$450.00</span>
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
<!-- arrivals area end  -->

<div class="video-area margin-top-80 margin-bottom-75">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                <div class="video-content" style="background: url('img/others/video.png') no-repeat center center/cover">
                    <a href="#" class="video-btn-style-02"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- article area start  -->
<div class="article-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-02 margin-bottom-30 text-center">
                    <h6>FASHION FOR ALL</h6>
                    <h3>LATEST BLOG</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="article-style-01">
                    <div class="thumb">
                        {{Html::image("img/blog/1.png", "")}}
                        <span class="tag tag-green">MODAL</span>
                    </div>
                    <div class="content">
                        <span class="date">June 24, 2020</span>
                        <h3><a href="#">Never putting your Cocktail down to leave</a></h3>
                        <p>It reopened this year following a refurb which aims to cement its place a surfer’s
                            paradise. It now boasts two.</p>
                        <div class="btn-wrapper">
                            <a href="#" class="btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="article-style-01">
                    <div class="thumb">
                        {{Html::image("img/blog/2.png", "")}}
                        <span class="tag tag-green">LIFESTYLE</span>
                    </div>
                    <div class="content">
                        <span class="date">June 24, 2020</span>
                        <h3><a href="#">7 Things You Can’t Wear After Labor Day Read</a></h3>
                        <p>Typography is the work of typesetters, compositors, typographers, graphic designers, art
                            directors, manga</p>
                        <div class="btn-wrapper">
                            <a href="#" class="btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="article-style-01">
                    <div class="thumb">
                        {{Html::image("img/blog/3.png", "")}}
                        <span class="tag tag-green">FASHION TRENDS</span>
                    </div>
                    <div class="content">
                        <span class="date">June 24, 2020</span>
                        <h3><a href="#">Never putting your Cocktail down to leave</a></h3>
                        <p>It reopened this year following a refurb which aims to cement its place a surfer’s
                            paradise. It now boasts two.</p>
                        <div class="btn-wrapper">
                            <a href="#" class="btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- article area end  -->

<div class="fashion-area margin-top-30 padding-bottom-65">
    <div class="container">
        <div class="fashion-slider">
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="thumb">
                        {{Html::image("img/fashion/1.png", "")}}
                    </div>
                </div>
                <div class="col-md-6 align-self-center text-center">
                    <div class="content">
                        <h6>EVERYDAY ITEMS AND MORE</h6>
                        <h3>LATEST COLLECTION</h3>
                        <p>The bay has a rich surfing history and some legendary waves. Camper vans and board short
                            wearing types line the seafront from dawn until dusk.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <span class="price">$292</span>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-collection" tabindex="0"><i class="icon-add-to-cat"></i> ADD
                                TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="thumb">
                        {{Html::image("img/fashion/1.png", "")}}
                    </div>
                </div>
                <div class="col-md-6 align-self-center text-center">
                    <div class="content">
                        <h6>EVERYDAY ITEMS AND MORE</h6>
                        <h3>LATEST COLLECTION</h3>
                        <p>The bay has a rich surfing history and some legendary waves. Camper vans and board short
                            wearing types line the seafront from dawn until dusk.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <span class="price">$292</span>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-collection" tabindex="0"><i class="icon-add-to-cat"></i> ADD
                                TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="thumb">
                        {{Html::image("img/fashion/1.png", "")}}
                    </div>
                </div>
                <div class="col-md-6 align-self-center text-center">
                    <div class="content">
                        <h6>EVERYDAY ITEMS AND MORE</h6>
                        <h3>LATEST COLLECTION</h3>
                        <p>The bay has a rich surfing history and some legendary waves. Camper vans and board short
                            wearing types line the seafront from dawn until dusk.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <span class="price">$292</span>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-collection" tabindex="0"><i class="icon-add-to-cat"></i> ADD
                                TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- brand-area start -->
<div class="brand-area padding-top-30 padding-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-slider border-bottom-0 padding-top-30">
                    <div class="brant-item">
                        {{Html::image("img/brand/brand1.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand2.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand3.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand4.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand5.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand6.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand1.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand2.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand3.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand4.png", "brand")}}
                    </div>
                    <div class="brant-item">
                        {{Html::image("img/brand/brand5.png", "brand")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area end -->

<!-- contact area start  -->
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content text-center padding-top-80 padding-bottom-80 bg-image" data-bg="assets/img/others/contact-02.png">
                    <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                    <h6>Get updates by subscribe our weekly newsletter</h6>
                    <form>
                        <div class="form-row align-items-center justify-content-center">
                            <div class="col-10 col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="icon-email-subscribe"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email Address">
                                    <div class="subscribe-text"> <a href="#">subscribe</a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end  -->

<!-- delivery area start  -->
<div class="delivery-area">
    <div class="container">
        <div class="border-bottom padding-top-50 padding-bottom-80">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-delivery-02 border-top-0 d-flex justify-content-center p-0 margin-top-30">
                        <div class="left">
                            <i class="icon-delivery-car green-icon"></i>
                        </div>
                        <div class="right">
                            <h6>FREE SHIPPING, RETURN</h6>
                            <p>Free Shipping On All US Orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-delivery-02 border-top-0 d-flex justify-content-center p-0 margin-top-30">
                        <div class="left">
                            <i class="icon-money-back green-icon"></i>
                        </div>
                        <div class="right">
                            <h6>MONEY BACK GUARANTEE</h6>
                            <p>30 Days Money Back Guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-delivery-02 border-top-0 d-flex justify-content-center p-0 margin-top-30">
                        <div class="left">
                            <i class="icon-phone-support green-icon"></i>
                        </div>
                        <div class="right">
                            <h6>1-800-333-44-55</h6>
                            <p>24/7 Days Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- delivery area end  -->

<!-- instagram start -->
<div class="instagram-area margin-top-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-02 margin-bottom-20 text-center">
                    <h6>FOLLOW US</h6>
                    <h3>#BANDSHOP INSTA</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="instagram-slider">
                    <div class="thumb">
                        {{Html::image("img/instagram/1.png", "")}}
                    </div>
                    <div class="thumb">
                        {{Html::image("img/instagram/2.png", "")}}
                    </div>
                    <div class="thumb">
                        {{Html::image("img/instagram/3.png", "")}}
                    </div>
                    <div class="thumb">
                        {{Html::image("img/instagram/4.png", "")}}
                    </div>
                    <div class="thumb">
                        {{Html::image("img/instagram/5.png", "")}}
                    </div>
                    <div class="thumb">
                        {{Html::image("img/instagram/6.png", "")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection