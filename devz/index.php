<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>www.devzchallenge.com</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <header class="bg-success text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo font-weight-bold">LOGO</div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero bg-light text-center py-5">
        <h1>Active Developer Challenge</h1>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" onclick="loadCollabContent()">
                        <img src="asset/activechallenge/devz1.jpg" class="img-fluid" alt="Developer 1">
                    </div>
                    <div class="carousel-item" onclick="loadCollabContent()">
                        <img src="asset/activechallenge/devz2.jpg" class="img-fluid" alt="Developer 2">
                    </div>
                    <div class="carousel-item" onclick="loadCollabContent()">
                        <img src="asset/activechallenge/devz4.jpg" class="img-fluid" alt="Developer 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Modal Structure -->
    <div class="modal fade" id="collabModal" tabindex="-1" role="dialog" aria-labelledby="collabModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="collabModalLabel">Collaborate</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="collabContent">
                    <!-- Collab content will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section class="services bg-secondary text-center py-5">
        <h2>Our Services</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="asset/services/devc.jpg" class="card-img-top" alt="Developer Challenge">
                        <div class="card-body">
                            <h5 class="card-title">Developer Challenge</h5>
                            <p class="card-text">Join our Developer Challenge and compete with the best to showcase your skills and win amazing prizes!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="asset/services/cert.jpeg" class="card-img-top" alt="Certificate">
                        <div class="card-body">
                            <h5 class="card-title">Certificate Programs</h5>
                            <p class="card-text">Earn industry-recognized certificates that validate your expertise and boost your career prospects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="asset/services/web.jpg" class="card-img-top" alt="Web Design">
                        <div class="card-body">
                            <h5 class="card-title">Web Design</h5>
                            <p class="card-text">Get stunning and responsive web designs tailored to your business needs by our expert designers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="asset/services/pro.jpg" class="card-img-top" alt="Project Management">
                        <div class="card-body">
                            <h5 class="card-title">Project Management</h5>
                            <p class="card-text">Ensure the success of your projects with our professional project management services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team bg-light text-center py-5">
        <h2>Team</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="asset/team/elias.jpg" class="img-fluid rounded-circle" alt="Team Member 1">
                    <h5 class="mt-2">Elias DUKUZUMUREMYI</h5>
                    <p>CEO,Founder</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="asset/team/elias.jpg" class="img-fluid rounded-circle" alt="Team Member 2">
                    <h5 class="mt-2">Elias DUKUZUMUREMYI</h5>
                    <p>PM</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="asset/team/elias.jpg" class="img-fluid rounded-circle" alt="Team Member 3">
                    <h5 class="mt-2">Elias DUKUZUMUREMYI</h5>
                    <p>Full Stack Developer</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about bg-secondary text-center py-5">
        <h2>About Us</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="p-3 bg-white border">
                        <h5>Description</h5>
                        <p>We are a team of passionate developers committed to pushing the boundaries of technology and innovation. Our goal is to empower individuals and organizations by providing top-notch services and creating exceptional digital experiences.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-3 bg-white border">
                        <h5>Mission</h5>
                        <p>Our mission is to foster a community of skilled developers, provide opportunities for growth, and deliver high-quality services that drive success and innovation in the tech industry.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-3 bg-white border">
                        <h5>Vision</h5>
                        <p>We envision a future where technology seamlessly integrates into everyday life, enhancing productivity and creativity. We strive to be at the forefront of this transformation, leading the way with our innovative solutions and dedicated team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>About Us</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">About</a></li>
                        <li><a href="#" class="text-white">Blog</a></li>
                        <li><a href="#" class="text-white">Team</a></li>
                        <li><a href="#" class="text-white">Governance</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Services</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Developer Challenge</a></li>
                        <li><a href="#" class="text-white">Certificate</a></li>
                        <li><a href="#" class="text-white">Web Design</a></li>
                        <li><a href="#" class="text-white">Project Management</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">WhatsApp</a></li>
                        <li><a href="#" class="text-white">Email</a></li>
                        <li><a href="#" class="text-white">Facebook</a></li>
                        <li><a href="#" class="text-white">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function loadCollabContent() {
            $.ajax({
                url: 'collab.php',
                success: function(response) {
                    $('#collabContent').html(response);
                    $('#collabModal').modal('show');
                }
            });
        }
    </script>
</body>
</html>
