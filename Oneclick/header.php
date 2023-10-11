

<!DOCTYPE html>
<html>
    <head>
        <title>Onetiks</title>
        <link rel="icon" href="resourses/ONECLICK.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter&display=swap" rel="stylesheet">

    </head>
    <body class="body2">
    <header class="header" data-header>
    <div class="container1">

      <div class="overlay1" data-overlay></div>

      <div class="header-search">
        <input type="search" name="search" placeholder="Search Product..." class="input-field">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

      <a href="home.php" class="logohead">
        <h1 style="font-family: 'Varela Round', sans-serif;">Oneclik</h1>
      </a>

      <div class="header-actions">

        <button class="header-action-btn">
          <ion-icon class="user-icon-list" name="person-outline" aria-hidden="true"></ion-icon>
          <?php
                if (isset($_SESSION["u"])) {
                    $session_data = $_SESSION["u"];
                ?>
                <ul class="desktop-menu-category-list">
                <li class="menu-category">
      <a href="#" class="myaccountmenu-title"><?php echo $session_data["name"].""?></a>

      <ul class="myaccountdropdown-list">

        <li class="dropdown-item">
          <a href="userprofile.php">Dashboard</a>
        </li>

        <li class="dropdown-item">
          <a href="#">My account</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Wish list</a>
        </li>

        <li class="dropdown-item">
          <a href="#">add to cart</a>
        </li>

        <li class="dropdown-item">
          <a href="index.php">Log out</a>
        </li>

      </ul>
    </li>


                </ul>
        </button>
        

        <button class="header-action-btn">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Search</p>
        </button>

        <button class="header-action-btn">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Cart</p>

          <div class="btn-badge green" aria-hidden="true">3</div>
        </button>

        <button class="header-action-btn">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Wishlisht</p>

          <div class="btn-badge" aria-hidden="true">2</div>
        </button>

      </div>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

        <nav class="desktop-navigation-menu">

<div class="container1">

  <ul class="desktop-menu-category-list">

    <li class="menu-category">
      <a href="home.php" class="menu-title">Home</a>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Categories</a>

      <div class="dropdown-panel">

        
        <ul class="dropdown-panel-list">

          <li class="menu-title">
            <a href="#">Men's</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Formal</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Casual</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Sports</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Bags</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Sunglasses</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Perfume</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Cosmetics</a>
          </li>

          <li class="panel-list-item">
            <a href="#">
              <img src="resourses/mens-banner (1).jpg" alt="men's fashion" width="250" height="119">
            </a>
          </li>

        </ul>

        <ul class="dropdown-panel-list">

          <li class="menu-title">
            <a href="#">Women's</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Formal</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Casual</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Sports</a>
          </li>

          <li class="panel-list-item">
            <a href="womenbags.php">Bags</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Sunglasses</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Perfume</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Cosmetics</a>
          </li>

          <li class="panel-list-item">
            <a href="#">
              <img src="resourses/womens-banner.jpg" alt="women's fashion" width="250" height="119">
            </a>
          </li>

        </ul>

        <ul class="dropdown-panel-list">

          <li class="menu-title">
            <a href="#">Kids item</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Bags</a>
          </li>

          <li class="panel-list-item">
            <a href="#">casual</a>
          </li>

          <li class="panel-list-item">
            <a href="#">clothing</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Baby tem</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Gift</a>
          </li>

          <li class="panel-list-item">
            <a href="#">
              <img src="resourses/electronics-banner-1.jpg" alt="headphone collection" width="250"
                height="119">
            </a>
          </li>

        </ul>


        <ul class="dropdown-panel-list">

          <li class="menu-title">
            <a href="#">Electronics</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Smart Watch</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Smart TV</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Keyboard</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Mouse</a>
          </li>

          <li class="panel-list-item">
            <a href="#">Microphone</a>
          </li>

          <li class="panel-list-item">
            <a href="#">
              <img src="resourses/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
            </a>
          </li>

        </ul>

      </div>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Men's</a>

      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="#">Shirt</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Shorts & Jeans</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Safety Shoes</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Wallet</a>
        </li>

      </ul>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Women's</a>

      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="#">Dress & Frock</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Earrings</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Necklace</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Makeup Kit</a>
        </li>

      </ul>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Jewelry</a>

      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="#">Earrings</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Couple Rings</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Necklace</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Bracelets</a>
        </li>

      </ul>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Perfume</a>

      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="#">Clothes Perfume</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Deodorant</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Flower Fragrance</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Air Freshener</a>
        </li>

      </ul>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Blog</a>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Hot Offers</a>
    </li>

  </ul>

</div>

</nav>

<div class="mobile-bottom-navigation">

<button class="action-btn" data-mobile-menu-open-btn>
  <ion-icon name="menu-outline"></ion-icon>
</button>

<button class="action-btn">
  <ion-icon name="bag-handle-outline"></ion-icon>

  <span class="count">0</span>
</button>

<button class="action-btn">
  <ion-icon name="home-outline"></ion-icon>
</button>

<button class="action-btn">
  <ion-icon name="heart-outline"></ion-icon>

  <span class="count">0</span>
</button>

<button class="action-btn" data-mobile-menu-open-btn>
  <ion-icon name="grid-outline"></ion-icon>
</button>

</div>

<nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

<div class="menu-top">
  <h2 class="menu-title">Menu</h2>

  <button class="menu-close-btn" data-mobile-menu-close-btn>
    <ion-icon name="close-outline"></ion-icon>
  </button>
</div>

<ul class="mobile-menu-category-list">

  <li class="menu-category">
    <a href="#" class="menu-title">Home</a>
  </li>

  <li class="menu-category">

    <button class="accordion-menu" data-accordion-btn>
      <p class="menu-title">Men's</p>

      <div>
        <ion-icon name="add-outline" class="add-icon"></ion-icon>
        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
      </div>
    </button>

    <ul class="submenu-category-list" data-accordion>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Shirt</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Shorts & Jeans</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Safety Shoes</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Wallet</a>
      </li>

    </ul>

  </li>

  <li class="menu-category">

    <button class="accordion-menu" data-accordion-btn>
      <p class="menu-title">Women's</p>

      <div>
        <ion-icon name="add-outline" class="add-icon"></ion-icon>
        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
      </div>
    </button>

    <ul class="submenu-category-list" data-accordion>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Dress & Frock</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Earrings</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Necklace</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Makeup Kit</a>
      </li>

    </ul>

  </li>

  <li class="menu-category">

    <button class="accordion-menu" data-accordion-btn>
      <p class="menu-title">Jewelry</p>

      <div>
        <ion-icon name="add-outline" class="add-icon"></ion-icon>
        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
      </div>
    </button>

    <ul class="submenu-category-list" data-accordion>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Earrings</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Couple Rings</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Necklace</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Bracelets</a>
      </li>

    </ul>

  </li>

  <li class="menu-category">

    <button class="accordion-menu" data-accordion-btn>
      <p class="menu-title">Perfume</p>

      <div>
        <ion-icon name="add-outline" class="add-icon"></ion-icon>
        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
      </div>
    </button>

    <ul class="submenu-category-list" data-accordion>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Clothes Perfume</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Deodorant</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Flower Fragrance</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Air Freshener</a>
      </li>

    </ul>

  </li>

  <li class="menu-category">
    <a href="#" class="menu-title">Blog</a>
  </li>

  <li class="menu-category">
    <a href="#" class="menu-title">Hot Offers</a>
  </li>

</ul>

<div class="menu-bottom">

  <ul class="menu-category-list">

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Language</p>

        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">English</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Espa&ntilde;ol</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Fren&ccedil;h</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">
      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Currency</p>
        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
      </button>

      <ul class="submenu-category-list" data-accordion>
        <li class="submenu-category">
          <a href="#" class="submenu-title">USD &dollar;</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">EUR &euro;</a>
        </li>
      </ul>
    </li>

  </ul>

  <ul class="menu-social-container">

    <li>
      <a href="#" class="social-link">
        <ion-icon name="logo-facebook"></ion-icon>
      </a>
    </li>

    <li>
      <a href="#" class="social-link">
        <ion-icon name="logo-twitter"></ion-icon>
      </a>
    </li>

    <li>
      <a href="#" class="social-link">
        <ion-icon name="logo-instagram"></ion-icon>
      </a>
    </li>

    <li>
      <a href="#" class="social-link">
        <ion-icon name="logo-linkedin"></ion-icon>
      </a>
    </li>

  </ul>

</div>

</nav>

    </div>
  </header>

  <script src="script.js"></script>

<!-- 
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>
<?php
                }
?>