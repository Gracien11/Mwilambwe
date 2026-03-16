<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Gracien Mwilambwe</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">GM</div>
            <ul class="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#competences">Expertise</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact" class="nav-btn">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="hero">
            <div class="hero-wrapper">
                <div class="hero-info">
                    <span class="tagline">Expert Hôtellerie & Restauration</span>
                    <h1>MWILAMBWE <br>ILUNGA <span class="gold">GRACIEN</span></h1>
                    <p>Une expertise dédiée à l'art de recevoir et à la gestion de l'expérience client dans les établissements de prestige.</p>
                    <div class="contact-quick">
                        <span><strong>Email :</strong> Ilungamwilambwe11@gmail.com</span>
                        <span><strong>Tél :</strong> 0828470799</span>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="photo-container">
                        <img src="img1.jpeg" alt="Gracien Mwilambwe" class="auto-photo">
                        <div class="gold-layer"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="competences" class="expertise">
            <h2 class="title">Mes <span>Compétences</span></h2>
            <div class="grid">
                <div class="card">
                    <h3>Hôtellerie</h3>
                    <p>Gestion des réservations, accueil VIP et standards de luxe.</p>
                </div>
                <div class="card">
                    <h3>Restauration</h3>
                    <p>Service en salle, connaissance des arts de la table et hygiène.</p>
                </div>
                <div class="card">
                    <h3>Savoir-être</h3>
                    <p>Discrétion, polyvalence et excellence relationnelle.</p>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="form-container">
                <h2>Me Contacter</h2>
                <form action="traitement.php" method="POST">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Votre message..." required></textarea>
    <button type="submit" name="envoyer">Envoyer</button>
</form>
            </div>
        </section>
    </main>

    <footer>
        <p>Gracien Mwilambwe &bull; 2026</p>
    </footer>

</body>
</html>