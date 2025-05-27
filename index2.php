<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// Instanciation Dompdf
$dompdf = new Dompdf();

// HTML stylé à convertir en PDF (tu peux aussi mettre ici un require d’un fichier séparé)
$html = '
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>CV de Boris</title>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      padding: 30px;
      color: #222;
    }
    h1 {
      color: #0077b6;
      border-bottom: 2px solid #0077b6;
      padding-bottom: 5px;
    }
    h2 {
      margin-top: 25px;
      color: #023e8a;
    }
    ul {
      list-style-type: disc;
      margin-left: 25px;
    }
    p {
      font-size: 14px;
      line-height: 1.4;
    }
  </style>
</head>
<body>
  <h1>Boris N.</h1>
  <p>Développeur Web | Douala, Cameroun | boris@email.com | +237 6XX XXX XXX</p>

  <h2>Compétences</h2>
  <ul>
    <li>HTML5, CSS3, JavaScript (ES6+)</li>
    <li>PHP & MySQL</li>
    <li>Frameworks : Laravel, Bootstrap, Tailwind</li>
    <li>Git & GitHub</li>
  </ul>

  <h2>Expérience</h2>
  <p>Développeur freelance depuis 2024, création de sites web responsives et modernes.</p>
</body>
</html>
';

// Charger le HTML
$dompdf->loadHtml($html);

// Définit format papier et orientation
$dompdf->setPaper('A4', 'portrait');

// Générer le PDF
$dompdf->render();

// Afficher le PDF dans le navigateur
$dompdf->stream("cv_boris.pdf", ["Attachment" => false]);
exit;
