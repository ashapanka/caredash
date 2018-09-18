<!DOCTYPE html>
<html lang="en">

    <head>
        
        <title>CareDash Project</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- My styles-->
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        
        <div class="container">
            <header class="row">
                <nav class="col-12 navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a href="#"><img src="https://via.placeholder.com/130x50?text=LOGO" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-navicon"></i>
                    </button>
                    
                    
                    <!-- nav links -->
                    <ul class="collapse navbar-collapse" id="navbarSupportedContent">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Review Your Doctor</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Link</a>
                              <a class="dropdown-item" href="#">Link</a>
                              <a class="dropdown-item" href="#">Link</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#">Find a Doctor</a></li>
                        <li class="nav-item"><a href="#">Family</a></li>
                    </ul>
                </nav>
            </header>
            
            <section class="row">
                <div class="col-12 col-lg-8 top-story">
                    <img src="https://via.placeholder.com/730x500?text=Top+Story+Image" class="img-fluid" alt="top story image"/>
                </div>
                <div class="col-12 col-lg-4 form">
                    <p>Sign up with CareDash to<br />Edit your Provider Profile</p>
                    
                    <!-- This form is non functional, since there's no database attached -->
                    <form action="/page.php" method="post">
                        <label for="first_name">First name</label>
                        <input required type="text" class="form-control" id="first_name">
                        
                        <label for="last_name">Last name</label>
                        <input required type="text" class="form-control" id="last_name">
                        
                        <label for="email_address">Email address</label>
                        <input required type="text" class="form-control" id="email_address">
                        
                        <label for="password">Password</label>
                        <input required type="text" class="form-control" id="password">
                        
                        <label for="confirm_password">Confirm password</label>
                        <input required type="text" class="form-control" id="confirm_password">
                        
                        <button type="submit" class="btn btn-danger">Sign up</button>
                        <a href="/login.php" class="btn btn-danger">Log in</a>
                    </form>
                </div>
                <div class="col-12 banner_text">
                    <a href="#">Reasons to Sign Up as a Provider on CareDash</a>
                </div>
            </section>
            
            <section class="row">
                <article class="col-12 col-md-4">
                    <img src="https://via.placeholder.com/300x250?text=Image" class="img-fluid" alt="article image"/>
                    <h2>Headline</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper, massa in vestibulum placerat, enim urna varius libero, et consequat eros velit tempus orci. Sed sodales tempor mollis. Donec mollis, metus ut gravida vehicula, orci elit lacinia nisl, id feugiat enim orci vel erat.</p>
                    <a class="btn btn-danger" href="#" role="button">Learn More</a>
                </article>
                
                <article class="col-12 col-md-4">
                    <img src="https://via.placeholder.com/300x250?text=Image" class="img-fluid" alt="article image"/>
                    <h2>Headline</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper, massa in vestibulum placerat, enim urna varius libero, et consequat eros velit tempus orci. Sed sodales tempor mollis. Donec mollis, metus ut gravida vehicula, orci elit lacinia nisl, id feugiat enim orci vel erat.</p>
                    <a class="btn btn-danger" href="#" role="button">Learn More</a>
                </article>
                
                <article class="col-12 col-md-4">
                    <img src="https://via.placeholder.com/300x250?text=Image" class="img-fluid" alt="article image"/>
                    <h2>Headline</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper, massa in vestibulum placerat, enim urna varius libero, et consequat eros velit tempus orci. Sed sodales tempor mollis. Donec mollis, metus ut gravida vehicula, orci elit lacinia nisl, id feugiat enim orci vel erat.</p>
                    <a class="btn btn-danger" href="#" role="button">Learn More</a>
                </article>
            </section>
            
            <footer class="row justify-content-start">
                <div class="col-12 col-lg-3 first_column">
                    <h3>CareDash</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Write a Review</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 second_column">
                    <h3>Specialists</h3>
                    <ul>
                        <li><a href="#">Primary Care Physicians</a></li>
                        <li><a href="#">Pediatricians</a></li>
                        <li><a href="#">Optometrists</a></li>
                        <li><a href="#">Dentists</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 third_column">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-pinterest"></a></li>
                    </ul>
                </div>
                <div class="col-12 copyright">
                    <span>Copyright 2018 CareDash</span>
                </div>
            </footer>
            
        </div>
        <!-- JavaScript -->
        <!-- jQuery first, then Popper.js (for dropdown nav), then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    </body>
</html>