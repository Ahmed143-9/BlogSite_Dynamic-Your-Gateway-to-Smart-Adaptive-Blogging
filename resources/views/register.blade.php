<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - {{ config('app.name', 'Blog Site') }}</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css.style.css">
    <style>
    html {
        scroll-behavior: smooth;
    }
</style>

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
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
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

    <main class="py-4">
        <div class="container">
            <div class="row">
                <!-- Main Content Area -->
                <div class="col-md-8 mt-4">

                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0">Create Your Account</h3>
                        </div>
                        <div class="card-body p-4">
                            <p class="text-muted mb-4">Join our community of writers and readers. Create your account to start sharing your stories.</p>
                            
                        
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Choose a unique username" required>
                                    <div class="form-text">This will be your public display name.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <div class="form-text">Must be at least 8 characters long.</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="bio" class="form-label">Bio (Optional)</label>
                                    <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Tell us a bit about yourself..."></textarea>
                                    <div class="form-text">This will appear on your profile page.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="interests" class="form-label">Interests (Optional)</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="tech" name="interests[]" value="technology">
                                                <label class="form-check-label" for="tech">Technology</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="travel" name="interests[]" value="travel">
                                                <label class="form-check-label" for="travel">Travel</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="food" name="interests[]" value="food">
                                                <label class="form-check-label" for="food">Food</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lifestyle" name="interests[]" value="lifestyle">
                                                <label class="form-check-label" for="lifestyle">Lifestyle</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" value="1">
                                        <label class="form-check-label" for="newsletter">
                                            Subscribe to our newsletter for latest updates
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                        <label class="form-check-label" for="terms">
                                            I agree to the <a href="/terms" class="text-primary">Terms of Service</a> and <a href="/privacy" class="text-primary">Privacy Policy</a> <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Create Account</button>
                                </div>

                                <div class="text-center mt-3">
                                    <p class="text-muted">Already have an account? <a href="/#Login" class="text-primary">Sign in here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-4">
                    <!-- Why Join Widget -->
                    <div class="sidebar-box mt-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">Why Join Us?</div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Share your stories with the world</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Connect with like-minded readers</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Get feedback on your writing</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Access exclusive content</li>
                                    <li class="mb-0"><i class="fas fa-check text-success me-2"></i>Build your personal brand</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-box mt-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">Popular Categories</div>
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
                </div> <!-- End Sidebar -->
            </div>
        </div>
    </main>

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