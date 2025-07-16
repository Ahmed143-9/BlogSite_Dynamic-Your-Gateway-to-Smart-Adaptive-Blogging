@extends('mainpage.main')

@section('content')
    <div class="blog-posts">
        <h1 class="mb-4">Latest Blog Posts</h1>
        
        <!-- Featured Post -->
        <div class="card mb-4 featured-post">
            <div class="card-body">
                <h2 class="card-title">Getting Started with Laravel: A Beginner's Guide</h2>
                <div class="post-meta mb-2">
                    <span class="text-muted"><i class="far fa-calendar-alt"></i> June 15, 2023</span>
                    <span class="text-muted ms-3"><i class="far fa-user"></i> John Doe</span>
                    <span class="text-muted ms-3"><i class="far fa-folder"></i> Technology</span>
                </div>
                <img src="{{ asset('image/laravel.jpg') }}" alt="Featured Post Image" class="img-fluid rounded mb-3">
                <p class="card-text">Laravel is a powerful PHP framework that makes web development efficient and enjoyable. In this comprehensive guide, we'll walk through the basics of setting up your first Laravel project and understanding its core concepts.</p>
                <a href="/readmore" class="btn btn-primary">Read More</a>
            </div>
        </div>
        
        <!-- Regular Posts -->
        <div class="row">
            <!-- Post 1 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('image/10.jpg') }}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h3 class="card-title h5">10 Essential CSS Tricks Every Developer Should Know</h3>
                        <div class="post-meta small mb-2">
                            <span class="text-muted"><i class="far fa-calendar-alt"></i> June 12, 2023</span>
                            <span class="text-muted ms-2"><i class="far fa-user"></i> Jane Smith</span>
                        </div>
                        <p class="card-text">Improve your CSS skills with these essential tricks that will make your web development workflow more efficient and your designs more impressive.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Post 2 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('image/javascript.jpg') }}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h3 class="card-title h5">The Future of JavaScript: What's Coming in 2023</h3>
                        <div class="post-meta small mb-2">
                            <span class="text-muted"><i class="far fa-calendar-alt"></i> June 10, 2023</span>
                            <span class="text-muted ms-2"><i class="far fa-user"></i> Mike Johnson</span>
                        </div>
                        <p class="card-text">Explore the upcoming features and trends in JavaScript that will shape web development in the coming year and beyond.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Post 3 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('image/responsive.jpg') }}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h3 class="card-title h5">Building Responsive Websites: Best Practices</h3>
                        <div class="post-meta small mb-2">
                            <span class="text-muted"><i class="far fa-calendar-alt"></i> June 8, 2023</span>
                            <span class="text-muted ms-2"><i class="far fa-user"></i> Sarah Williams</span>
                        </div>
                        <p class="card-text">Learn the essential techniques and best practices for creating websites that look great and function well on all devices.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Post 4 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('image/A.png') }}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h3 class="card-title h5">Introduction to API Development with Laravel</h3>
                        <div class="post-meta small mb-2">
                            <span class="text-muted"><i class="far fa-calendar-alt"></i> June 5, 2023</span>
                            <span class="text-muted ms-2"><i class="far fa-user"></i> David Brown</span>
                        </div>
                        <p class="card-text">Discover how to build robust and scalable APIs using Laravel's powerful features and tools designed for API development.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Blog pagination" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection