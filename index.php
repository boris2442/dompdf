<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mon CV - Boris</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 20px;
    }

    .cv-container {
      max-width: 900px;
      margin: auto;
      background: #fff;
      padding: 40px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      border-radius: 8px;
    }

    h1, h2 {
      color: #2c3e50;
    }

    h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    .contact {
      color: #555;
      margin-bottom: 30px;
    }

    section {
      margin-bottom: 30px;
    }

    ul {
      padding-left: 20px;
    }

    .print-link {
      display: block;
      text-align: right;
      margin-top: 20px;
    }

    .print-link a {
      text-decoration: none;
      color: white;
      background-color: #0077b6;
      padding: 10px 15px;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .print-link a:hover {
      background-color: #023e8a;
    }

    @media print {
      .print-link {
        display: none;
      }

      body {
        background: white;
        padding: 0;
      }

      .cv-container {
        box-shadow: none;
        margin: 0;
        padding: 0;
      }
    }
  </style>
</head>
<body>

  <div class="cv-container">
    <h1>Boris N.</h1>
    <p class="contact">Développeur Web | Douala, Cameroun | boris@email.com | +237 6XX XXX XXX</p>

    <section>
      <h2>Profil</h2>
      <p>Développeur d'applications passionné avec une spécialisation en création de sites web modernes, responsives et optimisés. Solides compétences en HTML, CSS, JavaScript et PHP.</p>
    </section>

    <section>
      <h2>Compétences</h2>
      <ul>
        <li>HTML5, CSS3, JavaScript (ES6+)</li>
        <li>PHP & MySQL</li>
        <li>Frameworks : Laravel (base), Bootstrap, Tailwind</li>
        <li>Git & GitHub</li>
        <li>Responsive Design & Accessibilité</li>
      </ul>
    </section>

    <section>
      <h2>Expérience</h2>
      <p><strong>Développeur Web Freelance</strong> — Janv. 2024 à aujourd'hui</p>
      <p>Création de sites vitrines et éducatifs. Intégration HTML/CSS, formulaires dynamiques, et mise en ligne avec GitHub Pages ou hébergement tiers.</p>
    </section>

    <section>
      <h2>Formation</h2>
      <p><strong>Formation en développement d'application</strong> — 2024-2025</p>
      <p>Université privée, Douala — spécialité Génie logiciel</p>
    </section>

    <div class="print-link">
      <a href="#" onclick="window.print(); return false;">🖨️ Imprimer ce CV</a>
    </div>
  </div>

</body>
</html>
