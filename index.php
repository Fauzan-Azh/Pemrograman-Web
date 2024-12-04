<!-- 105222036_ShevaHayaMilano
105222003_Fauzan Azhima -->

<?php
session_start();

// Jika pengguna belum login, arahkan ke login.php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Logout logika
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glow.Up</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="style.css">

    <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>Index</title>
</head>

<body>



  <nav class="navbar">
    <a href="#" class="navbar-logo">Glow</span>.Up</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#products">Produk</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <div class="shopping-cart">
      <div class="cart-items"></div>
      <div class="cart-summary">
        <div>Total: <span id="cart-total">IDR 0</span></div>
        <button id="purchase-button" class="btn">Beli Sekarang</button>
      </div>

      <div class="container">
        <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Anda berhasil login.</p>
        <a href="?logout">Logout</a>
    </div>
    </div>
  </nav>
  <div class="container">
        <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Anda berhasil login.</p>
        <a href="?logout">Logout</a>
    </div>
  

  <section class="hero" id="home">
    <div class="mask-container">
      <h4>Glow Up Essentials</h4>
      <h2>Super value deals</h2>
      <h1 style="color: #088178;">For all skincare products</h1>
      <p>Save more with huge discounts</p>
    </div>
  </section>

  
  <section class="products" id="products">
    <div class="toner">
      <h2><span>Toner</span></h2>
      <p>Dapatkan kulit impianmu dengan toner yang tepat!</p>
      <div class="row">
        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="add-to-cart-button" data-product-name="SKINTIFIC 5X Ceramide Soothing Toner 80 ml" data-product-price="105000" data-product-img="1.png">
              <i data-feather="shopping-cart"></i> 
            </a>
            <a href="#" class="item-detail-button" data-modal-target="#modal-toner1"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="1.png" alt="Product 1">
          </div>
          <div class="product-content">
            <h3>SKINTIFIC 5X Ceramide Soothing Toner 80 ml</h3>
           <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 105000 </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="add-to-cart-button" data-product-name="SAZARINE Mild Purifying Toner 90 ml" data-product-price="58000" data-product-img="2.png">
              <i data-feather="shopping-cart"></i> 
            </a>
            <a href="#" class="item-detail-button" data-modal-target="#modal-toner2"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="2.png" alt="Product 2">
          </div>
          <div class="product-content">
            <h3>AZARINE Mild Purifying Toner 90 ml</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 105000 </div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="add-to-cart-button" data-product-name="ANUA Heartleaf 77% Soothing Toner 150 ml " data-product-price="199000" data-product-img="3.png">
              <i data-feather="shopping-cart"></i>
            </a>
            <a href="#" class="item-detail-button" data-modal-target="#modal-toner3"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="3.png" alt="Product 3">
          </div>
          <div class="product-content">
            <h3>ANUA Heartleaf 77% Soothing Toner 150 ml </h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">IDR 199000</div>
          </div>
        </div>
      </div>
    </div>

    <div class="FW">
      <h2><span>Facial Wash</span></h2>
      <p>Mulai hari dengan wajah yang segar dan bersih!</p>
      <div class="row">
        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="add-to-cart-button" data-product-name="YOU Hy! Amino Anti Acne Facial Wash 100g" data-product-price="28000" data-product-img="f1.png">
              <i data-feather="shopping-cart"></i>
            <a href="#" class="item-detail-button" data-modal-target="#modal-facialwash1"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="f1.png" alt="Product 4">
          </div>
          <div class="product-content">
            <h3>YOU Hy! Amino Anti Acne Facial Wash 100g</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 28000</div>
          </div>
        </div>
    
        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="add-to-cart-button" data-product-name="MINERAL BOTANICA First Defense Facial Foam 100 ml" data-product-price="27900" data-product-img="f2.png">
              <i data-feather="shopping-cart"></i>
            </a>
            <a href="#" class="item-detail-button" data-modal-target="#modal-facialwash2"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="f2.png" alt="Product 5">
          </div>
          <div class="product-content">
            <h3>MINERAL BOTANICA First Defense Facial Foam 100 ml</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 27900</div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="add-to-cart-button" data-product-name="Moriganic Mugwort Facial Wash 100ml" data-product-price="76000" data-product-img="f3.png">
              <i data-feather="shopping-cart"></i> 
            </a>
            <a href="#" class="item-detail-button" data-modal-target="#modal-facialwash3"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="f3.png" alt="Product 6">
          </div>
          <div class="product-content">
            <h3>Moriganic Mugwort Facial Wash 100ml</h3>
            <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 76000</div>
        </div>
      </div>
    </div>

  <div class="Serum">
    <h2><span>Serum</span></h2>
    <p>Dapatkan kulit sehat dan bercahaya dengan serum terbaik!</p>
    <div class="row">
      <div class="product-card">
        <div class="product-icons">
          <a href="#" class="add-to-cart-button" data-product-name="SOMETHINC RESURRECT Multibiome Serum 20ml" data-product-price="102000" data-product-img="s1.png">
            <i data-feather="shopping-cart"></i>
          </a>
          <a href="#" class="item-detail-button" data-modal-target="#modal-serum1"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="s1.png" alt="Product 7">
        </div>
        <div class="product-content">
          <h3>SOMETHINC RESURRECT Multibiome Serum 20ml</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 102000</div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-icons">
          <a href="#" class="add-to-cart-button" data-product-name="YOU Radiance Glow Illuminating Serum 20ml" data-product-price="99000" data-product-img="s2.png">
            <i data-feather="shopping-cart"></i> 
          </a>
          <a href="#" class="item-detail-button" data-modal-target="#modal-serum2"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="s2.png" alt="Product 8">
        </div>
        <div class="product-content">
          <h3>YOU Radiance Glow Illuminating Serum 20ml</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 99000</div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-icons">
          <a href="#" class="add-to-cart-button" data-product-name="TRUEVE Luminous Dark Spot Brightening Serum" data-product-price="157000" data-product-img="s3.png">
          <i data-feather="shopping-cart"></i> 
          </a>
          <a href="#" class="item-detail-button" data-modal-target="#modal-serum3"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="s3.png" alt="Product 9">
        </div>
        <div class="product-content">
          <h3>TRUEVE Luminous Dark Spot Brightening Serum</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 157000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="Moisturizer">
    <h2><span>Moisturizer</span></h2>
    <p>Jaga kelembapan kulitmu dengan moisturizer pilihan!</p>
    <div class="row">
      <div class="product-card">
        <div class="product-icons">
          <a href="#" class="add-to-cart-button" data-product-name="SKINTIFIC 5X Ceramide Barrier Moisturizer Gel 30g" data-product-price="117000" data-product-img="m1.png">
            <i data-feather="shopping-cart"></i>
          </a>
          <a href="#" class="item-detail-button" data-modal-target="#modal-moisturizer1"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="m1.png" alt="Product 10">
        </div>
        <div class="product-content">
          <h3>SKINTIFIC 5X Ceramide Barrier Moisturizer Gel 30g</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 117000</div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-icons">
          <a href="#" class="add-to-cart-button" data-product-name="THE ORIGINOTE Brightening Moisturizer 50ml" data-product-price="52800" data-product-img="m2.png">
            <i data-feather="shopping-cart"></i> 
          </a>
          <a href="#" class="item-detail-button" data-modal-target="#modal-moisturizer2"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="m2.png" alt="Product 11">
        </div>
        <div class="product-content">
          <h3>THE ORIGINOTE Brightening Moisturizer 50ml</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 52800</div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-icons">
          <a href="#" class="add-to-cart-button" data-product-name="LA ROCHE POSAY Toleriane Double Matte Moisturizer For Oily Skin 75ml" data-product-price="742000" data-product-img="m3.png">
            <i data-feather="shopping-cart"></i> 
          </a>
          <a href="#" class="item-detail-button" data-modal-target="#modal-moisturizer3"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="m3.png" alt="Product 12">
        </div>
        <div class="product-content">
          <h3>LA ROCHE POSAY Toleriane Double Matte Moisturizer For Oily Skin 75ml</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 742000</div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2><span>Contact Us</span></h2>
    </p>

    <div class="row">
      <form action="backend.php" method="POST">
        <div class="input-group">
          <i data-feather="user"></i>
          <input name ="nama" type="text" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input name ="email" type="text" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp">
        </div>
        <button type="submit" class="btn">kirim pesan</button>
      </form>

    </div>
  </section>

  <footer>
      <div class="footer-container">
        <h2>Glow.Up</h2>
        <p>© 2024 Glow.Up. Semua Hak Dilindungi.</p>
      </div>
  </footer>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="1.png" alt="SKINTIFIC 5X Ceramide Soothing Toner 80 ml">
        <div class="product-content">
          <h3>SKINTIFIC 5X Ceramide Soothing Toner 80 ml</h3>
          <p>Toner yang mengandung 5x ceramide untuk menenangkan dan memperkuat kulit, cocok untuk kulit sensitif.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price">IDR 105000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="2.png" alt="AZARINE Mild Purifying Toner 90 ml" id="modal-product-img">
        <div class="product-content">
          <h3 id="modal-product-name">AZARINE Mild Purifying Toner 90 ml</h3>
          <p id="modal-product-description">Dapatkan kulit yang sehat dengan AZARINE Mild Purifying Toner, formulasi yang ringan untuk membantu membersihkan kulit.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price" id="modal-product-price">IDR 58000</div>
          
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="3.png" alt="ANUA Heartleaf 77% Soothing Toner 150 ml" id="modal-product-img-toner3">
        <div class="product-content">
          <h3 id="modal-product-name-toner3">ANUA Heartleaf 77% Soothing Toner 150 ml</h3>
          <p id="modal-product-description-toner3">Toner ini mengandung 77% ekstrak Heartleaf untuk menenangkan kulit sensitif dan iritasi.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price" id="modal-product-price-toner3">IDR 199000</div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="f1.png" alt="YOU Hy! Amino Anti Acne Facial Wash 100g" id="modal-product-img-facialwash1">
        <div class="product-content">
          <h3 id="modal-product-name-facialwash1">YOU Hy! Amino Anti Acne Facial Wash 100g</h3>
          <p id="modal-product-description-facialwash1">Facial wash yang diformulasikan untuk mengatasi jerawat dan menjaga kelembutan kulit.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price" id="modal-product-price-facialwash1">IDR 28000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="f2.png" alt="MINERAL BOTANICA First Defense Facial Foam 100 ml" id="modal-product-img-facialwash2">
        <div class="product-content">
          <h3 id="modal-product-name-facialwash2">MINERAL BOTANICA First Defense Facial Foam 100 ml</h3>
          <p id="modal-product-description-facialwash2">Facial foam yang membersihkan dan melindungi kulit dari radikal bebas.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price" id="modal-product-price-facialwash2">IDR 27900</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="f3.png" alt="Moriganic Mugwort Facial Wash 100ml" id="modal-product-img-facialwash3">
        <div class="product-content">
          <h3 id="modal-product-name-facialwash3">Moriganic Mugwort Facial Wash 100ml</h3>
          <p id="modal-product-description-facialwash3">Facial wash dengan mugwort yang menenangkan kulit sensitif dan mengurangi kemerahan.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price" id="modal-product-price-facialwash3">IDR 76000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="s1.png" alt="SOMETHINC RESURRECT Multibiome Serum 20ml">
        <div class="product-content">
          <h3>SOMETHINC RESURRECT Multibiome Serum 20ml</h3>
          <p>Serum ini diformulasikan untuk meningkatkan kesehatan mikrobioma kulit, memberikan kelembapan dan menjaga keseimbangan kulit.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price" id="modal-product-price-serum1">IDR 102000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="s2.png" alt="YOU Radiance Glow Illuminating Serum 20ml">
        <div class="product-content">
          <h3>YOU Radiance Glow Illuminating Serum 20ml</h3>
          <p>Serum pencerah yang memberikan kilau alami pada kulit, mengandung bahan aktif yang menutrisi dan melembapkan.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price"  id="modal-product-price-serum2">IDR 99000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="s3.png" alt="TRUEVE Luminous Dark Spot Brightening Serum">
        <div class="product-content">
          <h3>TRUEVE Luminous Dark Spot Brightening Serum</h3>
          <p>Serum ini diformulasikan khusus untuk menyamarkan noda hitam pada kulit, membuat kulit tampak lebih cerah dan merata.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price"  id="modal-product-price-serum3">IDR 157000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="m1.png" alt="SKINTIFIC 5X Ceramide Barrier Moisturizer Gel 30g">
        <div class="product-content">
          <h3>SKINTIFIC 5X Ceramide Barrier Moisturizer Gel 30g</h3>
          <p>Moisturizer ini mengandung ceramide yang membantu memperkuat penghalang kulit untuk kulit yang sehat.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price"  id="modal-product-price-moisturizer1">IDR 117000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="m2.png" alt="THE ORIGINOTE Brightening Moisturizer 50ml">
        <div class="product-content">
          <h3>THE ORIGINOTE Brightening Moisturizer 50ml</h3>
          <p>Moisturizer dengan kandungan pencerah yang membantu membuat kulit terlihat lebih cerah dan segar.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price"  id="modal-product-price-moisturizer2">IDR 52800</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="m3.png" alt="LA ROCHE POSAY Toleriane Double Matte Moisturizer For Oily Skin 75ml">
        <div class="product-content">
          <h3>LA ROCHE POSAY Toleriane Double Matte Moisturizer For Oily Skin 75ml</h3>
          <p>Moisturizer untuk kulit berminyak yang membantu menjaga kelembaban kulit tanpa membuatnya berminyak.</p>
          <div class="product-stars" id="modal-product-stars">
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
            <i data-feather="star" ></i>
          </div>
          <div class="product-price"  id="modal-product-price-misturizer3">IDR 742000</div>
        </div>
      </div>
    </div>
  </div>

  

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <script src="script.js"></script>
</body>

</html>