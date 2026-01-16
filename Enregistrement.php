<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Réservation confirmée</title>
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body { width: 100%; height: 100%; font-family: Arial, sans-serif; overflow: hidden; }

    /* Slideshow full screen avec <img> pour meilleure qualité */
    .slideshow {
        position: fixed;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .slideshow img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover; /* garde la qualité et couvre tout l'écran */
        top: 0;
        left: 0;
        opacity: 0;
        animation: fadeSlideshow 12s infinite;
    }

    .slideshow img:nth-child(1) { animation-delay: 0s; }
    .slideshow img:nth-child(2) { animation-delay: 4s; }
    .slideshow img:nth-child(3) { animation-delay: 8s; }

    @keyframes fadeSlideshow {
        0% { opacity: 0; }
        10% { opacity: 1; }
        30% { opacity: 1; }
        40% { opacity: 0; }
        100% { opacity: 0; }
    }

    /* Container avec texte */
    .container {
        position: relative;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #fff;
        text-shadow: 0 0 20px rgba(0,0,0,0.7);
        padding: 0 20px;
    }

    h1 {
        font-size: 3rem;
        margin-bottom: 20px;
        opacity: 0;
        animation: slideDown 1s forwards;
    }

    p {
        font-size: 1.5rem;
        margin-bottom: 40px;
        opacity: 0;
        animation: slideDown 1s 0.5s forwards;
    }

    .btn {
        padding: 15px 30px;
        background: #000000;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1.2rem;
        opacity: 0;
        transform: scale(0.8);
        animation: fadeInScale 0.5s 1s forwards;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background: #27ae60;
        transform: scale(1.05);
    }

    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInScale {
        to { opacity: 1; transform: scale(1); }
    }
</style>
</head>
<body>

<!-- Slideshow background -->
<div class="slideshow">
    <img src="images/rest3.jpg" alt="Restaurant">
    <img src="images/caf3.jfif" alt="Salle">
    <img src="images/rest4.avif" alt="Plat">
</div>

<!-- Content -->
<div class="container">
    <h1>Réservation enregistrée avec succès</h1>
    <p>Merci pour votre réservation. Nous avons bien reçu votre demande.</p>
    <a href="index.php" class="btn">⬅ Retour à la page principale</a>
</div>

</body>
</html>




