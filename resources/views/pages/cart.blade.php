@extends('layout')
@section('content')
    <div id="example-wrapper" class="product cart">
        <div class="div-box">
            <div class="banner-subpage">
                <figure><img src="images/background/bg-banner.jpg" alt="bg-banner"/></figure>
                <div class="banner-subpage-content">
                    <h2>Cart</h2>
                    <div class="desc">
                        <p>Shop </p>
                        <p>Cart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-box mb mt">
            <div class="container">
                <form class="cart-form">
                    <table>
                        <tr>
                            <th>Product</th>
                            <th></th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td data-title="Product"><a href="#" class="image-product"><img
                                            src="images/demo/product-1.jpg" alt="tab-1" width="180" height="220"/></a>
                            </td>
                            <td data-title="Name"><a href="#" class="name-product">Sicily Chair </a></td>
                            <td data-title="Price"><span class="price">$799.00</span></td>
                            <td data-title="Quantity"><span class="quanlity">Quantity:</span>
                                <input type="number" value="1" min="0"/>
                            </td>
                            <td data-title="Total"><span class="total">$799.00</span></td>
                            <td data-title="Remove"><i class="fa fa-times"></i></td>
                        </tr>
                        <tr>
                            <td data-title="Product"><a href="#" class="image-product"><img
                                            src="images/demo/product-2.jpg" alt="tab-1" width="180" height="220"/></a>
                            </td>
                            <td data-title="Name"><a href="#" class="name-product">Sicily Chair </a></td>
                            <td data-title="Price"><span class="price">$799.00</span></td>
                            <td data-title="Quantity"><span class="quanlity">Quantity:</span>
                                <input type="number" value="1" min="0"/>
                            </td>
                            <td data-title="Total"><span class="total">$799.00</span></td>
                            <td data-title="Remove"><i class="fa fa-times"></i></td>
                        </tr>
                    </table>
                    <div class="button-cart">
                        <div class="button-cart-left">
                            <input type="text" placeholder="Coupon code"/><a href="#" class="coupon">Apply Coupon</a>
                        </div>
                        <div class="button-cart-right"><a href="#" class="update-cart">Update Cart</a><a href="#"
                                                                                                         class="process">Proceed
                                to Checkout</a></div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-6">
                        <form class="cart-total">
                            <h4>Cart Totals</h4>
                            <table>
                                <tr>
                                    <td>Subtotal</td>
                                    <td><span class="subtotal">$890.00</span></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td><span class="total">$890.00</span></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
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