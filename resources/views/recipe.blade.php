@extends('layouts.master-recipe')
@section('title', 'Recipe')
@section('content-recipe')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
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
                        <div class="row"></div>
                    </div>
                    <div class="row">

                        @foreach($data as $recipes)
                        <div class="col-lg-4 col-md-6 col-sm-6 mix kue">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"> <img src="{{ $recipes->photo }} " alt="" class="set-bg"> 
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $recipes->title }}</h6>
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
                                        <p>{{ $recipes->description}}
                                        </p>
                                    </div>
                                    <button class="custom-btn btn-11"><a href="https://wa.widget.web.id/5d259f" target="_blank" rel="noopener"` class="wawa"><i class="fa fa-whatsapp"> Get the Recipe</i></a></button>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    @endsection


    