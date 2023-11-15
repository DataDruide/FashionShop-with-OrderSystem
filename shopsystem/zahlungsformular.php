<!DOCTYPE html>
<html>
<head>
    <title>Zahlungsformular</title>
</head>
<body>

<?php
// Zahlungsdaten vom Zahlungsgateway abrufen
$paymentData = getPaymentData($productId);

// Zahlungsformular ausgeben
renderPaymentForm($paymentData);

// Zahlungsdaten abrufen
function getPaymentData($productId) {
    // API-Aufruf an das Zahlungsgateway
    // TODO: Implementieren Sie diese Funktion, um die Zahlungsdaten vom Zahlungsgateway abzurufen
    $paymentData = [
        'amount' => 100.00,
        'currency' => 'EUR',
        'paymentMethods' => [
            'creditCard',
            'paypal',
            'bankTransfer',
        ],
    ];

    return $paymentData;
}

// Zahlungsformular ausgeben
function renderPaymentForm($paymentData) {
    echo '<div class="payment-form">
        <h2>Zahlung</h2>
        <p>Bitte geben Sie Ihre Zahlungsdaten ein.</p>

        <form action="pay.php" method="post">
            <input type="hidden" name="productId" value="' . $paymentData['productId'] . '">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Max Mustermann">
            </div>

            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" placeholder="max.mustermann@example.com">
            </div>

            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" name="address" id="address" placeholder="Musterstraße 1">
            </div>

            <div class="form-group">
                <label for="city">Ort</label>
                <input type="text" name="city" id="city" placeholder="Musterstadt">
            </div>

            <div class="form-group">
                <label for="zip">Postleitzahl</label>
                <input type="text" name="zip" id="zip" placeholder="12345">
            </div>

            <input type="submit" value="Bezahlen">
        </form>
    </div>';
}
?>

</body>
</html>
