<!DOCTYPE html>
<html>
<!-- Homepage-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gcHomepage</title>
    <link rel="stylesheet" href="front/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="front/css_admin/Features-Blue.css">
    <link rel="stylesheet" href="front/css_admin/Header-Blue.css">
    <link rel="stylesheet" href="front/css_admin/Pretty-Footer.css">
    <link rel="stylesheet" href="front/css_admin/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="front/css_admin/styles.css">
</head>

<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    <a class="navbar-brand" href="#">Company Name</a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#section2">Features</a>
                            </li>

                        </ul>
                        <form class="form-inline mr-auto" target="_self">

                        </form>
                        <span class="navbar-text">
                            <a href="#" class="login" data-toggle="modal" data-target="#myModal">Log In</a>
                        </span>
                        <a class="btn btn-light action-button" role="button" href="#section1">Sign Up</a>
                    </div>
                    <!-- MODAL ADD-->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content ">
                                <div class="modal-header">
                                    <h5 class="h3 text-dark d-flex justify-content-center" id="myModalLabel">Login</h5>
                                    <button class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label text-dark font-weight-bold">Username:</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label text-dark font-weight-bold">Password:</label>
                                        <div class="col-10">
                                            <input class="form-control" type="password" value="Artisanal kale" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="modal-footer d-flex justify-content-center">
                                        <label class="form-check-label text-dark" for="exampleCheck1">
                                            <a href="gc_adm-1-dashboard.html"> Forgot Account?</a>
                                        </label>
                                        <button class="btn btn-outline-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>The revolution is here.</h1>
                        <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis
                            sapien viverra convallis. In non tempus lorem. </p>
                        <button class="btn btn-light btn-lg action-button"
                            type="button">Learn More</button>
                    </div>
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup">
                            <img src="front/img/broom.jpg" class="device">

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="register-photo" id="section1">
            <div class="form-container">
                <div class="image-holder"></div>
                <form method="post">
                    <h2 class="text-center">
                        <strong>Create</strong> an account.</h2>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">I agree to the license terms.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                    </div>
                    <a href="#" class="already">You already have an account? Login here.</a>
                </form>
            </div>
        </div>
        <div class="features-blue" id="section2">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Features</h2>
                    <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut
                        laoreet vitae. </p>
                </div>
                <div class="row features">
                    <div class="col-sm-6 col-md-4 item">
                        <i class="fa fa-map-marker icon"></i>
                        <h3 class="name">Works everywhere</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.
                            Aliquam varius finibus est.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 item">
                        <i class="fa fa-clock-o icon"></i>
                        <h3 class="name">Always available</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.
                            Aliquam varius finibus est.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 item">
                        <i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Customizable</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.
                            Aliquam varius finibus est.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 item">
                        <i class="fa fa-leaf icon"></i>
                        <h3 class="name">Organic</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.
                            Aliquam varius finibus est.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 item">
                        <i class="fa fa-plane icon"></i>
                        <h3 class="name">Fast</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.
                            Aliquam varius finibus est.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 item">
                        <i class="fa fa-phone icon"></i>
                        <h3 class="name">Mobile-first</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.
                            Aliquam varius finibus est.</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3>
                        <a href="#">Company
                            <span>logo </span>
                        </a>
                    </h3>
                    <p class="links">
                        <a href="#">Home</a>
                        <strong> · </strong>
                        <a href="#">Blog</a>
                        <strong> · </strong>
                        <a href="#">Pricing</a>
                        <strong> · </strong>
                        <a href="#">About</a>
                        <strong> · </strong>
                        <a href="#">Faq</a>
                        <strong> · </strong>
                        <a href="#">Contact</a>
                    </p>
                    <p class="company-name">Company Name © 2015 </p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div>
                        <span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p>
                            <span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                    </div>
                    <div>
                        <i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +1 555 123456</p>
                    </div>
                    <div>
                        <i class="fa fa-envelope footer-contacts-icon"></i>
                        <p>
                            <a href="#" target="_blank">support@company.com</a>
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
                        vehicula sit amet. </p>
                    <div class="social-links social-icons">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="front/js/jquery.min.js"></script>
        <script src="front/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                // Add scrollspy to <body>
                $('body').scrollspy({
                    target: ".navbar",
                    offset: 50
                });

                // Add smooth scrolling on all links inside the navbar
                $("#myNavbar a").on('click', function (event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>


</body>

</html>