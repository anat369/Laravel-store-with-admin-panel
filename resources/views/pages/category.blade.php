@extends('layout')

@section('content')
    <div id="example-wrapper" class="products products-grid-4-columns">
        <div class="div-box mb-45">
            <div class="banner-subpage">
                <figure><img src="images/background/bg-banner.jpg" alt="bg-banner"/></figure>
                <div class="banner-subpage-content">
                    <h2>Products Grid 4 Columns</h2>
                    <div class="desc">
                        <p>Home</p>
                        <p>Products Grid 4 Columns</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-box mb">
            <div class="container">
                <div data-js-module="filtering-demo" class="big-demo go-wide">
                    <ul class="grid shortcode-product-wrap product-begreen columns-4">
                        @foreach($items as $item)
                            <li data-category="outdoor"
                                class="element-item product-item-wrap product-style_1 featured indoor new seeds">
                                <div class="product-item-inner">
                                    <div class="product-thumb">
                                        <div class="product-flash-wrap"></div>
                                        <div class="product-thumb-primary"><img src="/uploads/{{$item->image}}"
                                                                                alt="product1" width="375" height="450"
                                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                        </div>
                                        <div class="product-info">
                                            <div class="star-rating"><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
                                            <a href="{{route('item.show', $item->slug)}}">
                                                <h3>{{$item->title}}</h3>
                                            </a>
                                            <span class="price"><span class="product-begreen-price-amount amount"><span
                                                            class="product-begreen-price-currencysymbol">$</span>55.00</span></span>
                                        </div>
                                        @if(Auth::check())
                                            <div class="product-actions">
                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                                    <div class="yith-wcwl-add-button show"><a href="#"
                                                                                              class="add_to_wishlist"><i
                                                                    class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                                </div>
                                                <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                                class="fa fa-cart-plus"></i> Add to cart</a></div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="div-box">
            @include('footer')
        </div>

    </div>
@endsection