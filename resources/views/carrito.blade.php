@extends('layout')
@section('title', 'carrito')
@section('content')


    <!-- breadcrumb start  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner d-flex flex-column flex-md-row justify-content-md-between justify-content-center">
                        <h2 class="page-title">carrito de compras</h2>
                        <ul class="page-list">
                            <li><a href="/Home">Home</a></li>                            
                            <li><a href="/Productos">Productos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end  -->

    <!-- cart area start  -->
    <div class="cart-area margin-top-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="cart-content margin-top-20">
                        @if (!$productos)
                        <h1>No tienes nada en el carrito.</h1>
                        @else
                        <table class="table table-bordered table-responsive">
                            <thead>
                              <tr class="text-center">
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Total</th>
                                <th scope="col">Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                              <tr>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                    {{Html::image("/img/productos/" . $producto->fotos[0]->url_foto, "")}}
                                    </div>
                                    <div class="right">
                                        <h6 class="name">Men's Crew T-shirt</h6>
                                        <h6 class="title">Size: <span class="values">XL</span></h6>
                                        <h6 class="title">Color: <span class="values">Brown</span></h6>
                                    </div>
                                </th>
                                <td>${{$producto->precio}}</td>
                                <td>
                                    <div data-id="{{$producto->id}}">
                                        <input class="my-product-quantity" name="productos[][cantidad]" type="number" value="{{$diccionario_cantidades[$producto->id]}}" min="1">
                                    </div>
                                </td>
                                <td>${{$producto->precio * $diccionario_cantidades[$producto->id]}}</td>
                                <td>
                                    <div class="action" data-id="{{$producto->id}}">
                                        <a class="my-product-remove carrito" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                        @endif
                        <div class="d-flex justify-content-between margin-top-30">
                            <div class="btn-wrapper">
                                <a href="/Productos" class="btn btn-continue">Continuar comprando</a>
                            </div>
                            @if ($productos)
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-clear clear-cart">Vaciar carro de compras</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="summary margin-top-20">
                        <h6 class="title">RESUMEN</h6>
                        <h6 class="subtitle">Envío estimado</h6>
                        <p class="destination">Ingrese su destino para obtener un precio estimado de envío.</p>
                        <form action="#">
                            <div class="form-group">
                                <label>Región</label>
                                <select class="form-control cart-select">
                                    <option>Regíon Metropolitana de Santiago</option>
                                    <option>XV Región de Arica y Parinacota</option>
                                    <option>I Region de Tarapacá</option>
                                    <option>II Región de Antofagasta</option>
                                    <option>III Región de Atacama</option>
                                    <option>IV Regíon de Coquimbo</option>
                                    <option>V Regíon de Valparaíso</option>
                                    <option>VI Regíon de Libertador General Bernardo O'Higgins</option>
                                    <option>VII Regíon del Maule</option>
                                    <option>VIII Regíon del Biobio</option>
                                    <option>IV Regíon de la Araucanía</option>
                                    <option>XIV Regíon de los Ríos</option>
                                    <option>X Regíon de Los Lagos</option>
                                    <option>XI Regíon de Aysén del General Carlos Ibañez</option>
                                    <option>XII Regíon de Magallanes y de la Antártica Chilena </option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="form-group">
                                <label>Comuna</label>
                                <select class="form-control cart-select">
                                    <option></option>
                                    <option>xxxx</option>
                                    <option>Bangladesh</option>
                                    <option>London</option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="form-group">
                                <label>Código postal</label>
                                <input type="text">
                            </div>
                           
                            <div class="d-flex justify-content-between total">
                                <p>Subtotal</p>
                                <p>$190.00</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Envío</p>
                                <p>$190.00</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Total a pagar</p>
                                <p>$190.00</p>
                            </div>
                            <div class="form-group margin-top-20">
                                <label>Aplicar código de descuento</label>
                                <input type="text" placeholder="Introduzca el código">
                            </div>
                        </form> 
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-checkout">Ir a pagar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end  -->

  

   
  

</html>
@endsection
@section('scripts')
<script>
$('.my-product-quantity').change(function() {
    setTimeout(function() {
    $('#carrito-form').submit();
  }, 500);
})
</script>
@endsection