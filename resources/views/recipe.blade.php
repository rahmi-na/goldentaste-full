@extends('layouts.master-recipe')
@section('title', 'Recipe')
@section('content-recipe')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Recipe</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Recipe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select size="1" name="food">
                                        <!-- <option class="active" data-filter="*" value="1">All</option> -->
                                        <option value="makanan">Makanan Berat</option>
                                        <option value="kue">Kue</option>
                                        <option value="jajanan">Jajanan</option>
                                        <option value="minuman">Minuman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>12</span> Recipes found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <button class="icon_grid-2x2" onclick="listView()" id="btnContainer"></button>
                                    <button class="icon_ul" onclick="gridView()" id="btnContainer"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/ayam.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/ayamBakarTaliwang">Ayam Bakar Taliwang</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/onde.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/ondeOndePelangi">Onde Onde Pelangi</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix makanan">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/salju.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/putriSalju">Kue Putri Salju Keju</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix jajanan">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/soto.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/sotoBanjar">Soto Banjar</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix minuman">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/dalgona.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/dalgona">Dalgona Coffee</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix jajanan">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/strawberry.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/strawberry">Strawberry Scheese Biscoff Desert Box</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/cireng.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/cireng">Cireng Bumbu Rujak</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix makanan">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/alpukat.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/alpukat">Es Buah Alpukat Nangka Kelapa Susu</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix jajanan">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">product 9</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix minuman">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">product 10</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix makanan">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-11.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">product 11</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mix minuman">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-12.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">product 12</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    @endsection


    