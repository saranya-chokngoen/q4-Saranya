<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>CS Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="mcss.css" rel="stylesheet" type="text/css" />
    <script src="mpage.js"></script>
  </head>

  <body>

    <header>
      <div class="logo">
        <img src="cslogo.jpg" width="200" alt="Site Logo">
      </div>
      <div class="search">
        <form>
          <input type="search" placeholder="Search the site...">
          <button>Search</button>
        </form>
      </div>
    </header>

    <div class="mobile_bar">
      <a href="#"><img src="responsive-demo-home.gif" alt="Home"></a>
      <a href="#" onClick='toggle_visibility("menu"); return false;'><img src="responsive-demo-menu.gif" alt="Menu"></a>
    </div>

    <main>
      <article>
        <h1>Article</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit libero sit amet nunc ultricies, eu feugiat diam placerat. Phasellus tincidunt nisi et lectus pulvinar, quis tincidunt lacus viverra. Phasellus in aliquet massa. Integer iaculis massa id dolor venenatis scelerisque. Morbi non eros a ex interdum molestie in eget leo. Proin pulvinar facilisis eros, sed porta ante imperdiet ut. Suspendisse tincidunt facilisis metus non faucibus. Integer posuere vehicula congue. Sed pharetra felis sapien, at imperdiet diam lacinia quis.
          <br><br>
        </p>
      </article>
      <nav id="menu">
        <h2>Navigation</h2>
        <ul class="menu">
          <li class="dead"><a>Home</a></li>
          <li><a href="./mpage1.php">All Products</a></li>
          <li><a href="./mpage2.php">Table of All Products</a></li>
          <li><a href="#">Page 03</a></li>
          <li><a href="#">Page 04</a></li>
          <li><a href="http://202.44.40.193/~cs6536331/csshop/Lab8/">Lab8</a></li>
          <li><a href="http://202.44.40.193/~cs6536331/csshop/Lab9/">Lab9</a></li>
          <li><a href="http://202.44.40.193/~cs6536331/csshop/Lab10/">Lab10</a></li>
          <li><a href="http://202.44.40.193/~cs6536331/csshop/Lab11/">Lab11</a></li>
        </ul>
      </nav>
      <aside>
        <h2>Aside</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit libero sit amet nunc ultricies, eu feugiat diam placerat. Phasellus tincidunt nisi et lectus pulvinar, quis tincidunt lacus viverra. Phasellus in aliquet massa. Integer iaculis massa id dolor venenatis scelerisque.
          <br><br>
        </p>
      </aside>
    </main>
    <footer>
      <a href="#">Sitemap</a>
      <a href="#">Contact</a>
      <a href="#">Privacy</a>
    </footer>
  </body>
</html>