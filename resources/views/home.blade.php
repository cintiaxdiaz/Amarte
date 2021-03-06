@extends('layout')
@section('title', 'Home')
@section('content')
<!-- banner start -->
<div class="banner-style-02">
    <div class="banner-slider-02 mb-0">
        <div>
            <!--portada principal -->
            <div class="banner__bg2 d-flex align-items-center justify-content-center text-center"
                style="background: url('/img/portada-1.jpg') no-repeat center center/cover">
                
                <!--portada principal -->
                <div class="container-fluid px-5">
                    <div class="banner-content">
                        <h3 class="subtitle" data-animation-in="fadeInLeft">ENCUENTRA TU</h3>
                        <h2 class="subtitle" data-animation-in="fadeInRight">ESTILO</h2>
                        <div class="margin-top-50 pl-1">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-black" href="/Productos/">COMPRAR AHORA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="banner__bg2 d-flex align-items-center justify-content-center text-center"
                style="background: url('/img/portada2.jpg') no-repeat center center/cover">
                <div class="container-fluid px-5">
                    <div class="banner-content">
                        <h3 class="subtitle" data-animation-in="fadeInLeft">30% OFF</h3>
                        <h2 class="title" data-animation-in="fadeInRight">ACCESORIOS FAVORITOS</h2>
                        <div class="margin-top-50 pl-1">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-black" href="/Productos/">COLECCIÓN</a>
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

                        {{Html::image("/img/collection/portada-women.jpg", "")}}

                        <div class="content">
                            <h3>MUJER</h3>
                            <h6>COLECCIÓN</h6>
                            <div class="btn-wrapper">
                                <a href="/Productos/" class="btn btn-collection">COMPRAR AHORA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="collection-style-02 margin-top-20">
                    <div class="thumb">
                        {{Html::image("/img/collection/portada-accessories.jpg", "")}}
                        <div class="content">
                            <h3>ACCESORIOS</h3>
                            <h6>COLECCIÓN</h6>
                            <div class="btn-wrapper">
                                <a href="/Productos/" class="btn btn-collection">COMPRAR AHORA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="collection-style-02 margin-top-20">
                    <div class="thumb">
                        {{Html::image("/img/collection/portada!!.jpg", "")}}<!--Portada mens -->
                        <div class="content">
                            <h3>CURSOS</h3>
                            <h6>COLECCIÓN</h6>
                            <div class="btn-wrapper">
                                <a href="/Productos/" class="btn btn-collection">COMPRAR AHORA</a>
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
                    <h6></h6>
                    <h3>LO NUEVO</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills tranding-tab">
                    <li class="mt-2"><a data-toggle="pill" href="#one" class="active">LO MÁS NUEVO</a></li>
                    <!-- MENU DE WOMEN Y MENS-->
                    <!--<li class="mt-2"><a data-toggle="pill" href="#two">MEN</a></li>-->
                   <!-- <li class="mt-2"><a data-toggle="pill" href="#three">WOMEN</a></li>-->
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
                                {{Html::image("/img/tranding/portada-new.png", "")}}
                                <span class="new">NUEVO</span>


                                <ul class="cart-action-02">
                                    <li><a href=""><i class="icon-heart"></i></a></li>
                                    <li><a href=""><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                                
                            <div class="content text-left">

                                <span class="brand">MARCA:AMARTE</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="/singleProducto/1">Crop-Top Px4</a></h6>
                                    
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Agregar al carrito</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$18.000</span>
                                        <span class="new-price">$15.000</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("/img/tranding/cartera-new-portada.png", "")}}
                                <span class="new">NUEVO</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">MARCA:AMARTE</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="/singleProducto/11">Cartera TR</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Agregar al carrito</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$20.000</span>
                                        <span class="new-price">$18.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("/img/tranding/conjuntotejido.png", "")}}
                                <span class="sale">SALE! 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">MARCA:AMARTE</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="/singleProducto/12">Conjunto TS</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Agregar al carrito</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$35.000</span>
                                        <span class="new-price">$30.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("/img/tranding/croptop-sirena.jpg", "")}}
                                <span class="out">LO MÁS VENDIDO</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">MARCA:AMARTE</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="/singleProducto/5">Crop-Top Sirena</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Agregar al carrito</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$25.000</span>
                                        <span class="new-price">$20.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("/img/tranding/cartera-redonda-flecos.jpg", "")}}
                                <span class="sale">SALE 13%</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">MARCA:AMARTE</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="/singleProducto/3">Cartera Flecos</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Agregar al carrito</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$25.000</span>
                                        <span class="new-price">$20.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-02 margin-top-40">
                            <div class="thumb">
                                {{Html::image("/img/tranding/top-crazy.jpg", "")}}
                                <span class="sale">SALE 13%</span>
                                <span class="new margin-top-35">NUEVO</span>
                                <ul class="cart-action-02">
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                    <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                </ul>
                            </div>
                            <div class="content text-left">
                                <span class="brand">MARCA:AMARTE</span>
                                <ul class="justify-content-start margin-bottom-10">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="/singleProducto/13">Crop-Top Crazy</a></h6>
                                <div class="d-flex position-relative">
                                    <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Agregar al carrito</a></div>
                                    <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                    <div class="content-price d-flex flex-column align-self-center">
                                        <span class="old-price">$22.000</span>
                                        <span class="new-price">$20.000</span>
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
<!--  end  -->

