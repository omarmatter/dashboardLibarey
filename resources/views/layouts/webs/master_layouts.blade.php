<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookz - Book Shop HTML Template</title>
    <!-- Vendor Stylesheets -->
  @includeIf('layouts.webs.header')
</head>

<body>
    <!-- Prealoder start -->
    <div class="andro_preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- Prealoader End -->

    <!-- Quick View Modal Start -->
    <div class="modal fade andro_quick-view-modal" id="quickViewModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn close-dark close" data-dismiss="modal">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/img/products/9.png" alt="product">
                            </div>
                            <div class="col-md-7">
                                <div class="andro_product-single-content">
                                    <div class="andro_rating-wrapper">
                                        <div class="andro_rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span>4 Stars</span>
                                    </div>
                                    <h3>History Books </h3>
                                    <div class="andro_product-price">
                                        <span>8$</span>
                                        <span>14$</span>
                                    </div>
                                    <p class="andro_product-excerpt">Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                    <form class="andro_product-atc-form">
                                        <div class="andro_product-variation-wrapper">
                                            <div class="form-group">
                                                <select class="form-control" name="amount">
                                                    <option value="">Select Amount</option>
                                                    <option value="1">1 Piece</option>
                                                    <option value="2">2 Pieces</option>
                                                    <option value="3">3 Pieces</option>
                                                    <option value="4">4 Pieces</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="breed">
                                                    <option value="">Select a Breed</option>
                                                    <option value="italian">Italian</option>
                                                    <option value="egyptian">Egyptian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="qty-outter">
                                            <a href="product-single.html" class="andro_btn-custom">Buy Now</a>
                                            <div class="qty">
                                                <span class="qty-subtract"><i class="fa fa-minus"></i></span>
                                                <input type="text" name="qty" value="1">
                                                <span class="qty-add"><i class="fa fa-plus"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal End -->
    <!-- Aside (Right Panel) -->

    <!-- Header Start -->
    <header class="andro_header header-3 can-sticky">
        <!-- Topheader Start -->

        <!-- Topheader End -->
        <!-- Middle Header Start -->
       @includeIf('layouts.webs.master_hedar')
        <!-- Bottom Header End -->
    </header>
    <!-- Header End -->
    <!-- Banner Start -->

    <!-- Banner End -->
    <!-- Sponsers -->

    <!-- Sponsers -->

    <!-- Featured Products Start -->
  @yield('content')
    <!-- Featured Products End -->

    <!-- Call To Action Start -->

    <!-- Call To Action End -->


    <!-- Daily Deals Start -->

    <!-- Daily Deals End -->
    <!-- Blog posts start -->

    <!-- Blog posts End -->


    <!-- Instagram Start -->

    <!-- Instagram End -->
    <!-- Footer Start -->
  @includeIf('layouts.webs.footer')
    <!-- Footer End -->
    <!-- Vendor Scripts -->
    @includeIf('layouts.webs.footer_scripts')
</body>


<!-- Mirrored from primehostingindia.com/templatemonster/html/bookbay/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Jun 2021 22:25:55 GMT -->
</html>
