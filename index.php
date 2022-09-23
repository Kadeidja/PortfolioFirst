<?php 
include 'php/indexfunctionportfoliov1.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="icon" href="#" /><!-- icone du  site -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@900&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/style.css"/>
 <title>PORTFOLIO | CISSE Kadidja</title>
 <!-- import the webpage's stylesheet -->
</head>
<body>
 <!-- this is the start of content -->

 <!--              LE MENU                  -->
 <nav class="navbar navbar-expand-md fixed-top" role="navigation">
  <div class="container-fluid navbar-header">
   <a class="navbar-brand" href="#">KADIDJA</a>
   <!-- HAMBURGER -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse navlist" id="navbarNavAltMarkup">
    <!--LISTE DE MENU-->
    <?php
    $menuportv1top = get_menuportv1();
    if(is_array($menuportv1top)|| is_object($menuportv1top))
    {
     foreach ($menuportv1top as $menuportv1show){
      ?>
      
      <ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
        <a href=#<?= $menuportv1show->lienmenuportv1?> class="nav-link <?= $menuportv1show->ID?>">
         <?= $menuportv1show->titremenuportv1?> 
        </a>
       </li>
      </ul>
    <!-- MENU EN HTML
    <li class="nav-item"><a class="nav-link" href="#quisuisje">Qui Suis-Je</a></li>
   -->
   <?php 
  }
 }
 ?>
 <!--BARRE DE RECHERCHE-->
 <form class="d-flex">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
 </form>
</div>
</div>

</nav>
<!--              ACCUEIL                  -->
<section id="accueil">
 <div class="row">
  <div class="col">
   <h1 class="titlepage">
    ACCUEIL
   </h1>
  </div>
  <div class="col">
   <img src="https://cdn.glitch.global/d69fb3e0-5705-492e-aa2d-b9476efa6a28/imessaie.jpg?v=1643158967809">
  </div>
  <div class="col ">
   <div>
    <h1>
     CISSE KADIDJA
    </h1>
   </div>
   <div>
    <h3>
     En reprise d'études...
    </h3>
   </div>
  </div>        
 </div>
</section>
<!--              QUI SUIS JE                  -->
<section id="quisuisje">
 <div class="row">
  <div class="col">
   <h1 class="titlepage" >
    QUI SUIS JE ?
   </h1>
  </div>
  <div class="col quisuisjeportrait">

  </div>
  <div class="col quisuisjeresumeprogression">
   <div class="quisuisjeresume">
    <p>
     Je suis Kadidja, 24 ans.
     Actuellement en service civique, je suis à la recherche d'une alternance
     en developpement Web. <br>
     Me permettant d'acquérir un savoir-être et savoir-faire professionnel.<br>
     Et je souhaite à la suite de mes études, exercer en tant que Developpeuse Web <br>
    </p>
   </div>
   <div class="quisuisjeprogression">
    <ul>
     <li>

      <div class="lescaseProgression">
       <div class="logoprogression">
        <img src="wsimg/htm.png" alt="logo html">
       </div>
       <div class="barrecontenuprogression">
        <div class="barreprogression">
         <div class="contenuprogressionhtml">
         </div>
        </div>
       </div>
      </div>
     </li>

     <li>
      <div class="logoprogression" >
       <img src="wsimg/CSS3LOGO.svg" alt="logo css" >
      </div>
      <div class="barrecontenuprogression">
       <div class="barreprogression">
        <div class="contenuprogression contenuprogressioncss">
        </div>
       </div>
      </div>
     </li>
     <li>
      <div class="logoprogression">
       <img src="wsimg/BOOTSTRAPLOGO.svg" alt="logo bootstrap">
      </div>
      <div class="barrecontenuprogression">
       <div class="barreprogression">
        <div class="contenuprogression contenuprogressionbootstrap">

        </div>
       </div>
      </div>
     </li>
     <li>
      <div class="logoprogression">
       <img src="wsimg/PHPLOGO.svg" alt="logo php">
      </div>
      <div class="barrecontenuprogression">
       <div class="barreprogression">
        <div class="contenuprogression contenuprogressionphp">

        </div>
       </div>
      </div>
     </li>
     <li>
      <div class="logoprogression">
       <img src="wsimg/JAVASCRIPTLOGO.svg" alt="logo javascript">
      </div>
      <div class="barrecontenuprogression">
       <div class="barreprogression">
        <div class="contenuprogression contenuprogressionmysql">
        </div>
       </div>
      </div>
     </li>
    </ul>
   </div>
  </div>

 </div>

