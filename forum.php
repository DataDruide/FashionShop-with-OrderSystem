<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop Forum</title>
    <link rel="stylesheet" href="css/style_forum.css" />
    <link href="css/nav_forum.css" rel="stylesheet" />

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />

    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
</head>

<body>
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="col-full push-top">
            <ul class="breadcrumbs">
                <li>
                    <a href="/index.html"><i class="fa fa-home fa-btn"></i>Home</a>
                </li>
                <li><a href="/category.html">Discussions</a></li>
                <li class="active"><a href="#">Feedback</a></li>
            </ul>

            <div class="forum-header">
                <div class="forum-details">
                    <h1>Reviews</h1>
                    <p class="text-lead">Discuss your passion for the new Shop</p>
                </div>
                <a href="new-thread.html" class="btn-green btn-small">Start a thread</a>
            </div>
        </div>

        <div class="col-full">
            <div class="category-item">
                <div class="forum-list">
                    <h2 class="list-title">INFO</h2>

                    <div class="forum-listing">
                        <div class="forum-details">
                            <a href="#" class="forum-name">SHOP RULES</a>

                            <p class="forum-description">
                                Rules, Guides and Tips & Tricks
                            </p>
                        </div>

                        <div class="threads-count">
                            <p class="count text-lead">1</p>
                            threads
                        </div>

                        <div class="last-thread">
                            <img class="avatar"
                                src="http://cleaneatsfastfeets.com/wp-content/uploads/2013/05/Mr-Burns.gif" alt="" />
                            <div class="last-thread-details">
                                <a href="#">How I can Order here</a>
                                <p class="text-xsmall">
                                    By <a href="profile.html">Charles Montgomery Burns</a>, 2
                                    days ago
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-full">
            <div class="thread-list">
                <h2 class="list-title">Threads</h2>

                <div class="thread">
                    <div>
                        <p>
                            <a href="thread.html">Which payments work here?</a>
                        </p>
                        <p class="text-faded text-xsmall">
                            By <a href="profile.html">Joseph Kerr</a>, yesterday.
                        </p>
                    </div>

                    <div class="activity">
                        <p class="replies-count">1 reply</p>

                        <img class="avatar-medium"
                            src="http://i0.kym-cdn.com/photos/images/facebook/000/010/934/46623-batman_pikachu_super.png"
                            alt="" />

                        <div>
                            <p class="text-xsmall">
                                <a href="profile.html">Bruce Wayne</a>
                            </p>
                            <p class="text-xsmall text-faded">2 hours ago</p>
                        </div>
                    </div>
                </div>

                <div class="thread">
                    <div>
                        <p>
                            <a href="thread.html">How long did your delivery take??</a>
                        </p>
                        <p class="text-faded text-xsmall">
                            By <a href="profile.html">Robin</a>, 8 hours ago
                        </p>
                    </div>

                    <div class="activity">
                        <p class="replies-count">3 replies</p>

                        <img class="avatar-medium"
                            src="https://firebasestorage.googleapis.com/v0/b/forum-2a982.appspot.com/o/images%2Favatars%2Fraynathan?alt=media&token=bd9a0f0e-60f2-4e60-b092-77d1ded50a7e"
                            alt="" />
                        <span>
                            <a class="text-xsmall" href="profile.html">Ray-Nathan James</a>
                            <p class="text-faded text-xsmall">3 hours ago</p>
                        </span>
                    </div>
                </div>

                <div class="thread">
                    <div>
                        <p>
                            <a href="thread.html">Multifilling</a>
                        </p>
                        <p class="text-faded text-xsmall">
                            By <a href="profile.html">Ray-Nathan James</a>, 6 days ago
                        </p>
                    </div>

                    <div class="activity">
                        <p class="replies-count">1 reply</p>

                        <img class="avatar-medium"
                            src="http://i0.kym-cdn.com/photos/images/facebook/000/010/934/46623-batman_pikachu_super.png"
                            alt="" />
                        <span>
                            <a class="text-xsmall" href="profile.html">Bruce Wayne</a>
                            <p class="text-faded text-xsmall">6 days ago</p>
                        </span>
                    </div>
                </div>

                <div class="thread">
                    <div>
                        <p>
                            <a href="thread.html">Egg replacer for bread dough?</a>
                        </p>
                        <p class="text-faded text-xsmall">
                            By <a href="profile.html">Theodor Jackson</a>, 2 weeks ago
                        </p>
                    </div>

                    <div class="activity">
                        <p class="replies-count">1 reply</p>

                        <img class="avatar-medium"
                            src="http://icons.iconarchive.com/icons/designbolts/free-male-avatars/128/Male-Avatar-icon.png"
                            alt="" />
                        <span>
                            <a class="text-xsmall" href="profile.html">Theodor Jackson</a>
                            <p class="text-faded text-xsmall">2 weeks ago</p>
                        </span>
                    </div>
                </div>

                <div class="thread">
                    <div>
                        <p>
                            <a href="thread.html">Which is your favorite carbohydrate? 🤓</a>
                        </p>
                        <p class="text-faded text-xsmall">
                            By <a href="profile.html">Ray-Nathan James</a>, 1 month ago
                        </p>
                    </div>

                    <div class="activity">
                        <p class="replies-count">0 replies</p>

                        <img class="avatar-medium"
                            src="http://i0.kym-cdn.com/photos/images/facebook/000/010/934/46623-batman_pikachu_super.png"
                            alt="" />
                        <span>
                            <a class="text-xsmall" href="profile.html">Ray-Nathan James</a>
                            <p class="text-faded text-xsmall">1 month ago</p>
                        </span>
                    </div>
                </div>

                <div class="container">
                    <!-- Ihre vorhandene Struktur für die Threads -->

                    <div class="col-full">
                        <div class="thread-list">
                            <h2 class="list-title">Threads</h2>

                            <!-- Hier fügen wir Beiträge ein -->
                            <div id="posts">
                                <!-- Beiträge werden hier dynamisch hinzugefügt -->
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    // Simulierte Beiträge (Array)
                    const posts = [
                        {
                            title: "Which payments work here?",
                            author: "Joseph Kerr",
                            date: "yesterday",
                            replies: 1,
                        },
                        {
                            title: "How long did your delivery take?",
                            author: "Robin",
                            date: "8 hours ago",
                            replies: 3,
                        },
                        {
                            title: "Multifilling",
                            author: "Ray-Nathan James",
                            date: "6 days ago",
                            replies: 1,
                        },
                        // Fügen Sie weitere Beiträge hier hinzu
                    ];

                    // Funktion zum Anzeigen der Beiträge
                    function displayPosts() {
                        const postsContainer = document.getElementById("posts");

                        posts.forEach((post) => {
                            const postElement = document.createElement("div");
                            postElement.className = "thread";

                            postElement.innerHTML = `
                          <div>
                              <p>
                                  <a href="#">${post.title}</a>
                              </p>
                              <p class="text-faded text-xsmall">
                                  By <a href="profile.html">${post.author
                                }</a>, ${post.date}.
                              </p>
                          </div>
                          
                          <div class="activity">
                              <p class="replies-count">${post.replies} reply${post.replies === 1 ? "" : "s"
                                }</p>
                              <!-- Hier können Sie das Avatar-Bild einfügen -->
                          </div>
                      `;

                            postsContainer.appendChild(postElement);
                        });
                    }

                    // Beiträge anzeigen, wenn die Seite geladen ist
                    window.addEventListener("load", displayPosts);
                </script>
            </div>

            <div class="pagination">
                <button class="btn-circle" type="button" disabled>
                    <i class="fa fa-angle-left"></i>
                </button>
                <span>1 of 3</span>
                <button class="btn-circle" type="button">
                    <i class="fa fa-angle-right"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="forum-stats desktop-only">
        <hr />
        <ul>
            <li><i class="fa fa-user-circle-o"></i>1 users online</li>
            <li><i class="fa fa-user-o"></i>1 users registered</li>
            <li><i class="fa fa-comments-o"></i>4 threads</li>
            <li><i class="fa fa-comment-o"></i>7 posts</li>
        </ul>
    </div>
</body>

</html>

</html>