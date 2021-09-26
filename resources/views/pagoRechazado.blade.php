@extends('layout')
@section('title', 'pagoRechazado')
@section('content')


    <!-- breadcrumb start  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner d-flex flex-column flex-md-row justify-content-md-between justify-content-center">
                        <h2 class="page-title">Compra</h2>
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
    <div class="alert alert-danger" role="alert">
        Pago fallido!
      </div>
    <!-- cart area start  -->
    <div class="cart-area margin-top-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="cart-content margin-top-20">
                        <table class="table table-bordered table-responsive">
                            <thead>
                            <tr class="text-center">
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($compra->compraProductos as $compraProducto)<!--compra productos de la compra-->
                                <tr>
                                <th scope="row" class="d-flex">
                                    <div class="left">
                                        {{Html::image("/img/productos/" . $compraProducto->producto->fotos[0]->url_foto, "")}}

                                    </div>
                                    <div class="right">
                                        <h6 class="name">{{$compraProducto->producto->nombre}}</h6>
                                        <h6 class="title">Descripción: <span class="values">{{$compraProducto->producto->descripcion}}</span></h6>
                                    </div>
                                </th>
                                <td>${{$compraProducto->precio}}</td>
                                <td>
                                    <div data-id="{{$compraProducto->id}}">
                                        <p> {{$compraProducto->cantidad}} </p>
                                    </div>
                                </td>
                                <td>${{$compraProducto->precio * $compraProducto->cantidad}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="btnVolver d-flex justify-content-between margin-top-30">
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-continue btn-buy buy-now">Volver a intentar</a>
                            </div>
                            
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