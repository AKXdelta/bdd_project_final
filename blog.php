
// HANDLE ARTICLE UNE SEULE FOIS
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_article'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $excerpt = $conn->real_escape_string($_POST['excerpt']);
    $fText = $conn->real_escape_string($_POST['fText']);  // Échappé OK
    $author = $conn->real_escape_string($_POST['author']);
    $date = date('Y-m-d H:i:s');
    
    // Upload image
    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $uploadDir = 'uploads/';
        if (!file_exists($uploadDir)) mkdir($uploadDir, 0777, true);
        
        $imageExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageName = uniqid() . '.' . $imageExtension;
        $imagePath = $uploadDir . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }
    
    // ✅ BACKTICKS `fullText` → mot réservé !
    $sql = "INSERT INTO articles (title, excerpt, `fText`, author, `date`, image ) 
            VALUES ('$title', '$excerpt', '$fText', '$author', '$date', '$imagePath')";
    
    if ($conn->query($sql)) {
        header("Location: blog.php?success=1");
        exit;
    } else {
        echo "Erreur SQL: " . $conn->error;
    }
}

// AJAX fetch articles
if (isset($_GET['fetch'])) {
    $result = $conn->query("SELECT * FROM articles ORDER BY id DESC");
    $articles = [];
    while ($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($articles);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <title>Blog</title>
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

        .add-article-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #c9a55a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: #000;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(201, 165, 90, 0.4);
            transition: all 0.3s ease;
            z-index: 999;
            border: none;
        }

        .add-article-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(201, 165, 90, 0.6);
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
            padding-bottom: 40px;
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

        /* Form Modal */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #c9a55a;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            background-color: #1a1a1a;
            border: 1px solid #444;
            border-radius: 4px;
            color: #fff;
            font-size: 14px;
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-group input[type="file"] {
            padding: 8px;
        }

        .submit-btn {
            background-color: #c9a55a;
            color: #000;
            padding: 14px 40px;
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #b39550;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .blog-grid {
               margin-top: 20px;
            }
            
            .modal-content {
                margin: 20px;
                padding: 30px 20px;
            }

            .add-article-btn {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }
        }
        
      
    .add-article-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 160px;
    height: 55px;
    background: linear-gradient(135deg, #c9a55a 0%, #d4b475 100%);
    color: #000;
    font-size: 16px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    border: none;
    border-radius: 8px;  /* Carré arrondi */
    box-shadow: 0 8px 25px rgba(201, 165, 90, 0.4);
    cursor: pointer;
    z-index: 9999;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    text-transform: uppercase;
    letter-spacing: 1px;
    animation: slideUp 0.5s ease-out, pulse 2s infinite;
}
.add-article-btn:active {
    transform: translateY(-1px);
}
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
@keyframes pulse {
    0%, 100% { box-shadow: 0 8px 25px rgba(201, 165, 90, 0.4); }
    50% { box-shadow: 0 8px 35px rgba(201, 165, 90, 0.7); }
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
	  </nav>

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

    <!-- Bouton flottant pour ajouter un article -->
    <button class="add-article-btn" onclick="openAddModal()">Add Article</button>

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

    <!-- Modal pour ajouter un article -->
    <div class="modal" id="addArticleModal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeAddModal()">&times;</span>
            <h2 class="modal-title">Ajouter un nouvel article</h2>
            
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Titre de l'article *</label>
                    <input type="text" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="author">Auteur *</label>
                    <input type="text" id="author" name="author" required>
                </div>

                <div class="form-group">
                    <label for="excerpt">Extrait (résumé court) *</label>
                    <textarea id="excerpt" name="excerpt" required></textarea>
                </div>

                <div class="form-group">
                    <label for="fText">Texte complet de l'article *</label>
                    <textarea id="fText" name="fText" rows="8" required></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image de l'article</label>
                    <input type="file" id="image" name="image" accept="image/*">
                </div>

                <button type="submit" name="add_article" class="submit-btn">Publier l'article</button>
            </form>
        </div>
    </div>

   <script>
        let articles = [];

        function loadArticles() {
            fetch("blog.php?fetch=1")
                .then(res => res.json())
                .then(data => {
                    articles = data;
                    displayArticles();
                })
                .catch(err => console.error('Erreur de chargement:', err));
        }

        function displayArticles() {
            const blogGrid = document.getElementById('blogGrid');
            blogGrid.innerHTML = '';

            articles.forEach(article => {
                const imageHtml = article.image 
                    ? `<img src="${article.image}" alt="${article.title}" />`
                    : '☕';
                
                const card = `
                    <div class="blog-card" data-id="${article.id}">
                        <div class="blog-image">${imageHtml}</div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>📅 ${article.date}</span>
                                <span>👤 ${article.author}</span>
                            </div>
                            <h3 class="blog-title">${article.title}</h3>
                            <p class="blog-excerpt">${article.excerpt}</p>
                            <a href="#" class="read-more" data-id="${article.id}">LIRE LA SUITE →</a>
                        </div>
                    </div>
                `;
                blogGrid.innerHTML += card;
            });

            // 🔥 CORRECTION : Attacher les événements APRÈS avoir ajouté les éléments au DOM
            articles.forEach(article => {
                document.querySelector(`[data-id="${article.id}"] .read-more`)?.addEventListener('click', function(e) {
                    e.preventDefault();
                    openModal(article.id);
                });
            });
        }

        function openModal(articleId) {
            const article = articles.find(a => a.id == articleId);
            if (!article) return;

            document.getElementById('modalTitle').textContent = article.title;
            document.getElementById('modalMeta').innerHTML = `
                <span>📅 ${article.date}</span>
                <span>👤 ${article.author}</span>
            `;
            document.getElementById('modalText').innerHTML = article.fText;
            
            const imageHtml = article.image 
                ? `<img src="${article.image}" alt="${article.title}" />`
                : '☕';
            document.getElementById('modalImage').innerHTML = imageHtml;
            
            document.getElementById('articleModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('articleModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function openAddModal() {
            document.getElementById('addArticleModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeAddModal() {
            document.getElementById('addArticleModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        document.getElementById('articleModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        document.getElementById('addArticleModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeAddModal();
            }
        });

        function changePage(direction) {
            console.log('Changement de page:', direction);
        }

        loadArticles();
    </script>
</body>
</html>