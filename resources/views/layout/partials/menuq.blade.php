<header class="section page-header rd-navbar-dark">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
          data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px"
          data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel-inner container">
                    <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-left">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel-navbar owl-carousel-inline-outer">
                            <div class="owl-inline-nav">
                                <button class="owl-arrow owl-arrow-prev"></button>
                                <button class="owl-arrow owl-arrow-next"></button>
                            </div>
                            <div class="owl-carousel-inline-wrap">
                                <div class="owl-carousel owl-carousel-inline" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="3200" data-stage-padding="0" data-loop="true" data-margin="10"
                                  data-mouse-drag="false" data-touch-drag="false" data-nav-custom=".owl-carousel-navbar">
                                    <!-- Post Inline-->
                                    <article class="post-inline">
                                        <time class="post-inline-time" datetime="2019">April 15, 2019</time>
                                        <p class="post-inline-title">Sportland vs Dream Team</p>
                                    </article>
                                    <!-- Post Inline-->
                                    <article class="post-inline">
                                        <time class="post-inline-time" datetime="2019">April 15, 2019</time>
                                        <p class="post-inline-title">Sportland vs Real Madrid</p>
                                    </article>
                                    <!-- Post Inline-->
                                    <article class="post-inline">
                                        <time class="post-inline-time" datetime="2019">April 15, 2019</time>
                                        <p class="post-inline-title">Sportland vs Barcelona</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-panel-item rd-navbar-panel-item-right">
                        <ul class="list-inline list-inline-bordered">
                            <li>
                                <!-- Select 2-->
                                <select class="select select-inline" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown">
                                    <option value="en" selected="">en</option>
                                    <option value="fr">fr</option>
                                    <option value="es">es</option>
                                </select>
                            </li>
                            @if (Auth::check())
                              <li>
                              <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" name="button"><i class="fa fa-power-off"></i> Logout</button>
                              </form>
                              </li>
                            @else
                              <li><a class="link link-icon link-icon-left link-classic" href="{{ route('login')}}"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">Login o Regristarte</span></a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                </div>
            </div>
            <div class="rd-navbar-main">
                <div class="rd-navbar-main-top">
                    <div class="rd-navbar-main-container container">
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="brand" href="../landing"><img class="brand-logo " src="{{ asset('principal/images/logo-soccer-default-95x126.png')}}" alt="" width="95" height="126" /></a>
                        </div>
                        <!-- RD Navbar List-->
                        <ul class="rd-navbar-list">
                            <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="{{ asset('principal/images/partners-1-inverse-75x42.png')}}" alt="" width="75" height="42" /></a></li>
                            <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="{{ asset('principal/images/partners-2-inverse-88x45.png')}}" alt="" width="88" height="45" /></a></li>
                            <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="{{ asset('principal/images/partners-3-inverse-79x52.png')}}" alt="" width="79" height="52" /></a></li>
                        </ul>
                        <!-- RD Navbar Search-->
                        <div class="rd-navbar-search">
                            <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-navbar-search-form-input">Enter your search request here...</label>
                                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                </div>
                                <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-bottom rd-navbar-darker">
                    <div class="rd-navbar-main-container container">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Niche Templates</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="../soccer">Soccer</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="../baseball">Baseball</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="../basketball">Basketball</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="../billiards">Billiards</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="../bowling">Bowling</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="../rugby">Rugby</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Home Types</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="index.html">Home Soccer</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-baseball.html">Home Baseball</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-basketball.html">Home Basketball</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-billiards.html">Home Billiards</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-bowling.html">Home Bowling</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-rugby.html">Home Rugby</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Features</a>
                                <article class="rd-menu rd-navbar-megamenu rd-megamenu-2-columns context-light">
                                    <div class="rd-megamenu-main">
                                        <div class="rd-megamenu-item rd-megamenu-item-nav">
                                            <!-- Heading Component-->
                                            <article class="heading-component heading-component-simple">
                                                <div class="heading-component-inner">
                                                    <h5 class="heading-component-title">Elements
                                                    </h5>
                                                </div>
                                            </article>
                                            <div class="rd-megamenu-list-outer">
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="shortcodes.html">Shortcodes</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="blog-elements.html">Blog Elements</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="sport-elements.html">Sport Elements</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="shop-elements.html">Shop Elements</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404-error-page.html">404 Error Page</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy Policy</a></li>
                                                </ul>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="about-us.html">About Us</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="gallery.html">Gallery</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="albums.html">Albums</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search Results</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="contact-us.html">Contact Us</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="login-and-register.html">Login and Register</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rd-megamenu-item rd-megamenu-item-content">
                                            <!-- Heading Component-->
                                            <article class="heading-component heading-component-simple">
                                                <div class="heading-component-inner">
                                                    <h5 class="heading-component-title">Latest News
                                                    </h5><a class="button button-xs button-gray-outline" href="news-1.html">See all News</a>
                                                </div>
                                            </article>
                                            <div class="row row-20">
                                                <div class="col-lg-6">
                                                    <!-- Post Classic-->
                                                    <article class="post-classic">
                                                        <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{ asset('principal/images/megamenu-post-1-93x94.jpg')}}" alt="" width="93" height="94" /></a>
                                                        </div>
                                                        <div class="post-classic-main">
                                                            <!-- Badge-->
                                                            <div class="badge badge-secondary">The Team
                                                            </div>
                                                            <p class="post-classic-title"><a href="blog-post.html">Raheem Sterling turns the tide for Manchester</a></p>
                                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                                <time datetime="2019">April 15, 2019</time>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- Post Classic-->
                                                    <article class="post-classic">
                                                        <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{ asset('principal/images/megamenu-post-2-93x94.jpg')}}" alt="" width="93" height="94" /></a>
                                                        </div>
                                                        <div class="post-classic-main">
                                                            <!-- Badge-->
                                                            <div class="badge badge-primary">The League
                                                            </div>
                                                            <p class="post-classic-title"><a href="blog-post.html">Prem in 90 seconds: Chelsea's crisis is over!</a></p>
                                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                                <time datetime="2019">April 15, 2019</time>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- Post Classic-->
                                                    <article class="post-classic">
                                                        <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{ asset('principal/images/megamenu-post-3-93x94.jpg')}}" alt="" width="93" height="94" /></a>
                                                        </div>
                                                        <div class="post-classic-main">
                                                            <!-- Badge-->
                                                            <div class="badge badge-primary">The League
                                                            </div>
                                                            <p class="post-classic-title"><a href="blog-post.html">Good vibes back at struggling Schalke</a></p>
                                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                                <time datetime="2019">April 15, 2019</time>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- Post Classic-->
                                                    <article class="post-classic">
                                                        <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{ asset('principal/images/megamenu-post-4-93x94.jpg')}}" alt="" width="93" height="94" /></a>
                                                        </div>
                                                        <div class="post-classic-main">
                                                            <!-- Badge-->
                                                            <div class="badge badge-primary">The League
                                                            </div>
                                                            <p class="post-classic-title"><a href="blog-post.html">Liverpool in desperate need of backup players</a></p>
                                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                                <time datetime="2019">April 15, 2019</time>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Event Teaser-->
                                    <article class="event-teaser rd-megamenu-footer">
                                        <div class="event-teaser-header">
                                            <div class="event-teaser-caption">
                                                <h5 class="event-teaser-title">Final Europa League 2019</h5>
                                                <time class="event-teaser-time" datetime="2019">Saturday, April 14, 2019</time>
                                            </div>
                                            <div class="event-teaser-teams">
                                                <div class="event-teaser-team">
                                                    <div class="unit unit-spacing-xs unit-horizontal align-items-center">
                                                        <div class="unit-left"><img class="event-teaser-team-image" src="{{ asset('principal/images/team-bavaria-fc-38x50.png')}}" alt="" width="38" height="50" />
                                                        </div>
                                                        <div class="unit-body">
                                                            <p class="heading-7">Bavaria</p>
                                                            <p class="text-style-1">Germany</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="event-teaser-team-divider"><span class="event-teaser-team-divider-text">VS</span></div>
                                                <div class="event-teaser-team">
                                                    <div class="unit unit-spacing-xs unit-horizontal align-items-center">
                                                        <div class="unit-left"><img class="event-teaser-team-image" src="{{ asset('principal/images/team-sportland-41x55.png')}}" alt="" width="41" height="55" />
                                                        </div>
                                                        <div class="unit-body">
                                                            <p class="heading-7">sportland</p>
                                                            <p class="text-style-1">USA</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-teaser-countdown event-teaser-highlighted">
                                            <!-- Countdown-->
                                            <div class="countdown countdown-classic" data-type="until" data-time="31 Dec 2019 16:00" data-format="dhms" data-style="short"></div>
                                        </div>
                                        <div class="event-teaser-aside"><a class="event-teaser-link" href="#">Buy Tickets</a></div>
                                    </article>
                                </article>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">News</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-elements.html">Blog Elements</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="news-1.html">News 1</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="news-2.html">News 2</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="news-3.html">News 3</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="news-4.html">News 4</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="news-5.html">News 5</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog post</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">Team</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="sport-elements.html">Sport Elements</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="game-overview.html">Game Overview</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="roster.html">Roster</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="standings.html">Standings</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="latest-results-1.html">Latest Results 1</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="latest-results-2.html">Latest Results 2</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="game-schedule.html">Game schedule</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="player-page.html">Player Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">Shop</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="shop-elements.html">Shop Elements</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-shop.html">Grid Shop</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="list-shop.html">List Shop</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="fullwidth-shop.html">Fullwidth Shop</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="product-page.html">Product Page</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="shopping-cart.html">Shopping Cart</a>
                                    </li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="checkout.html">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="rd-navbar-main-element">
                            <ul class="list-inline list-inline-sm">
                                <li><a class="icon icon-xs icon-light fa fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-xs icon-light fa fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xs icon-light fa fa-google-plus" href="#"></a></li>
                                <li><a class="icon icon-xs icon-light fa fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
