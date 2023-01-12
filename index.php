<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Riedlentės</title>
  </head>
  <body>
    <!-- Start navbar  -->
    <nav class="navbar">
      <div class="navbar-center">
        <span class="menu-icon">
          <i class="fas fa-bars"><a href="login.php">Login</a></i>
        </span>
        <p class="nav-title">Draugo riedlentės</p>
        <span class="cart-btn">
          <i class="fas fa-cart-plus"></i>
          <span class="cart-items">0</span>
        </span>
      </div>
    </nav>


<!-- products -->
<div class="container">
<section>
  <div class="products">
    <h2 class="section-title">Produktai</h2>
    <!-- single products -->
    <div class="products-center">
      <?php
        // Connect
        $conn = mysqli_connect("127.0.0.1", "root", "", "riedlente");
        
        // Query
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);

        // Bandžiau konvertuoti JSON išvedimą ant prekės aprašymo, bet kažkodėl neveikia...
        $product['aprasymas'] = json_decode($product['aprasymas']);

        // Loop
        while($product = mysqli_fetch_assoc($result)) {
          echo '<section class="product">
                  <div class="img-container">
                    <img class="product-img" src="' . $product['image_url'] . '" alt="' . $product['name'] . '" />
                  </div>
                  <div class="product-desc">
                    <p class="product-title">Pavadinimas : ' . $product['name'] . '</p>
                    <p class="product-price">Kaina : ' . $product['price'] . '€</p>
                  </div>
                  <button class="add-to-cart" data-product-id="' . $product['id'] . '">Į krepšelį</button>
                  <button class="product-description-btn" data-product-id="' . $product['id'] . '">Plačiau...</button>
        
                  <div class="product-info">' . $product['aprasymas']->aprasymas . '</div>

                </section>';
            }
          ?>
        </div>
      </div>
    </section>
          </div>
  </body>
  <script>
     var btns = document.getElementsByClassName("product-description-btn");

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        // Product id iš mygtuko
        var productId = this.getAttribute("data-product-id");
        
        // product-info 
        var productInfoContainer = this.parentNode.getElementsByClassName("product-info")[0];
        fetch("get-product-info.php?productId=" + productId)
        .then(response => response.text())
        .then(data => {
            productInfoContainer.innerHTML = data;
            productInfoContainer.style.display = "block";
        });
    });
}
    </script>
</html>
