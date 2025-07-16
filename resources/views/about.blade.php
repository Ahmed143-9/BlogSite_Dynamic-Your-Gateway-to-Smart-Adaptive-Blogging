<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Professional Profile - Social Network</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
   <link rel="stylesheet" href="css/style.css">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    
    <!-- jQuery (for Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('js/blog.js') }}"></script>
</head>
<body>
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">
                    <i class="fas fa-users"></i> ProfessionalNet
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users"></i> My Network
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-briefcase"></i> Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-comment"></i> Messaging
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-bell"></i> Notifications
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="Search for people, jobs, posts..." aria-label="Search">
                        <button class="btn btn-outline-light rounded-pill px-4" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-4">
        <div class="container">
            <div class="row">
                <!-- Profile Header Section -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <!-- Cover Photo -->
                            <div class="profile-cover position-relative" style="height: 200px;">
                                <button class="btn btn-light btn-sm position-absolute" style="top: 10px; right: 10px;">
                                    <i class="fas fa-edit"></i> Edit Your Profile
                                </button>
                            </div>
                            
                            <!-- Profile Info -->
                            <div class="profile-info p-4">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="profile-avatar ">
                                            <img src="{{ asset('image/laravel.jpg') }}" alt="Profile Picture" 
                                                 class="rounded-circle border border-4 border-white">
                                            <button class="btn btn-light btn-sm position-absolute" style="bottom: 5px; right: 5px;">
                                                
                                            </button>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="profile-details mt-3">
                                            <h2 class="mb-1">John Doe</h2>
                                            <p class="text-muted mb-2 h5">Full Stack Developer | Tech Enthusiast | Open Source Contributor</p>
                                            <p class="text-muted mb-3">
                                                <i class="fas fa-map-marker-alt me-2"></i> Dhaka, Bangladesh
                                                <span class="ms-3">
                                                    <i class="fas fa-building me-2"></i> Tech Solutions Inc.
                                                </span>
                                            </p>
                                            <div class="profile-stats mb-3">
                                                <span class="me-4">
                                                    <strong>1,234</strong> <small>Connections</small>
                                                </span>
                                                <span class="me-4">
                                                    <strong>567</strong> <small>Followers</small>
                                                </span>
                                                <span>
                                                    <strong>89</strong> <small>Posts</small>
                                                </span>
                                            </div>
                                            <div class="profile-actions">
                                                <button class="btn btn-primary me-2">
                                                    <i class="fas fa-user-plus"></i> Connect
                                                </button>
                                                <button class="btn btn-outline-primary me-2">
                                                    <i class="fas fa-comment"></i> Message
                                                </button>
                                                <button class="btn btn-outline-secondary me-2">
                                                    <i class="fas fa-share"></i> Share Profile
                                                </button>
                                                <button class="btn btn-outline-secondary">
                                                    <i class="fas fa-ellipsis-h"></i> More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="col-md-8">
                    <!-- About Section -->
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">
                                <i class="fas fa-user me-2"></i> About
                            </h5>
                        </div>
                        <div class="card-body">
                            <p>Passionate Full Stack Developer with 5+ years of experience in building scalable web applications. I specialize in modern JavaScript frameworks, cloud technologies, and have a strong background in both frontend and backend development. I love creating innovative solutions and sharing knowledge through blogging and open source contributions.</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h6><i class="fas fa-briefcase me-2"></i> Experience</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <div class="d-flex">
                                                <div class="me-3">
                                                    <div class="bg-primary rounded p-2" style="width: 40px; height: 40px;">
                                                        <i class="fas fa-building text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <strong>Senior Full Stack Developer</strong>
                                                    <br><small class="text-muted">Tech Solutions Inc. • 2022 - Present</small>
                                                    <br><small class="text-muted">Leading development of enterprise web applications</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="d-flex">
                                                <div class="me-3">
                                                    <div class="bg-success rounded p-2" style="width: 40px; height: 40px;">
                                                        <i class="fas fa-rocket text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <strong>Full Stack Developer</strong>
                                                    <br><small class="text-muted">StartUp Inc. • 2020 - 2022</small>
                                                    <br><small class="text-muted">Built MVP and scaled platform to 10k+ users</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6><i class="fas fa-graduation-cap me-2"></i> Education</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <div class="d-flex">
                                                <div class="me-3">
                                                    <div class="bg-info rounded p-2" style="width: 40px; height: 40px;">
                                                        <i class="fas fa-university text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <strong>B.Sc. Computer Science</strong>
                                                    <br><small class="text-muted">University of Dhaka • 2016 - 2020</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    <h6><i class="fas fa-cog me-2"></i> Skills</h6>
                                    <div class="skills-tags">
                                        <span class="badge bg-primary">JavaScript</span>
                                        <span class="badge bg-success">Node.js</span>
                                        <span class="badge bg-info">React</span>
                                        <span class="badge bg-warning">PHP</span>
                                        <span class="badge bg-danger">Laravel</span>
                                        <span class="badge bg-secondary">Python</span>
                                        <span class="badge bg-dark">MongoDB</span>
                                        <span class="badge bg-primary">MySQL</span>
                                        <span class="badge bg-success">AWS</span>
                                        <span class="badge bg-info">Docker</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Section -->
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">
                                <i class="fas fa-chart-line me-2"></i> Activity
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="p-3">
                                        <h4 class="text-primary">15</h4>
                                        <small class="text-muted">Posts this month</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3">
                                        <h4 class="text-success">234</h4>
                                        <small class="text-muted">Profile views</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3">
                                        <h4 class="text-info">45</h4>
                                        <small class="text-muted">Search appearances</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Create Post Section -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://via.placeholder.com/40x40/667eea/ffffff?text=JD" alt="User Avatar" 
                                     class="rounded-circle me-3" style="width: 40px; height: 40px;">
                                <input type="text" class="form-control rounded-pill" 
                                       placeholder="Share your thoughts with your network..." 
                                       onclick="openPostModal()">
                            </div>
                            <div class="post-actions d-flex justify-content-between">
                                <button class="btn btn-light flex-fill me-2" onclick="openPostModal()">
                                    <i class="fas fa-edit text-primary"></i> Write Article
                                </button>
                                <button class="btn btn-light flex-fill me-2">
                                    <i class="fas fa-image text-success"></i> Photo
                                </button>
                                <button class="btn btn-light flex-fill me-2">
                                    <i class="fas fa-video text-danger"></i> Video
                                </button>
                                <button class="btn btn-light flex-fill">
                                    <i class="fas fa-calendar text-warning"></i> Event
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Posts Feed -->
                    <div class="posts-feed">
                        <!-- Sample Post 1 -->
                        <div class="card mb-4 post-card">
                            <div class="card-body">
                                <div class="post-header d-flex align-items-center mb-3">
                                    <img src="https://via.placeholder.com/50x50/667eea/ffffff?text=JD" alt="User Avatar" 
                                         class="rounded-circle me-3" style="width: 50px; height: 50px;">
                                    <div>
                                        <h6 class="mb-0">John Doe</h6>
                                        <small class="text-muted">Software Developer • 2 hours ago • <i class="fas fa-globe"></i></small>
                                    </div>
                                    <div class="ms-auto">
                                        <button class="btn btn-sm btn-light">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="post-content">
                                    <p>🚀 Excited to share that I've just completed a major project using React and Node.js! The journey has been incredible, and I've learned so much about building scalable applications.</p>
                                    <p>Key takeaways from this project:</p>
                                    <ul>
                                        <li>Implementing proper state management with Redux</li>
                                        <li>Building RESTful APIs with Express.js</li>
                                        <li>Database optimization techniques</li>
                                        <li>Deployment strategies using AWS</li>
                                    </ul>
                                    <p>Special thanks to my amazing team for their support! 💪</p>
                                    <div class="hashtags mt-3">
                                        <span class="badge bg-light text-dark me-2">#WebDevelopment</span>
                                        <span class="badge bg-light text-dark me-2">#React</span>
                                        <span class="badge bg-light text-dark me-2">#NodeJS</span>
                                        <span class="badge bg-light text-dark">#AWS</span>
                                    </div>
                                    <img src="https://via.placeholder.com/600x300/667eea/ffffff?text=Project+Screenshot" alt="Post Image" 
                                         class="img-fluid rounded mt-3">
                                </div>
                                
                                <div class="post-stats mt-3 mb-3">
                                    <div class="d-flex justify-content-between text-muted">
                                        <span>
                                            <i class="fas fa-thumbs-up text-primary"></i>
                                            <i class="fas fa-heart text-danger"></i>
                                            <i class="fas fa-lightbulb text-warning"></i>
                                            42 reactions
                                        </span>
                                        <span>12 comments • 5 shares</span>
                                    </div>
                                </div>
                                
                                <div class="post-actions border-top pt-3">
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-light flex-fill me-2 reaction-btn" onclick="toggleReaction(this)">
                                            <i class="fas fa-thumbs-up"></i> Like
                                        </button>
                                        <button class="btn btn-light flex-fill me-2" onclick="toggleComments(this)">
                                            <i class="fas fa-comment"></i> Comment
                                        </button>
                                        <button class="btn btn-light flex-fill me-2" onclick="sharePost(this)">
                                            <i class="fas fa-share"></i> Share
                                        </button>
                                        <button class="btn btn-light flex-fill">
                                            <i class="fas fa-paper-plane"></i> Send
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Comments Section -->
                                <div class="comments-section mt-3" style="display: none;">
                                    <div class="comment-input d-flex align-items-center mb-3">
                                        <img src="https://via.placeholder.com/35x35/667eea/ffffff?text=ME" alt="User Avatar" 
                                             class="rounded-circle me-2" style="width: 35px; height: 35px;">
                                        <input type="text" class="form-control rounded-pill" 
                                               placeholder="Add a comment...">
                                        <button class="btn btn-primary ms-2">Post</button>
                                    </div>
                                    
                                    <div class="comments-list">
                                        <div class="comment mb-3">
                                            <div class="d-flex">
                                                <img src="https://via.placeholder.com/35x35/28a745/ffffff?text=JS" alt="User Avatar" 
                                                     class="rounded-circle me-2" style="width: 35px; height: 35px;">
                                                <div class="comment-content p-3 flex-grow-1">
                                                    <strong>Jane Smith</strong>
                                                    <p class="mb-1">Congratulations on the successful project! Your dedication to learning new technologies is inspiring. 🎉</p>
                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-muted">2 hours ago</small>
                                                        <div>
                                                            <button class="btn btn-sm btn-light me-2">
                                                                <i class="fas fa-thumbs-up"></i> Like
                                                            </button>
                                                            <button class="btn btn-sm btn-light">
                                                                <i class="fas fa-reply"></i> Reply
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Sidebar -->
                <div class="col-md-4">
                    <!-- Connection Suggestions -->
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <h6 class="mb-0">
                                <i class="fas fa-users me-2"></i> People you may know
                            </h6>
                        </div>
                        <div class="card-body p-0">
                            <div class="suggestion-item p-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50x50/28a745/ffffff?text=AJ" alt="User Avatar" 
                                         class="rounded-circle me-3" style="width: 50px; height: 50px;">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Alice Johnson</h6>
                                        <small class="text-muted">UI/UX Designer at Creative Agency</small>
                                        <br><small class="text-muted">5 mutual connections</small>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-user-plus"></i> Connect
                                    </button>
                                </div>
                            </div>
                            
                            <div class="suggestion-item p-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50x50/dc3545/ffffff?text=MC" alt="User Avatar" 
                                         class="rounded-circle me-3" style="width: 50px; height: 50px;">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Mike Chen</h6>
                                        <small class="text-muted">Product Manager at Tech Corp</small>
                                        <br><small class="text-muted">3 mutual connections</small>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-user-plus"></i> Connect
                                    </button>
                                </div>
                            </div>
                            
                            <div class="suggestion-item p-3">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50x50/6f42c1/ffffff?text=SW" alt="User Avatar" 
                                         class="rounded-circle me-3" style="width: 50px; height: 50px;">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Sarah Wilson</h6>
                                        <small class="text-muted">Data Scientist at Analytics Inc</small>
                                        <br><small class="text-muted">2 mutual connections</small>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-user-plus"></i> Connect
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Trending Topics -->
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <h6 class="mb-0">
                                <i class="fas fa-fire me-2"></i> Trending in Technology
                            </h6>
                        </div>
                        <div class="card-body p-0">
                            <div class="trending-item p-3 border-bottom">
                                <small class="text-muted">Trending in AI</small>
                                <h6 class="mb-0">#AIRevolution</h6>
                                <small class="text-muted">12,543 professionals talking about this</small>
                            </div>
                            
                            <div class="trending-item p-3 border-bottom">
                                <small class="text-muted">Trending in Development</small>
                                <h6 class="mb-0">#WebDevelopment</h6>
                                <small class="text-muted">8,921 professionals talking about this</small>
                            </div>
                            
                            <div class="trending-item p-3 border-bottom">
                                <small class="text-muted">Trending in Career</small>
                                <h6 class="mb-0">#RemoteWork</h6>
                                <small class="text-muted">5,432 professionals talking about this</small>
                            </div>
                            
                            <div class="trending-item p-3">
                                <small class="text-muted">Trending in Innovation</small>
                                <h6 class="mb-0">#CloudComputing</h6>
                                <small class="text-muted">3,211 professionals talking about this</small>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Learning -->
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <h6 class="mb-0">
                                <i class="fas fa-graduation-cap me-2"></i> Continue Learning
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="learning-item mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary rounded p-2 me-3">
                                        <i class="fas fa-code text-white"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Advanced React Patterns</h6>
                                        <small class="text-muted">2 hours left</small>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                            
                            <div class="learning-item">
                                <div class="d-flex align-items-center">
                                    <div class="bg-success rounded p-2 me-3">
                                        <i class="fas fa-cloud text-white"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">AWS Certification Prep</h6>
                                        <small class="text-muted">Just started</small>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" style="width: 10%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Post Modal -->
    <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="postModalLabel">Share an update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>