// Warten, bis das DOM vollständig geladen ist
document.addEventListener('DOMContentLoaded', function() {
    // Das Formular wird erst ausgewählt, wenn das DOM vollständig geladen ist
    const form = document.querySelector('form');
    
    // Hinzufügen eines Ereignislisteners für das Formular
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Verhindert das Standardverhalten des Formulars (Seitenneuladen)
        
        // Das reCAPTCHA-Widget findet sich in einem iframe und die Antwort wird in einem Textfeld mit der Klasse 'g-recaptcha-response' gespeichert
        const captchaResponse = document.querySelector('.g-recaptcha-response').value;
        
        // Stellen Sie sicher, dass eine reCAPTCHA-Antwort vorhanden ist
        if (captchaResponse === '') {
            alert('Bitte bestätigen Sie, dass Sie kein Roboter sind.');
            return; // Beenden Sie die Funktion
        }

        // Daten für die POST-Anfrage vorbereiten
        const requestData = { captcha: captchaResponse };

        // Senden der POST-Anfrage an den Server
        fetch('/subscribe', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(requestData)
        })
        .then(response => response.json())
        .then(data => {
            // Erfolgreiche Serverantwort
            alert(data.msg); // Zeigen Sie eine Meldung basierend auf der Antwort des Servers an
        })
        .catch(error => {
            // Fehler beim Senden der Anfrage oder Verarbeiten der Serverantwort
            console.error(error);
            alert('Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.');
        });
    });
});
