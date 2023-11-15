<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="css/styles_contactUs.css" />
    <script defer src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="/images/fevicon.ico" />
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="css/images/logo.jpg" alt="" width="200rem" class="d-inline-block align-text-top" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact-us.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Form Section -->
    <section class="background center">
        <div class="contact text-white text-center lead">
            <h4>Contact</h4>
            <p style="font-weight: 500">Write our Support Team</p>
        </div>
        <div class="container">
            <div class="d-flex flex-column">
                <div class="hero p-2 d-md-flex">
                    <div class="pictures m-2" style="max-width: 700px; max-height: 700px"></div>
                    <div class="contact-us rounded p-2 m-2 py-4">
                        <div class="contact-text">
                            <h4>Contact Form</h4>
                            <p>
                                Please fill out the form below to get in touch with our support team. We will get back to you as soon as possible.
                            </p>
                        </div>
                        <form action="send_email.py" method="post">
                            <div class="form-group">
                                <label class="form-label" for="first-name">First Name</label>
                                <input type="text" name="first-name" required placeholder="Provide your first name" class="form-control" />

                                <label class="form-label" for="last-name">Last Name</label>
                                <input type="text" name="last-name" placeholder="Provide your last name" class="form-control" />

                                <label class="form-label" for="email">Email</label>
                                <input type="email" name="email" required placeholder="Provide your email" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="message">What is your Description?</label>
                                <textarea name="message" class="form-control" style="height: 10rem"></textarea>
                            </div>
                            <div class="d-grid my-2">
                                <input type="submit" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="d-grid contact text-white">
        <div class="container d-md-flex text-center justify-content-center">
            <div class="address p-2">
                <h5>Address</h5>
                <address>
                    Musterstreet 5<br />
                    Florida<br />
                    138
                </address>
            </div>
            <div class="Phone p-2">
                <h5>Telephone</h5>
                <p>0190 12345678 <br /></p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <div class="footer bg-light shadow-sm text-center">
        <p>Copyrights &copy; <a href="index.html" title="">Wardrope</a> 2023</p>
        <nav class="bottom-nav">
            <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="privacy-policy.html">Privacy</a></li>
                <li><a href="#">Terms</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
