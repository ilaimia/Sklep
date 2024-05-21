<!DOCTYPE html>
<html language="pl=PL">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sklep Zoologiczny</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<div id="container">

<div class="alert alert-primary">
    <strong>Uwaga!</strong> Jesteś nowym klientem? Możesz zgarnąć nawet do 15% zniżki!
</div>

<!--stopka -->
<div class="container-fluid p-2 bg-success text-white">
<div class="row justify-content-end">
        <div class="col-auto">
        <?php   
      session_start();
            if(!isset($_SESSION['user']))
              echo "<a href='zaloguj.html' class='text-light'>Zaloguj się</a>";
            else
              echo "Zalogowano jako: ".$_SESSION['user']."(<a href='wyloguj.php'class='text-light'> Wyloguj</a>)";
        ?>
        </div>
</div>
</div>

<div class="container-fluid p-5 bg-success text-white">
  <h1>Sklep zoologiczny</h1>
</div>


<!-- Menu -->

<nav class="navbar navbar-expand-sm bg-success ">

  <div class="container-fluid ">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Koty i Psy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Papugi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Akwarystyka</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Małe zwierzęta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Złóż zamówienie</a>
      </li>
    </ul>
  </div>

</nav>

<!-- Pole wyszukiwania i koszyk -->
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
<div class="container-fluid">
   
      <form class="d-flex flex-grow-1">
        <input class="form-control form-control-md me-1" type="text" placeholder="Szukaj produktów">
        <button class="btn btn-dark" type="button">Szukaj</button>
      </form>
      <ul class="navbar-nav">
      <li class="nav-item text-white">
        <a class="nav-link active" href="koszyk.php">Twój koszyk</a>
      </li>
</ul>
</nav>

<!-- Zdjęcia -->
<div class="container mt-5 bg-success">
<div class="row">

<div class="col-sm-4 my-4 text-white">
      <h4>Odkryj porady ekspertów</h4>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">      
    </div>

<div class="col-sm-4"><img class="img-fluid" src="/zoologiczny/images/p1.jpg" style="max-width: 85%;"></div>
<div class="col-sm-4"><img class="img-fluid" src="/zoologiczny/images/p2.jpg" style="max-width: 85%;"></div>
<div class="col-sm-4"><img class="img-fluid" src="/zoologiczny/images/p4.jpg" style="max-width: 85%;"></div>



<div class="col-sm-4 my-2 text-white">
      <h5>Co warto wiedzieć o kotach</h5>
    </div>
    <div class="col-sm-4 my-2 text-white">
      <h5>Jak nauczyć psa sztuczek</h5>
    </div>
    <div class="col-sm-4 my-2 text-white">
      <h5>Przed adopcją - przygotowania</h5>        
    </div>

</div>
</div>

<!-- Reszta strony -->

<div class="container-fluid p-5 mt-5 bg-secondary text-white">
  <h3>Nasze rekomendacje</h3>
</div>

<div class="container-fluid p-5 bg-warning">
<div class="row">


<div class="col-sm-4"><img class="img-fluid" src="/zoologiczny/images/o1.jpg" style="max-width: 85%;"></div>
<div class="col-sm-4"><img class="img-fluid" src="/zoologiczny/images/o2.jpg" style="max-width: 85%;"></div>
<div class="col-sm-4"><img class="img-fluid" src="/zoologiczny/images/o3.jpg" style="max-width: 85%;"></div>

<div class="col-sm-4 my-2 text-white">
      <a href="showtowary.php"><h5>Polecana karma</h5></a>
    
      <div class="btn-group btn-group-vertical flex_center" role="group">
            <button class="menu btn btn-secondary" przycisk="showpolecane.php"> Wyświetl dostępne produkty </button>
        </div>
    </div>
    <div class="col-sm-4 my-2 text-white">
      <a href="przysmaki.php"><h5>Przysmaki</h5></a>
      <div class="btn-group btn-group-vertical flex_center" role="group">
            <button class="menu btn btn-secondary" przycisk="przysmaki.php"> Wyświetl dostępne produkty </button>
        </div>
    </div>
    <div class="col-sm-4 my-2 text-white">
      <a href="podroz.php"><h5>Akcesoria, podróż</h5></a> 
      <div class="btn-group btn-group-vertical flex_center" role="group">
            <button class="menu btn btn-secondary" przycisk="podrozne.php"> Wyświetl dostępne produkty </button>
        </div>       
    </div>



</div>
</div>



    
  <div class="col-md-10 my-5" id="stronka">Wybierz kategorie, aby wyświetlić</div>
  </div>

<!--stopka -->
<div class="container-fluid p-5 bg-warning text-white">
  <h3>Stopka</h3>
</div>

</div>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jq.js"></script>
<script src="./js/app2.js"></script>
</body>
</html>