</section>
<!--              MON PARCOURS                  -->
<section id="monparcours">
 <div class="row" >
  <div class="col">
   <h1 class="titlepage">
    MON PARCOURS
   </h1>
  </div>
  <div class="col-9" id="colonneParcours">
   <div class="col-3">
    <div class = "lilSquareAudio">
     <div class="align-self-start cparcours cparcourscinq cbleu">
      <img src="https://cdn.glitch.global/d69fb3e0-5705-492e-aa2d-b9476efa6a28/ordinare.png?v=1643158971751">
      <h3 class="datetitle">
       2012-2015
      </h3>
      <audio controls src="wsaudio/kadeidja - portfoliop2012 2015.m4a" id="audioEcouter"></audio>

     </div>

     <section id="summaryParcours">
      <div>
       <img src="" alt="" class="imgdisplayParcours">
       <audio src=""></audio>
      </div>
      <div>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Delectus esse eligendi nesciunt, numquam qui voluptatem 
        inventore amet ullam iure blanditiis dicta repudiandae sit tempore, 
        laboriosam ipsa.
       Voluptatem, sunt neque! Tempore?</p>
      </div>
     </section>
    </div>
    <!--         -->
    <div class = "lilSquareAudio">
     <div class="align-self-end cparcours cparcoursquatre crouge">
      <img src="https://cdn.glitch.global/d69fb3e0-5705-492e-aa2d-b9476efa6a28/ordinare.png?v=1643158971751">
      <h3 class="datetitle">
       2015-2017
      </h3>
      <audio controls src="wsaudio/kadeidja - portfoliop2015 2017.m4a"></audio>
     </div>
    </div>
    <section id="summaryParcours2">
     <div>
      <img src="" alt="" class="imgdisplayParcours">
      <audio src=""></audio>
     </div>
     <div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Delectus esse eligendi nesciunt, numquam qui voluptatem 
       inventore amet ullam iure blanditiis dicta repudiandae sit tempore, 
       laboriosam ipsa.
      Voluptatem, sunt neque! Tempore?</p>
     </div>
    </section>
   </div>
   <!--         --> 
  </div>
  <div class="col-3">
   <div class = "lilSquareAudio">
    <div class="align-self-center cparcours cparcourstrois crouge">
     <img src="https://cdn.glitch.global/d69fb3e0-5705-492e-aa2d-b9476efa6a28/ordinare.png?v=1643158971751">
     <h3 class="datetitle">
      2017-2019
     </h3>
     <audio controls src="wsaudio/kadeidja - portfoliop2017 2018.m4a"></audio>
    </div>
    <section id="summaryParcours">
     <div>
      <img src="" alt="" class="imgdisplayParcours">
      <audio src=""></audio>
     </div>
     <div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Delectus esse eligendi nesciunt, numquam qui voluptatem 
       inventore amet ullam iure blanditiis dicta repudiandae sit tempore, 
       laboriosam ipsa.
      Voluptatem, sunt neque! Tempore?</p>
     </div>
    </section>
   </div>
   <!--         -->
  </div>
  <div class="col-3">
   <div class = "lilSquareAudio">
    <div class="align-self-start cparcours cparcoursun cbleu" >
     <img src="https://cdn.glitch.global/d69fb3e0-5705-492e-aa2d-b9476efa6a28/ordinare.png?v=1643158971751">
     <h3 class="datetitle">
      2019-2021
     </h3>
     <audio controls src="wsaudio/kadeidja - portfoliop2019 2021.m4a"></audio>
    </div>
   </div>
   <!--         -->
   <div class = "lilSquareAudio">
    <div class="align-self-end cparcours cparcoursdeux cjaune ">
     <img src="https://cdn.glitch.global/d69fb3e0-5705-492e-aa2d-b9476efa6a28/ordinare.png?v=1643158971751">
     <h3 class="datetitle">
      2021-2022
     </h3>
     <audio controls src="wsaudio/kadeidja - portfoliop2021 2022.m4a"></audio>
    </div>
   </div>
   <!--         -->
  </div>
 </div>


