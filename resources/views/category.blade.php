@extends('mainpage.main')

@section('content')
<div class="category-page">
    <!-- Page Header -->
    <div class="page-header mb-4">
        <h1 class="display-4 mb-3">Blog Categories</h1>
        <p class="lead text-muted">Explore our diverse range of topics and find content that interests you.</p>
    </div>

    <!-- Categories Grid -->
    <div class="row">
        <!-- Technology Category -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card category-card shadow-sm h-100">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-laptop-code me-2"></i>Technology
                    </h4>
                    <span class="badge bg-light text-dark">12 Posts</span>
                </div>
                <div class="card-body">
                    <p class="card-text">Latest trends in technology, programming, AI, and digital innovation. Stay updated with the tech world.</p>
                    <div class="category-tags mb-3">
                        <span class="badge bg-primary me-1">Web Development</span>
                        <span class="badge bg-primary me-1">AI & ML</span>
                        <span class="badge bg-primary me-1">Mobile Apps</span>
                        <span class="badge bg-primary">Programming</span>
                    </div>
                    <div class="recent-posts">
                        <h6>Recent Posts:</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none">The Future of Web Development</a></li>
                            <li><a href="#" class="text-decoration-none">AI in Modern Applications</a></li>
                            <li><a href="#" class="text-decoration-none">Mobile App Trends 2024</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">View All Technology Posts</a>
                </div>
            </div>
        </div>

        <!-- Travel Category -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card category-card shadow-sm h-100">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-map-marked-alt me-2"></i>Travel
                    </h4>
                    <span class="badge bg-light text-dark">8 Posts</span>
                </div>
                <div class="card-body">
                    <p class="card-text">Discover amazing destinations, travel tips, and cultural experiences from around the world.</p>
                    <div class="category-tags mb-3">
                        <span class="badge bg-success me-1">Adventure</span>
                        <span class="badge bg-success me-1">Cultural</span>
                        <span class="badge bg-success me-1">Budget Travel</span>
                        <span class="badge bg-success">Photography</span>
                    </div>
                    <div class="recent-posts">
                        <h6>Recent Posts:</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none">Best Places to Visit This Summer</a></li>
                            <li><a href="#" class="text-decoration-none">Budget Travel Guide for Asia</a></li>
                            <li><a href="#" class="text-decoration-none">Cultural Experiences in Europe</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-success">View All Travel Posts</a>
                </div>
            </div>
        </div>

        <!-- Food Category -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card category-card shadow-sm h-100">
                <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-utensils me-2"></i>Food
                    </h4>
                    <span class="badge bg-light text-dark">5 Posts</span>
                </div>
                <div class="card-body">
                    <p class="card-text">Delicious recipes, cooking tips, food reviews, and culinary adventures from around the globe.</p>
                    <div class="category-tags mb-3">
                        <span class="badge bg-warning me-1">Recipes</span>
                        <span class="badge bg-warning me-1">Restaurant Reviews</span>
                        <span class="badge bg-warning me-1">Cooking Tips</span>
                        <span class="badge bg-warning">Healthy Eating</span>
                    </div>
                    <div class="recent-posts">
                        <h6>Recent Posts:</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none">Traditional Bengali Recipes</a></li>
                            <li><a href="#" class="text-decoration-none">Healthy Meal Prep Ideas</a></li>
                            <li><a href="#" class="text-decoration-none">Best Restaurants in Dhaka</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-warning">View All Food Posts</a>
                </div>
            </div>
        </div>

        <!-- Lifestyle Category -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card category-card shadow-sm h-100">
                <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-heart me-2"></i>Lifestyle
                    </h4>
                    <span class="badge bg-light text-dark">9 Posts</span>
                </div>
                <div class="card-body">
                    <p class="card-text">Tips for better living, productivity, health, wellness, and personal development.</p>
                    <div class="category-tags mb-3">
                        <span class="badge bg-info me-1">Health</span>
                        <span class="badge bg-info me-1">Fitness</span>
                        <span class="badge bg-info me-1">Productivity</span>
                        <span class="badge bg-info">Wellness</span>
                    </div>
                    <div class="recent-posts">
                        <h6>Recent Posts:</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none">10 Tips for Better Productivity</a></li>
                            <li><a href="#" class="text-decoration-none">Mindfulness in Daily Life</a></li>
                            <li><a href="#" class="text-decoration-none">Home Workout Routines</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-info">View All Lifestyle Posts</a>
                </div>
            </div>
        </div>

        <!-- Business Category -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card category-card shadow-sm h-100">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-briefcase me-2"></i>Business
                    </h4>
                    <span class="badge bg-light text-dark">7 Posts</span>
                </div>
                <div class="card-body">
                    <p class="card-text">Business insights, entrepreneurship tips, marketing strategies, and industry trends.</p>
                    <div class="category-tags mb-3">
                        <span class="badge bg-dark me-1">Entrepreneurship</span>
                        <span class="badge bg-dark me-1">Marketing</span>
                        <span class="badge bg-dark me-1">Finance</span>
                        <span class="badge bg-dark">Leadership</span>
                    </div>
                    <div class="recent-posts">
                        <h6>Recent Posts:</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none">Digital Marketing Strategies</a></li>
                            <li><a href="#" class="text-decoration-none">Startup Funding Guide</a></li>
                            <li><a href="#" class="text-decoration-none">Leadership in Remote Work</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-dark">View All Business Posts</a>
                </div>
            </div>
        </div>

        <!-- Entertainment Category -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card category-card shadow-sm h-100">
                <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-film me-2"></i>Entertainment
                    </h4>
                    <span class="badge bg-light text-dark">6 Posts</span>
                </div>
                <div class="card-body">
                    <p class="card-text">Movies, TV shows, music, books, and entertainment news from around the world.</p>
                    <div class="category-tags mb-3">
                        <span class="badge bg-danger me-1">Movies</span>
                        <span class="badge bg-danger me-1">Music</span>
                        <span class="badge bg-danger me-1">Books</span>
                        <span class="badge bg-danger">Gaming</span>
                    </div>
                    <div class="recent-posts">
                        <h6>Recent Posts:</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none">Top Movies of 2024</a></li>
                            <li><a href="#" class="text-decoration-none">Best Books to Read</a></li>
                            <li><a href="#" class="text-decoration-none">Gaming Trends This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-danger">View All Entertainment Posts</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Tags Section -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white">
                    <h4 class="mb-0">Popular Tags</h4>
                </div>
                <div class="card-body">
                    <div class="popular-tags">
                        <a href="#" class="badge bg-primary me-2 mb-2 p-2">Web Development</a>
                        <a href="#" class="badge bg-success me-2 mb-2 p-2">Travel Tips</a>
                        <a href="#" class="badge bg-warning me-2 mb-2 p-2">Cooking</a>
                        <a href="#" class="badge bg-info me-2 mb-2 p-2">Health</a>
                        <a href="#" class="badge bg-dark me-2 mb-2 p-2">Business</a>
                        <a href="#" class="badge bg-danger me-2 mb-2 p-2">Entertainment</a>
                        <a href="#" class="badge bg-primary me-2 mb-2 p-2">Technology</a>
                        <a href="#" class="badge bg-success me-2 mb-2 p-2">Adventure</a>
                        <a href="#" class="badge bg-warning me-2 mb-2 p-2">Recipes</a>
                        <a href="#" class="badge bg-info me-2 mb-2 p-2">Fitness</a>
                        <a href="#" class="badge bg-dark me-2 mb-2 p-2">Marketing</a>
                        <a href="#" class="badge bg-danger me-2 mb-2 p-2">Movies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection