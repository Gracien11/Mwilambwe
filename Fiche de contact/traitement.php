<?php
$host     = 'localhost';
$dbname   = 'portfolio_db';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nom     = htmlspecialchars($_POST['nom']);
        $email   = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $date_complete = date("d/m/Y à H:i:s");

        // --- GÉNÉRATION DE LA FICHE HTML PROFESSIONNELLE ---
        
        $nom_du_fichier = "FICHE_" . strtoupper($nom) . "_" . date("His") . ".html";

        $contenu_html = "
        <!DOCTYPE html>
        <html lang='fr'>
        <head>
            <meta charset='UTF-8'>
            <style>
                body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; padding: 50px; }
                .fiche { background: white; width: 500px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-top: 10px solid #C5A059; padding: 40px; }
                .header { text-align: center; border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 30px; }
                .header h1 { font-family: 'Cinzel', serif; color: #111; font-size: 18px; letter-spacing: 2px; margin: 0; }
                .info-group { margin-bottom: 25px; }
                .label { color: #C5A059; font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; }
                .value { color: #333; font-size: 16px; font-weight: 500; }
                .message-box { background: #fafafa; border-left: 3px solid #C5A059; padding: 20px; font-style: italic; color: #555; margin-top: 10px; }
                .footer { margin-top: 40px; text-align: center; font-size: 10px; color: #aaa; text-transform: uppercase; letter-spacing: 1px; }
            </style>
        </head>
        <body>
            <div class='fiche'>
                <div class='header'>
                    <h1>FICHE DE CONTACT OFFICIELLE</h1>
                </div>
                
                <div class='info-group'>
                    <div class='label'>Date de réception</div>
                    <div class='value'>$date_complete</div>
                </div>

                <div class='info-group'>
                    <div class='label'>Nom de l'émetteur</div>
                    <div class='value'>" . strtoupper($nom) . "</div>
                </div>

                <div class='info-group'>
                    <div class='label'>Adresse Email</div>
                    <div class='value'>$email</div>
                </div>

                <div class='info-group'>
                    <div class='label'>Message</div>
                    <div class='message-box'>$message</div>
                </div>

                <div class='footer'>
                    © 2026 Gracien Mwilambwe • Système de Gestion Prestige
                </div>
            </div>
        </body>
        </html>";

        // Création du fichier HTML dans htdocs/projet/
        file_put_contents($nom_du_fichier, $contenu_html);

        // Sauvegarde SQL
        $query = $db->prepare("INSERT INTO contacts (nom, email, message) VALUES (:nom, :email, :message)");
        $query->execute(['nom' => $nom, 'email' => $email, 'message' => $message]);

        echo "<script>
                alert('La fiche HTML a été générée avec succès dans votre dossier.');
                window.location.href = 'index.php';
              </script>";
    }
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>