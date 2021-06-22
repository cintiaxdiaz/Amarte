function renderCart(products, totalPrice) {
  var cartUl = $('#my-cart-checkout-id');
  console.log(cartUl);
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
    '<input type="submit" class="btn btn-cart" value="Go to cart">' +
    '</div>' +
    '</li>'
  );
}

$(function () {
  var cart = $('.my-cart-btn').myCart({
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