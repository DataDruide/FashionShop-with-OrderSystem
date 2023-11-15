<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <!-- Einbindung des Navigations- und Login-Stils -->
    <link href="css/nav_login.css" rel="stylesheet" />

    <!-- Einbindung des Bootstrap-Stils und -Skripts -->
    <link href="css/css/bootstrap.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.js"></script>

    <!-- Einbindung der Poppins-Schriftart -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap"
        rel="stylesheet" />

    <!-- Favicon- und Apple-Touch-Icon-Einbindung -->
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png" />

    <!-- Einbindung des Login-Stils -->
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <?php
    // Überprüfung, ob das Formular abgeschickt wurde
    if (isset($_POST["submit"])) {
        // Einbindung der Datenbankverbindung
        require("mysql.php");

        // Überprüfung, ob der Benutzername bereits existiert
        $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user");
        $stmt->bindParam(":user", $_POST["username"]);
        $stmt->execute();
        $count = $stmt->rowCount();

        if ($count == 0) {
            // Benutzername ist frei
            if ($_POST["pw"] == $_POST["pw2"]) {
                // Anlegen des Benutzers
                $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD) VALUES (:user, :pw)");
                $stmt->bindParam(":user", $_POST["username"]);
                $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
                $stmt->bindParam(":pw", $hash);
                $stmt->execute();
                echo "Dein Account wurde angelegt";
            } else {
                echo "Die Passwörter stimmen nicht überein";
            }
        } else {
            echo "Der Benutzername ist bereits vergeben";
        }
    }
    ?>
    
    <section>
        <!-- Header und Navbar -->
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link signup" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero-Abschnitt -->
        <div class="section container d-lg-flex py-2">
            <div class="container my-2">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-4">REGISTER</h4>
                                <!-- Formular für die Registrierung -->
                                <form action="register.php" method="post">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="displayName" name="username"
                                            aria-describedby="emailHelp" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="pw" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword"
                                            name="pw2" required />
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary" name="submit">
                                            Register
                                        </button>
                                    </div>
                                </form>
                                <!-- Ende des Formulars -->
                                <div class="text-center mt-3">
                                    <p>
                                        Already have an account? <a href="login.php">Sign in</a>
                                    </p>
                                </div>
                                <h5 class="text-center">or</h5>
                                <div class="text-center mt-3">
                                    <button id="google" class="btn btn-primary">
                                        Sign up with Google
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grafik -->
            <div class="graphic">
                <img style="max-width: 350px; min-width: 250px" src="css/images/rofilbild.jpg" alt="student" />
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer mt-auto py-3 shadow-sm">
            <div class="container">
                <span class="text-muted">All rights reserved | Copyrights &copy; Wardrope 2023</span>
            </div>
        </footer>
    </section>
</body>

</html>
