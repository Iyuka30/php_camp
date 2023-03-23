<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/13867740db.js" crossorigin="anonymous"></script>
  <!-- メインフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
  <!-- その他フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <!-- 3 フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
  <title>Document</title>
  
</head>
<body>
  <header class="header">
    <div class="header-left">
      <img class="header-img" src="img/takibi.png" alt="takibi">
    </div>
    <nav class="header-nav">
      <a href="#">HOME</a>
      <a href="#spot">SPOT</a>
      <a href="#pickup">PICKUP</a>
      <a href="#contact">CONTACT</a>
    </nav>
    </div>
  </header>
  <main>
    <!------------- メイン画像 ------------->
    <section class="title wrapper">
      <div class="kv">
        <img src="img/tento.jpeg" alt="tento">
        <h1>そうだ、<br><span>キャンプへ行こう。</span></h1>
        <!-- <h1><span></span></h1> -->
      </div>
    </section>

    <!------------- おすすめキャンプサイト ------------->
    <section class="spot wrapper">
      <a name="spot"></a>
      <h1>- - -   おすすめキャンプサイト<span>3</span>選  - - -</h1>
      <div class="spot-box">
        <div class="madarao">
          <h2 id="spot-text">長瀞オートキャンプ場</h2>
          <a href="https://www.nagatoro-camp.com/"><img class="madarao-img" src="img/madarao.jpg" alt="madarao"></a>
        </div>
        <div class="kinarinosato">
          <h2 id="spot-text">きなりの郷</h2>
          <a href="https://kinarinosato.net/"><img class="kinarinosato-img" src="img/kinarinosato.jpg" alt="kinarinosato"></a>
        </div>
        <div class="thefarm">
          <h2 id="spot-text">THE FARM</h2>
          <a href="https://www.thefarm.jp/"><img class="thefarm-img" src="img/thefarm.jpeg" alt="thefarm"></a>
        </div>
      </div>
    </section>

    <!------------- おすすめギア＆レシピ ------------->
    <section class="pickup wrapper">
      <a name="pickup"></a>
      <div class="pickup-btn">
        <a href="">おすすめキャンプギア</a>
        <a href="">おすすめキャンプレシピ</a>
      </div>
    </section>
  
    <!------------- お問い合わせ ------------->
    <section class="contact" id="wrapper">
      <a name="contact"></a>
      <h1>- - - Contact us - - -</h1>
      <form action="check.php" method="POST">
        <div>
          <label for="">Your name*</label>
          <input type="text" name="name" repuired>
        </div>
        <div>
          <label for="">Your email*</label>
          <input type="email" name="email" repuired>
        </div>
        <div>
          <label for="">Your message*</label>
          <textarea cols="40" rows="5" name="message"></textarea>
        </div>
        <input type="submit" value="Send your message!">
      </form>
    </section>
    <footer>
      <div class="footer-sns">
        <ul class="sns-navi">
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
        </ul>
      </div>
    </footer>
  </main>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>