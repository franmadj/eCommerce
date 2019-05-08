<?php require_once('header.php'); ?>

        <!--- Start Home Section -->
        <div id="products">

            <?php require_once('navigation.php'); ?>

            <div id="product-items" >



                <!--- Start Portfolio Grid -->
                <div class="container">
                    <div class="row">

                        <!--- START SIDEBAR -->
                        <div class="col-lg-3">



                            <form action="#" class="filter-form sticky-top">

                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Category</label>
                                    <select class="form-control" id="exampleFormControlSelect2">
                                        <option>category 1</option>
                                        <option>category 1</option>
                                        <option>category 1</option>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="formControlRange">Price From</label>
                                    <input type="range" class="form-control-range" id="price-from" min="0" max="500" step="5">
                                    $<span class="price-from">0</span>
                                </div>
                                <div class="form-group">
                                    <label for="formControlRange">Price To</label>
                                    <input type="range" class="form-control-range" id="price-to" min="0" max="500" step="5">
                                    $<span class="price-to">0</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Brand</label>
                                    <select class="form-control" id="exampleFormControlSelect2">
                                        <option>Rebook</option>
                                        <option>Adidas</option>
                                        <option>Nike</option>
                                    </select>
                                </div>


                                <a class="btn btn-secondary btn-sm w-100" href="#contact">Filter</a>
                            </form>



                        </div>
                        <!--- END SIDEBAR -->
                        <div class="col-lg-9">
                            <!--- Start CAROUSEL -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/slides/slide1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/slides/slide2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/slides/slide3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--- END CAROUSEL -->
                            <div class="view-mode">
                                <a class="active-view grid-view" href="#"><i class="fas fa-th"></i></a> 
                                <a href="#" class="list-view"><i class="fas fa-th-list"></i></a>
                            </div>


                            <!--- LIST VIEW -->
                            <div id="list-view">


                                <div class="os-animation" data-animation="bounceInLeft" >
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="product-item">
                                                <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                                <div class="product-item-inner" >
                                                    <a href="product.html" >
                                                        <img class="product-image img-fluid" src="img/products/prod1.jpg" alt="">
                                                        <img class="product-image-two img-fluid" src="img/products/prod1-2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="product-info">
                                                <h3><a href="product.html">Jaket</a></h3>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                                <p>$ 80</p>
                                            </div>
                                            <div class="product-actions">
                                                <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="os-animation" data-animation="bounceInRight" data-delay=".1s">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="product-item">
                                                <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                                <div class="product-item-inner" >
                                                    <a href="product.html" >
                                                        <img class="product-image img-fluid" src="img/products/prod1.jpg" alt="">
                                                        <img class="product-image-two img-fluid" src="img/products/prod1-2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="product-info">
                                                <h3><a href="product.html">Jaket</a></h3>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                                <p>$ 80</p>
                                            </div>
                                            <div class="product-actions">
                                                <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="os-animation" data-animation="bounceInLeft" data-delay=".2s">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="product-item">
                                                <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                                <div class="product-item-inner" >
                                                    <a href="product.html" >
                                                        <img class="product-image img-fluid" src="img/products/prod1.jpg" alt="">
                                                        <img class="product-image-two img-fluid" src="img/products/prod1-2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="product-info">
                                                <h3><a href="product.html">Jaket</a></h3>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                                <p>$ 80</p>
                                            </div>
                                            <div class="product-actions">
                                                <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--- GID VIEW -->
                            <div class="row" id="grid-view">

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInLeft" data-delay=".2s">
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="product.html" >
                                                    <img class="product-image img-fluid" src="img/products/prod1.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod1-2.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3><a href="product.html">Jaket</a></h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInLeft" >
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="product.html" >
                                                    <img class="product-image img-fluid" src="img/products/prod2.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod2-1.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3>glasses</h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInRight" >
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="product.html" >
                                                    <img class="product-image img-fluid" src="img/products/prod3.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod3-1.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3>boots</h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInRight" data-delay=".2s">
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="product.html" >
                                                    <img class="product-image img-fluid" src="img/products/prod4.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod4-1.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3>Soes</h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInLeft" data-delay=".2s">
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="product.html" >
                                                    <img class="product-image img-fluid" src="img/products/prod5.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod5-1.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3>Sun glasses</h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInLeft" >
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="img/products/prod6.jpg" >
                                                    <img class="product-image img-fluid" src="img/products/prod6.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod6-1.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3>Sun glasses</h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInRight" >
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="img/products/prod7.jpg" >
                                                    <img class="product-image img-fluid" src="img/products/prod7.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod7-1.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3>coat</h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInRight" data-delay=".2s">
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="img/products/prod8.jpg" >
                                                    <img class="product-image img-fluid" src="img/products/prod8.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod8-1.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3><a href="product.html">Jaket</a></h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="os-animation" data-animation="bounceInLeft" data-delay=".2s">
                                        <div class="product-item text-center">
                                            <a href="#" class="zoom-in"><i class="fas fa-search-plus"></i></a>
                                            <div class="product-item-inner" >
                                                <a href="img/products/prod9.jpg" >
                                                    <img class="product-image img-fluid" src="img/products/prod9.jpg" alt="">
                                                    <img class="product-image-two img-fluid" src="img/products/prod9-1.jpg" alt="">
                                                </a>
                                                <div class="product-info">
                                                    <h3><a href="product.html">Jaket</a></h3>
                                                    <p>$ 80</p>
                                                </div>
                                                <div class="product-actions">
                                                    <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                                    <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>


                            <!--- PAGINATION -->


                            <nav aria-label="pagination">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">
                                            2
                                            <span class="sr-only">(current)</span>
                                        </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>





                    </div> <!--- End Row -->
                </div> <!--- End Container -->
                <!--- End Portfolio Grid -->



            </div>

        </div>
        <!--- End Home Section -->


        <!-- Modal -->


        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">

                <div class="modal-content quick-view">
                    <div class="row">

                        <div class="col-lg-6">







                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="img/products/prod1-g.jpg">
                                                <img src="img/products/prod1.jpg" class="d-block w-100" alt=""/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="img/products/prod2-g.jpg">
                                                <img src="img/products/prod2.jpg" class="d-block w-100" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="carousel-item">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="img/products/prod3-g.jpg">
                                                <img src="img/products/prod3.jpg" class="d-block w-100" alt=""/>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="row carousel-thumbnails">
                                <div class="col-2">
                                    <img src="img/products/prod1.jpg" class="img-fluid" data-id="0" alt=""/>
                                </div>
                                <div class="col-2">
                                    <img src="img/products/prod2.jpg" class="img-fluid" data-id="1" alt=""/>
                                </div>
                                <div class="col-2">
                                    <img src="img/products/prod3.jpg" class="img-fluid" data-id="2" alt=""/>
                                </div>

                            </div>



                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2>Silver Proto</h2>
                            <div class="get-rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                <span>(6) Reviews</span>
                            </div>
                            <p><span class="old-price">$81.00</span> <span class="regular-price">$100.00</span></p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                            <hr>
                            <div class="colors">
                                <span>colors</span>
                                <span class="color-box blue color-active"><i class="fas fa-check"></i></span>
                                <span class="color-box red"></span>
                                <span class="color-box black"></span>
                                <span class="color-box brown"></span>
                            </div>
                            <div class="sizes">
                                <span>Sizes</span>
                                <span class="size-box size-xs size-active">XS</span>
                                <span class="size-box size-sm">S</span>
                                <span class="size-box size-m">M</span>
                                <span class="size-box size-xl">XL</span>
                                <span class="size-box size-xxl">XXL</span>
                            </div>



                            <hr>

                            <div class="actions">
                                <div class="quantity-picker">
                                    <button type="button" class="btn btn-minus"><i class="fas fa-minus-circle"></i></button>
                                    <input class="product-quantity" type="text" value="0">
                                    <button type="button" class="btn btn-plus"><i class="fas fa-plus-circle"></i></button>
                                </div>


                                <a class="btn btn-secondary btn-sm" href="#">Add To Cart</a>
                                <a class="btn btn-secondary btn-sm" href="#"> <i class="fas fa-heart"></i></a>

                            </div>

                            <div class="social-share">
                                <p>SHARE</p>
                                <ul>

                                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
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

