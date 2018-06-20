@extends('layout')

@section('content')
    <div id="example-wrapper" class="product single-product affiliate-external-product">
        <div class="div-box">
            <div class="banner-subpage">
                <figure><img src="/images/background/bg-banner.jpg" alt="bg-banner"/></figure>
                <div class="banner-subpage-content">
                    <h2>The Olmsted with Ferns</h2>
                    <div class="desc">
                        <p>Home </p>
                        <p>Shop </p>
                        <p>NewThe </p>
                        <p>The Olmsted with Ferns</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-box mb mt">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="single-product-slider">
                            <div id="sync1" class="owl-carousel owl-template">
                                <div class="item">
                                    <figure><img src="/uploads/<?= $item->image?>" alt="slide" width="1080"
                                                 height="768"/>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="single-product-content">
                            <div class="summary-product entry-summary">
                                <h2 class="product_title mb-45">{{$item->title}}</h2>
                                <div>
                                    <p class="price">
                                        <span class="product-begreen-price-amount amount">Цена: </span>
                                        <span class="product-begreen-price-currencysymbol"
                                              style="color: #2F3133">{{$item->price}} р.</span>
                                    </p>
                                </div>
                                <div class="product-single-short-description">
                                    <p><?= $item->description?></p>
                                </div>
                                <form class="cart">
                                    <button type="submit" class="single_add_to_cart_button button alt">Добавить в
                                        корзину
                                    </button>
                                </form>
                                <div class="product_meta">
                                    <span class="posted_in">
                                        <label>Категория: </label>
                                        <a href="{{route('category.show', $category->slug)}}">{{$category->title}}</a>
                                    </span>
                                </div>
                                <div class="product_meta">
                                    <span class="posted_in">
                                            <label>Наличие: </label>
                                        <span class="product-stock-status in-stock">{{$item->availability}}</span></span><span
                                            class="posted_in">
                                    </span>
                                </div>
                                @if(Auth::check())
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i
                                                        class="fa fa-heart-o"></i>Добавить в избранное</a></div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="div-box mb">
                <div class="container">
                    <div class="title-style title-style-2 text-center mb-20">
                        <h2>Похожие товары</h2>
                    </div>
                    <div data-number="4" data-margin="0" data-loop="no" data-navcontrol="yes"
                         class="shortcode-product-wrap product-begreen begreen-owl-carousel">
                        @foreach($simularItems as $simularItem)
                            <div class="product-item-wrap product-style_1">
                                <div class="product-item-inner">
                                    <div class="product-thumb">
                                        <div class="product-flash-wrap"><span class="on-new product-flash">18.56%</span>
                                        </div>
                                        <div class="product-thumb-primary"><img src="/uploads/<?= $simularItem->image?>"
                                                                                alt="product1" width="375" height="450"
                                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('item.show', $simularItem->slug)}}" class="text-uppercase">
                                                <h3>{{$simularItem->title}}</h3>
                                            </a>
                                            <span class="price">
                       <ins><span
                                   class="product-begreen-price-amount amount"><span
                                       class="product-begreen-price-currencysymbol"></span>{{$simularItem->price}}
                               p.</span></ins></span>
                                        </div>
                                        @if(Auth::check())
                                            <div class="product-actions">
                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                                    <div class="yith-wcwl-add-button show"><a href="#"
                                                                                              class="add_to_wishlist"><i
                                                                    class="fa fa-heart-o"></i>Добавить в избранное</a>
                                                    </div>
                                                </div>
                                                <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                                class="fa fa-cart-plus"></i>Добавить в корзину</a></div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="div-box">
                @include('footer')
            </div>
        </div>
    </div>

@endsection