<?php require_once('header.php'); ?>


<!--- Start Home Section -->
<div id="cart">
    <?php require_once('navigation.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <form class="woocommerce-cart-form" action="#" method="post">
                    <div class="cart-wrapper sm-touch-scroll">
                        <table class="shop_table shop_table_responsive woocommerce-cart-form__contents" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="product-name" colspan="3">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="1" data-product_sku=""><i class="far fa-times-circle"></i></a>						
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="img/products/prod1.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""></a>						
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">Jaket</a>							
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>9,90</span>						
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity-picker">
                                            <button type="button" class="btn btn-minus"><i class="fas fa-minus-circle"></i></button>
                                            <input class="product-quantity" type="text" value="0">
                                            <button type="button" class="btn btn-plus"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10.00</span>						
                                    </td>
                                </tr>
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="1" data-product_sku=""><i class="far fa-times-circle"></i></a>						
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="img/products/prod2.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""></a>						
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">Glasses</a>							
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20,00</span>						
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity-picker">
                                            <button type="button" class="btn btn-minus"><i class="fas fa-minus-circle"></i></button>
                                            <input class="product-quantity" type="text" value="0">
                                            <button type="button" class="btn btn-plus"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>30.00</span>						
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <div class="continue-shopping pull-left text-left">
                                            <button type="button" class="btn btn-secondary btn-lg" name="update_cart" value="Update cart" >← Continue shopping</button>
                                            <button type="button" class="btn btn-secondary btn-lg" name="update_cart" value="Update cart" >Update cart</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <div class="col-lg-5">
                <table cellspacing="0" class="shop_table shop_table_responsive">
                    <thead>
                        <tr>
                            <th colspan="3">Cart Totals</th>
                        </tr>
                    </thead>
                    <tr class="cart-subtotal">
                        <td>Subtotal</td>
                        <td class="cart-value">
                            <span class="woocommerce-Price-amount amount">$19,80</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td class="cart-value">
                            Enter your address to view shipping options.
                        </td>
                    </tr>
                    <tr class="order-total">
                        <td>Total</td>
                        <td class="cart-value"><span class="woocommerce-Price-amount amount">$19,80</span></td>                                        
                    </tr>
                </table>
                <button type="button" class="btn btn-checkout btn-sm">Proceed to checkout</button>
                <hr>
                <form class="checkout_coupon mb-0" method="post">
                    <p><i class="fas fa-tag"></i> Coupon</p>
                    <div class="form-group">
                        <input  type="text" name="code" class="form-control" placeholder="Coupon Code" required="required">
                    </div>
                    <input type="submit" class="btn btn-coupon btn-sm" value="Send">
                </form>
            </div>
        </div>
    </div>
</div>
<!--- End Home Section -->



<?php require_once ('footer.php'); ?>




<div class="overlay-loader">
    <div class="spinner-grow" role="status">
        <span class="sr-only">Loading...</span>
    </div>

</div>










<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.4.2/js/all.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/validator.js"></script>
<script src="js/waypoints.js"></script>

<script src="js/easyzoom/easyzoom.js"></script>
<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function (e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function () {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
</script>


        <!---<script src="js/extzoom/jquery.exzoom.js"></script>
         End of Script Source Files -->

</body>
</html>

