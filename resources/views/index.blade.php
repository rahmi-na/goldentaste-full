@extends('layouts.master-index')
@section('title', 'Home')
@section('content-index')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>RECIPE</span>
                            <h2>YOUR <br />FAVORITE <br />RECIPE</h2>
                            <p>Practice Makes Perfect</p>
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
                            <h5><div class="cate_item">buah-buahan</div></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><div class="cate_item">sayuran</div></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><div class="cate_item">minuman</div></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><div class="cate_item">daging</div></h5>
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
                            <li data-filter=".main">Main</li>
                            <li data-filter=".dessert">Dessert</li>
                            <li data-filter=".appetizer">Appetizer</li>
                            <li data-filter=".drink">Drink</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix main">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/braised.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="https://wa.widget.web.id/c2c6ff"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6>Braised turbot with smoked roe, Jersey Royals and estuary greens</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix appetizer">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/barbecued.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6>Barbecued pizza topped with asparagus, broad beans and fennel</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix drink">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/jalapeno.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6>Strawberry Jalapeño-infused Mint Julep</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dessert">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/passion.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6>Passion fruit soufflé with white chocolate ice cream</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix main">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/tagliarini.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6>Tagliarini with slow-cooked tomato sauce</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dessert">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/winter.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6>'Winter is coming' – chocolate, coffee and hazelnut dessert</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    @endsection
  