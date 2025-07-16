<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Blog Site') }}</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css.style.css">
</head>
<body>
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Blog Site') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About You</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="Topic" aria-label="Search">
                        <button class="btn btn-outline-light rounded-pill px-4" type="submit">Search</button>
                    </form>

                </div>
            </div>
        </nav>
    </header>

    <!-- ... (Head & Header same as before) ... -->

<main class="py-4">
    <div class="container">
        <div class="row">
            <!-- Main Content Area -->
            <div class="col-md-8">
                @yield('content')
            </div>

            <!-- Sidebar Without Auth -->
            <div class="col-md-4">
                <!-- Categories Widget -->
                <div class="sidebar-box mt-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Categories</div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Technology
                                    <span class="badge bg-primary rounded-pill">12</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Travel
                                    <span class="badge bg-primary rounded-pill">8</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Food
                                    <span class="badge bg-primary rounded-pill">5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Lifestyle
                                    <span class="badge bg-primary rounded-pill">9</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recent Posts Widget -->
                <div class="sidebar-box mt-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Recent Posts</div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#" class="text-decoration-none">10 Tips for Better Productivity</a>
                                    <small class="text-muted d-block">June 12, 2023</small>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="text-decoration-none">The Future of Web Development</a>
                                    <small class="text-muted d-block">June 8, 2023</small>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="text-decoration-none">Best Places to Visit This Summer</a>
                                    <small class="text-muted d-block">June 5, 2023</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Editor Identity -->
                <div class="sidebar-box mt-4">
    <div class="card" id="Login">
        <div class="card-header bg-primary text-white">Editor Panel</div>
        <div class="card-body p-3" >
            <form>
                <div class="mb-3">
                    <label for="editorEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="editorEmail" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="editorPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="editorPassword" placeholder="Enter password">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="/register" class="btn btn-outline-secondary">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>

                     </div> <!-- End Sidebar -->
        </div>
    </div>
</main>

<!-- ... (Footer and scripts same as before) ... -->

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>A professional blog platform sharing insights, stories, and knowledge across various topics.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="/about" class="text-white">About</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With Us</h5>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="mt-3">
                        <h6>Subscribe to our newsletter</h6>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'Blog Site') }}. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>