<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>c-project!</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/ask-us.css" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="icon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="icon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="icon/favicon-16x16.png"
    />
    <link rel="manifest" href="icon/site.webmanifest" />
  </head>
  <body>
    <header id="main-header">
      <a href="index.html" id="logo">c-project</a>
      <nav>
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="thethings.html">The Things</a>
          </li>
          <li>
            <a href="massage.html">Ticket</a>
          </li>
        </ul>
      </nav>
      <a href="#side-drawer" class="menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </header>
    <aside id="side-drawer">
      <header>
        <a href="#" class="menu-btn">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </header>
      <nav>
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="thethings.html">The Things</a>
          </li>
          <li>
            <a href="massage.html">Ticket</a>
          </li>
        </ul>
      </nav>
    </aside>
    <main id="askus-main">
      <h1 id="askus">Ask <span id="askus-span">Us!</span></h1>
      <form id="f_search" name="f_search" action="askus.php" method="post">
        <input type="textarea" name="search" id="search" />
        <input type="submit" value="Submit" name="submit" id="submit" />
        <input type="reset" value="Reset" name="reset" id="reset" />
      </form>
    </main>
  </body>
</html>

<?php
$search = $_POST['search'];

if($search == "nama" || $search == "Nama")
{
  echo "<div id=\"styling\"> Us Answer: </div>";
  echo "<div id=\"styling_top\"> Nama program ini adalah Ask Us Program, tanyakan apapun! </div>";
}

if($search == "hobi" || $search == "Hobi")
{
  echo "<div id=\"styling\"> Us Answer: </div>";
  echo "<div id=\"styling_top\"> Mendampinginya seumur hidupku dongg! </div>";
}

if($search == "umur" || $search == "Umur")
{
  echo "<div id=\"styling\"> Us Answer: </div>";
  echo "<div id=\"styling_top\"> Umurnya baru 3 bulan sih, doain aja seumur hidup yaa!! </div>";
}

if($search == "help" || $search == "Help")
{
  echo "<div id=\"styling\"> Command List:\n </div>";
  echo "<div id=\"styling_top\"> Nama\n </div>";
  echo "<div id=\"styling_top\"> Umur\n </div>";
  echo "<div id=\"styling_top\"> Hobi\n </div>";
  echo "<div id=\"styling_top\"> Selain itu belum ada nihh:(( </div>";
}
