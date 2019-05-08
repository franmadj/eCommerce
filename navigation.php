<!--- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="fmc-logo" src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="products.php">Products</a>
                        <a class="dropdown-item" href="cart.php">Cart</a>
                        <a class="dropdown-item" href="checkout.php">Checkout</a>

                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link cart" href="#" style="width: fit-content;"><i class="fas fa-shopping-cart"></i><span class="cart-count">2</span></a>
                </li>

            </ul>


            <div class="cart-dropdown" >
                <div class="dropdownmenu-wrapper" >

                    <div class="dropdown-cart-products">

                        <div class="product">
                            <div class="product-image-container">
                                <a href="product.php" class="product-image">
                                    <img src="img/products/prod1.jpg" alt="product">
                                </a>
                            </div>
                            <div class="product-details">
                                <h4 class="product-title">
                                    <a href="product.php">Fleece Jacket</a>
                                </h4>
                                <div class="price-box">
                                    <span class="product-price">$80.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                            <a href="#" title="Clear Products" class="cart-delete-item">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div><!-- End .product -->

                        <div class="product">
                            <div class="product-image-container">
                                <a href="product.php" class="product-image">
                                    <img src="img/products/prod2.jpg" alt="product">
                                </a>
                            </div>
                            <div class="product-details">
                                <h4 class="product-title">
                                    <a href="product.php">Ray Ban 5228</a>
                                </h4>
                                <div class="price-box">
                                    <span class="product-price">$30.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                            <a href="#" title="Clear Products" class="cart-delete-item">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div><!-- End .product -->


                    </div><!-- End .cart-product -->

                    <div class="dropdown-cart-action">
                        <a href="cart.php" class="btn btn-secondary btn-xs">View Cart</a>
                        <a href="checkout.php" class="btn btn-secondary btn-xs">Checkout</a>
                    </div><!-- End .dropdown-cart-total -->

                </div>
            </div>



        </div>
    </div>
</nav>
<!--- End Navigation -->

