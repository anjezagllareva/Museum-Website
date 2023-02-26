<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum</title>
    <link rel="stylesheet" href="HomeStyle.php">
</head>
<body>
  <header><a href="Home.php">MuseumEX</a></header>
<div class="navbar">
    <a href="Home.php">HOME</a>
    <a href="Contact.php">CONTACT US</a>
    <a href="AboutUs.php">ABOUT US</a>
    <a href="Login.php">LOGIN</a> 
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
        <a href="Login.php">Read more</a>
      </li>
      <li id="second-article">
        <h1>Uffizi Gallery</h1>
        <img src="3.jpg" alt="">
        <p>The Uffizi Gallery is a prominent art museum located adjacent to the Piazza della Signoria in the Historic Centre of Florence in Italy. </p>
        <a href="Login.php">Read more</a>
      </li>
      <li id="third-article">
        <h1>The British Museum</h1>
        <img src="2.jpg" alt="">
        <p>The British Museum is a public museum dedicated to human history, art and culture located in the Bloomsbury area of London.</p>
        <a href="Login.php">Read more</a>
      </li>
      <li id="fourth-article">
        <h1>The Museum of Modern Art</h1>
        <img src="article.jpg" alt="">
        <p>The Museum of Modern Art (MoMA) is an art museum located in Midtown Manhattan, New York City, on 53rd Street.</p>
        <a href="Login.php">Read more</a>
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