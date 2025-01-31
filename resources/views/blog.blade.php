@extends('layout.app')


@section('pageContent')
    <div class="breadcumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>Blog</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}"><img src="assets/images/inner-images/breadcumb-text-shape.png"
                                        alt="">MINO NIC</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-list-area">
        <div class="container">
            <div class="row">


                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($blogPosts as $post)
                            <div class="col-md-12">
                                <div class="single-blog-list-box">
                                    <div class="blog-thumb">
                                        <img src="https://mino.com.ng/images/blog/{{ $post->image }}"
                                            alt="{{ $post->title }}">
                                    </div>
                                    <div class="blog-list-content">
                                        <div class="meta-blog">
                                            <span class="mate-text">By Author</span>
                                            <span><i
                                                    class="fas fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($post->dateSubmitted)->format('d F, Y') }}</span>
                                            <span><img src="assets/images/home1/category-icon.png"
                                                    alt="">News</span>
                                        </div>
                                        <a class="blog-list-title"
                                            href="{{ route('singleBlog', $post->id) }}">{{ $post->title }}</a>

                                        <p class="blog-list-desc">{{ $post->message }}</p>
                                    </div>
                                    <div class="blog-list-button">
                                        <a href="{{ route('singleBlog', $post->id) }}">Continue Reading<i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            @if ($blogPosts->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogPosts->previousPageUrl() }}"
                                        tabindex="-1">Previous</a>
                                </li>
                            @endif

                            @foreach ($blogPosts->links()->elements[0] as $page => $url)
                                @if ($page == $blogPosts->currentPage())
                                    <li class="page-item active">
                                        <a class="page-link" href="{{ $url }}">{{ $page }} <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach

                            @if ($blogPosts->onLastPage())
                                <li class="page-item disabled">
                                    <a class="page-link">Next</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogPosts->nextPageUrl() }}">Next</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>


                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget-sidber">
                                <div class="widget_search">
                                    <form action="#" method="get">
                                        <input type="text" name="s" value="" placeholder="Search Here"
                                            title="Search for:">
                                        <button type="submit" class="icons">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="widget-sidber">
                                <div class="widget-sidber-content">
                                    <h4><img src="assets/images/home1/section-shape.png" alt="">About
                                        {{ config('company.name') }}</h4>
                                </div>

                                <div class="widget-category">
                                    <div class="single-about-box">
                                        <div class="about-box-icon">
                                            <img src="assets/images/home1/about-icon-1.png" alt="">
                                        </div>
                                        <div class="about-box-content">
                                            <h4>Mission</h4>
                                            <p>To build one of the biggest supporting networking channel in Africa for
                                                small holder
                                                farmers by providing them with adequate funding in order to strengthen
                                                agricultural
                                                value chain and increase food production.</p>
                                        </div>
                                    </div>
                                    <div class="single-about-box">
                                        <div class="about-box-icon">
                                            <img src="assets/images/home1/about-icon-2.png" alt="">
                                        </div>
                                        <div class="about-box-content">
                                            <h4>Vision</h4>
                                            <p>To build an Agro-Tech company that will ensure sufficient food security
                                                for the country
                                                and the continent at large.
                                                We believe that with adequate funding available for small holder farmers
                                                in Nigeria, the
                                                dream of having a hungry free country is possible.</p>
                                        </div>
                                    </div>
                                    <div class="single-about-box">
                                        <div class="about-box-icon">
                                            <img src="assets/images/home1/about-icon-2.png" alt="">
                                        </div>
                                        <div class="about-box-content">
                                            <h4>Core Value</h4>
                                            <p>Integrity and Innovation</p>
                                        </div>
                                    </div>
                                    <div class="about-shape-1">
                                        <img src="assets/images/home1/about-shape-1.png" alt="">
                                    </div>
                                    <div class="about-shape-2">
                                        <img src="assets/images/home1/about-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
