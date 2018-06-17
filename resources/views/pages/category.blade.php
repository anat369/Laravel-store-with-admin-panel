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
                    <div class="filter-button-group button-group js-radio-button-group container">
                        <button data-filter="*" class="button is-checked">All</button>
                        <button data-filter=".featured" class="button">Featured</button>
                        <button data-filter=".indoor" class="button">Indoor</button>
                        <button data-filter=".new" class="button">New</button>
                        <button data-filter=".outdoor" class="button">Outdoor</button>
                        <button data-filter=".pots" class="button">Pots</button>
                        <button data-filter=".seeds" class="button">Seeds</button>
                    </div>
                    <ul class="grid shortcode-product-wrap product-begreen columns-4">
                        <li data-category="outdoor"
                            class="element-item product-item-wrap product-style_1 featured indoor new seeds">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-1.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Hot Holiday Naked Cactus</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>55.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="pots"
                            class="element-item product-item-wrap product-style_1 indoor outdoor pots seeds">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-2.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>Cactus quaerat volupta</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="seeds"
                            class="element-item product-item-wrap product-style_1 featured indoor pots">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-3.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Tall Terrarium Plant</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>52.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="outdoor"
                            class="element-item product-item-wrap product-style_1 indoor new pots">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-4.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Calvert with Light Plants</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>42.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="pots"
                            class="element-item product-item-wrap product-style_1 featured pots seeds">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-5.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Calvert with Succulents</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>33.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="indoor"
                            class="element-item product-item-wrap product-style_1 indoor outdoor pots">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-6.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Succulent Collection</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>44.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="seeds" class="element-item product-item-wrap product-style_1 outdoor pots">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"><span class="on-new product-flash">18.56%</span>
                                    </div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-7.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                                    class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Ezra with Low Light Plants</h3></a><span class="price">
                          <del><span class="product-begreen-price-amount amount"><span
                                          class="product-begreen-price-currencysymbol">$</span>49.00</span></del><ins><span
                                                        class="product-begreen-price-amount amount"><span
                                                            class="product-begreen-price-currencysymbol">$</span>40.00</span></ins></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="indoor"
                            class="element-item product-item-wrap product-style_1 indoor featured">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"><span class="on-new product-flash">Sold</span></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-8.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Tall Terrarium Plant Collection</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="pots"
                            class="element-item product-item-wrap product-style_1 featured pots seeds">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-9.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Calvert with Succulents</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>33.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="indoor"
                            class="element-item product-item-wrap product-style_1 indoor outdoor pots">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-10.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Succulent Collection</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>44.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="seeds" class="element-item product-item-wrap product-style_1 outdoor pots">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"><span class="on-new product-flash">18.56%</span>
                                    </div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-11.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                                    class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Ezra with Low Light Plants</h3></a><span class="price">
                          <del><span class="product-begreen-price-amount amount"><span
                                          class="product-begreen-price-currencysymbol">$</span>49.00</span></del><ins><span
                                                        class="product-begreen-price-amount amount"><span
                                                            class="product-begreen-price-currencysymbol">$</span>40.00</span></ins></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-category="indoor"
                            class="element-item product-item-wrap product-style_1 indoor featured">
                            <div class="product-item-inner">
                                <div class="product-thumb">
                                    <div class="product-flash-wrap"><span class="on-new product-flash">Sold</span></div>
                                    <div class="product-thumb-primary"><img src="images/demo/product-12.jpg"
                                                                            alt="product1" width="375" height="450"
                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                                    </div>
                                    <a href="#" class="product-link">
                                        <div class="product-hover-sign">
                                            <hr/>
                                            <hr/>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star-o"></i></div>
                                        <a href="#">
                                            <h3>The Tall Terrarium Plant Collection</h3></a><span class="price"><span
                                                    class="product-begreen-price-amount amount"><span
                                                        class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                            <div class="yith-wcwl-add-button show"><a href="#"
                                                                                      class="add_to_wishlist"><i
                                                            class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                        </div>
                                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i
                                                        class="fa fa-cart-plus"></i> Add to cart</a></div>
                                        <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick
                                            view</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <p class="button-product text-center mt-20"><a class="btn btn-15">Load more</a></p>
            </div>
        </div>

        <div class="div-box">
            <div class="slider-instagram">
                <div data-number="8" data-margin="0" data-loop="no" data-navcontrol="yes" class="begreen-owl-carousel">
                    <div><a href="#"><img src="images/demo/instagram-1.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-2.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-3.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-4.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-5.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-6.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-7.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-8.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-6.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-7.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-8.jpg" alt="instagram"/></a></div>
                </div>
                <div class="slider-instagram-absolute-1 container">
                    <div class="slider-instagram-absolute-1-content">
                        <h3>Instagram.</h3>
                    </div>
                </div>
                <div class="slider-instagram-absolute-2 container">
                    <div class="slider-instagram-absolute-2-content"><a href="#" class="btn btn-11">@begreen.yolo</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="div-box">
            <footer id="yolo-footer-wrapper">
                <div class="yolo-footer-wrapper footer-3">
                    <div class="footer-col">
                        <h2><a href="index.html" class="logo"><img src="images/logo/logo-footer.png" alt="logo1"
                                                                   width="84" height="63"
                                                                   class="vc_single_image-img attachment-full"/></a>
                        </h2>
                        <ul id="social-footer">
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <p class="copyright">BeGreen © Yolo 2016 Copyright, All Right Reserved 2016 Designed by <a
                                    href="#">Yolo</a></p>
                    </div>
                </div>
            </footer>
        </div>

    </div>
@endsection