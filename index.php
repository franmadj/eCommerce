<?php
$home = true;
require_once('header.php');
?>


<!--- Start Home Section -->
<div id="home">

    <?php require_once('navigation.php'); ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slide d-block w-100"></div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="os-animation" data-animation="fadeInLeft">
                        <h5>First slide label</h5>
                    </div>
                    <div class="os-animation" data-animation="fadeInRight">
                        <p class="lead">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                    <div class="os-animation" data-animation="fadeInUp" data-delay=".2s">
                        <a class="btn btn-secondary btn-sm" href="#contact">Request A Quote</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="slide d-block w-100"></div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="os-animation" data-animation="fadeInLeft">
                        <h5>First slide label</h5>
                    </div>
                    <div class="os-animation" data-animation="fadeInRight">
                        <p class="lead">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                    <div class="os-animation" data-animation="fadeInUp" data-delay=".2s">
                        <a class="btn btn-secondary btn-sm" href="#contact">Request A Quote</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="slide d-block w-100"></div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="os-animation" data-animation="fadeInLeft">
                        <h5>First slide label</h5>
                    </div>
                    <div class="os-animation" data-animation="fadeInRight">
                        <p class="lead">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                    <div class="os-animation" data-animation="fadeInUp" data-delay=".2s">
                        <a class="btn btn-secondary btn-sm" href="#contact">Request A Quote</a>
                    </div>
                </div>
            </div>



        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
<!--- End Home Section -->

<?php require_once ('footer.php'); ?>


<div class="overlay-loader">
    <div class="spinner-grow text-secondary" role="status">
        <span class="sr-only">Loading...</span>
    </div>

</div>



<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.4.2/js/all.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/validator.js"></script>
<script src="js/waypoints.js"></script>
<!--- End of Script Source Files -->

</body>
</html>

