<?php
require "connect.php";

$query = "SELECT * FROM photos";

$result = mysqli_query($conn, $query);

$photos = mysqli_fetch_all($result, MYSQLI_ASSOC)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="responsive.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet" />
  <title>Nepal | REAL LIFE HEAVEN</title>
</head>

<body>
  <nav class="navbar h-nav-resp">
    <div class="logo hover">
      <img src="images/mountain.png" alt="logo" />
    </div>
    <ul class="nav-list v-class-resp">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">Description</a></li>
      <li><a href="#service">Packages</a></li>
      <li><a href="#contact">Contact</a></li>
      <li>
        <img id="wishlist-icon" src="images/shopping-cart.png" alt="" />
        <span id="wishlist-count">0</span>
      </li>
    </ul>
    <div class="right-nav v-class-resp">
      <input type="text" name="search" id="search" />
      <button class="btn-sm">Search</button>
    </div>
    <div class="burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </nav>

  <section class="background firstsection">
    <div class="box-main">
      <div class="firsthalf">
        <p class="bigtext">Hello there,</p>
        <p class="bigtext">
          Sometimes you just need to change your altitude.
        </p>
        <p class="smalltext">
          It's the perfect moment to adjust your mindset and aim for the peak
          of the highest mountain range in Nepal
        </p>
        <div class="buttons">
          <button class="btn">explore now</button>
          <button class="btn">Sign up</button>
        </div>
      </div>
      <div class="secondhalf">
        <img src="images/mainpic3.png" alt="" />
      </div>
    </div>
  </section>

  <!-- **************wishlist container****************** -->
  <div id="wishlist-container" class="hidden">
    <div class="wishlist-content">
      <button id="wishlist-close-btn">Close</button>

      <h2>your wishlist will be here</h2>
    </div>
  </div>

  <!-- **************************Second****************************************** -->

  <section class="explanation background3">
    <section class="secondsection">
      <div class="paras">
        <p class="sectiontag bigtext">Why Nepal</p>
        <p class="sectionsubtag smalltext">
          Tourism plays a pivotal role in Nepal's economy, serving as the
          largest industry and a vital source of foreign exchange and revenue.
          Renowned for its awe-inspiring natural landscapes, Nepal boasts
          eight of the world's highest mountains, attracting thrill-seeking
          mountaineers, rock climbers, and adventurers from around the globe.
          Additionally, the country's rich Hindu and Buddhist heritage,
          combined with its pleasant weather, adds an enticing charm that
          captivates visitors. With such diverse attractions, Nepal remains a
          captivating and sought-after destination.
        </p>
      </div>
      <div class="thumbnail">
        <img src="images/pexels-stefan-stefancik-91224.jpg" alt="" />
      </div>
    </section>
    <section class="description">
      <section class="secondsection left">
        <div class="paras">
          <p class="sectiontag bigtext">Our Plan</p>
          <p class="sectionsubtag smalltext">
            Nepal, nestled in the Himalayas, entices adventurers with its
            breathtaking mountains. Home to eight of the world's highest
            peaks, including Mount Everest, it is a dream destination for
            mountain enthusiasts. As we journey through rugged terrains, we'll
            conquer snow-capped summits like Kanchenjunga and Lhotse, soaking
            in panoramic vistas. Amidst the mountains, we'll explore ancient
            monasteries, feel the spiritual aura, and immerse ourselves in
            Nepal's rich cultural heritage. This adventure will test our
            limits, rejuvenate our souls with fresh mountain air, and create
            everlasting memories in Nepal's majestic mountains.
          </p>
        </div>
        <div class="thumbnail">
          <img src="images/pic1.jpg" alt="" />
        </div>
      </section>

      <section class="secondsection">
        <div class="paras">
          <p class="sectiontag bigtext">Future goals</p>
          <p class="sectionsubtag smalltext">
            Our unwavering goal is to conquer the majestic mountains of Nepal.
            Nestled in the Himalayas, this enchanting country is home to eight
            of the world's highest peaks, including the legendary Mount
            Everest. Through rugged terrain and treacherous paths, we will
            push our limits and rise above ourselves. Along the way, we'll
            immerse ourselves in Nepal's rich cultural heritage, explore
            ancient monasteries, and experience the spiritual essence that
            permeates these sacred lands. With each peak conquered, we will
            leave our mark on these awe-inspiring mountains and forever
            cherish the memories of our extraordinary journey.
          </p>
        </div>
        <div class="thumbnail">
          <img src="images/pic2.jpg" alt="" />
        </div>
      </section>
    </section>
  </section>
  <!-- ******product cardd******* -->

  <section class="third-section background2">
    <p class="bigtext title sectiontag bg">Our current packages</p>

    <?php foreach ($photos as $photo) : ?>

      <section class="photos">
        <div class="packages">
          <div class="product-card" style="background: rgba(0, 0, 0, 0.7) url('<?php echo $photo["file_path"]; ?>'); background-size: cover; background-blend-mode:darken; background-position: center;">
            <h2 class="product-title"><?php echo $photo["name"]; ?></h2>
            <p class="product-description">
              <?php echo $photo["description"]; ?>
            </p>
            <a href="#" class="viewmore-button">View More</a>
            <p class="product-price">$X</p>
            <button class="add-to-wish-btn">WIshlist</button>
          </div>
        </div>
      <?php endforeach; ?>
      </section>
  </section>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="images/mountain.png" alt="Logo" /> <br />
        <p>&copy; 2023 Website,All rights reserved.</p>
      </div>

      <div class="footer-contact">
        <h4>Contact Us</h4>
        <p>Email: luffymonkz13@gmail.com.com</p>
        <p>Phone: +977 9862785341</p>
      </div>
    </div>
  </footer>
  <script src="index.js"></script>
</body>

</html>