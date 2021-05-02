<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>{{$post->title}}</title>

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{route('post.index')}}">
                <img class="logo-light" src="{{asset('/storage/logoimage/billie.png')}}" alt="logo" height="150px" width="150px">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>

            <ul class="nav nav-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="#">Demos <span class="arrow"></span></a>
                    <ul class="nav">

                        <li class="nav-item">
                            <a class="nav-link" href="#">SaaS <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../demo/saas-1.html">SaaS 1</a>
                                <a class="nav-link" href="../demo/saas-2.html">SaaS 2</a>
                                <a class="nav-link" href="../demo/saas-3.html">SaaS 3</a>
                                <a class="nav-link" href="../demo/saas-4.html">SaaS 4</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Software <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../demo/software-1.html">Software 1</a>
                                <a class="nav-link" href="../demo/software-2.html">Software 2</a>
                                <a class="nav-link" href="../demo/software-3.html">Software 3</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Marketing <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../demo/marketing-1.html">Marketing 1</a>
                                <a class="nav-link" href="../demo/marketing-2.html">Marketing 2</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Listing <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../demo/listing-1.html">Listing 1</a>
                                <a class="nav-link" href="../demo/listing-2.html">Listing 2</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../demo/finance-1.html">Finance</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pages <span class="arrow"></span></a>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../page/how-it-works.html">How it works</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../page/pricing.html">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../page/portfolio.html">Potfolio listing</a>
                                <a class="nav-link" href="../page/portfolio-single.html">Potfolio single</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Careers <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../page/career.html">Careers listing</a>
                                <a class="nav-link" href="../page/career-single.html">Careers single</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Service <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../page/service-1.html">Service 1</a>
                                <a class="nav-link" href="../page/service-2.html">Service 2</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../page/about-1.html">About 1</a>
                                <a class="nav-link" href="../page/about-2.html">About 2</a>
                                <a class="nav-link" href="../page/about-3.html">About 3</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../page/contact-1.html">Contact 1</a>
                                <a class="nav-link" href="../page/contact-2.html">Contact 2</a>
                                <a class="nav-link" href="../page/contact-3.html">Contact 3</a>
                            </nav>
                        </li>

                        <li class="nav-divider"></li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Extra <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../page/demo.html">Request demo</a>
                                <a class="nav-link" href="../page/coming-soon.html">Coming soon</a>
                                <a class="nav-link" href="../page/terms.html">Terms</a>
                                <a class="nav-link" href="../page/error-404.html">Error 404</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">User <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../page/user-login.html">Login</a>
                                <a class="nav-link" href="../page/user-register.html">Register</a>
                                <a class="nav-link" href="../page/user-recover.html">Recover</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Docs <span class="arrow"></span></a>
                            <nav class="nav">
                                <a class="nav-link" href="../docs/index.html">Support center</a>
                                <a class="nav-link" href="../docs/articles.html">Articles</a>
                                <a class="nav-link" href="../docs/faq.html">FAQ</a>
                            </nav>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Blog <span class="arrow"></span></a>
                    <nav class="nav">
                        <a class="nav-link" href="../blog/classic.html">Classic</a>
                        <a class="nav-link" href="../blog/grid.html">Grid</a>
                        <a class="nav-link" href="../blog/list.html">List</a>
                        <a class="nav-link" href="../blog/sidebar.html">Sidebar</a>
                        <div class="nav-divider"></div>
                        <a class="nav-link active" href="../blog/post-1.html">Post 1</a>
                        <a class="nav-link" href="../blog/post-2.html">Post 2</a>
                    </nav>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Shop <span class="arrow"></span></a>
                    <nav class="nav">
                        <a class="nav-link" href="../shop/list.html">List</a>
                        <a class="nav-link" href="../shop/item.html">Item</a>
                        <a class="nav-link" href="../shop/cart.html">Cart</a>
                        <a class="nav-link" href="../shop/checkout.html">Checkout</a>
                    </nav>
                </li>

                <li class="nav-item nav-mega">
                    <a class="nav-link" href="#">Blocks <span class="arrow"></span></a>
                    <nav class="nav px-lg-2 py-lg-4">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-lg">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="../block/blog.html">Blog</a>
                                        <a class="nav-link" href="../block/career.html">Career</a>
                                        <a class="nav-link" href="../block/contact.html">Contact</a>
                                        <a class="nav-link" href="../block/content.html">Content</a>
                                        <a class="nav-link" href="../block/counter.html">Counter</a>
                                        <a class="nav-link" href="../block/cover.html">Cover</a>
                                        <a class="nav-link" href="../block/cta.html">Call to action</a>
                                        <a class="nav-link" href="../block/download.html">Download</a>
                                        <a class="nav-link" href="../block/explore.html">Explore</a>
                                        <a class="nav-link" href="../block/faq.html">FAQ</a>
                                    </nav>
                                </div>

                                <div class="col-lg">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="../block/feature-text.html">Feature textual</a>
                                        <a class="nav-link" href="../block/feature.html">Feature</a>
                                        <a class="nav-link" href="../block/footer.html">Footer</a>
                                        <a class="nav-link" href="../block/gallery.html">Gallery</a>
                                        <a class="nav-link" href="../block/header.html">Header</a>
                                        <a class="nav-link" href="../block/map.html">Map</a>
                                        <a class="nav-link" href="../block/modal.html">Modal</a>
                                        <a class="nav-link" href="../block/offcanvas.html">Offcanvas</a>
                                        <a class="nav-link" href="../block/partner.html">Partner</a>
                                        <a class="nav-link" href="../block/popup.html">Popup</a>
                                    </nav>
                                </div>

                                <div class="col-lg">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="../block/portfolio.html">Portfolio</a>
                                        <a class="nav-link" href="../block/pricing.html">Pricing</a>
                                        <a class="nav-link" href="../block/process.html">Process</a>
                                        <a class="nav-link" href="../block/service.html">Service</a>
                                        <a class="nav-link" href="../block/shop.html">Shop</a>
                                        <a class="nav-link" href="../block/signup.html">Signup</a>
                                        <a class="nav-link" href="../block/subscribe.html">Subscribe</a>
                                        <a class="nav-link" href="../block/team.html">Team</a>
                                        <a class="nav-link" href="../block/testimonial.html">Testimonial</a>
                                        <a class="nav-link" href="../block/video.html">Video</a>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </nav>
                </li>

                <li class="nav-item nav-mega">
                    <a class="nav-link" href="#">UI Kit <span class="arrow"></span></a>
                    <nav class="nav px-lg-2 py-lg-4">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-lg-3">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="../uikit/accordion.html">Accordion</a>
                                        <a class="nav-link" href="../uikit/alert.html">Alert</a>
                                        <a class="nav-link" href="../uikit/badge.html">Badge</a>
                                        <a class="nav-link" href="../uikit/button.html">Button</a>
                                        <a class="nav-link" href="../uikit/card.html">Card</a>
                                        <a class="nav-link" href="../uikit/color.html">Colors</a>
                                        <a class="nav-link" href="../uikit/constellation.html">Constellation</a>
                                        <a class="nav-link" href="../uikit/content.html">Content</a>
                                        <a class="nav-link" href="../uikit/countdown.html">Count down</a>
                                        <a class="nav-link" href="../uikit/countup.html">Count up</a>
                                    </nav>
                                </div>

                                <div class="col-lg-3">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="../uikit/dropdown.html">Dropdown</a>
                                        <a class="nav-link" href="../uikit/form.html">Form</a>
                                        <a class="nav-link" href="../uikit/gallery.html">Gallery</a>
                                        <a class="nav-link" href="../uikit/granim.html">Granim</a>
                                        <a class="nav-link" href="../uikit/icon.html">Icon</a>
                                        <a class="nav-link" href="../uikit/image.html">Image</a>
                                        <a class="nav-link" href="../uikit/lightbox.html">Lightbox</a>
                                        <a class="nav-link" href="../uikit/map.html">Map</a>
                                        <a class="nav-link" href="../uikit/misc.html">Miscellaneous</a>
                                        <a class="nav-link" href="../uikit/modal.html">Modal</a>
                                    </nav>
                                </div>

                                <div class="col-lg-3">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="../uikit/nav.html">Nav</a>
                                        <a class="nav-link" href="../uikit/navbar.html">Navbar</a>
                                        <a class="nav-link" href="../uikit/offcanvas.html">Offcanvas</a>
                                        <a class="nav-link" href="../uikit/overlay.html">Overlay</a>
                                        <a class="nav-link" href="../uikit/popup.html">Popup</a>
                                        <a class="nav-link" href="../uikit/pricing.html">Pricing</a>
                                        <a class="nav-link" href="../uikit/process.html">Process</a>
                                        <a class="nav-link" href="../uikit/progress.html">Progress</a>
                                        <a class="nav-link" href="../uikit/scroll.html">Scroll</a>
                                        <a class="nav-link" href="../uikit/section.html">Section</a>
                                    </nav>
                                </div>

                                <div class="col-lg-3">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="../uikit/shuffle.html">Shuffle</a>
                                        <a class="nav-link" href="../uikit/slider.html">Slider</a>
                                        <a class="nav-link" href="../uikit/social.html">Social</a>
                                        <a class="nav-link" href="../uikit/tab.html">Tab</a>
                                        <a class="nav-link" href="../uikit/table.html">Table</a>
                                        <a class="nav-link" href="../uikit/topbar.html">Topbar</a>
                                        <a class="nav-link" href="../uikit/typing.html">Typing</a>
                                        <a class="nav-link" href="../uikit/typography.html">Typography</a>
                                        <a class="nav-link" href="../uikit/utility.html">Utility</a>
                                        <a class="nav-link" href="../uikit/video.html">Video</a>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </nav>
                </li>

            </ul>
        </section>
        <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Admin panel</a>
