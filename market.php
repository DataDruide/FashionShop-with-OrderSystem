<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>WARDROPE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_market.css" type="text/css" media="all" />
    <!--[if lte IE 6
      ]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all"
    /><![endif]-->

    <script src="https://code.jquery.com/jquery-1.4.1.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
    <script src="js/jquery-func.js" type="text/javascript"></script>
</head>

<body>
    <!-- Shell -->
    <div class="shell">
        <!-- Header -->
        <div id="header">
            <h1 id="logo"><a href="#">Wardrope/a></h1>
            <!-- Cart -->
            <div id="cart">
                <a href="shoppingCart.php" class="cart-link">Shopping Cart</a>
                <div class="cl">&nbsp;</div>
                <span>Articles: <strong id="cart-articles">0</strong></span>
                &nbsp;&nbsp;
                <span>Cost: <strong id="cart-cost">€0.00</strong></span>
            </div>
            <!-- End Cart -->
            <!-- Navigation -->
            <div id="navigation">
                <ul>
                    <li><a href="market.php">Home</a></li>
                    <li><a href="aboutus.php">AboutUs</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>
            </div>
            <!-- End Navigation -->
        </div>
        <!-- End Header -->
        
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>
            <!-- Content -->
            <div id="content">
                <!-- Content Slider -->
                <div id="slider" class="box">
                    <div id="slider-holder">
                        <ul>
                            <li>
                                <a href="https://example.com/event-1" title="Event 1">
                                    <img src="css/images/Event1.png" alt="A picture of the Event 1 poster" />
                                </a>
                            </li>
                            <li>
                                <a href="https://example.com/event-2" title="Event 2">
                                    <img src="css/images/Event2.png" alt="A picture of the Event 2 poster" />
                                </a>
                            </li>
                            <li>
                                <a href="https://example.com/event-3" title="Event 3">
                                    <img src="css/images/Event3.png" alt="A picture of the Event 3 poster" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="slider-nav">
                        <a href="#" class="active">1</a> <a href="#">2</a>
                        <a href="#">3</a> <a href="#">4</a>
                    </div>
                </div>
                <!-- Ihr HTML-Body-Bereich -->
                <div id="all-products" class="">
                    <!-- Hier werden die Produktinformationen angezeigt -->
                </div>
                <button onclick="addToCart(1, 1)" class="checkout-btn">Add to Cart</button>
            </div>

            <!-- JavaScript zum Abrufen der API-Daten und Befüllen der Produktkarten -->
            <script src="js/app.js"></script>



        </div>


        <!-- End Content -->
        <!-- Sidebar -->
        <div id="sidebar">
            <!-- Search -->
            <div class="box search">
                <h2>Search by <span></span></h2>
                <div class="box-content">
                    <form action="#" method="post">
                        <label for="keyword">Keyword</label>
                        <input type="text" class="field" id="keyword" />
                        <label for="category">Category</label>
                        <select class="field" id="category">
                            <option value="">-- Select Category --</option>
                        </select>
                        <div class="inline-field">
                            <label for="price-from">Price</label>
                            <select class="field small-field" id="price-from">
                                <option value="">$10</option>
                            </select>
                            <label for="price-to">to:</label>
                            <select class="field small-field" id="price-to">
                                <option value="">$50</option>
                            </select>
                        </div>
                        <input type="submit" class="search-submit" value="Search" />
                        <p>
                            <a href="#" class="bul">Advanced search</a>
                            <br />
                            <a href="contact-us.php" class="bul">Contact Support</a>
                        </p>
                    </form>
                </div>
            </div>
            <!-- End Search -->
            <!-- Categories -->
            <div class="box categories">
                <h2>Categories <span></span></h2>
                <div class="box-content">
                    <ul>
                        <li><a href="#">MEN'S CLOTHING</a></li>
                        <li><a href="#">WOMAN CLOTHING</a></li>
                        <li><a href="#">JEWELERY</a></li>
                        <li><a href="#">ELECTRONICS</a></li>
                        <li><a href="#">HARDDISK</a></li>
                        <li><a href="#">DOKUMENTATION</a></li>
                        <li><a href="#">PAYMENT</a></li>
                        <li><a href="#">RULES</a></li>
                        <li><a href="#">DISPUTE</a></li>
                        <li><a href="#">ORDERS</a></li>

                    </ul>
                </div>

                <div class="box categorie2">
                    <h2>Services <span></span></h2>
                    <div class="box-content">
                        <ul>
                            <li><a href="index.php">DASHBOARD</a></li>
                            <li><a href="questions.php">QUESTIONS</a></li>
                            <li><a href="guides.php">GUIDES</a></li>
                            <li><a href="#">ORDERS</a></li>
                            <li><a href="paymentMethods.php">PAYMENT</a></li>
                            <li><a href="forum.php">FORUM</a></li>
                            <li><a href="#">DISPUTE</a></li>
                            <li><a href="#">DEVELOPERS</a></li>
                            <li class="nav-item">
                                <button class="nav-link" id="logout" onclick="logout()">Logout</button>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->
            <div class="cl">&nbsp;</div>
        </div>
        <!-- End Main -->
        <br>
        <!-- Side Full -->
        <div class="side-full">
            <!-- More Products -->
            <div class="more-products">
                <div class="more-products-holder">
                    <ul>
                        <li>
                            <a href="#" title="Link zu Seite 1"><img src="css/images/small1.jpg" alt="Bild 1" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 2"><img src="css/images/small2.jpg" alt="Bild 2" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 3"><img src="css/images/small3.jpg" alt="Bild 3" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 4"><img src="css/images/small4.jpg" alt="Bild 4" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 5"><img src="css/images/small5.jpg" alt="Bild 5" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 6"><img src="css/images/small6.jpg" alt="Bild 6" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 7"><img src="css/images/small7.jpg" alt="Bild 7" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 1"><img src="css/images/small1.jpg" alt="Bild 1" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 2"><img src="css/images/small2.jpg" alt="Bild 2" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 3"><img src="css/images/small3.jpg" alt="Bild 3" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 4"><img src="css/images/small4.jpg" alt="Bild 4" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 5"><img src="css/images/small5.jpg" alt="Bild 5" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 6"><img src="css/images/small6.jpg" alt="Bild 6" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu Seite 7"><img src="css/images/small7.jpg" alt="Bild 7" /></a>
                        </li>
                        <li>
                            <a href="#" title="Link zu letzter Seite"><img src="css/images/small7.jpg"
                                    alt="Letztes Bild" /></a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- End More Products -->
            <!-- Text Cols -->
            <div class="cols">
                <div class="cl">&nbsp;</div>
                <div class="col">
                    <h3 class="ico ico1">FAST DELIVERY</h3>
                    <p>
                        As soon as your payment has been booked with us, we will
                        immediately release the goods
                    </p>
                    <p class="more"><a href="#" class="bul">Read More</a></p>
                </div>
                <div class="col">
                    <h3 class="ico ico2">24/7 SUPPORT</h3>
                    <p>MENS CASUAL PREMIUM SLIM FIT T-SHIRTS MEN'S CLOTHING</p>
                    <p class="more"><a href="#" class="bul">Read More</a></p>
                </div>
                <div class="col">
                    <h3 class="ico ico3">Loyalty bonus for regular customers</h3>
                    <p>Loyalty bonus for regular customers</p>
                    <p class="more"><a href="#" class="bul">Read More</a></p>
                </div>
                <div class="col col-last">
                    <h3 class="ico ico4">
                        charging system with artificial intelligence
                    </h3>
                    <p>State-of-the-art charging system with artificial intelligence</p>
                    <p class="more"><a href="#" class="bul">Read More</a></p>
                </div>
                <div class="cl">&nbsp;</div>
            </div>
            <!-- End Text Cols -->
        </div>
        <!-- End Side Full -->
        <!-- Footer -->
        <div id="footer">
            <p class="left">
                <a href="market.php">Home</a> <span>|</span> <a href="#">Support</a>
                <span>|</span> <a href="#">My Account</a> <span>|</span>
                <a href="#">The Store</a> <span>|</span> <a href="contact-us.html">Contact</a>
            </p>
            <p class="right">&copy; 2023 Wardrobe Shop.<a href="#"></a></p>
        </div>
        <!-- End Footer -->
    </div>
    <!-- End Shell -->
</body>

</html>