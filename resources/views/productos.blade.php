@extends('layout')
@section('title', 'Productos')
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
            <div class="row flex-row-reverse">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-8 col-5">
                            <ul class="nav nav-pills shop-tab">
                                <li><a data-toggle="pill" href="#one"><i class="fa fa-th-large"></i></a></li>
                                <li><a class="active" data-toggle="pill" href="#two"><i class="fa fa-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-7">
                            <form action="#">
                                <select class="form-control sort-select">
                                    <option>Default sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by latest</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </form> 
                        </div>
                    </div>
                    <!--lista  de productos-->
                    <div class="tab-content">
                        <div class="tab-pane fade" id="one">
                            <div class="row">
                                @foreach($productos as $producto)

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-style-03 margin-top-40">
                                        <div class="thumb">
                                            <a href="/singleProducto/{{$producto->id}}">
                                                {{Html::image("img/productos/" . $producto->fotos[0]->url_foto, "")}}
                                            </a>

                                            <ul class="cart-action">
                                                <li><a href="#"><i class="icon-add-to-cat"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="content text-center">
                                            
                                            <span class="brand">{{$producto->descripcion}}</span>
                                        
                                            <ul class="justify-content-center margin-bottom-20">
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            </ul>
                                            <h6 class="title"><a href="/singleProducto/{{$producto->id}}"> {{$producto->nombre}}</a></h6>
                                            <div class="content-price d-flex align-self-center justify-content-center">
                                                <span class="new-price">{{$producto->precio}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!--
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-style-03 margin-top-40">
                                        <div class="thumb">
                                            <img src="assets/img/shop/1.png" alt="">
                                            <ul class="cart-action">
                                                <li><a href="#"><i class="icon-add-to-cat"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
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
                                            <div class="content-price d-flex align-self-center justify-content-center">
                                                <span class="new-price">$450.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            -->
                            </div>
                        </div>
                        <div class="tab-pane fade in show active list-item" id="two">
                            @foreach($productos as $producto)
                            <div class="row product-style-03 margin-top-40">

                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="thumb">
                                        <a href="/singleProducto/{{$producto->id}}">

                                        {{Html::image("img/productos/" . $producto->fotos[0]->url_foto, "")}}
                                        <
                                    </div>                                        
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-12">
                                    <div class="content">
                                        <h6 class="title"><a href="/singleProducto/{{$producto->id}}">{{$producto->nombre}}</a></h6>
                                        <div class="content-price d-flex align-self-center">
                                            <span class="new-price">{{$producto->precio}}</span>
                                        </div>
                                        <ul class="margin-bottom-10">
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        </ul>
                                        <p>{{$producto->descripcion}}</p>
                                        <div class="btn-wrapper margin-top-20">
                                            <div class="add-to-cart my-cart-btn" data-id="{{$producto->id}}" data-name="{{$producto->nombre}}" data-summary="{{$producto->descripcion}}" data-price="{{$producto->precio}}" data-quantity="1" data-image='/img/productos/{{$producto->fotos[0]->url_foto}}'>
                                                <a href="javascript:void(0)"><i class="icon-add-to-cat"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                            <!--
                            <div class="row product-style-03 margin-top-40">
                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="thumb">
                                        <img src="assets/img/shop/2.png" alt="">
                                    </div>                                        
                                </div>
                                <div class="col-md-8 col-sm-12 col-12">
                                    <div class="content">
                                        <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                        <div class="content-price d-flex align-self-center">
                                            <span class="new-price">$450.00</span>
                                        </div>
                                        <ul class="margin-bottom-10">
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        </ul>
                                        <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="btn-wrapper margin-top-20">
                                            <div class="add-to-cart">
                                                <a href="#"><i class="icon-add-to-cat"></i> Add to cart</a>
                                            </div>
                                            <div class="add-to-wishlist">
                                                <a href="#"><i class="icon-heart"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        -->
                        </div>
                    </div>
                    <!-- numero de paginas!-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between pagination">
                                <h6>Showing 1 to 12 of 19 products</h6>
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 margin-top-20">
                    <div class="widget search-widget">
                        <form action="#">
                            <button type="submit"><i class="icon-search"></i></button>
                            <input type="text" placeholder="Search brand" name="search">
                        </form>
                    </div>
                    <!-- MENU POR CATEGORIAS!-->
                    <div class="widget categories-widget">
                        <div class="accordion-style-2" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Categories</a>
                                    </p>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck">Backpacks [124]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck2">Bags [293]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck3">Boots [125]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck4">Coats [698]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck5">Dresses [12456]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck6">Flats [2654]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck7">Heels [29]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck8">Jackets [1136]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck9">Jeans [2987]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="customCheck10">Jewellery [536]</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MENU MARCAS-->
                    <div class="widget brand-widget">
                        <div class="accordion-style-2" id="accordionExample2">
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Product Brand</a>
                                    </p>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck">Geek [124]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck2">Bags [293]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck3">Boots [125]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck4">Name [698]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck5">Dresses [12456]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck6">Flats [2654]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck7">Heels [29]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck8">Jackets [1136]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck9">Jeans [2987]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="pcustomCheck10">Jewellery [536]</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--TIPO DE PRODUCTO-->
                    <div class="widget ptype-widget">
                        <div class="accordion-style-2" id="accordionExample3">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Product Type</a>
                                    </p>
                                </div>
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample3">
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="tcustomCheck9">Boys [203]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="tcustomCheck10">Girls [87]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="tcustomCheck11">Men [2869]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input">
                                              <label class="custom-control-label" for="tcustomCheck12">Women [1387]</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CATEGORIA DE PRECIOS-->
                    <div class="widget price-widget">
                        <div class="accordion-style-2" id="accordionExample4">
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Filter by price</a>
                                    </p>
                                </div>
                                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample4">
                                    <div class="price_filter">
                                        <div class="price_slider_amount">
                                            <input type="submit"  value="Price:"/> 
                                            <input type="text" id="amount" name="price" /> 
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CATEGORIA COLOR -->
                    <div class="widget color-widget">
                        <div class="accordion-style-2" id="accordionExample5">
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Color</a>
                                    </p>
                                </div>
                                <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample5">
                                    <ul class="color-list">
                                        <li title="Blue"><a href="#"></a></li>
                                        <li title="Black"><a href="#"></a></li>
                                        <li title="Color"><a href="#"></a></li>
                                        <li title="Color"><a href="#"></a></li>
                                        <li title="Color"><a href="#"></a></li>
                                        <li title="Color"><a href="#"></a></li>
                                        <li title="Color"><a href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CATEGORIA DE TALLAS-->
                    <div class="widget size-widget">
                        <div class="accordion-style-2" id="accordionExample6">
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Size</a>
                                    </p>
                                </div>
                                <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample6">
                                    <div class="card-body">
                                        <ul class="size-list">
                                            <li><a href="#">38</a></li>
                                            <li><a href="#">39</a></li>
                                            <li><a href="#">40</a></li>
                                            <li><a href="#">41</a></li>
                                            <li><a href="#">42</a></li>
                                            <li><a href="#">43</a></li>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">X</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--LO MAS VENDIDO-->
                    <div class="widget seller-widget">
                        <h4 class="widget-title">Best sellers</h4>
                        <div class="seller-content">
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <img src="assets/img/seller/1.png" alt="">
                                </div>
                                <div class="content">
                                    <h6>Men's Crew T-shirt</h6>
                                    <span>$35.00</span>
                                </div>
                            </div>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <img src="assets/img/seller/2.png" alt="">
                                </div>
                                <div class="content">
                                    <h6>Men's V-neck Pima</h6>
                                    <span>$35.00</span>
                                </div>
                            </div>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <img src="assets/img/seller/3.png" alt="">
                                </div>
                                <div class="content">
                                    <h6>Men's Crew T-shirt</h6>
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collection area end  -->





</html>
@endsection