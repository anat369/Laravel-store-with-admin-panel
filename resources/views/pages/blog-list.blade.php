@extends('layout')

@section('content')
    <div id="example-wrapper" class="blog blog-list">
        <div class="div-box">
            <div class="banner-subpage">
                <figure><img src="images/background/bg-banner.jpg" alt="bg-banner"/></figure>
                <div class="banner-subpage-content">
                    <h2>Blog List</h2>
                    <div class="desc">
                        <p>Home </p>
                        <p>Blog List</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-box mb mt">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-wrap">
                            <div class="blog-inner blog-style-grid blog-paging-all">
                                <article class="post">
                                    <div class="post-item">
                                        <div class="entry-wrap">
                                            <div class="entry-thumbnail-wrap">
                                                <div data-number="1" data-margin="0" data-loop="yes" data-navcontrol="yes" class="begreen-owl-carousel">
                                                    <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="images/demo/blog-list-3.jpg" alt="blog" width="800" height="500" class="img-responsive"/></a><a href="images/demo/blog-list-3.jpg" data-rel="prettyPhoto[gallery3]" class="prettyPhoto"><i class="fa fa-arrows-alt"></i></a></div>
                                                    <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="images/demo/blog-list-6.jpg" alt="blog" width="800" height="500" class="img-responsive"/></a><a href="images/demo/blog-list-6.jpg" data-rel="prettyPhoto[gallery3]" class="prettyPhoto"><i class="fa fa-arrows-alt"></i></a></div>
                                                    <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="images/demo/blog-list-4.jpg" alt="blog" width="800" height="500" class="img-responsive"/></a><a href="images/demo/blog-list-4.jpg" data-rel="prettyPhoto[gallery3]" class="prettyPhoto"><i class="fa fa-arrows-alt"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="entry-content-wrap">
                                                <div class="entry-detail">
                                                    <h3 class="entry-title"><a href="blog-detail.html">Easy care houseplants</a></h3>
                                                    <div class="entry-post-meta-wrap">
                                                        <ul class="entry-meta">
                                                            <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                                                            <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i><a href="#"> July 15, 2016 </a></li>
                                                            <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li>
                                                            <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                                                    </div>
                                                    <div class="entry-meta-tag">
                                                        <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                                                    </div>
                                                    <p class="mt-20 mb-20"><a href="#" class="btn-readmore"><span class="span-text">Read more</span></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="post-item">
                                        <div class="entry-wrap">
                                            <div class="entry-thumbnail-wrap">
                                                <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="images/demo/blog-list-2.jpg" alt="blog" width="800" height="500" class="img-responsive"/></a><a href="https://vimeo.com/24487172" data-rel="prettyPhoto[gallery2]" class="prettyPhoto"><i class="fa fa-play-circle"></i></a></div>
                                            </div>
                                            <div class="entry-content-wrap">
                                                <div class="entry-detail">
                                                    <h3 class="entry-title"><a href="blog-detail.html">Plants Of The Month: Sanseivier</a></h3>
                                                    <div class="entry-post-meta-wrap">
                                                        <ul class="entry-meta">
                                                            <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                                                            <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i><a href="#"> July 15, 2016 </a></li>
                                                            <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li>
                                                            <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                                                    </div>
                                                    <div class="entry-meta-tag">
                                                        <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                                                    </div>
                                                    <p class="mt-20 mb-20"><a href="#" class="btn-readmore"><span class="span-text">Read more</span></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="post-item">
                                        <div class="entry-wrap">
                                            <div class="entry-thumbnail-wrap">
                                                <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="images/demo/blog-list-1.jpg" alt="blog" width="800" height="500" class="img-responsive"/></a><a href="images/demo/blog-list-1.jpg" data-rel="prettyPhoto[gallery1]" class="prettyPhoto"><i class="fa fa-arrows-alt"></i></a></div>
                                            </div>
                                            <div class="entry-content-wrap">
                                                <div class="entry-detail">
                                                    <h3 class="entry-title"><a href="blog-detail.html">Plaited Planter Tutorial Fall For DIY</a></h3>
                                                    <div class="entry-post-meta-wrap">
                                                        <ul class="entry-meta">
                                                            <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                                                            <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i><a href="#"> July 15, 2016 </a></li>
                                                            <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li>
                                                            <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                                                    </div>
                                                    <div class="entry-meta-tag">
                                                        <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                                                    </div>
                                                    <p class="mt-20 mb-20"><a href="#" class="btn-readmore"><span class="span-text">Read more </span></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="post-item">
                                        <div class="entry-wrap">
                                            <div class="entry-thumbnail-wrap">
                                                <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="images/demo/blog-list-4.jpg" alt="blog" width="800" height="500" class="img-responsive"/></a><a href="images/demo/blog-list-4.jpg" data-rel="prettyPhoto[gallery1]" class="prettyPhoto"><i class="fa fa-arrows-alt"></i></a></div>
                                            </div>
                                            <div class="entry-content-wrap">
                                                <div class="entry-detail">
                                                    <h3 class="entry-title"><a href="blog-detail.html">Prepping Plants For Summer Vacation</a></h3>
                                                    <div class="entry-post-meta-wrap">
                                                        <ul class="entry-meta">
                                                            <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                                                            <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i><a href="#"> July 15, 2016 </a></li>
                                                            <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li>
                                                            <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                                                    </div>
                                                    <div class="entry-meta-tag">
                                                        <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                                                    </div>
                                                    <p class="mt-20 mb-20"><a href="#" class="btn-readmore"><span class="span-text">Read more</span></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="post-item">
                                        <div class="entry-wrap">
                                            <div class="entry-thumbnail-wrap">
                                                <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="images/demo/blog-list-5.jpg" alt="blog" width="800" height="500" class="img-responsive"/></a><a href="images/demo/blog-list-5.jpg" data-rel="prettyPhoto[gallery1]" class="prettyPhoto"><i class="fa fa-arrows-alt"></i></a></div>
                                            </div>
                                            <div class="entry-content-wrap">
                                                <div class="entry-detail">
                                                    <h3 class="entry-title"><a href="blog-detail.html">Cactus In Bag Paperdraft</a></h3>
                                                    <div class="entry-post-meta-wrap">
                                                        <ul class="entry-meta">
                                                            <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                                                            <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i><a href="#"> July 15, 2016 </a></li>
                                                            <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li>
                                                            <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                                                    </div>
                                                    <div class="entry-meta-tag">
                                                        <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                                                    </div>
                                                    <p class="mt-20 mb-20"><a href="#" class="btn-readmore"><span class="span-text">Read more</span></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="post-item">
                                        <div class="entry-wrap">
                                            <div class="entry-thumbnail-wrap">
                                                <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="images/demo/blog-list-6.jpg" alt="blog" width="800" height="500" class="img-responsive"/></a><a href="images/demo/blog-list-6.jpg" data-rel="prettyPhoto[gallery1]" class="prettyPhoto"><i class="fa fa-arrows-alt"></i></a></div>
                                            </div>
                                            <div class="entry-content-wrap">
                                                <div class="entry-detail">
                                                    <h3 class="entry-title"><a href="blog-detail.html">These Plant Pots Make From Upcycled Ceramic</a></h3>
                                                    <div class="entry-post-meta-wrap">
                                                        <ul class="entry-meta">
                                                            <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                                                            <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i><a href="#"> July 15, 2016 </a></li>
                                                            <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li>
                                                            <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="entry-excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                                                    </div>
                                                    <div class="entry-meta-tag">
                                                        <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                                                    </div>
                                                    <p class="mt-20 mb-20"><a href="#" class="btn-readmore"><span class="span-text">Read more</span></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <p class="button-product text-center mt-20"> <a class="btn btn-15">Load more</a></p>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar sidebar-product sidebar-blog">
                            <aside class="mb-45 img-sidebar text-center">
                                <figure><img src="images/demo/about-us.png" alt="about-us"/></figure>
                                <p>Sara Gabrena I love life and the unique position of being a working artist. I love the thrill of the hunt and am an avid vintage hound, sniffing out the best one-of-a-kinds.</p>
                            </aside>
                            <aside class="mb-45 search-sidebar">
                                <h2 class="text-center mb-20">Search</h2>
                                <form class="form-input">
                                    <input type="text" placeholder="Search here..."/><a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </aside>
                            <aside class="mb-45 categories-blog">
                                <h2 class="text-center mb-20">Categories</h2>
                                <ul class="cat-list-blog">
                                    <li><a href="#"> <i class="fa fa-chevron-right"></i>Design (2)</a></li>
                                    <li><a href="#"> <i class="fa fa-chevron-right"></i>Handmade (1)</a></li>
                                    <li><a href="#"> <i class="fa fa-chevron-right"></i>Happyhouse (1)</a></li>
                                    <li><a href="#"> <i class="fa fa-chevron-right"></i>Planter (9)</a></li>
                                    <li><a href="#"> <i class="fa fa-chevron-right"></i>Tree (4)</a></li>
                                </ul>
                            </aside>
                            <aside class="mb-45">
                                <ul class="posts-thumbnail-list size-thumbnail">
                                    <li class="clearfix">
                                        <div class="posts-thumbnail-image"><a href="#"><img src="images/demo/blog1.jpg" alt="blog" width="865" height="585"/></a></div>
                                        <div class="posts-thumbnail-content">
                                            <h4 class="p-font"><a href="#">Choose the plants and pots</a></h4>
                                            <div class="posts-thumbnail-meta"><span class="author vcard">admin</span>
                                                <time datetime="2016-07-15T08:11:58+00:00">Jul, 2016</time><span class="comment-count"><i class="fa fa-comments-o"></i><a href="#">0</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="posts-thumbnail-image"><a href="#"><img src="images/demo/blog3.jpg" alt="blog" width="865" height="585"/></a></div>
                                        <div class="posts-thumbnail-content">
                                            <h4 class="p-font"><a href="#">Lina Skukauke Shopify</a></h4>
                                            <div class="posts-thumbnail-meta"><span class="author vcard">admin</span>
                                                <time datetime="2016-07-15T08:09:32+00:00">Jul, 2016</time><span class="comment-count"><i class="fa fa-comments-o"></i><a href="#">0</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="posts-thumbnail-image"><a href="#"><img src="images/demo/blog6.jpg" alt="blog" height="585"/></a></div>
                                        <div class="posts-thumbnail-content">
                                            <h4 class="p-font"><a href="#">Connie Saxe Planter</a></h4>
                                            <div class="posts-thumbnail-meta"><span class="author vcard">admin</span>
                                                <time datetime="2016-07-15T08:08:26+00:00">Jul, 2016</time><span class="comment-count"><i class="fa fa-comments-o"></i><a href="#">0</a></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="mb-45 follow-me">
                                <h2 class="text-center mb-20">Follow Me</h2>
                                <div class="desc-follow mb-20">MAKE A HAPPY MOMENTS</div>
                                <ul class="social-profile text-center">
                                    <li><a title="Facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="Twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="Pinterest" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a title="GooglePlus" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a title="Vimeo" href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li><a title="Instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a title="Linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a title="Rss" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                    <li><a title="Youtube" href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </aside>
                            <aside class="mb-45 ad-pot">
                                <h2 class="text-center mb-20">Ad Spot</h2>
                                <figure><img src="images/demo/ad.jpg" alt="ad"/></figure>
                            </aside>
                        </div>
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
                    <div class="slider-instagram-absolute-2-content"><a href="#" class="btn btn-11">@begreen.yolo</a></div>
                </div>
            </div>
        </div>

        <div class="div-box">
            <footer id="yolo-footer-wrapper">
                <div class="yolo-footer-wrapper footer-3">
                    <div class="footer-col">
                        <h2><a href="index.html" class="logo"><img src="images/logo/logo-footer.png" alt="logo1" width="84" height="63" class="vc_single_image-img attachment-full"/></a></h2>
                        <ul id="social-footer">
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <p class="copyright">BeGreen © Yolo 2016 Copyright, All Right Reserved 2016 Designed by <a href="#">Yolo</a></p>
                    </div>
                </div>
            </footer>
        </div>

    </div>
@endsection