<!-- collection section start  -->
<div class="collection-section margin-top-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="collection-slider-02">
                    <div class="collection-slider-item margin-top-20">
                        <div class="thumb">
                            {{Html::image("/img/collection/top-sale.jpg", "")}}
                            <div class="thumb-content">
                                <h4>COLECCIÓN</h4>
                                <h2>SALE</h2>
                                <h3>20%</h3>
                                <div class="btn-wrapper">
                                    <a href="/Productos/" class="btn btn-collection">COMPRAR AHORA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collection-slider-item margin-top-20">
                        <div class="thumb">
                            {{Html::image("/img/collection/trajes-sale.jpg", "")}}
                            <div class="thumb-content">
                                <h4>LO MÁS TOP</h4>
                                <h2>40%</h2>
                                <h3>EN TODO</h3>
                                <div class="btn-wrapper">
                                    <a href="/Productos/" class="btn btn-collection">COMPRAR AHORA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collection-slider-item margin-top-20">
                        <div class="thumb">
                            {{Html::image("/img/collection/13.png", "")}}
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
                            {{Html::image("/img/collection/14.png", "")}}
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



<!-- article area start  -->
<div class="article-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-02 margin-bottom-30 text-center">
                    <h6>MODA PARA TODAS</h6>
                    <h3>BLOG</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="article-style-01">
                    <div class="thumb">
                        {{Html::image("/img/blog/aprender.jpg", "")}}
                        <span class="tag tag-green">MODA</span>
                    </div>
                    <div class="content">
                        <span class="date">Abril 27, 2021</span>
                        <h3><a href="#">¿Por dónde empezar?</a></h3>
                        <p>Saber elegir la aguja según el tipo de material y grosor que vamos a trabajar así como la tarea a realizar, 
                            es fundamental a la hora de empezar a hacer ganchillo. Es importante conocer el grosor del hilo, lana o trapillo, 
                            normalmente viene especificado en las etiquetas de dichos productos, pero para que te puedas hacer una idea.</p>
                        <div class="btn-wrapper">
                            <a href="#" class="btn">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="article-style-01">
                    <div class="thumb">
                        {{Html::image("/img/blog/outfit.jpg", "")}}
                        <span class="tag tag-green">ESTILO DE VIDA</span>
                    </div>
                    <div class="content">
                        <span class="date">Mayo 30, 2021</span>
                        <h3><a href="#">Outfit tejidos</a></h3>
                        <p>¿No sabes como crear outfit con tus piezas tejidas?
                            entonces estas el blog correcto...</p>
                        <div class="btn-wrapper">
                            <a href="#" class="btn">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="article-style-01">
                    <div class="thumb">
                        {{Html::image("/img/blog/beneficios.jpg", "")}}
                        <span class="tag tag-green">TENDENCIAS DE LA MODA</span>
                    </div>
                    <div class="content">
                        <span class="date">June 24, 2020</span>
                        <h3><a href="#">Beneficios de tejer..</a></h3>
                        <p>Hay quien se entretiene realizando maquetas, pintando, haciendo fotografías, o tejiendo. La idea de que tejer es una práctica “de abuelas” 
                            ha pasado a la historia, ya que hoy en día constituye una actividad de ocio que se ha puesto de moda incluso entre los más jóvenes.</p>
                        <div class="btn-wrapper">
                            <a href="#" class="btn">Leer más</a>
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
                        {{Html::image("/img/fashion/crop-patilla.jpg", "")}}
                    </div>
                </div>
                <div class="col-md-6 align-self-center text-center">
                    <div class="content">
                        <h6>ARTÍCULOS DIARIOS</h6>
                        <h3>ÚLTIMA COLECCIÓN</h3>
                        <p>The bay has a rich surfing history and some legendary waves. Camper vans and board short
                            wearing types line the seafront from dawn until dusk.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <span class="price">$30.000</span>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-collection" tabindex="0"><i class="icon-add-to-cat"></i> Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="thumb">
                        {{Html::image("/img/fashion/top-modelo.jpg", "")}}
                    </div>
                </div>
                <div class="col-md-6 align-self-center text-center">
                    <div class="content">
                        <h6>ARTÍCULOS DIARIOS</h6>
                        <h3>ÚLTIMA COLECCIÓN</h3>
                        <p>The bay has a rich surfing history and some legendary waves. Camper vans and board short
                            wearing types line the seafront from dawn until dusk.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <span class="price">$26.000</span>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-collection" tabindex="0"><i class="icon-add-to-cat"></i> Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="thumb">
                        {{Html::image("/img/fashion/top-crazy.jpg", "")}}
                    </div>
                </div>
                <div class="col-md-6 align-self-center text-center">
                    <div class="content">
                        <h6>ARTÍCULOS DIARIOS</h6>
                        <h3>ÚLTIMA COLECCIÓN</h3>
                        <p>The bay has a rich surfing history and some legendary waves. Camper vans and board short
                            wearing types line the seafront from dawn until dusk.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <span class="price">$26.000</span>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-collection" tabindex="0"><i class="icon-add-to-cat"></i> Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- contact area start  -->
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content text-center padding-top-80 padding-bottom-80 bg-image"
                    data-bg="assets/img/others/contact-02.png">
                    <h2>SUSCRÍBETE A NUESTRO NEWSLETTER</h2>
                    <h6>Recibe actualizaciones suscribiéndote a nuestro Newsletter</h6>
                    <form>
                        <div class="form-row align-items-center justify-content-center">
                            <div class="col-10 col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="icon-email-subscribe"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                        placeholder="Email">
                                    <div class="subscribe-text"> <a href="#">suscribirse</a></div>
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



@endsection