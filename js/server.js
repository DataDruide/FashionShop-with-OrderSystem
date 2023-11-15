const express = require('express');
const fetch = require('node-fetch');
const nodemailer = require('nodemailer');
const app = express();
const port = 3000;

// Statische Dateien im öffentlichen Verzeichnis bereitstellen (z. B. CSS- oder JavaScript-Dateien)
app.use(express.static('public'));

// Einfache Verarbeitung von POST-Anfragen für /subscribe
app.use(express.json());

// Nodemailer-Konfiguration
const transporter = nodemailer.createTransport({
    service: 'Gmail', // Du kannst deinen E-Mail-Anbieter hier einstellen
    auth: {
        user: 'deine_email@example.com', // Deine E-Mail-Adresse
        pass: 'dein_email_passwort', // Dein E-Mail-Passwort
    },
});

app.post('/subscribe', async (req, res) => {
    const { captcha, firstName, lastName, email, message } = req.body;

    // Stellen Sie hier Ihren eigenen reCAPTCHA-Schlüssel ein
    const recaptchaSecretKey = 'IHR_RECAPTCHA_GEHEIMES_SCHLUESSEL';

    // Validieren Sie die reCAPTCHA-Antwort mit dem Google-Servers
    const recaptchaResponse = await fetch('https://www.google.com/recaptcha/api/siteverify', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `secret=${recaptchaSecretKey}&response=${captcha}`,
    });

    const recaptchaData = await recaptchaResponse.json();

    // Überprüfen Sie, ob die reCAPTCHA-Validierung erfolgreich war
    if (recaptchaData.success) {
        // Wenn die Validierung erfolgreich war, senden Sie die E-Mail
        const mailOptions = {
            from: 'deine_email@example.com',
            to: 'ziel_email@example.com',
            subject: 'Kontaktanfrage',
            text: `Von: ${firstName} ${lastName}\nE-Mail: ${email}\nNachricht: ${message}`,
        };

        transporter.sendMail(mailOptions, (error, info) => {
            if (error) {
                console.log('Fehler beim Senden der E-Mail: ' + error);
                res.status(500).json({ msg: 'Fehler beim Senden der E-Mail' });
            } else {
                console.log('E-Mail wurde erfolgreich gesendet: ' + info.response);
                res.json({ msg: 'Vielen Dank für Ihre Anfrage. Die E-Mail wurde gesendet.' });
            }
        });
    } else {
        // Wenn die Validierung fehlgeschlagen ist, senden Sie eine Fehlermeldung zurück
        res.status(400).json({ msg: 'reCAPTCHA-Validierung fehlgeschlagen. Bitte versuchen Sie es erneut.' });
    }
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
