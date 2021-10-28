
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Josefin+Sans:300,400,600,700|Nunito:300,400,600,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="css/6-1-6.css">
    <title>Document</title>
</head>
<body>
    <!--Navbar-->
    <div class="hum">

        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <button type="button" id="navbtn"></button>

    </div>

  
  <header class="header">
    <div class="nail">
      <p>Nail</p>
    </div>
  
    <div class="icon">
      <span class="material-icons">person_outline</span>
    </div>
  </header>
  
  <section class="book">
    <div class="first">
      <button type="button" class="main-btn" onclick="location.href='index.php'">Book</button>
      <!-- <a class="main-btn"　 href="index.php">Book</a> -->
    </div>
  </section>
  
  <section class="text">
    <div class="text-1">
      <p class="brown">Featured <span class="og">Nail</span> Services </p>
      <p class="white">Make your nails perfect </p>
    </div>
  </section>
  
  <section class="gallery">
    <div class="cards-wrapper">
      <div class="card">
        <div class="card-overlay">
          <p class="card-overlay-heading">Manicures</p>
          <button type="button" class="card-overlay-btn">view</button>
        </div>
        <img src="img/m.jpg" class="card-img" />
      </div>
      <div class="card">
        <div class="card-overlay">
          <p class="card-overlay-heading">Pedicures</p>
          <button type="button" class="card-overlay-btn">view</button>
        </div>
        <img src="img/f.jpg" class="card-img" />
      </div>
      <div class="card">
        <div class="card-overlay">
          <p class="card-overlay-heading">Nail Enhancements</p>
          <button type="button" class="card-overlay-btn">view</button>
        </div>
        <img src="img/s.jpg" class="card-img" />
      </div>
      <div class="card">
        <div class="card-overlay">
          <p class="card-overlay-heading">Nail Art</p>
          <button type="button" class="card-overlay-btn">view</button>
        </div>
        <img src="img/a.jpg" class="card-img" />
      </div>  
    </div>
  </section>

  
<dir class="title">
    <p>Information</p>
</dir>
  <section class="info">
      <div class="box">

          <div class="box1">
              <p class="h-line">Location</p>
              <p class="s-line">
                  59 Queen St, <br>
                  Toronto, ON 10002
                </p>
            </div>
            <div class="box2">
                <p class="h-line">Hours</p>
                <p class="s-line">
                    Tuesday, Wednesday : 9am - 5pm <br>
                    Thuesday, Friday : 9am - 6pm <br>
                    Saturday : 9am - 4pm
                </p>
            </div>
            <div class="box3">
                <p class="h-line">Contact</p>
                <p class="s-line">
                    +1(446)-113-1997 <br>
                    email.com
                </p>
            </div>
            
            
        </div>
            
    </section>
  
  
 
  
  <section class="get">
    <div class="inspired">
      <p>Get Inspired</p>
    </div>
    <div class="inst">
      <a class="box" href="#"><img src="/images/1.JPG" alt=""></a>
      <a class="box" href="#"><img src="/images/2.JPG" alt=""></a>
      <a class="box" href="#"><img src="/images/3.JPG" alt=""></a>
    </div>
    <button type="button" class="vi-btn">VIEW MORE</button>
  </section>

  
  
 
  
  <!--Footer-->
  <footer class="footer">
    <div class="newsletter">
      <h3 class="center">JOIN THE FINE CREW</h3>
      <p class="deals">Insider info on new arrivals, early access, and everything fine.</p>
      <form>
      <input class="email" type="text" placeholder="Email address">
      <input class="submit" type="submit" value="SUBSCRIBE">
      </form>
    </div>
    <div class="footer-social-media">
      <ul class="social-media">
        <li class="social-media-item">
          <a href="#" class="social-media-link">
            <i class="fab fa-facebook-square"></i>
          </a>
        </li>
        <li class="social-media-item">
          <a href="#" class="social-media-link">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="social-media-item">
          <a href="#" class="social-media-link">
            <i class="fab fa-google-plus-square"></i>
          </a>
        </li>
        <li class="social-media-item">
          <a href="#" class="social-media-link">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
  
  </footer>

  <script type="text/javascript" src="main.js"></script>
</body>
</html>