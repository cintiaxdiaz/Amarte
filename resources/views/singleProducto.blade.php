@extends('layout')
@section('title', 'singleProducto')
@section('content')


    <!-- breadcrumb start  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner d-flex justify-content-between">
                        <h2 class="page-title">Shop</h2>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="#">Women</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end  -->

    <!-- collection area start  -->
    <div class="collection-area margin-top-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row">

                        <div class="col-lg-5 col-md-6">
                            <div class="slider-tabfor margin-top-20">
                                <div class="single-item">
                                    {{Html::image("img/productos/" . $producto->fotos[0]->url_foto, "")}}

                                </div>
                                <div class="single-item">
                                    <img src="assets/img/product-details/big1.png" alt="">
                                </div>
                                <div class="single-item">
                                    <img src="assets/img/product-details/big1.png" alt="">
                                </div>
                                <div class="single-item">
                                    <img src="assets/img/product-details/big1.png" alt="">
                                </div>
                                <div class="single-item">
                                    <img src="assets/img/product-details/big1.png" alt="">
                                </div>
                            </div>
                            <div class="slider-tabnav">
                                <div class="single-item">
                                    <div class="img">
                                        <img src="assets/img/product-details/1.png" alt="">
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="img">
                                        <img src="assets/img/product-details/1.png" alt="">
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="img">
                                        <img src="assets/img/product-details/1.png" alt="">
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="img">
                                        <img src="assets/img/product-details/1.png" alt="">
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="img">
                                        <img src="assets/img/product-details/1.png" alt="">
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="img">
                                        <img src="assets/img/product-details/1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="content-part margin-top-20">
                                <h3 class="product-title">{{$producto->nombre}}</h3>
                                <p class="price">{{$producto->precio}}</p>
                                <span class="rating ml-0">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </span>
                                <span class="review-text">5 reviews</span>
                                <p class="specifications">SKU: <b>{{$producto->sku}}</b></p>
                                <p class="specifications">DISPONIBILIDAD: <b class="color-purple">En stock</b></p>
                                <div class="d-flex">
                                    <span class="specifications">TALLA: </span>
                                    <ul class="size-list align-self-center pl-3">
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">X</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XS</a></li>
                                    </ul>
                                </div>
                              
                                <p class="specifications">{{$producto->descripcion}}</</p>
                                <div class="btn-wrapper d-flex">
                                    <div class="input-group">
                                        <div class="input-group-prepend align-self-center">
                                            <a class="btn btn-sm" id="minus-btn"><i class="fa fa-minus"></i></a>
                                        </div>
                                        <input type="number" id="qty_input"
                                            class="form-control text-right form-control-sm" value="1" min="1">
                                        <div class="input-group-prepend align-self-center">
                                            <a class="btn btn-sm" id="plus-btn"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                            <!--URL CARRITO-->
                                    <div class="add-to-cart">
                                        <a href="/carrito/{{$producto->id}}"><i class="icon-add-to-cat"></i> Agregar al carrito</a>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-buy">COMPRE YA!!</a>
                                </div>
                                <p class="specifications">CATEGORIA: <b>Dama, accesorios.</b></p>
                                <p class="specifications">MATERIALES: <b>{{$producto->material}}</b></p>
                                <div class="d-flex">
                                    <span class="specifications">COMPARTE:</span>
                                    <ul class="social-list">
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/singleProducto/{{$producto->id}}"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/amartecrea/"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-tab">
                                <ul class="nav nav-pills">
                                    <li><a data-toggle="pill" href="#home" class="active">DESCRIPCIÓN</a></li>
                                    <li><a data-toggle="pill" href="#menu1">INFORMACIÓN ADICIONAL</a></li>
                                    <li><a data-toggle="pill" href="#menu2">ENVÍOS</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in show active">
                                        <p>{{$producto->descripcion}}</p>

                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <p>{{$producto->informacion_adicional}}</p>

                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <p>Se hacen envíos a todo Chile.</p>

                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="widget checkout-widget">
                        <h4 class="widget-title">PAGO SEGURO GARANTIZADO</h4>
                        <ul class="checkout-list">
                            {{Html::image("img/payment/p1.png")}}
                            {{Html::image("img/payment/p2.png")}}
                            {{Html::image("img/payment/p3.png")}}
                            {{Html::image("img/payment/p4.png")}}
                            {{Html::image("img/payment/p5.png")}}
                            {{Html::image("img/payment/p6.png")}}
                            {{Html::image("img/payment/p7.png")}}

                        </ul>
                    </div>
                    <div class="widget">
                        <a href="#"><img src="assets/img/others/add1.png" alt=""></a>
                    </div>
                    <div class="widget seller-widget">
                        <h4 class="widget-title">Productos Top</h4>
                        <div class="seller-content">
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    {{Html::image("img/seller/top-modelo.jpg")}}

                                </div>
                                <div class="content">
                                    <h6>Mujer Crop-top</h6>
                                </div>
                            </div>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <a href="/singleProducto/AGREGAAAAAAARRRRRR URL">{{Html::image("img/seller/outfit.jpg")}}

                                </div>
                                <div class="content">
                                    <h6>Mujer V-crop</h6>
                                    
                                </div>
                            </div>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    {{Html::image("img/seller/top-sale.jpg")}}
                                </div>
                                <div class="content">
                                    <h6>Mujer Cuadros</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collection area end  -->

    <!-- related product start  -->
    <div class="related-product-section">
        <div class="container">
            <div class="related-product">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <h2>PRODUCTOS RELACIONADOS</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($productos as $producto)

                    <div class="col-lg-12">
                        <div class="related-slider">
                            <div class="product-style-03 margin-top-30">

                                <div class="thumb text-center">
                                    <a href="/singleProducto/{{$producto->id}}">

                                    {{Html::image("img/productos/" . $producto->fotos[0]->url_foto, "")}}

                                    <span class="sale">Sale! 13%</span>
                                    <span class="new margin-top-35">New</span>
                                </div>
                                <div class="content text-center">
                                    <span class="brand">Brand: geek</span>
                                    <ul class="justify-content-center margin-bottom-20">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                    <span class="price">$400.00</span>
                                </div>
                            </div>
                            @endforeach
                            <div class="product-style-03 margin-top-30">
                                <div class="thumb text-center">
                                    <img src="assets/img/shop/9.png" alt="">
                                    <span class="new">New</span>
                                </div>
                                <div class="content text-center">
                                    <span class="brand">Brand: geek</span>
                                    <ul class="justify-content-center margin-bottom-20">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                    <span class="price">$400.00</span>
                                </div>
                            </div>
                            <div class="product-style-03 margin-top-30">
                                <div class="thumb text-center">
                                    <img src="assets/img/shop/5.png" alt="">
                                </div>
                                <div class="content text-center">
                                    <span class="brand">Brand: geek</span>
                                    <ul class="justify-content-center margin-bottom-20">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                    <span class="price">$400.00</span>
                                </div>
                            </div>
                            <div class="product-style-03 margin-top-30">
                                <div class="thumb text-center">
                                    <img src="assets/img/shop/4.png" alt="">
                                    <span class="new">New</span>
                                </div>
                                <div class="content text-center">
                                    <span class="brand">Brand: geek</span>
                                    <ul class="justify-content-center margin-bottom-20">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                    <span class="price">$400.00</span>
                                </div>
                            </div>
                            <div class="product-style-03 margin-top-30">
                                <div class="thumb text-center">
                                    <img src="assets/img/shop/12.png" alt="">
                                </div>
                                <div class="content text-center">
                                    <span class="brand">Brand: geek</span>
                                    <ul class="justify-content-center margin-bottom-20">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                    <span class="price">$400.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- related product end  -->


</html>
@endsection