</div>
</nav><!-- /.navbar -->


<!-- Header -->

<header class="header text-white h-fullscreen pb-80" style="background-image: url({{asset('/storage/postimages/'.$post->image)}});" data-overlay="9">

    <div class="container text-center">

        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">

                <p class="opacity-70 text-uppercase small ls-1">{{$post->category->name}}</p>

                <h1 class="display-4 mt-7 mb-8">{{$post->description}}</h1>
{{--                <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">Hossein Shams</a></p>--}}
                <p><span class="opacity-70 mr-1">By</span><a class="text-white">{{$post->user->name}}</a></p>
                <p><img src="{{asset('/storage/AvatarImages/'.$post->user->avatar)}}" alt="avatar" title="avatar"  width="100px" height="100px" style="border-radius:50% "/></p>
            </div>

            <div class="col-12 align-self-end text-center">
                <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
            </div>

        </div>

    </div>
</header><!-- /.header -->


<!-- Main Content -->
<main class="main-content">


    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Blog content
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <div class="section" id="section-content">
        <div class="container">
{!!$post->content!!}


                    <div class="gap-xy-2 mt-6">

                        @foreach($tag=$post->tags as $t)
                        <a class="badge badge-pill badge-secondary" href="#">{{$t->name}}</a>
                        @endforeach
                    </div>

                </div>
            </div>



    </div>



    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Comments
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <div class="section bg-gray">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <div class="media-list">

                        <div class="media">
                            <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/1.jpg" alt="...">

                            <div class="media-body">
                                <div class="small-1">
                                    <strong>Maryam Amiri</strong>
                                    <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">24 min ago</time>
                                </div>
                                <p class="small-2 mb-0">Thoughts his tend and both it fully to would the their reached drew project the be I hardly just tried constructing I his wonder, that his software and need out where didn't the counter productive.</p>
                            </div>
                        </div>



                        <div class="media">
                            <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/2.jpg" alt="...">

                            <div class="media-body">
                                <div class="small-1">
                                    <strong>Hossein Shams</strong>
                                    <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">6 hours ago</time>
                                </div>
                                <p class="small-2 mb-0">Was my suppliers, has concept how few everything task music.</p>
                            </div>
                        </div>



                        <div class="media">
                            <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/3.jpg" alt="...">

                            <div class="media-body">
                                <div class="small-1">
                                    <strong>Sarah Hanks</strong>
                                    <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">Yesterday</time>
                                </div>
                                <p class="small-2 mb-0">Been me have the no a themselves, agency, it that if conduct, posts, another who to assistant done rattling forth there the customary imitation.</p>
                            </div>
                        </div>

                    </div>


                    <hr>


                    <form action="#" method="POST">

                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <input class="form-control" type="text" placeholder="Name">
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" placeholder="Comment" rows="4"></textarea>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Submit your comment</button>
                    </form>

                </div>
            </div>

        </div>
    </div>



</main>


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">

            </div>

             <div class="col-6 col-lg-3 text-right order-lg-last">
                <div class="social">
                    <a class="social-facebook" href="https://www.facebook.com/billieeilish"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="https://twitter.com/billieeilish"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="https://www.instagram.com/accounts/login/?next=/billieeilish/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
                    <a class="nav-link" href="../uikit/index.html">Elements</a>
                    <a class="nav-link" href="../block/index.html">Blocks</a>
                    <a class="nav-link" href="../page/about-1.html">About</a>
                    <a class="nav-link" href="../blog/grid.html">Blog</a>
                    <a class="nav-link" href="../page/contact-1.html">Contact</a>
                </div>
            </div>

        </div>
    </div>
</footer><!-- /.footer -->


<!-- Scripts -->
<script src="{{asset('js/page.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
