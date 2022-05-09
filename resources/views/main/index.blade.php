@extends('layouts.main')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
            <section class="featured-posts-section">
                <div class="row">
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_1.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">8 февраля</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Заголовок поста №1</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_2.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">6 апреля</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Заголовок поста №2</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_3.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">9 мая</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Заголовок поста №3</h6>
                        </a>
                    </div>
                </div>
            </section>
            <section class="featured-posts-section">
                <div class="row">
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_1.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">8 февраля</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Заголовок поста №1</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_2.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">6 апреля</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Заголовок поста №2</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('assets/images/blog_3.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">9 мая</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Заголовок поста №3</h6>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
