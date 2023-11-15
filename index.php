<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <!-- Einbinden der verwendeten Schriftart -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
    <!-- Einbinden des externen Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/style_index.css">
</head>

<body>
    <!-- Navigation und Kopfbereich -->
    <div class="menubar">
        <h1>DASHBOARD</h1>
        <div class="myname">
            <div class="avatar">AD</div>Admin
        </div>
    </div>

    <!-- Hauptinhalt -->
    <div class="main">
        <!-- Seitenmenü -->
        <div class="menu">
            <a href="index.php?page=start"><img src="img/home.svg"> Start</a>
            <a href="index.php?page=market"><img src="img/store.svg"> Market</a>
            <a href="index.php?page=favorites"><img src="img/book.svg"> Favoriten</a>
            <a href="index.php?page=addfavorite"><img src="img/add.svg"> Favorit hinzufügen</a>
            <a href="index.php?page=newsletter"><img src="img/newspaper.svg"> Newsletter</a>
            <a href="index.php?page=legal"><img src="img/legal.svg"> Impressum</a>

            <a href="index.php?page=download"><img src="img/legal.svg"> Downloads</a>
            <a href="index.php?page=order"><img src="img/legal.svg"> Bestellmanagment</a>
            <a href="index.php?page=pay"><img src="img/legal.svg"> Zahlungsmanagment</a>
            <a href="index.php?page=transport"><img src="img/legal.svg"> Transportmanagment</a>
            <a href="index.php?page=retour"><img src="img/legal.svg"> Retourmanagment</a>
            <a href="index.php?page=instock"><img src="img/legal.svg"> Wareneingang</a>

        </div>

        <!-- Seiteninhalt -->
        <div class="content">
            <?php
            // Initialisierung von Variablen
            $headline = '';
            $contacts = [];

            // Laden von Kontakten aus der Datei
            if (file_exists('contacts.txt')) {
                $text = file_get_contents('contacts.txt', true);
                $contacts = json_decode($text, true);
            }

            // Verarbeiten des Formulars zum Hinzufügen eines Kontakts
            if (isset($_POST['name']) && isset($_POST['phone'])) {
                echo 'Kontakt <b>' . $_POST['name'] . '</b> wurde hinzugefügt';
                $newContact = [
                    'name' => $_POST['name'],
                    'phone' => $_POST['phone']
                ];
                array_push($contacts, $newContact);
                file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));
            }

            // Bestimmen der Seiten-Überschrift basierend auf dem Seitenparameter
            if ($_GET['page'] == 'market') {
                $headline = 'Dein Markt';
            }

            if ($_GET['page'] == 'favorites') {
                $headline = 'Deine Favoriten';
            }

            if ($_GET['page'] == 'addfavorite') {
                $headline = 'Favoriten hinzufügen';
            }

            if ($_GET['page'] == 'newsletter') {
                $headline = 'Hier finden Sie unsere neuesten Newsletter';
            }

            if ($_GET['page'] == 'legal') {
                $headline = 'Impressum';
            }

            // Start
            

            if ($_GET['page'] == 'download') {
                $headline = 'Downloads';
            }

            if ($_GET['page'] == 'order') {
                $headline = 'Bestellmanagement';
            }


            if ($_GET['page'] == 'pay') {
                $headline = 'Zahlungsmanagement';
            }

            if ($_GET['page'] == 'transport') {
                $headline = 'Transportmanagement';
            }

            if ($_GET['page'] == 'retour') {
                $headline = 'Retourenmanagement';
            }

            if ($_GET['page'] == 'instock') {
                $headline = 'Wareneingang';
            }
            // Ende
            
            echo '<h1>' . $headline . '</h1>';

            if ($_GET['page'] == 'start') {
                echo '<div class="dashboard">';

                // Willkommensnachricht
                echo '
                <div class="container">
                <div class="row">
                  <div class="col-md-2">
                    <h3>Produkte insgesamt</h3>
                    <p>0</p>
                  </div>
                  <div class="col-md-2">
                    <h3>Bestellungen in Bearbeitung</h3>
                    <p>142</p>
                  </div>
                  <div class="col-md-2">
                    <h3>Bestellungen beschlossent</h3>
                    <p>$</p>
                  </div>
                  <div class="col-md-2">
                    <h3>Kunden insgesamt</h3>
                    <p>3</p>
                  </div>
                  <div class="col-md-2">
                    <h3>Beträge insgesamt</h3>
                    <p>7</p>
                  </div>
                </div>
              </div>
    ';

                echo '</div>'; // Ende der Feature-Boxen
            
                echo '</div>'; // Ende des Dashboards
            }



            // Anzeige des Inhalts basierend auf der Seiten-Parameter
            if ($_GET['page'] == 'favorites') {
                echo "
                    <p>Auf dieser Seite hast du einen Überblick über deine <b>Favoriten</b></p>
                ";

                // Anzeige der Kontaktinformationen
                foreach ($contacts as $row) {
                    $name = $row['name'];
                    $phone = $row['phone'];

                    echo "
                    <div class='card'>
                        <img class='profile-picture' src='img/profile-picture.png'>
                        <b>$name</b><br>
                        $phone

                        <a class='phonebtn' href='tel:$phone'>Anrufen</a>
                        <a class='emailbtn' href='mailto:[Your Email]'>Email Us</a>

                    </div>
                    ";
                }
            } else if ($_GET['page'] == 'legal') {
                echo "
                    <div class='imprint'>
                        <h2>Impressum</h2>
                        <p>
                            <b>Verantwortlich für den Inhalt:</b><br>
                            [Breadcrumb Fashion Corp.]<br>
                            [Musterstreet 44]<br>
                            [70439 Stuttgart]<br>
                            [Deutschland]<br>
                            [Kontaktinformationen, z. B. E-Mail-Adresse, Telefonnummer]
                        </p>
            
                        <p>
                            <b>Vertreten durch:</b><br>
                            [Name des Vertretungsberechtigten, falls vorhanden]<br>
                        </p>
            
                        <p>
                            <b>Umsatzsteuer-Identifikationsnummer:</b><br>
                            [Ihre Umsatzsteuer-Identifikationsnummer, falls vorhanden]
                        </p>
            
                        <p>
                            <b>Register und Registernummer:</b><br>
                            [Handelsregister und Nummer, falls vorhanden]
                        </p>
            
                        <p>
                            <b>Genehmigungsbehörde:</b><br>
                            [Zuständige Aufsichtsbehörde oder Genehmigungsstelle]
                        </p>
            
                        <p>
                            <b>Haftungshinweis:</b><br>
                            Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links.
                            Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.
                        </p>
            
                        <p>
                            <b>Online-Streitbeilegung gemäß Art. 14 Abs. 1 ODR-VO:</b><br>
                            Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit,
                            die Sie unter http://ec.europa.eu/consumers/odr/ finden.
                        </p>
                    </div>
                ";
            } else if ($_GET['page'] == 'addfavorite') {
                echo "
                    <div>
                        Auf dieser Seite kannst du einen weiteren Favoriten hinzufügen
                    </div>
                    <form action='?page=addfavorite' method='POST'> <!-- Korrigierte Aktion -->
                        <div>
                            <input placeholder='Name eingeben' name='name'>
                        </div>
                        <div>
                            <input placeholder='Telefonnummer eingeben' name='phone'> 
                        </div>
                        <button type='Submit'>Absenden</button>
                    </form>
                ";
            } else if ($_GET['page'] == 'newsletter') {
                // Verarbeiten des Formulars zum Hinzufügen einer E-Mail zum Newsletter
                if (isset($_POST['email'])) {
                    // Hier sollten die Datenbankverbindungsinformationen eingefügt werden
                    $servername = "localhost";
                    $username = "";
                    $password = "";
                    $dbname = "newsletterdaten";

                    // Verbindung zur Datenbank herstellen
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Vorbereiten und Ausführen des SQL-Statements zum Einfügen der E-Mail in die Datenbank
                    $firstName = $_POST['first_name'];
                    $lastName = $_POST['last_name'];
                    $email = $_POST['email'];
                    $sql = "INSERT INTO newsletter_emails (first_name, last_name, email) VALUES ('$firstName', '$lastName', '$email')";

                    if ($conn->query($sql) === TRUE) {
                        echo 'Thank you for subscribing to our newsletter with the email: <b>' . $_POST['email'] . '</b>';
                    } else {
                        echo 'Error: ' . $sql . '<br>' . $conn->error;
                    }

                    // Verbindung zur Datenbank schließen
                    $conn->close();
                }

                echo <<<HTML
<div class="mycontainer">
    <div class="newsletter-content">
        <div class="newsletter-section" style="background-color:#F2EEEE;">
            <h2>Modeguru</h2>
            <p>Live!!! Nur heute mit exklusiven Produkten aus der Modewelt</p>
            <p>Jetzt Voranmeldung sichern solange der Vorrat reicht</p>
        </div>

        <div class="newsletter-section" style="background-color:#F2EEEE;">
            <h2>New Fashion Collection 2023</h2>
            <p>Exklusive Präsentationen aus der neuesten Mode Kollektion Carl Lagerfeld und viele mehr</p>
            <p> -- > Hier Karten sichern < --</p>
        </div>

        <div class="newsletter-section" style="background-color:#F2EEEE;">
            <h2>Winterschlussverkauf</h2>
            <p>Wir bieten reduzierte Ware bis zu 40 % Rabatt an</p>
            <p>Greifen Sie zu solange der Vorrat reicht</p>
        </div>

        <div class="newsletter-form">
            <p>Subscribe to our newsletter to receive the latest updates and special offers!</p>
            <form action="?page=newsletter" method="POST">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="privacy">I agree to the <a href="privacy-policy.html" target="_blank">Privacy Policy</a></label>
                    <input type="checkbox" id="privacy" name="privacy" required>
                </div>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>
</div>
HTML;
            } else if ($_GET['page'] == 'market') {
                // Hier füge das Banner-<div> ein
                echo '
                    <div class="banner">
                        <img src="img/banner.jpeg" alt="Banner Bild">
                    </div>
                ';

                // Hier könnte zusätzlicher Text für die Startseite stehen
                echo 'Herzlich willkommen auf unserer Homepage!' . "\n";
                echo 'Entdecke unsere neuesten Angebote und Aktionen.' . "\n";
                echo 'Schau dir unsere Galerie an, um einen Einblick in unser Unternehmen zu erhalten.' . "\n";
                echo 'Falls du Fragen hast, zögere nicht, uns zu kontaktieren. Wir helfen gerne!' . "\n";

                // Hinzufügen des Buttons zur "market.php"
                echo '
                    <form action="market.php" method="GET">
                        <button type="submit">Zum Markt</button>
                    </form>
                ';
            } else if ($_GET['page'] == 'download') {
                echo '
                <div class="downloads-container">
                    
                    <div class="downloads-list">
                        <div class="download-item">
                            <div class="download-icon">
                                <img src="img/pdf-icon.png" alt="PDF Icon">
                            </div>
                            <div class="download-info">
                                <h3>Product Catalog PDF</h3>
                                <p>Download our latest product catalog in PDF format.</p>
                                <a href="downloads/product_catalog.pdf" class="download-link">Download</a>
                            </div>
                        </div>
                        
                        <div class="download-item">
                            <div class="download-icon">
                                <img src="img/zip-icon.png" alt="ZIP Icon">
                            </div>
                            <div class="download-info">
                                <h3>Product Images ZIP</h3>
                                <p>Get high-resolution images of our products in a ZIP archive.</p>
                                <a href="downloads/product_images.zip" class="download-link">Download</a>
                            </div>
                        </div>

                        <div class="download-app">
                            <div class="download-icon">
                                <img src="img/app-icon.png" alt="APP Icon">
                            </div>
                            <div class="download-info">
                                <h3>APP</h3>
                                <p>Here can downloading our IOS APP </p>
                                <p>Android APP Coming Soon </p>

                                <a href="#"><img src="img/qrcode.svg"> </a>
                                </div>
                        </div>
                        
                        <!-- Weitere Download-Elemente hier einfügen -->
                    </div>
                </div>
                ';
            } else if ($_GET['page'] == 'order') {
                echo '
                <div class="order-management-container">
                    <h1 class="management-heading">Bestellmanagement</h1>
                    
                    <!-- Bestellinformationen -->
                    <div class="order-info">
                        <div class="order-details">
                            <h2>Bestellnummer: #12345</h2>
                            <p>Status: In Bearbeitung</p>
                            <p>Bestelldatum: 2023-11-15</p>
                        </div>
                        <div class="customer-details">
                            <h2>Kunde: Max Mustermann</h2>
                            <p>Email: max.mustermann@example.com</p>
                            <p>Telefon: +1234567890</p>
                        </div>
                    </div>
            
                    <!-- Bestellaktionen -->
                    <div class="order-actions">
                        <button class="action-button">Bestellung bearbeiten</button>
                        <button class="action-button">Bestellung stornieren</button>
                        <button class="action-button" onclick="downloadRechnung()">Rechnung generieren</button>
                        </div>
            
                    <!-- Bestellübersicht -->
                    <div class="order-summary">
                        <h2>Bestellübersicht</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Produkt</th>
                                    <th>Menge</th>
                                    <th>Preis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Produkt 1</td>
                                    <td>2</td>
                                    <td>$30.00</td>
                                </tr>
                                <tr>
                                    <td>Produkt 2</td>
                                    <td>1</td>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <td>Produkt 3</td>
                                    <td>3</td>
                                    <td>$45.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            
                    <!-- Gesamtbetrag -->
                    <div class="total-amount">
                        <h3>Gesamtbetrag: $125.00</h3>
                    </div>
                </div>
                ';
            } else if ($_GET['page'] == 'pay') {
                echo '
                <div class="payment-management-container">
                    
                    <!-- Zahlungsinformationen -->
                    <div class="payment-info">
                        <div class="order-details">
                            <h2>Bestellnummer: #12345</h2>
                            <p>Status: Bezahlung ausstehend</p>
                            <p>Bestelldatum: 2023-11-15</p>
                        </div>
                        <div class="customer-details">
                            <h2>Kunde: Max Mustermann</h2>
                            <p>Email: max.mustermann@example.com</p>
                            <p>Telefon: +1234567890</p>
                        </div>
                    </div>
            
                    <!-- Zahlungsaktionen -->
                    <div class="payment-actions">
                        <button class="action-button">Zahlung bearbeiten</button>
                        <button class="action-button">Zahlung stornieren</button>
                        <button class="action-button">Rechnung herunterladen</button>
                    </div>
            
                    <!-- Offene Rechnungen -->
                    <div class="open-invoices">
                        <h2>Offene Rechnungen</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Rechnungsnummer</th>
                                    <th>Rechnungsbetrag</th>
                                    <th>Fälligkeitsdatum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#R1234</td>
                                    <td>$50.00</td>
                                    <td>2023-12-15</td>
                                </tr>
                                <tr>
                                    <td>#R1235</td>
                                    <td>$75.00</td>
                                    <td>2024-01-10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            
                    <!-- Gesamtbetrag ausstehender Zahlungen -->
                    <div class="outstanding-amount">
                        <h3>Ausstehender Gesamtbetrag: $125.00</h3>
                    </div>
                </div>
                ';
            } else if ($_GET['page'] == 'transport') {
                echo '
                <div class="transport-management-container">
            
                    <!-- Transportübersicht -->
                    <div class="transport-overview">
                        <h2>Aktuelle Transporte</h2>
                        <div class="transport-card">
                            <div class="transport-details">
                                <p class="transport-id">Transport-ID: #T6789</p>
                                <p class="shipment-date">Versanddatum: 2023-11-20</p>
                                <p class="status">Status: In Bearbeitung</p>
                            </div>
                            <div class="shipment-details">
                                <p class="customer">Kunde: Maria Musterfrau</p>
                                <p class="destination">Zielort: Berlin</p>
                            </div>
                        </div>
                        <div class="transport-card">
                            <div class="transport-details">
                                <p class="transport-id">Transport-ID: #T6790</p>
                                <p class="shipment-date">Versanddatum: 2023-11-22</p>
                                <p class="status">Status: Ausgeliefert</p>
                            </div>
                            <div class="shipment-details">
                                <p class="customer">Kunde: Peter Beispielmann</p>
                                <p class="destination">Zielort: Hamburg</p>
                            </div>
                        </div>
                    </div>
            
                    <!-- Transportdetails -->
                    <div class="transport-details">
                        <h2>Transportdetails</h2>
                        <div class="transport-details-card">
                            <h3>Transport-ID: #T6789</h3>
                            <p>Transportfahrzeug: LKW XYZ</p>
                            <p>Abfahrtszeit: 09:00 Uhr</p>
                            <p>Geschätzte Ankunftszeit: 16:00 Uhr</p>
                            <p>Aktuelle Position: Unterwegs, nahe Dresden</p>
                            <button class="track-button">Transport verfolgen</button>
                        </div>
                    </div>
                </div>
                ';
            } else if ($_GET['page'] == 'retour') {
                echo '
                <div class="retour-management-container">
            
                    <!-- Übersicht über Retouren -->
                    <div class="retour-overview">
                        <h2>Offene Retouren</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Retouren-ID</th>
                                    <th>Kunde</th>
                                    <th>Bestelldatum</th>
                                    <th>Grund für Retoure</th>
                                    <th>Status</th>
                                    <th>Aktionen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>R12345</td>
                                    <td>Maria Musterfrau</td>
                                    <td>2023-11-15</td>
                                    <td>Beschädigte Ware</td>
                                    <td>Offen</td>
                                    <td>
                                        <button class="view-button">Ansehen</button>
                                        <button class="process-button">Bearbeiten</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R12346</td>
                                    <td>Peter Beispielmann</td>
                                    <td>2023-11-17</td>
                                    <td>Falsche Lieferung</td>
                                    <td>Offen</td>
                                    <td>
                                        <button class="view-button">Ansehen</button>
                                        <button class="process-button">Bearbeiten</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            
                    <!-- Retourdetails -->
                    <div class="retour-details">
                        <h2>Retouren-Details</h2>
                        <div class="retour-details-card">
                            <h3>Retouren-ID: R12345</h3>
                            <p>Kunde: Maria Musterfrau</p>
                            <p>Bestelldatum: 2023-11-15</p>
                            <p>Grund für Retoure: Beschädigte Ware</p>
                            <p>Status: Offen</p>
                            <button class="process-button">Retoure bearbeiten</button>
                        </div>
                    </div>
                </div>
                ';
            } else if ($_GET['page'] == 'instock') {
                echo '
                <div class="instock-management-container">
            
                    <!-- Übersicht über den Wareneingang -->
                    <div class="instock-overview">
                        <table>
                            <thead>
                                <tr>
                                    <th>Lieferung-ID</th>
                                    <th>Lieferant</th>
                                    <th>Lieferdatum</th>
                                    <th>Anzahl der Produkte</th>
                                    <th>Status</th>
                                    <th>Aktionen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>L12345</td>
                                    <td>Supplier XYZ</td>
                                    <td>2023-11-20</td>
                                    <td>25</td>
                                    <td>Erfolgreich</td>
                                    <td>
                                        <button class="view-button">Ansehen</button>
                                        <button class="process-button">Bearbeiten</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>L12346</td>
                                    <td>Supplier ABC</td>
                                    <td>2023-11-22</td>
                                    <td>18</td>
                                    <td>Ausstehend</td>
                                    <td>
                                        <button class="view-button">Ansehen</button>
                                        <button class="process-button">Bearbeiten</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            
                    <!-- Wareneingangsdetails -->
                    <div class="instock-details">
                        <h2>Details des Wareneingangs</h2>
                        <div class="instock-details-card">
                            <h3>Lieferung-ID: L12345</h3>
                            <p>Lieferant: Supplier XYZ</p>
                            <p>Lieferdatum: 2023-11-20</p>
                            <p>Anzahl der Produkte: 25</p>
                            <p>Status: Erfolgreich</p>
                            <button class="process-button">Wareneingang bearbeiten</button>
                        </div>
                    </div>
                </div>
                ';
            }


            ?>
        </div>
    </div>

    </div>
    </div>

    <!-- Fußzeile -->
    <div class="footer">
        (C) 2023 WARDROPE FASHION
    </div>
</body>

</html>