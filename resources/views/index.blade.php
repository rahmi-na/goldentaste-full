@extends('layouts.master-index')
@section('title', 'Home')
@section('content-index')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>RECIPE</span>
                            <h2>YOUR <br />FAVORITE <br />FOOD</h2>
                            <p>Practice Makes Perfect</p>
                            <a href="#" class="site-btn">READ NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="#">buah-buahan</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><a href="#">sayuran</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><a href="#">minuman</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="#">daging</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="h2-section">Trend</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".makanan">Makanan Berat</li>
                            <li data-filter=".kue">Kue</li>
                            <li data-filter=".jajanan">Jajanan</li>
                            <li data-filter=".minuman">Minuman</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix jajanan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/cireng.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="https://wa.widget.web.id/c2c6ff"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/cireng">Cireng Bumbu Rujak</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix kue">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/strawberry.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/strawberry">Strawberry Cheese Biscoff Dessert Box</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix jajanan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/onde.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/ondeOndePelangi">Onde-Onde Pelangi</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix minuman">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/dalgona.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/dalgona">Dalgona Coffee</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix makanan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/soto.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/soto">Soto Banjar</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix kue">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/salju.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/putriSalju">Putri Salju Keju</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix minuman">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/alpukat.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/alpukat">Es Buah Alpukat Nangka Kepala Susu</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix makanan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/ayam.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/ayamBakarTaliwang">Ayam Bakar Taliwang</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Services Start -->
    <section class="pricing-card-area section-padding30">
        <div class="container">
            <!-- Section Title -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-service-70">
                        <h2 class="h2-service">Choose Your Plan</h2>
                        <p class="p-service">Let's choose the package that is best for you and explore it happily and
                            cheerfully.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card-service text-center mb-service-30">
                        <div class="card-top-service">
                            <span class="flaticon-chart"></span>
                            <h4 class="h4-service">Free Plan</h4>
                        </div>
                        <div class="card-bottom-service">
                            <ul class="ul-service">
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                            </ul>
                        </div>
                        <div class="card-buttons-service mt-service-30">
                            <a href="#" class="btn card-service-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card-service text-center mb-service-30">
                        <div class="card-top-service">
                            <span class="flaticon-chart"></span>
                            <h4 class="h4-service">Standard Plan</h4>
                        </div>
                        <div class="card-bottom-service">
                            <ul class="ul-service">
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                            </ul>
                        </div>
                        <div class="card-buttons-service mt-service-30">
                            <a href="#" class="btn card-service-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card-service text-center mb-service-30">
                        <div class="card-top-service">
                            <span class="flaticon-chart"></span>
                            <h4 class="h4-service">Premium Plan</h4>
                        </div>
                        <div class="card-bottom-service">
                            <ul class="ul-service">
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                                <li class="li-service"><i class="fa fa-check" id="i-service"></i>akses</li>
                            </ul>
                        </div>
                        <div class="card-buttons-service mt-service-30">
                            <a href="#" class="btn card-service-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Card End -->
    @endsection
  