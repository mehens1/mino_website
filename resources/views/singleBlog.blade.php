@extends('layout.app')


@section('pageContent')
    <div class="breadcumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>Blog Details</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}"><img src="assets/images/inner-images/breadcumb-text-shape.png"
                                        alt="">MINO NIC</a></li>
                            <li>Blog Details</li>
                            <li class="khela-hbe">{{ $blogDetails['post']->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details-thumb">
                                <img src="https://mino.com.ng/images/blog/{{ $blogDetails['post']->image }}" alt="">
                            </div>
                            <div class="blog-details-content">
                                <div class="meta-blog">
                                    <span class="mate-text">By Author</span>
                                    <span><i
                                            class="fas fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($blogDetails['post']->dateSubmitted)->format('d F, Y') }}</span>
                                    <span><img src="{{ asset('assets/images/home1/category-icon.png') }}"
                                            alt="">News</span>
                                </div>
                                <h4 class="blog-details-title">{{ $blogDetails['post']->title }}</h4>

                                <p class="blog-details-desc">{{ $blogDetails['post']->message }}
                                </p>

                            </div>

                            {{-- <div class="single-comment-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="blog-details-comment-title">
                                            <h4>‘2’ Comments</h4>
                                        </div>
                                        <div class="blog-details-comment">
                                            <div class="blog-details-comment-reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <div class="blog-details-comment-thumb">
                                                <img src="assets/images/inner-images/blog-details-author-1.png"
                                                    alt="">
                                            </div>
                                            <div class="blog-details-comment-content">
                                                <h2>Michael jordan</h2>
                                                <span>22 August, 2024</span>
                                                <p>Interactively visualize top-line internal or "organic" sources rather
                                                    than top-line niche mark
                                                    unleash 24/7 opportunities after high standards in process
                                                    improvements. Uniquely deploy
                                                    methodologies with reliable information.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blog-details-comment style-two">
                                            <div class="blog-details-comment-reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <div class="blog-details-comment-thumb">
                                                <img src="assets/images/inner-images/blog-details-author-2.png"
                                                    alt="">
                                            </div>
                                            <div class="blog-details-comment-content">
                                                <h2>Johon Alex</h2>
                                                <span>22 August, 2024</span>
                                                <p>Interactively visualize top-line internal or "organic" sources rather
                                                    than top-line niche mark
                                                    unleash 24/7 opportunities after high standards in process.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-details-contact">
                                    <div class="blog-details-contact-title">
                                        <h4>Leave A Comments</h4>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="contact-input-box">
                                                    <input type="text" name="Name" placeholder="Full Name*"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-input-box">
                                                    <input type="text" name="Email" placeholder="Email Address*"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-input-box">
                                                    <input type="text" name="Web Site" placeholder="Your Website*"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-input-box">
                                                    <textarea name="Message" id="Meassage" placeholder="Write Comments..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-check-box">
                                                    <input type="checkbox">
                                                    <span>Save your email info in the browser for next comments.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="blog-details-submi-button">
                                                    <button type="submit">Post Comments</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
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
                                    <h4>Recent Post(s)</h4>
                                </div>

                                @foreach ($blogDetails['recentPosts'] as $recentPost)
                                    <div class="sidber-widget-recent-post">
                                        <div class="recent-widget-thumb img-fluid">
                                            <img src="https://mino.com.ng/images/blog/{{ $recentPost->image }}"
                                                width="50" alt="{{ $recentPost->title }}" class="img-fluid">
                                        </div>
                                        <div class="recent-widget-content">
                                            <a
                                                href="{{ route('singleBlog', $recentPost->id) }}">{{ Str::limit($recentPost->title, 50) }}</a>
                                            <p>{{ \Carbon\Carbon::parse($recentPost->dateSubmitted)->format('d F, Y') }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
