<?php

session_start();

require "connaction.php";

?>

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
    <body>
    <?php include "header.php"; ?>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('./assets/images/hero-banner 2.jpg')">
        <div class="container1">

          <div class="hero-content">

            <p class="hero-subtitle">Fashion Everyday</p>

            <h2 class="h1 hero-title">Unrivalled Fashion House</h2>

            <button class="btn btn-primary">Shop Now</button>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service">
        <div class="container1">

          <ul class="service-list">

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-1.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Free Shipping</p>

                <p class="service-item-text">On All Order Over $599</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-2.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Easy Returns</p>

                <p class="service-item-text">30 Day Returns Policy</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-3.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Secure Payment</p>

                <p class="service-item-text">100% Secure Gaurantee</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-4.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Special Support</p>

                <p class="service-item-text">24/7 Dedicated Support</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->
      <section class="section category">
        <div class="container1">

          <ul class="category-list">

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-1.jpg" alt="Sunglass & eye" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Sunglass & Eye</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-2.jpg" alt="Active & outdoor" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Active & Outdoor</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-3.jpg" alt="Winter wear" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Winter Wear</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-4.jpg" alt="Exclusive footwear" loading="lazy" width="510"
                  height="600" class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Exclusive Footwear</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-5.jpg" alt="Jewelry" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Jewelry</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/category-6.jpg" alt="Sports cap" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Sports Cap</a>
            </li>

          </ul>

        </div>
      </section>


      <!-- 
        - #PRODUCT
      -->

      <section class="section product">
        <div class="container1">
        
         <h2 class="h2 section-title">Products of the week</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn  active">Best Seller</button>
            </li>

            <li>
              <button class="filter-btn">Hot Collection</button>
            </li>

            <li>
              <button class="filter-btn">Trendy</button>
            </li>

            <li>
              <button class="filter-btn">New Arrival</button>
            </li>

          </ul>

          <ul class="product-list">
          <?php

            $c_rs = Database::search("SELECT * FROM `sub_category`");
            $c_num = $c_rs->num_rows;

            for ($y = 0; $y < $c_num; $y++) {

            $c_data = $c_rs->fetch_assoc();

            ?>
            <?php

$product_rs = Database::search("SELECT * FROM `product` WHERE 
`sub_category_sub_cat_id`='" . $c_data['sub_cat_id'] . "' AND `status_status_id`='1' ORDER BY 
`datetime_added` DESC LIMIT 4 OFFSET 0");

$product_num = $product_rs->num_rows;

for ($x = 0; $x < $product_num;$x++) {
$product_data = $product_rs->fetch_assoc();

?>


<?php

$img_rs = Database::search("SELECT * FROM `product_img` WHERE 
`product_id`='".$product_data['id']."'");

  $img_data = $img_rs->fetch_assoc();

?>


            <li>
              
              
              <div class="product-card">
              
                <figure class="card-banner">

                  <a href="#">
                    <img src="<?php echo $img_data["img_path"] ?>" alt="" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge red"> -25%</div>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#"><?php echo $product_data["title"]; ?></a>
                  </h3>

                  <div class="card-price">
                    <data value="48.75"> Rs.<?php echo $product_data["price"]; ?></data>

                    <data value="65.00">&pound;65.00</data>
                  </div>
                </div>
                


              </div>
            </li>
            <?php

                }

                ?>
            <?php

            }

            ?>
          </ul>
          

          <button class="btn btn-outline">View All Products</button>

        </div>
        

      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog">
        <div class="container1">

          <h2 class="h2 section-title">Latest fashion news</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/blog-1.jpg" alt="Worthy Cyber Monday Fashion From Casmart" loading="lazy"
                      width="1020" height="700" class="w-100">
                  </a>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="folder-open-outline"></ion-icon>

                      <a href="#" class="card-meta-link">Fashion</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <a href="#" class="card-meta-link">
                        <time datetime="2021-03-31">31 Mar 2021</time>
                      </a>
                    </li>

                  </ul>

                  <h3 class="h3 card-title">
                    <a href="#">Worthy Cyber Monday Fashion From Casmart</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" alt="Holiday Home Decoration I’ve Recently Ordered"
                      loading="lazy" width="1020" height="700" class="w-100">
                  </a>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="folder-open-outline"></ion-icon>

                      <a href="#" class="card-meta-link">Fashion</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <a href="#" class="card-meta-link">
                        <time datetime="2021-03-31">31 Mar 2021</time>
                      </a>
                    </li>

                  </ul>

                  <h3 class="h3 card-title">
                    <a href="#">Holiday Home Decoration I’ve Recently Ordered</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" alt="Unique Ideas for Fashion You Haven’t heard yet"
                      loading="lazy" width="1020" height="700" class="w-100">
                  </a>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="folder-open-outline"></ion-icon>

                      <a href="#" class="card-meta-link">Fashion</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <a href="#" class="card-meta-link">
                        <time datetime="2021-03-31">31 Mar 2021</time>
                      </a>
                    </li>

                  </ul>

                  <h3 class="h3 card-title">
                    <a href="#">Unique Ideas for Fashion You Haven’t heard yet</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">
        <div class="container1">

          <div class="newsletter-card" style="background-image: url('./assets/images/newsletter-bg.png')">

            <h2 class="card-title">Subscribe Newsletter</h2>

            <p class="card-text">
              Enter your email below to be the first to know about new collections and product launches.
            </p>

            <form action="" class="card-form">

              <div class="input-wrapper">
                <ion-icon name="mail-outline"></ion-icon>

                <input type="email" name="emal" placeholder="Enter your email" required class="input-field">
              </div>

              <button type="submit" class="btn btn-primary w-100">
                <span>Subscribe</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <?php include "footer.php"; ?>

  <!-- 
    - custom js link
  -->
  <script src="script.js"></script>
  <script src="bootstrap.js"></script> 

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
