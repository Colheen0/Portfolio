<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .contact-form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .contact-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #4e54c8;
        }

        .contact-form label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #4e54c8;
        }

        .contact-form button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #4e54c8;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background: #3b44a8;
        }
    </style>
</head>
<body>
<div class="loader">
        <div>
            <span class="lettre">C</span>
            <span class="lettre">H</span>
            <span class="lettre">A</span>
            <span class="lettre">R</span>
            <span class="lettre">G</span>
            <span class="lettre">E</span>
            <span class="lettre">M</span>
            <span class="lettre">E</span>
            <span class="lettre">N</span>
            <span class="lettre">T</span>
        </div>

        <l-infinity
        size="100"
        stroke="4"
        stroke-length="0.15"
        bg-opacity="0.1"
        speed="1.3"
        color="gold" 
        ></l-infinity>
    </div>
    <nav class="navbar">
        <a href="index.html" class="logo">
            <span class="lettre-lg">C</span>
            <span class="lettre-lg">O</span>
            <span class="lettre-lg">L</span>
            <span class="lettre-lg">H</span>
            <span class="lettre-lg">E</span>
            <span class="lettre-lg">E</span>
            <span class="lettre-lg">N</span>
        </a>
           <div class="nav-links">
                <ul>
                   <li><a href="#" class="active">A propos</a></li>
                   <li><a href="projet.html">Portfolio</a></li>
                   <li><a href="contact.php">Contact</a></li>
               </ul>
           </div>
        </nav>
    <header>
        <div class="bg-dark">
            <div class="header-contenu">
                <h1>A propos</h1>
                <h2>découvrez en un peu plus sur moi.</h2>
            </div>
    <form class="contact-form" action="send_mail.php" method="POST">
        <h2>Contact Us</h2>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Your message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
    <section class="accueil contact">
            <div class="bg-dark-contact">
                <h2>Travaillions ensembles !</h2>
                <div class="titre_boutton">  
                    <a href="contact.php">Contactez moi :)</a>
                    <a href="source/ressources/CV anglais.pdf" class="CV">Téléchargez mon CV</a>
                    <a href="https://www.linkedin.com/in/colheen-nkodia-diabat%C3%A9-001322296/">Mon Linkedin</a>
                    <a href="https://github.com/Colheen0">Mon GitHub</a>
                </div>
            </div>
        </section>
    <footer>
        <div class="logo">
            <span class="lettre-lg">C</span>
            <span class="lettre-lg">O</span>
            <span class="lettre-lg">L</span>
            <span class="lettre-lg">H</span>
            <span class="lettre-lg">E</span>
            <span class="lettre-lg">E</span>
            <span class="lettre-lg">N</span>
        </div>
        <p>©Colheen Nkodia-Diabaté </p>
        <div class="lien">
            <a href=""><strong>Mentions légales</strong</a>
            <a href=""><strong>RGPD</strong</a>
        </div>
    </footer>
</body>
</html>

<!-- send_mail.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'colheenn@gmail.com';
    $subject = "New Contact Form Message";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "Content-Type: text/plain; charset=utf-8\r\n";

    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Message failed to send. Please try again.');</script>";
    }
}
?>
