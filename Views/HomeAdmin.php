<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="HomeAdminStyle.php">
</head>
<body>
  <header><a href="HomeAdmin.php">MuseumEX</a></header>
<div class="navbar">
    <a href="HomeAdmin.php">HOME</a>
    <div class="dropdown">
      <button class="dropbtn">DASHBOARD
      </button>
      <div class="dropdown-content">
        <a href="UsersDashboard.php">Users</a>
        <a href="MessagesDashboard.php">Messages</a>
        <a href="ProductsDashboard.php">Products</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">MUSEUMS
      </button>
      <div class="dropdown-content">
        <a href="Admin/Louvre.php">Louvre Museum</a>
        <a href="Admin/Uffizi.php">Uffizi Gallery</a>
        <a href="Admin/BM.php">The British Museum</a>
        <a href="Admin/MMA.php">The Museum of Modern Art</a>
      </div>
    </div>
    <a href="Admin/AboutUsAdmin.php">ABOUT US</a> 
    <a href="Logout.php">LOG OUT</a>
  </div>
  <div class="slider-container">
    <div class="slider">
      <div class="slides">
        <div id="slides__1" class="slide">
          <span class="slide__text">
            <img src="first.jpg" alt="">
          </span>
          <a class="slide__prev" href="#slides__4" title="Next"></a>
          <a class="slide__next" href="#slides__2" title="Next"></a>
        </div>
        <div id="slides__2" class="slide">
          <span class="slide__text">
            <img src="second.jpg" alt="">
          </span>
          <a class="slide__prev" href="#slides__1" title="Prev"></a>
          <a class="slide__next" href="#slides__3" title="Next"></a>
        </div>
        <div id="slides__3" class="slide">
          <span class="slide__text">
            <img src="third.jpg" alt="">
          </span>
          <a class="slide__prev" href="#slides__2" title="Prev"></a>
          <a class="slide__next" href="#slides__4" title="Next"></a>
        </div>
        <div id="slides__4" class="slide">
          <span class="slide__text">
            <img src="fourth.jpg" alt="">
          </span>
          <a class="slide__prev" href="#slides__3" title="Prev"></a>
          <a class="slide__next" href="#slides__1" title="Prev"></a>
        </div>
      </div>
      <div class="slider__nav">
        <a class="slider__navlink" href="#slides__1"></a>
        <a class="slider__navlink" href="#slides__2"></a>
        <a class="slider__navlink" href="#slides__3"></a>
        <a class="slider__navlink" href="#slides__4"></a>
      </div>
    </div>
  </div>
  <div class="text-container">
  <h1 class="museum-header">MUSEUMS</h1>
  <p class="museum-paragraph">“The best introduction to art is to stroll through a museum. </br> The more art you see, the more you'll learn to define your own taste.”</p>
  </div>
  <div class="pages">
    <p class="first-line"></p>
    <p id="page-main-title">MUSEUMS</p>
    <p class="second-line"></p>
    <ul class="articles">
      <li id="first-article">
        <h1>Louvre Museum</h1>
        <img src="Louvre-museum-paris.jpg" alt="">
        <p>The Louvre or the Louvre Museum  is the world's most-visited museum, and an historic landmark in Paris, France.</p>
        <a href="Admin/Louvre.php">Read more</a>
      </li>
      <li id="second-article">
        <h1>Uffizi Gallery</h1>
        <img src="3.jpg" alt="">
        <p>The Uffizi Gallery is a prominent art museum located adjacent to the Piazza della Signoria in the Historic Centre of Florence in Italy. </p>
        <a href="Admin/Uffizi.php">Read more</a>
      </li>
      <li id="third-article">
        <h1>The British Museum</h1>
        <img src="2.jpg" alt="">
        <p>The British Museum is a public museum dedicated to human history, art and culture located in the Bloomsbury area of London.</p>
        <a href="Admin/BM.php">Read more</a>
      </li>
      <li id="fourth-article">
        <h1>The Museum of Modern Art</h1>
        <img src="article.jpg" alt="">
        <p>The Museum of Modern Art (MoMA) is an art museum located in Midtown Manhattan, New York City, on 53rd Street.</p>
        <a href="|Admin/MMA.php">Read more</a>
      </li>
      </ul>
  </div>
  <footer>
    <a href="https://www.facebook.com/"><img src="facebook.logo.png" alt="facebook"></a>
    <a href="https://www.instagram.com/"><img src="Instagram.logo.png" alt="instagram"></a>
    <a href="https://github.com/"><img src="github.logo.png" alt="github"></a>
   </footer>
  </body>
</html>