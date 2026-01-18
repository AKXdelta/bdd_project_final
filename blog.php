<!DOCTYPE html>
<html lang="fr">
<head>
   <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            color: #fff;
        }

        

        

        .cart {
            position: relative;
            color: #fff;
            font-size: 20px;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #c9a55a;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

       

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 35px;
            margin-top: 150px;
            padding-top: 20px;
        }

        .blog-card {
            background-color: #242424;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(201, 165, 90, 0.2);
        }

        .blog-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #4a3021, #6b4423);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            position: relative;
            overflow: hidden;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blog-image::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 90%;
            background: radial-gradient(circle, rgba(201, 165, 90, 0.1) 0%, transparent 70%);
        }

        .blog-content {
            padding: 25px;
        }

        .blog-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
            font-size: 13px;
            color: #999;
        }

        .blog-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .blog-title {
            font-size: 22px;
            margin-bottom: 15px;
            color: #fff;
            font-weight: 600;
        }

        .blog-excerpt {
            color: #ccc;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .read-more {
            display: inline-block;
            padding: 12px 30px;
            background-color: #c9a55a;
            color: #000;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: 2px solid #c9a55a;
        }

        .read-more:hover {
            background-color: transparent;
            color: #c9a55a;
            transform: translateX(5px);
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 60px;
        }

        .pagination button {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 1px solid #444;
            background-color: transparent;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .pagination button:hover {
            background-color: #c9a55a;
            border-color: #c9a55a;
            color: #000;
        }

        .pagination button.active {
            background-color: #c9a55a;
            border-color: #c9a55a;
            color: #000;
        }

        /* Modal pour l'article complet */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            overflow-y: auto;
        }

        .modal.active {
            display: block;
        }

        .modal-content {
            max-width: 900px;
            margin: 50px auto;
            background-color: #242424;
            border-radius: 8px;
            padding: 40px;
            position: relative;
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 40px;
            color: #999;
            cursor: pointer;
            transition: color 0.3s;
        }

        .close-modal:hover {
            color: #c9a55a;
        }

        .modal-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #4a3021, #6b4423);
            border-radius: 8px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
            overflow: hidden;
        }

        .modal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-title {
            font-size: 36px;
            margin-bottom: 20px;
            color: #c9a55a;
        }

        .modal-meta {
            display: flex;
            gap: 30px;
            margin-bottom: 30px;
            font-size: 14px;
            color: #999;
            padding-bottom: 20px;
            border-bottom: 1px solid #444;
        }

        .modal-text {
            color: #ccc;
            line-height: 1.8;
            font-size: 16px;
        }

        .modal-text p {
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }
            
            .modal-content {
                margin: 20px;
                padding: 30px 20px;
            }
        }
    </style>


    
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">DAILY DOSE</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="product-single.php">Single Product</a>
                <a class="dropdown-item" href="room.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav></header>

    <div class="container">
        <div class="blog-grid" id="blogGrid">
            <!-- Les articles seront générés par JavaScript -->
        </div>

        <div class="pagination">
            <button onclick="changePage('prev')">‹</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button onclick="changePage('next')">›</button>
        </div>
    </div>

    <!-- Modal pour afficher l'article complet -->
    <div class="modal" id="articleModal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <div class="modal-image" id="modalImage">☕</div>
            <h1 class="modal-title" id="modalTitle"></h1>
            <div class="modal-meta" id="modalMeta"></div>
            <div class="modal-text" id="modalText"></div>
        </div>
    </div>
  <div class="container">
    <div class="blog-header">
            <h1>Notre Blog</h1>
            <button class="create-blog-btn" onclick="openCreateModal()">
                ➕ Créer un Article
            </button>
        </div>

        <div class="blog-grid" id="blogGrid">
            <!-- Les articles seront générés par JavaScript -->
        </div>

       
    </div>

    <!-- Modal pour afficher l'article complet -->
    <div class="modal" id="articleModal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('articleModal')">&times;</span>
            <div class="modal-image" id="modalImage"></div>
            <h1 class="modal-title" id="modalTitle"></h1>
            <div class="modal-meta" id="modalMeta"></div>
            <div class="modal-text" id="modalText"></div>

            <!-- Section Commentaires -->
            <div class="comments-section">
                <h2 class="comments-title">💬 Commentaires (<span id="commentCount">0</span>)</h2>
                
                <div class="comment-form">
                    <input type="text" id="commentName" placeholder="Votre nom" required>
                    <textarea id="commentText" placeholder="Votre commentaire..." required></textarea>
                    <button onclick="addComment()">Publier le commentaire</button>
                </div>

                <div class="comments-list" id="commentsList">
                    <!-- Les commentaires seront ajoutés ici -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pour créer un article -->
    <div class="modal" id="createArticleModal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('createArticleModal')">&times;</span>
            <h1 class="modal-title">✍️ Créer un Nouvel Article</h1>
            
            <form class="create-article-form" onsubmit="submitArticle(event)">
                <div class="form-group">
                    <label>Titre de l'article *</label>
                    <input type="text" id="newTitle" required placeholder="Ex: Les Secrets du Café Parfait">
                </div>

                <div class="form-group">
                    <label>Auteur *</label>
                    <input type="text" id="newAuthor" required placeholder="Votre nom">
                </div>

                <div class="form-group">
                    <label>Extrait (court résumé) *</label>
                    <textarea id="newExcerpt" required placeholder="Un bref résumé de votre article..." rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Contenu complet *</label>
                    <textarea id="newContent" required placeholder="Le contenu complet de votre article..."></textarea>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" id="imageUpload" accept="image/*" style="display: none;" onchange="previewImage(event)">
                    <div class="image-preview" id="imagePreview" onclick="document.getElementById('imageUpload').click()">
                        <div class="image-preview-placeholder">
                            <div style="font-size: 40px;">📷</div>
                            <div>Cliquez pour ajouter une image</div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-article-btn">📝 Publier l'Article</button>
            </form>
        </div>
    </div>

    <script>
        // Base de données des articles
        const articles = [
            {
                id: 1,
                title: "L'Art du Cappuccino Parfait",
                date: "Janvier 15, 2026",
                author: "Nouhaila",
                comments: 8,
                image: "images/cappuchino.jpg",
                excerpt: "Découvrez les secrets pour créer un cappuccino parfait à la maison. La clé réside dans trois éléments essentiels...",
                fullText: `
                    <p>Découvrez les secrets pour créer un cappuccino parfait à la maison. La clé réside dans trois éléments essentiels: un espresso bien extrait, du lait parfaitement texturé, et la bonne température.</p>
                    
                    <p>Le cappuccino est l'une des boissons les plus appréciées dans le monde du café. Son équilibre parfait entre espresso, lait chaud et mousse de lait en fait une expérience gustative unique.</p>
                    
                    <p><strong>Les étapes essentielles:</strong></p>
                    <p>1. Commencez par préparer un espresso de qualité - utilisez environ 18-20g de café fraîchement moulu.</p>
                    <p>2. Faites chauffer votre lait à environ 65°C tout en créant une micro-mousse onctueuse.</p>
                    <p>3. Versez le lait texturé sur l'espresso en créant les proportions classiques: 1/3 espresso, 1/3 lait chaud, 1/3 mousse.</p>
                    
                    <p>La pratique est la clé du succès. N'hésitez pas à expérimenter jusqu'à trouver votre technique parfaite!</p>
                `
            },
            {
                id: 2,
                title: "Nouveau Menu Printemps 2026",
                date: "Janvier 10, 2026",
                author: "Ahmed",
                comments: 12,
                image: "images/menu.jpg",
                excerpt: "Cette saison, nous vous présentons nos nouvelles créations: le Latte à la Fleur d'Oranger, le Cappuccino aux Amandes...",
                fullText: `
                    <p>Cette saison, nous vous présentons nos nouvelles créations inspirées par les saveurs marocaines traditionnelles.</p>
                    
                    <p><strong>Latte à la Fleur d'Oranger:</strong> Une combinaison délicate de notre espresso signature avec du lait vapeur et un sirop maison à la fleur d'oranger. Chaque gorgée vous transporte dans les jardins méditerranéens.</p>
                    
                    <p><strong>Cappuccino aux Amandes:</strong> Notre cappuccino classique enrichi d'un sirop d'amandes artisanal et saupoudré d'amandes effilées grillées.</p>
                    
                    <p><strong>Iced Caramel Macchiato:</strong> Notre signature pour les journées chaudes - espresso versé sur de la glace, lait froid, et un généreux filet de caramel maison.</p>
                    
                    <p>Venez découvrir ces nouvelles saveurs dès maintenant dans tous nos cafés Daily Dose!</p>
                `
            },
            {
                id: 3,
                title: "Notre Café: De la Graine à la Tasse",
                date: "Janvier 5, 2026",
                author: "Youssef",
                comments: 15,
                image: "images/La tasse et les graines.jpg",
                excerpt: "Découvrez le voyage fascinant de nos grains de café, depuis les plantations éthiopiennes jusqu'à votre tasse...",
                fullText: `
                    <p>Le café que vous dégustez chez Daily Dose a parcouru un long chemin avant d'arriver dans votre tasse.</p>
                    
                    <p><strong>L'origine:</strong> Nous travaillons directement avec des coopératives de petits producteurs en Éthiopie, en Colombie et au Brésil. Chaque ferme est sélectionnée pour la qualité exceptionnelle de ses grains et ses pratiques durables.</p>
                    
                    <p><strong>La récolte:</strong> Les cerises de café sont récoltées à la main au moment optimal de maturité. Cette méthode traditionnelle garantit que seuls les meilleurs grains sont sélectionnés.</p>
                    
                    <p><strong>La torréfaction:</strong> Dans notre torréfaction locale, nous développons des profils de torréfaction uniques pour chaque origine. Ce processus artisanal révèle les arômes naturels des grains.</p>
                    
                    <p><strong>La préparation:</strong> Enfin, nos baristas experts transforment ces grains premium en la boisson que vous aimez.</p>
                    
                    <p>C'est cette attention à chaque étape qui fait la différence dans votre tasse.</p>
                `
            },
            {
                id: 4,
                title: "Atelier Latte Art ce Weekend",
                date: "Janvier 17, 2026",
                author: "Fatima",
                comments: 23,
                image: "images/lattee.jpg",
                excerpt: "Rejoignez-nous samedi prochain pour un atelier pratique de Latte Art. Apprenez à créer des rosettes, cœurs et tulipes...",
                fullText: `
                    <p>Vous avez toujours voulu apprendre à créer ces magnifiques dessins dans votre cappuccino? C'est votre chance!</p>
                    
                    <p><strong>Programme de l'atelier:</strong></p>
                    <p>• 10h00 - Accueil et introduction au Latte Art</p>
                    <p>• 10h30 - Techniques de texturage du lait</p>
                    <p>• 11h30 - Pratique des formes de base (cœur, rosette)</p>
                    <p>• 13h00 - Pause déjeuner avec dégustation</p>
                    <p>• 14h00 - Techniques avancées (tulipe, cygne)</p>
                    <p>• 16h00 - Session libre et questions</p>
                    
                    <p><strong>Ce qui est inclus:</strong> Tout le matériel nécessaire, café illimité, déjeuner léger, et un certificat de participation.</p>
                    
                    <p><strong>Prix:</strong> 450 DH par personne</p>
                    <p><strong>Places limitées:</strong> Maximum 10 participants pour garantir une attention personnalisée.</p>
                    
                    <p>Réservez votre place dès maintenant en appelant le 08255555 ou en passant au café!</p>
                `
            },
            {
                id: 5,
                title: "Les Bienfaits du Café pour la Santé",
                date: "Janvier 12, 2026",
                author: "Dr. Karim",
                comments: 18,
                image: "images/sante.jpg",
                excerpt: "Des études récentes montrent que le café, consommé avec modération, offre de nombreux avantages pour la santé...",
                fullText: `
                    <p>Le café est bien plus qu'une simple boisson énergisante. Les recherches scientifiques révèlent de nombreux bienfaits pour la santé.</p>
                    
                    <p><strong>Amélioration cognitive:</strong> La caféine améliore la concentration, la mémoire et les performances mentales. Une tasse le matin peut booster votre productivité toute la journée.</p>
                    
                    <p><strong>Antioxydants puissants:</strong> Le café est l'une des principales sources d'antioxydants dans l'alimentation occidentale. Ces composés protègent vos cellules contre les dommages.</p>
                    
                    <p><strong>Protection cardiovasculaire:</strong> Contrairement aux idées reçues, une consommation modérée de café (3-4 tasses par jour) est associée à une réduction du risque de maladies cardiaques.</p>
                    
                    <p><strong>Prévention du diabète:</strong> Des études montrent qu'une consommation régulière de café peut réduire le risque de diabète de type 2.</p>
                    
                    <p><strong>La modération est clé:</strong> Pour profiter de ces bienfaits, limitez votre consommation à 400mg de caféine par jour (environ 4 tasses) et évitez d'ajouter trop de sucre.</p>
                `
            },
            {
                id: 6,
                title: "Rencontre avec Nos Producteurs",
                date: "Janvier 8, 2026",
                author: "Laila",
                comments: 10,
                image: "images/cappuchino.jpg",
                excerpt: "Ce mois-ci, nous avons visité les coopératives de café au Brésil et en Colombie. Découvrez leur passion...",
                fullText: `
                    <p>Notre voyage de sourcing nous a menés dans les montagnes du Brésil et de Colombie, où nous avons rencontré les familles qui cultivent votre café quotidien.</p>
                    
                    <p><strong>Ferme São Paulo, Brésil:</strong> Maria et José cultivent du café depuis trois générations. Leur ferme de 15 hectares produit un café doux avec des notes de chocolat et de noisette. Ils utilisent des méthodes biologiques et récoltent à la main.</p>
                    
                    <p><strong>Coopérative de Huila, Colombie:</strong> Cette coopérative regroupe 50 petits producteurs qui travaillent ensemble pour améliorer la qualité et obtenir de meilleurs prix. Leur café est connu pour sa douceur et ses notes fruitées.</p>
                    
                    <p><strong>Commerce équitable:</strong> Nous payons 30% au-dessus des prix du marché pour garantir que les producteurs peuvent vivre dignement de leur travail et investir dans l'amélioration de leurs fermes.</p>
                    
                    <p><strong>Impact social:</strong> Une partie de nos bénéfices finance des écoles et des centres de santé dans ces communautés rurales.</p>
                    
                    <p>Quand vous buvez une tasse de Daily Dose, vous soutenez ces familles et leurs communautés. Merci de faire partie de cette chaîne de solidarité!</p>
                `
            }
        ];

        // Fonction pour afficher les articles
        function displayArticles() {
            const blogGrid = document.getElementById('blogGrid');
            blogGrid.innerHTML = '';

            articles.forEach(article => {
                const card = `
                    <div class="blog-card" onclick="openModal(${article.id})">
                        <div class="blog-image">
                            <img src="${article.image}" alt="${article.title}" />
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>📅 ${article.date}</span>
                                <span>👤 ${article.author}</span>
                                <span>💬 ${article.comments}</span>
                            </div>
                            <h3 class="blog-title">${article.title}</h3>
                            <p class="blog-excerpt">${article.excerpt}</p>
                            <a href="#" class="read-more" onclick="event.stopPropagation(); openModal(${article.id})">LIRE LA SUITE →</a>
                        </div>
                    </div>
                `;
                blogGrid.innerHTML += card;
            });
        }

        // Fonction pour ouvrir le modal avec l'article complet
        function openModal(articleId) {
            const article = articles.find(a => a.id === articleId);
            if (!article) return;

            document.getElementById('modalTitle').textContent = article.title;
            document.getElementById('modalMeta').innerHTML = `
                <span>📅 ${article.date}</span>
                <span>👤 ${article.author}</span>
                <span>💬 ${article.comments} commentaires</span>
            `;
            document.getElementById('modalText').innerHTML = article.fullText;
            document.getElementById('modalImage').innerHTML = `<img src="${article.image}" alt="${article.title}" />`;
            
            document.getElementById('articleModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        // Fonction pour fermer le modal
        function closeModal() {
            document.getElementById('articleModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Fermer le modal en cliquant en dehors
        document.getElementById('articleModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Fonction pour changer de page
        function changePage(direction) {
            console.log('Changement de page:', direction);
        }

        // Initialiser l'affichage
        displayArticles();
         
    </script>
   
 <div class="comments-section">
                <h2 class="comments-title">💬 Commentaires (<span id="commentCount">0</span>)</h2>
                
                <div class="comment-form">
                    <input type="text" id="commentName" placeholder="Votre nom" required>
                    <textarea id="commentText" placeholder="Votre commentaire..." required></textarea>
                    <button onclick="addComment()">Publier le commentaire</button>
                </div>

                <div class="comments-list" id="commentsList">
                    <!-- Les commentaires seront ajoutés ici -->
                </div>
            </div>
</body>
</html>