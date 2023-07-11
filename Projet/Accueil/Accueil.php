<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Bella🍕</title>

  <link rel="Stylesheet" href="../Accueil/Styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<Script src="../Accueil/Script.js" defer></Script>

<body>

  <!-- HEADER : LE MENU DE MA PAGE -->
  <header class="header headeranim">
    <img class="navbar-brand" id="Logo" src="../Assets/Logo/La Bella.png" alt="Logo La Bella🍕">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <ul class="nav-list">
          <li class="nav-link">
            <a class="Acc" href="../Accueil/Accueil.html">Accueil</a>
          </li>
          <li class="nav-link ">
            <a class="lac" href="../Lacarte/Carte.html">La carte</a>
          </li>
          <li class="nav-link">
            <a href="../Contacts/Contacts.html">Contact</a>
          </li>
          <li class="nav-link">
            <a href="#">0769853127</a>
          </li>
        </ul>
      </div>
    </nav>

    <input id="Rechercher" type="image" src="../Assets/Icones/Group.png" alt="Boutton Rechercher">
    <input id="Recherchert" type="texte" src="../Assets/Icones/Group.png" placeholder="Rechercher par nom..."
      alt="Boutton Rechercher ">


  </header>

  <!-- MAIN : LE CORP DE MA PAGE -->

  <main>

    <!-- SLIDE 1 -->
    <!-- ------------------------------------------- -->
    <section class="carousel" aria-label="Offres">

      <ol class="carousel__viewport">

        <li id="carousel__slide1" tabindex="0" class="carousel__slide">
          <div class="SlideUn un">
            <div class="image-container">
              <img id="S1" src="../Assets/Slides/s1.png" alt="Image Veggy">
            </div>
            <div class="text-container">
              <h1 class="titreprom">La Veggie</h1>
              <button class="offre"> Une nouvelle <br>offre végétarienne </button>
            </div>
          </div>
          <a href="#carousel__slide3" class="carousel__prev">Go to last slide</a>

          <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
          </div>
        </li>

        <li id="carousel__slide2" tabindex="0" class="carousel__slide">
          <div class="SlideUn deux">
            <div class="image-container">
              <img id="S1" src="../Assets/Slides/paye.png" alt="Image Veggy">
              <div class="text-container">
                <h1 class="titreprom2">Payez par carte</h1>
                <button class="offre">Payez facilement<br>et en toute sécurité</button>
              </div>
            </div>
          </div>
          <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
        </li>

        <li id="carousel__slide3" tabindex="0" class="carousel__slide">
          <div class="SlideUn trois">
            <div class="image-container">
              <img id="S1" src="../Assets/Slides/piz.png" alt="Image Veggy">
              <div class="text-container">
                <h1 class="titreprom">Des prix fondent</h1>
                <button class="offre">Pizza 4 fromages<br>à seulement 10€</button>
              </div>
            </div>
          </div>
          <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide1" class="carousel__next">Go to next slide</a>
        </li>

      </ol>

      <aside class="carousel__navigation">
        <ol class="carousel__navigation-list">
          <li class="carousel__navigation-item">
            <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
          </li>

        </ol>
      </aside>
    </section>
    <!-- ---------------------------------------------------- -->
    <!-- PROPOTIONS -->

    <div class="container">
      <!-- PROM O1 -->
      <div class="promoVert promojs">
        <div class="Imgpromo1">
          <img id="imgpro1" src="../Assets/Images/unite.png" alt="image pizza">
        </div>
        <div class="txtpromo1">
          <p class="titre1 pos11">Promotion</p>
          <p class="jours posjj">Les Mardis</p>
          <p class="promotexte pospp">Ne manquez pas notre promotion <br> pizza à moitié prix !</p>
          <p class="prix posprr"><strong>7.00€</strong></p>
          <button class="buttonpro buttposs">Commander</button>
        </div>
      </div>
      <!-- PROM O2 -->

      <div class="PromoRouge promojs">
        <div class="Imgpromo2">
          <img id="imgpro2" src="../Assets/Images/double.png" alt="image pizza double">
        </div>
        <div class="txtpromo2">
          <p class="titre1 pos1">Promotion</p>
          <p class="jours posj">Les vendredis</p>
          <p class="promotexte posp">3 pizzas Maxi achetées</p>
          <p class="prix pospr">La 3ème à <span>3.00€</span></p>
          <button class="buttonpro buttpos">Commander</button>
        </div>
      </div>

    </div>

    <!-- NOS PIZZA -->

    <p class="nosPizza" id="tnpizz">NOS PIZZA</p>

    <div class="container-nav2 ">
      <!-- MENU -->
      <button class="b btnch">Base tomate</button>
      <button class="b btnch">Base creme fraiche</button>
      <button class="b btnch">Base chocolat</button>
    </div>

    <!-- Articles -->
    <section id="possibliities">
      <div class="wrapper">
        <!-- ....................................................... -->
        <article class="ChoixPizza"
          style="background-image: url(../Assets/Images/4.png);background-size: cover;background-repeat: no-repeat; background-position: 0 -50px; overflow: hidden;">
          <div class="overlay">
            <p class="Npizz">Napolitaine</p>
            <p class="txtpiuzz">Base tomate, fromage, olives vertes, olives noires…</p>
            <p class="prixpuizz">6.00€</p>
            <a class="btnpuz" href="#">Commander</a>
          </div>
        </article>
        <!-- ....................................................... -->
        <article class="ChoixPizza"
          style="background-image: url(../Assets/Images/6.png);background-size: 500px;background-repeat: no-repeat;background-position: 0 -50px;overflow: hidden;">
          <div class="overlay">
            <p class="Npizz">Olivia</p>
            <p class="txtpiuzz">Base tomate, fromage, olives vertes, olives noires…</p>
            <p class="prixpuizz">6.00€</p>
            <a class="btnpuz" href="#">Commander</a>
          </div>
        </article>
        <!-- ....................................................... -->
        <article class="ChoixPizza"
          style="background-image: url(../Assets/Images/8.png);background-size: cover;background-repeat: no-repeat;overflow: hidden;">
          <div class="overlay">
            <p class="Npizz">4 saisons</p>
            <p class="txtpiuzz">Base tomate, fromage, olives vertes, olives noires…</p>
            <p class="prixpuizz">6.00€</p>
            <a class="btnpuz" href="#">Commander</a>
          </div>
        </article>
        <!-- ....................................................... -->
        <article class="ChoixPizza"
          style="background-image: url(../Assets/Images/7.png); background-size: cover; background-repeat: no-repeat;overflow: hidden;">
          <div class="overlay">
            <p class="Npizz">Margarita</p>
            <p class="txtpiuzz">Base tomate, fromage, olives vertes, olives noires…</p>
            <p class="prixpuizz">6.00€</p>
            <a class="btnpuz" href="#">Commander</a>
          </div>
        </article>

      </div>
    </section>

  </main>


  <!-- FOOTER : LE PIED DE PAGE -->
  <footer>


    <!-- Carte de fidelité -->

    <div id="cdf">
      <article class="Lacdf">
        <div class="backbtnc">
          <a class="btncdf" href="">Carte de fidélité disponible</a>
        </div>
      </article>
    </div>

    <!-- MAPS -->

    <div class="maps">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2931.2086861525354!2d1.4062763729617191!3d38.88952874121661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12994550e186d8d7%3A0x75cdf6d8bdfc6e4e!2sBaloo%20Ibiza!5e0!3m2!1sfr!2sfr!4v1685970551938!5m2!1sfr!2sfr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- fORMULAIRE -->
    <form action="" id="formuilaire">


      <label for="Nom">
        <input class="in" type="text" name="Nom" placeholder="Nom">
      </label>


      <label for="E-Mail">
        <input class="in" type="text" name="E-Mail" placeholder="E-Mail">
      </label>


      <label for="Sujet">
        <input class="in" type="text" name="Sujet" placeholder="Sujet">
      </label>

      <textarea name="" id="" cols="30" rows="5"></textarea>
      <button id="Envoye">ENVOYER</button>
    </form>



    <!--LE PIED DE PAGE -->
    <div id="SocialMedia">
      <a href="#" target="_blank" class="Snap"></a>
      <a href="#" target="_blank" class="Tweet"></a>
      <a href="#" target="_blank" class="YT"></a>
      <a href="www.facebook.com" target="_blank" class="Fb"></a>
      <a href="#" target="_blank" class="Insta"></a>
      <a href="#" target="_blank" class="Tiktok"></a>

    </div>

    <div id="end">
      <div class="ca">
        <p class="ttt"> <strong>LIENS UTILES</strong> </p>
        <p class="thinstxt">
          Mentions légales <br>
          Politique de cookies<br>
          Politique de données<br>
          Conditions Générales<br>
          Copyright </p>
      </div>

      <div class="cb">
        <p class="ttt"> <strong>HORAIRES D'OUVERTURE</strong> </p>
        <p class="thinstxt">Du dimanche au jeudi<br>
          de 11h à 14h et de 18h à 23h.<br>
          et du vendredi au samedi<br>
          de 18h à 00h.</p>
      </div>

    </div>
  </footer>
</body>

</html>