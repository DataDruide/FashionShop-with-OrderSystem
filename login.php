<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="css/nav_login.css" rel="stylesheet" />

    <link href="css/css/bootstrap.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png" />
    <link rel="stylesheet" href="css/login.css" />
    <!-- JavaScript-Datei für die Anmeldung -->
</head>

<body>
    <?php
    if (isset($_POST["login"])) { // Updated the name to "login"
        require("mysql.php");
        $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user");
        $stmt->bindParam(":user", $_POST["username"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count == 1) {
            $row = $stmt->fetch();
            if (password_verify($_POST["pw"], $row["PASSWORD"])) {
                session_start();
                $_SESSION["username"] = $row["USERNAME"];
                header("Location: geheim.php");
            } else {
                echo "Der Login ist fehlgeschlagen";
            }
        } else {
            echo "Der Login ist fehlgeschlagen";
        }
    }
    ?>
    <section>
        <!--header and navbar-->
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="css/images/logo.jpg" alt="" width="200rem"
                        class="d-inline-block align-text-top" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link signup" href="register.html">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--hero section-->

        <div class="section container d-lg-flex py-2">
            <div class="container my-2">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-4">LOGIN</h4>
                                <!-- Formular für die Anmeldung -->
                                <form action="your_login_script.php" method="post">
                                    <!-- Replace "your_login_script.php" with your actual login script -->
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            aria-describedby="emailHelp" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="pw" required />
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary submit" name="login">
                                            <!-- Changed the button type to "submit" and added name="login" -->
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <!-- Ende des Formulars -->
                                <div class="text-center mt-3">
                                    <p>
                                        Don't have an account? <a href="register.html">Sign up</a>
                                    </p>
                                </div>
                                <h5 class="text-center">or</h5>
                                <div class="text-center mt-3">
                                    <button id="google" class="btn btn-primary">
                                        Sign in with Google
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="graphic">
                <img style="max-width: 350px; min-width: 250px" src="css/images/rofilbild.jpg" alt="student" />
            </div>
        </div>

        <!--footer-->
        <footer class="footer mt-auto py-3 shadow-sm">
            <div class="container">
                <span class="text-muted">All rights reserved | Copyrights &copy; Wardrope 2023</span>
            </div>
        </footer>
    </section>
</body>

</html>