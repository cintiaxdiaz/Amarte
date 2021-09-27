function renderCart(products, totalPrice) {
  var cartUl = $('#my-cart-checkout-id');
  cartUl.empty();
  $.each(products, function (key, value) {
    var total = value.quantity * value.price;
    cartUl.append(
      '<li>' +
      '<div class="d-flex">' +
      '<div class="thumb">' +
      '<img src="' + value.image + '" width="100px">' +
      '</div>' +
      '<div class="content cart-content cart-content-header">' +
      '<h6 class="title"><a href="single-product.html">' + value.name +
      '</a></h6>' +
      '<span class="price">' + value.price + '</span>' +
      '</div>' +
      '<div class="action" data-id="' + value.id + '">' +
      '<input class="my-product-quantity" name="productos[' + key + '][cantidad]" type="number" value="' + value.quantity + '" min="1">' +
      '<input name="productos[' + key + '][id]" type="hidden" value="' + value.id + '">' +
      '<a href="#" class="remove my-product-remove">Remove</a>' +
      '</div>' +
      '</div>' +
      '</li>'
    );
  });
  cartUl.append(
    '<li>' +
    '<h6 class="tprice"><span>Total price: </span>$' + totalPrice + '</h6>' +
    '<div class="btn-wrapper">' +
    '<input type="submit" class="btn btn-cart" value="Ir al carrito">' +
    '</div>' +
    '</li>'
  );
}

$(function () {
  $('.my-cart-btn').myCart({
    classCartIcon: 'my-cart-icon',
    classCartBadge: 'my-cart-badge',
    affixCartIcon: true,
    classCheckoutCart: 'my-cart-checkout',
    afterAddOnCart: function (products, totalPrice, totalQuantity) {
      renderCart(products, totalPrice)
    },
    afterPageLoad: function (products, totalPrice, totalQuantity) {
      renderCart(products, totalPrice)
    },
    getDiscountPrice: function (products) {
      var total = 0;
      $.each(products, function () {
        total += this.quantity * this.price;
      });
      return total * 0.5;
    }
  });
});

$('.btn-clear.clear-cart').on('click', function () {
  clearCart = confirm("¿Estás seguro de vaciar el carrito?");
  if (clearCart) {
    $('.my-cart-btn').myCart({
      cartItems: []
    })
    $(location).attr('href', '/Home')
  }
})

$('.my-product-remove.carrito').on('click', function () {
  setTimeout(function () {
    $('#carrito-form').submit();
  }, 500);
})
$('.btn-buy.buy-now').on('click', function () {
  setTimeout(function () {
    $('#carrito-form').submit();
  }, 500);
})

function actualizarProductos() {
  var url = window.location.href.split('?')[0] + '?';
  categorias = ''
  $('.custom-checkbox input').each(function () {
    if ($(this).prop('checked')) {
      categorias += $(this).val() + ','
    }
  })
  categorias = categorias.slice(0, -1)
  if (categorias) {
    url += 'categorias=' + categorias + '&'
  }

  nombreProducto = $('#nombreProducto').val()
  if (nombreProducto) {
    url += 'nombreproducto=' + nombreProducto + '&'
  }

  minPrecio = $("#slider-range").slider("values", 0)
  if (minPrecio) {
    url += 'minprecio=' + minPrecio + '&'
  }

  maxPrecio = $("#slider-range").slider("values", 1)
  if (maxPrecio) {
    url += 'maxprecio=' + maxPrecio
  }
  window.location.href = url;
}

$('.custom-checkbox').on('click', function () {
  checkbox = $(this).children('input')[0];
  $(checkbox).prop('checked', !$(checkbox).prop('checked'));
  actualizarProductos();
})

$('#buscaProducto').on('submit', function (event) {
  actualizarProductos();
  event.preventDefault();
})

function validaRut(rutCompleto) {
  if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto )) {
    return false;
  }
  var tmp = rutCompleto.split('-');
  var digv = tmp[1]; 
  var rut = parseInt(tmp[0], 10);
  if (digv == 'K') {
    digv = 'k';
  }
  return (digitoVerificador(rut) == digv);
}

function digitoVerificador(rut) {
  var M=0,S=1;
  for(;rut;rut=Math.floor(rut/10)) {
    S=(S+rut%10*(9-M++%6))%11;
  }
  return S?S-1:'k';
}

$('#compra-form').on('submit', function(event) {
  rut = $('#inputRut').val();
  if (!validaRut(rut)) {
    $('.rut-valida').css( "display", "block" );
    event.preventDefault();
    return
  }
  $('.rut-valida').css( "display", "none" );
})