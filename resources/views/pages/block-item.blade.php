<div class="carousel-item">
    <!-- Shop Product -->
    <div class="shop-product animation fadeInUp">
        <!-- Overlay Img -->
        <a href="{{route('item.show', $item->slug)}}">
        <div class="overlay-wrapper">
            <img src="/uploads/items/{{$item->image}}" alt="{{$item->title}}">
            <img class="img-hover" src="/uploads/items/{{$item->image}}" alt="{{$item->title}}">
            <div class="rating">
            </div>
        </div>
        </a>
        <!-- Overlay Img -->
        <div class="shop-product-info">
            <a href="{{route('item.show', $item->slug)}}"><h5 class="product-name">{{$item->title}}</h5></a>
            <p class="product-price">{{$item->price}}</p>
        </div>
        <div class="product-links">
            <ul>
                <li>
                    <a href="#" class="ToolTip add-to-cart" title="В корзину" data-id="{{$item->id}}" data-opie-position="tc:bc">
                        <span class="fa fa-shopping-cart"></span>
                    </a>
                </li>
                @if (Auth::check())

                    @if(!$item->favorited())
                        <li>
                            <a href="#" class="ToolTip favorites" data-html="true"  title="Избранное" data-id="{{$item->id}}"
                               data-opie-position="tc:bc" >
                                <span class="fa fa-heart-o"></span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#" class="ToolTip favorites" data-html="true"  title="Избранное" data-id="{{$item->id}}"
                               data-opie-position="tc:bc">
                                <span class="fa fa-heart"></span>
                            </a>
                        </li>
                    @endif

                    @endif
                <li><a href="{{route('item.show', $item->slug)}}" class="ToolTip" title="Посмотреть" data-opie-position="tc:bc"><span class="fa fa-list-ul"></span></a></li>
            </ul>
        </div>
    </div>
    <!-- /Shop Product -->
</div>