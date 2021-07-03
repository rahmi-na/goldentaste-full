@extends('layouts.master-recipe')
@section('title', 'Recipe')
@section('content-recipe')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <!-- <div class="row">
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
            </div> -->
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

                            <!-- <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>12</span> Recipes found</h6>
                                </div>
                            </div> -->

                            <!-- <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <button class="icon_grid-2x2" onclick="listView()" id="btnContainer"></button>
                                    <button class="icon_ul" onclick="gridView()" id="btnContainer"></button>
                                </div>
                            </div> -->

                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix kue"> -->
                            <!-- <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/ayam.jpg">
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/ayamBakarTaliwang">Passion fruit soufflé with white chocolate ice cream</a></h6>
                                    <p>by: Michel Roux Jr</p>
                                    <div class="ket_recipe">
                                        <ul>
                                            <li class="ket_recipe1">
                                                <span class="fa fa-cutlery" id="span1" aria-hidden="true"> Dessert</span>
                                                <span class="fa fa-user" id="span1" aria-hidden="true"> 4</span>
                                                <span class="fa fa-clock-o" id="span1" aria-hidden="true"> 1 hour 10 minutes</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="desc">
                                        <p>
                                        Rising tall and proud from its ramekin, this soufflé recipe seems simple on paper, but of course is tricky to master. 
                                        There’s no better chef to learn the dark art of soufflés than Michel Roux Jr, however, 
                                        and his passion fruit soufflé is one of the best we’ve tasted. 
                                        Served with a quenelle of rich white chocolate ice cream and fresh passion fruit on top, it’s the perfect dessert for when you’re looking to impress.
                                        </p>
                                    </div>
                                    <button class="custom-btn btn-11" href="#"><i class="fa fa-whatsapp"> Get the Recipe</i></button>
                                </div>
                            </div>
                        </div> -->


                        <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/ayam.jpg">
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/ayamBakarTaliwang">Tagliarini with slow-cooked tomato sauce</a></h6>
                                    <p>by: PRuth Rogers</p>
                                    <div class="ket_recipe">
                                        <ul>
                                            <li class="ket_recipe1">
                                                <span class="fa fa-cutlery" id="span1" aria-hidden="true"> Main</span>
                                                <span class="fa fa-user" id="span1" aria-hidden="true"> 4</span>
                                                <span class="fa fa-clock-o" id="span1" aria-hidden="true"> 45 minutes</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="desc">
                                        <p>
                                        Pasta with tomato sauce is one of those simple dishes that, when done right, is more comforting and delicious than anything more complex and involved.
                                         complete with homemade tagliarini – a delicate, silky pasta shape that's like a very thin tagliatelle. It goes without saying that using the very best tomatoes is key to its flavour.
                                        </p>
                                    </div>
                                    <button class="custom-btn btn-11" href="#"><i class="fa fa-whatsapp"> Get the Recipe</i></button>
                                </div>
                            </div>
                        </div> -->


                        <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/ayam.jpg">
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/ayamBakarTaliwang">Roast plantain burrito with Mexican rice and mixed beans</a></h6>
                                    <p>by: Food Urchin</p>
                                    <div class="ket_recipe">
                                        <ul>
                                            <li class="ket_recipe1">
                                                <span class="fa fa-cutlery" id="span1" aria-hidden="true"> Main</span>
                                                <span class="fa fa-user" id="span1" aria-hidden="true"> 4</span>
                                                <span class="fa fa-clock-o" id="span1" aria-hidden="true"> 50 minutes</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            This beautiful plantain burrito recipe by Food Urchin contains the perfect formula for spicy,
                                            aromatic Mexican rice. The chilli soaking water is used to cook the rice, giving it a wonderful depth of flavour, 
                                            along with a host of other delicious aromatics like cinnamon, oregano, lime and cumin.
                                        </p>
                                    </div>
                                    <button class="custom-btn btn-11" href="#"><i class="fa fa-whatsapp"> Get the Recipe</i></button>
                                </div>
                            </div>
                        </div> -->


                        <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/ayam.jpg"> 
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/ayamBakarTaliwang">Chicken satay with peanut sauce</a></h6>
                                    <p>by: Sally Abé</p>
                                    <div class="ket_recipe">
                                        <ul>
                                            <li class="ket_recipe1">
                                                <span class="fa fa-cutlery" id="span1" aria-hidden="true"> Starter</span>
                                                <span class="fa fa-user" id="span1" aria-hidden="true"> 2</span>
                                                <span class="fa fa-clock-o" id="span1" aria-hidden="true"> 60 minutes</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            Chicken satay with peanut sauce is a party favourite, but also makes a delicious starter. The creamy, slightly sweet sauce in Sally's easy chicken recipe perfectly complements the sticky, tangy meat.
                                        </p>
                                    </div>
                                    <button class="custom-btn btn-11" href="#"><i class="fa fa-whatsapp"> Get the Recipe</i></button>
                                </div>
                            </div>
                        </div> -->


                        <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/ayam.jpg">
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/ayamBakarTaliwang">Bibimbap – mixed rice bowl with beef</a></h6>
                                    <p>by: Judy Joo</p>
                                    <div class="ket_recipe">
                                        <ul>
                                            <li class="ket_recipe1">
                                                <span class="fa fa-cutlery" id="span1" aria-hidden="true"> Main</span>
                                                <span class="fa fa-user" id="span1" aria-hidden="true"> 4</span>
                                                <span class="fa fa-clock-o" id="span1" aria-hidden="true"> 20 minutes</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            Judy Joo's easy bibimbap recipe is a simplified version of a Korean classic, with a colourful array of vegetables, meat and eggs sitting atop a mound of crisp fried rice. Arranging the vegetables in separate spokes makes this dish a wonderful centrepiece, although remember to mix everything together before you tuck in!
                                        </p>
                                    </div>
                                    <button class="custom-btn btn-11" href="#"><i class="fa fa-whatsapp"> Get the Recipe</i></button>
                                </div>
                            </div>
                        </div> -->

                        @foreach($data as $recipes)
                        <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"> <img src="{{ $recipes->photo }}" class="set-bg">
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/ayamBakarTaliwang">{{ $recipes->title }}</a></h6>
                                    <p>by: {{ $recipes->chef }}</p>
                                    <div class="ket_recipe">
                                        <ul>
                                            <li class="ket_recipe1">
                                                <span class="fa fa-cutlery" id="span1" aria-hidden="true"> {{ $recipes->categories->name }}</span>
                                                <span class="fa fa-user" id="span1" aria-hidden="true"> {{ $recipes->person}}</span>
                                                <span class="fa fa-clock-o" id="span1" aria-hidden="true"> {{ $recipes->cook_time}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="desc">
                                        <p>{{ $recipes->description}}.
                                        </p>
                                    </div>
                                    <!-- <button id="foot"><button class="button-os"><a href="#" class="fa fa-whatsapp"> Get the recipe</a></button></button> -->
                                    <button class="custom-btn btn-11" href="#"><i class="fa fa-whatsapp"> Get the Recipe</i></button>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <!-- <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div> -->

                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    @endsection


    