</div>
</section>
<!--              MON PORTFOLIO                  -->
<section id="monportfolio">
 <div class="row">
  <div class="col-sm">
   <h1 class="titlepage" >
    MON PORTFOLIO
   </h1>
  </div>
  <!---------------------------------PREMIER PROJET--------------------------------->
  <div class="col">
   <button class="row lecarre crouge" id="portfolionum1" >
    here
   </button>
   <div class="row">
    <p>
     Lors de mon dernier semestre , j'ai pu exercer en tant que Web Designer.
     Ce qui m'a permis de retravailler l'image du site web de la boutique YESOOO...
    </p>
   </div>
   <div class="row">
    <a href="projet/lachaise/indexlachaise.html">
     <iframe src="projet/lachaise/indexlachaise.html" frameborder="0"></iframe>
    </a>
   </div>
  </div>
  <div id="myModal" class="modal">
   <!-- Boutton Fermer -->
   <span class="close">&times;</span>

   <!-- Contenu du Modal -->
   <section class="modal-content" id="portfolio01">
    <iframe src="projet/lachaise/indexlachaise.html"  frameborder="1" class="ifrascroll">
    </iframe>
   </section>
  </div>

  <!---------------------------------SECOND PROJET--------------------------------->
  <div class="col">
   <div class="row">
    <iframe src="projet/foodbus/index.html" frameborder="0"></iframe>
   </div>
   <div class="row">
    <p>
     A l'issu d'un projet en groupe qui consistait à développer une entreprise, 
     il nous a été demandé de réaliser un site statique qui représentais notre idée. 
     Dans notre cas, un restaurant ambulant pour les étudiants...
    </p>
   </div>
   <button class="row lecarre cjaune modalBTN" id="portfolionum2" >
   </button>
  </div>
  <div id="myModal2" class="modal">
   <!-- Boutton Fermer -->
   <span class="close">&times;</span>

   <!-- Contenu du Modal -->
   <section class="modal-content" id="portfolio02">
    <iframe src="projet/foodbus/index.html"  frameborder="1" class="ifrascroll">
    </iframe>
   </section>
  </div>
  <!---------------------------------TROISIEME PROJET--------------------------------->
  <div class="col">
   <button class="row lecarre crouge modalBTN" id="portfolionum3">
   </button>
   <div class="row">
    <p>
     Lors de mon dernier semestre , j'ai pu exercer en tant que Web Designer.
     Ce qui m'a permis de retravailler l'image du site web de la boutique YESOOO...
    </p>
   </div>
   <div class="row">
    <a href="projet/portfolioyesooo.html">
     <iframe src="projet/yesooo/maquettesyesooo.pdf" frameborder="0"></iframe>
    </a>
   </div>
  </div>
  <div id="myModal3" class="modal">
   <!-- Boutton Fermer --> 
   <span class="close close3" id ="closingbutton3">&times;</span>

   <!-- Contenu du Modal -->
   <section class="modal-content" id="portfolio03">
    <iframe src="projet/yesooo/maquettesyesooo.pdf"  frameborder="1" class="ifrascroll">
    </iframe>
   </section>
  </div>

 </div>

</section>
<!--Lien pour les carrés de couleur https://www.benjaminsimier.com/css-obtenir-un-carre-responsive/-->
<!--              ME CONTACTER                  -->
<section id="mecontacter">
 <div class="row">
  <div class="col-sm">
   <h1 class="titlepage">
    ME CONTACTER
   </h1>
  </div>

  <div class="col">
   <form>
    <fieldset>
     <legend>SI VOUS SOUHAITEZ M'ECRIRE C'EST ICI</legend>
     <label for="fname">Nom et Prenom :</label>
     <input type="text" id="nometprenom" name="nometprenom" value="Nom et Prenom"><br><br>
     <label for="email">Entrer votre adresse mail:</label>
     <input type="email" id="email" name="email"><br><br>
     <textarea class="mecontactermessage" name="message">
      Dites-moi tout...
     </textarea><br><br>
     <button>
      Envoyer
     </button>
    </fieldset>
   </form>
  </div>
 </div>
</section>
<!--              ME CONTACTER                  -->
<footer>
 <div class="footerlogo">
  <ul>
   <li><a href="https://www.linkedin.com/in/kadidja-cisse-075671195/"><img src="wsimg/LINKEDINLOGO.png" alt="logo linkedInd"></a></li>
   <li><img src="wsimg/CODEWARSLOGO.svg" alt="logo Codewars"></li>
   <li><img src="" alt=""></li>
   <li><img src="" alt=""></li>
  </ul>
 </div>
</footer>
<script src="js/script.js"></script>
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
</body>
</html>