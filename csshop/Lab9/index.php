<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>CS Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../mcss.css" rel="stylesheet" type="text/css" />
    <script src="mpage.js"></script>
    <style>
    article {
      padding: 25px ;
      }
</style>
  </head>

  <body>

    <header>
      <div class="logo">
        <img src="../cslogo.jpg" width="200" alt="Site Logo">
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
      <h3> Lab9w5 </h3>
      <?php include 'lab9w5.php' ?><br>
      <h3> Lab9w6 </h3>
      <?php include 'lab9w6.php' ?><br>
      <h3> Lab9w7 </h3>
      <?php include 'lab9w7.php' ?><br>
      <h3> Lab9w8 </h3>
      <?php include 'lab9w8.php' ?><br>
      <h3> Lab9w9 </h3>
      <?php include 'lab9w9.php' ?><br>

        
      </article>
      <?php include '../component/nevbar.php' ?>
      <aside>
        <h2>Aside</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit libero sit amet nunc ultricies, eu feugiat diam placerat. Phasellus tincidunt nisi et lectus pulvinar, quis tincidunt lacus viverra. Phasellus in aliquet massa. Integer iaculis massa id dolor venenatis scelerisque.
          <br><br>
        </p>
      </aside>
    </main>
    <?php include '../component/footer.php' ?>
  </body>
</html>