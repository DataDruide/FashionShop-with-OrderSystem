<?php
// Logik für die Rechnungsgenerierung
$rechnungInhalt = 'Rechnungsnummer: 123' . "\n" . 'Betrag: 100€' . "\n" . 'Kunde: Max Mustermann';

// Header für den Download setzen
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=Rechnung.txt');

// Rechnungsinhalt ausgeben
echo $rechnungInhalt;
?>
