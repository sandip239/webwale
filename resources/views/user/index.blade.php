@include('user.assets.header')
<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="index.html" class="logo m-0 float-start">Blogy<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center">
                            <form action="#" class="search-form d-inline-block d-lg-none">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form>

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="has-children">
                                    <a href="category.html">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="search-result.html">Search Result</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single.html">Blog Single</a></li>
                                        <li><a href="category.html">Category</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li class="has-children">
                                            <a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Sub Menu One</a></li>
                                                <li><a href="#">Sub Menu Two</a></li>
                                                <li><a href="#">Sub Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Politics</a></li>
                            </ul>
                        </div>
                        <div class="col-2 text-end">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                            <form action="#" class="search-form d-none d-lg-inline-block">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- top section --}}
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-stretch retro-layout">
                @foreach ($topSection as $blog)
                    <div class="col-md-4">
                        <a href="{{ route('pageview', $blog->id) }}" class="h-entry mb-30 v-height gradient">
                            <div class="featured-img"
                                style="background-image: url('{{ asset('main_image/' . $blog->image) }}');"></div>
                            <div class="text">
                                <span class="date">{{ $blog->updated_at->format('M. d, Y') }}</span>
                                <h2>{{ $blog->title }}</h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- top section end --}}

    <!-- End retroy layout blog posts -->

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Business</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">

                {{-- rendom top two one secion --}}
                <div class="col-md-9">
                    <div class="row g-3">
                        @foreach ($randomBlogs as $blog)
                            <div class="col-md-6" align="center">
                                <div class="blog-entry">
                                    <div class="image-box" style="width: 300px; height: 300px; overflow: hidden;">
                                        <a href="{{ route('pageview', $blog->id) }}" class="img-link">
                                            <img src="{{ asset('main_image/' . $blog->image) }}" alt="Image"
                                                class="img-fluid" style="max-width: 100%; max-height: 100%;">
                                        </a>
                                    </div>
                                    <span class="date">{{ $blog->updated_at->format('M. d, Y') }}</span>
                                    <h2><a
                                            href="{{ route('pageview', $blog->id) }}">{{ Str::limit($blog->title, 40) }}</a>
                                    </h2>
                                    {{-- <p>{{ Str::limit($blog->content, 100) }}</p> --}}
                                    <p><a href="{{ route('pageview', $blog->id) }}"
                                            class="btn btn-sm btn-outline-primary">Read More</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- rendom top two one secion END --}}

                {{-- rendom top 3 one secion  --}}
                <div class="col-md-3">
                    <ul class="list-unstyled blog-entry-sm">
                        @foreach ($randomBlogsthree as $blog)
                            <li align="center">
                                <span class="date">{{ $blog->updated_at->format('M. d, Y') }}</span>
                                <h3><a href="{{ route('pageview', $blog->id) }}">{{ $blog->title }}</a></h3>
                                <p>{!! Str::limit($blog->content, 70) !!}</p>
                                <p><a href="{{ route('pageview', $blog->id) }}" class="read-more">Continue
                                        Reading</a></p>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- rendom top 3 one secion END --}}
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <div class="row">
                @foreach ($randomBlogsthree as $blog)
                    <div class="col-md-6 col-lg-3" align="center">
                        <div class="blog-entry">
                            <div class="image-box" style="width: 200px; height: 200px; overflow: hidden;">
                                <a href="{{ route('pageview', $blog->id) }}" class="img-link">
                                    <img src="{{ asset('main_image/' . $blog->image) }}" alt="Image"
                                        class="img-fluid" style="max-width: 100%; max-height: 100%;">
                                </a>
                            </div>
                            <span class="date">{{ $blog->updated_at->format('M. d, Y') }}</span>
                            <h2><a href="{{ route('pageview', $blog->id) }}">{{ Str::limit($blog->title, 30) }}</a>
                            </h2>
                            <p>{!! Str::limit($blog->content, 20) !!}</p>
                            <p><a href="{{ route('pageview', $blog->id) }}" class="read-more">Continue Reading</a>
                            </p>
                        </div>
                    </div>
                @endforeach
                {{-- google ads  --}}
                <div class="col-md-6 col-lg-3" align="center">
                    <div class="blog-entry">
                        <div class="image-box" style="width: 200px; height: 200px; overflow: hidden;">
                            <!-- Placeholder Image -->
                            <img src="https://via.placeholder.com/200x200" alt="Placeholder Image" class="img-fluid"
                                style="max-width: 100%; max-height: 100%;">
                        </div>
                    </div>
                </div>


                {{-- google ads  --}}
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    <!-- Start posts-entry -->
    <section class="section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Politics</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>
            <div class="row">
                @foreach ($randomBlogsnine as $blog)
                    <div class="col-lg-4 mb-4" align="center">
                        <div class="post-entry-alt">
                            <div class="image-box" style="width: 250px; height: 250px; overflow: hidden;">
                                <a href="{{ route('pageview', $blog->id) }}" class="img-link">
                                    <img src="{{ asset('main_image/' . $blog->image) }}" alt="Image"
                                        class="img-fluid" style="max-width: 100%; max-height: 100%;">
                                </a>
                            </div>
                            <div class="excerpt">
                                <h2><a href="{{ route('pageview', $blog->id) }}">{{ $blog->title }}</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                    <span>&nbsp;-&nbsp; {{ $blog->updated_at->format('F j, Y') }}</span>
                                </div>
                                <p>{!! Str::limit($blog->content, 150) !!}</p>
                                <p><a href="{{ route('pageview', $blog->id) }}" class="read-more">Continue
                                        Reading</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="section bg-light">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Travel</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            <div class="row align-items-stretch retro-layout-alt">

                <div class="col-md-5 order-md-2">
                    <a href="{{ route('pageview', $lastFourBlogs[0]->id) }}" class="hentry img-1 h-100 gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('main_image/' . $lastFourBlogs[0]->image) }}');">
                        </div>
                        <div class="text">
                            <span>{{ $lastFourBlogs[0]->updated_at->format('F j, Y') }}</span>
                            <h2>{{ $lastFourBlogs[0]->title }}</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">

                    <a href="{{ route('pageview', $lastFourBlogs[1]->id) }}" class="hentry img-2 v-height mb30 gradient">
                        <div class="featured-img" style="background-image: url('{{ asset('main_image/' . $lastFourBlogs[1]->image) }}');"></div>
                        <div class="text text-sm">
                            <span>{{ $lastFourBlogs[1]->updated_at->format('F j, Y') }}</span>
                            <h2>{{ $lastFourBlogs[1]->title }}</h2>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex justify-content-between">
                        <a href="{{ route('pageview', $lastFourBlogs[2]->id) }}" class="hentry v-height img-2 gradient">
                            <div class="featured-img" style="background-image: url('{{ asset('main_image/' . $lastFourBlogs[2]->image) }}');"></div>
                            <div class="text text-sm">
                                <span>{{ $lastFourBlogs[2]->updated_at->format('F j, Y') }}</span>
                            <h2>{{ $lastFourBlogs[2]->title }}</h2>
                            </div>
                        </a>
                        <a href="{{ route('pageview', $lastFourBlogs[3]->id) }}" class="hentry v-height img-2 ms-auto float-end gradient">
                            <div class="featured-img" style="background-image: url('{{ asset('main_image/' . $lastFourBlogs[3]->image) }}');"></div>
                            <div class="text text-sm">
                                <span>{{ $lastFourBlogs[3]->updated_at->format('F j, Y') }}</span>
                                <h2>{{ $lastFourBlogs[3]->title }}</h2>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3 class="mb-4">About</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                    <!-- /.widget -->
                    <div class="widget">
                        <h3>Social</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 ps-lg-5">
                    <div class="widget">
                        <h3 class="mb-4">Company</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Creative</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3 class="mb-4">Recent Post Entry</h3>
                        <div class="post-entry-footer">
                            @foreach ($randomBlogsthree as $blog)
                            <ul>
                                <li>
                                    <a href="{{ route('pageview', $blog->id) }}">
                                        <img src="{{ asset('main_image/' . $blog->image) }}" alt="Image placeholder" class="me-4 rounded" style="max-width: 25%; max-height: 25%;">
                                        <div class="text">
                                            <h4><a href="{{ route('pageview', $blog->id) }}">{{ Str::limit($blog->title, 30) }}</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">{{ $blog->updated_at }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                        </div>


                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/
              **==========
            -->

                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Designed with webwale <a
                            href="">codewithmvc.com</a> Distributed by <a
                            href="">blackberry</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <script src="user/js/bootstrap.bundle.min.js"></script>
    <script src="user/js/tiny-slider.js"></script>

    <script src="user/js/flatpickr.min.js"></script>


    <script src="user/js/aos.js"></script>
    <script src="user/js/glightbox.min.js"></script>
    <script src="user/js/navbar.js"></script>
    <script src="user/js/counter.js"></script>
    <script src="user/js/custom.js"></script>


</body>

</html>
