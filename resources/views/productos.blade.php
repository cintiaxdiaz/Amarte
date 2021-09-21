@extends('layout')
@section('title', 'Productos')
@section('content')

    
    <!-- breadcrumb start  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner d-flex justify-content-between">
                        <h2 class="page-title">MODA MUJER</h2>
                        <ul class="page-list">
                            <li><a href="/Home">Home</a></li>
                            <li><a href="/Productos">Compra</a></li>
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
                                <li><a class="active" data-toggle="pill" href="#one"><i class="fa fa-th-large"></i></a></li>
                                <li><a data-toggle="pill" href="#two"><i class="fa fa-bars"></i></a></li>
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
                        <div class="tab-pane fade in show active" id="one">
                            <div class="row">
                                @foreach($productos as $producto)

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-style-03 margin-top-40">
                                        <div class="thumb">
                                            <a href="/singleProducto/{{$producto->id}}">
                                                {{Html::image("/img/productos/" . $producto->fotos[0]->url_foto, "")}}
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
                            
                            </div>
                        </div>
                        <div class="tab-pane fade list-item" id="two">
                            @foreach($productos as $producto)
                            <div class="row product-style-03 margin-top-40">

                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="thumb">
                                        <a href="/singleProducto/{{$producto->id}}">

                                        {{Html::image("/img/productos/" . $producto->fotos[0]->url_foto, "")}}
                                        
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
                                                <a href="javascript:void(0)"><i class="icon-add-to-cat"></i> AGREGAR AL CARRO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                    <!-- numero de paginas!
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
                    </div>-->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 margin-top-20">
                    <div class="widget search-widget">
                        <form action="#" id="buscaProducto">
                            <button type="submit"><i class="icon-search"></i></button>
                            <input type="text" placeholder="Search brand" id="nombreProducto" value="{{$nombreProducto}}">
                        </form>
                    </div>
                    <!-- MENU POR CATEGORIAS!-->
                    <div class="widget categories-widget">
                        <div class="accordion-style-2" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Categoría</a>
                                    </p>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input" value="1">
                                              <label class="custom-control-label" for="customCheck">Backpacks [124]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input" value="2">
                                              <label class="custom-control-label" for="customCheck2">Bags [293]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input" value="3">
                                              <label class="custom-control-label" for="customCheck3">Boots [125]</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                              <input type="checkbox" class="custom-control-input" value="4">
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
                   
                    
                    <!--CATEGORIA DE PRECIOS-->
                    <div class="widget price-widget">
                        <div class="accordion-style-2" id="accordionExample4">
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Filtro de precio</a>
                                    </p>
                                </div>
                                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample4">
                                    <div class="price_filter">
                                        <div class="price_slider_amount">
                                            <input type="submit"  value="Precio:"/> 
                                            <input type="text" id="amount" name="precio" /> 
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!--LO MAS VENDIDO-->
                    <div class="widget seller-widget">
                        <h4 class="widget-title">Lo más vendido!!</h4>
                        <div class="seller-content">
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <a href="/singleProducto/AGREGAAAAAAARRRRRR URL">{{Html::image("/img/seller/top-modelo.jpg")}}

                                </div>
                                <div class="content">
                                    <h6>Mujer Crop-top</h6>
                                </div>
                            </div>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <a href="/singleProducto/AGREGAAAAAAARRRRRR URL">{{Html::image("/img/seller/outfit.jpg")}}

                                </div>
                                <div class="content">
                                    <h6>Mujer V-crop</h6>
                                    
                                </div>
                            </div>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    {{Html::image("/img/seller/top-sale.jpg")}}
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





</html>
@endsection