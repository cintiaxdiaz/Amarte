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
            <form action="/compra" method="POST" id="compra-form">            
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
                                        <?php 
                                            $i = 0;
                                            $total = 0;
                                        ?>
                                        @foreach($productos as $producto)
                                        <?php 
                                            $totalProducto = $producto->precio * $diccionario_cantidades[$producto->id];
                                            $total += $totalProducto;
                                        ?>
                                        <tr>
                                        <th scope="row" class="d-flex">
                                            <div class="left">
                                            {{Html::image("/img/productos/" . $producto->fotos[0]->url_foto, "")}}
                                            </div>
                                            <div class="right">
                                                <h6 class="name">{{$producto->nombre}}</h6>
                                                <h6 class="title">Descripci??n: <span class="values">{{$producto->descripcion}}</span></h6>                                            </div>
                                        </th>
                                        <td>${{$producto->precio}}</td>
                                        <td>
                                            <div data-id="{{$producto->id}}">
                                                <input class="my-product-quantity" name="productos[{{$i}}][cantidad]" type="number" value="{{$diccionario_cantidades[$producto->id]}}" min="1">
                                            </div>
                                        </td>
                                        <td>${{$producto->precio * $diccionario_cantidades[$producto->id]}}</td>
                                        <td>
                                            <div class="action" data-id="{{$producto->id}}">
                                                <a class="my-product-remove carrito" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                        </tr>
                                        <input name="productos[{{$i}}][id]" type="hidden" value="{{$producto->id}}"/>
                                        <?php $i += 1 ?>
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
                    @if ($productos)
                    <div class="col-xl-3 col-lg-4">
                        <div class="summary margin-top-20">
                                <h6 class="title">RESUMEN</h6>
                                <div class="form-group">
                                    <label>RUT</label>
                                    <input name="rut"type="text" placeholder="12345678-9" id="inputRut" required>
                                    <small class="rut-valida">
                                        Rut invlido
                                    </small>
                                    <label>Nombre</label>
                                    <input name="nombre"type="text" required>
                                    <label>Tel??fono</label>
                                    <input name="telefono"type="text"  placeholder="+56 9 8760 6734" required>
                                    <label>Correo el??ctronico</label>
                                    <input name="correo"type="text" required>
                               
                                </div>
                                <h6 class="subtitle">Env??o estimado</h6>
                                <p class="destination">Ingrese su destino para obtener un precio estimado de env??o.</p>
                            
                                <div class="form-group">

                                    <label>Regi??n</label>
                                    <select name="region" class="form-control cart-select" required>
                                        <option>Reg??on Metropolitana de Santiago</option>
                                        <option>XV Regi??n de Arica y Parinacota</option>
                                        <option>I Region de Tarapac??</option>
                                        <option>II Regi??n de Antofagasta</option>
                                        <option>III Regi??n de Atacama</option>
                                        <option>IV Reg??on de Coquimbo</option>
                                        <option>V Reg??on de Valpara??so</option>
                                        <option>VI Reg??on de Libertador General Bernardo O'Higgins</option>
                                        <option>VII Reg??on del Maule</option>
                                        <option>VIII Reg??on del Biobio</option>
                                        <option>IV Reg??on de la Araucan??a</option>
                                        <option>XIV Reg??on de los R??os</option>
                                        <option>X Reg??on de Los Lagos</option>
                                        <option>XI Reg??on de Ays??n del General Carlos Iba??ez</option>
                                        <option>XII Reg??on de Magallanes y de la Ant??rtica Chilena </option>
                                    </select>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                                <div class="form-group">
                                    <label>Direcci??n</label>
                                    <input name="direccion"type="text">
                                </div>
                            
                                <div class="d-flex justify-content-between total">
                                    <p>Subtotal</p>
                                    <p>${{$total}}</p>
                                </div>
                                <div class="d-flex justify-content-between total">
                                    <p>Env??o</p>
                                    <p>$10000</p>
                                </div>
                                <div class="d-flex justify-content-between total">
                                    <p>Total a pagar</p>
                                    <p>${{$total + 10000}}</p>
                                </div>
                
                            <div class="btn-wrapper">
                                <input type="submit" value="Ir a pagar" class="btn btn-checkout"/>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </form>
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