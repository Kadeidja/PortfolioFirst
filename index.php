<<<<<<< HEAD
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
=======
<?php
include 'php/indexfunctionportfolio.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="#" /><!-- icone du  site -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@900&display=swap" rel="stylesheet">

	<title>PORTFOLIO | CISSE Kadidja</title>
	<!-- import the webpage's stylesheet -->
</head>

<body>
	<!-- this is the start of content -->

	<!--              LE MENU                  -->
    <nav>
      
      <div id="btnBranding">
        <a href="#accueil">KADIDJA</a>
      </div>
      
      <div id="leMenuNav">
		<?php
				$menuportv1top = get_menuportv1();
				if (is_array($menuportv1top) || is_object($menuportv1top)) {
					foreach ($menuportv1top as $menuportv1show) {
						?>
        <ul id="listMenuNav">
          <li class="listMenuNavItem">
			<a href="#<?= $menuportv1show->lienmenuportv1 ?>" class=" <?= $menuportv1show->ID ?>">
			  <?= $menuportv1show->titremenuportv1 ?>
			</a>
		  </li>
        </ul>
		<?php
					}
				}
				?>
      </div>
      
    </nav>




	<!--              ACCUEIL                  -->
	<section id="accueil">
		<div class="row">
			<div class="col accueilTitle">
				<h1 class="titlepage">
					ACCUEIL
				</h1>
			</div>
			<div class="col portraitAuteure">
				<img src="wsimg/defaultportrait.jpg" alt="Portrait de l'auteur du Portfolio">
			</div>
			<div class="col ">
				<div class="nomAuteure">
					<h1>
						CISSE KADIDJA
					</h1>
				</div>
				<div class="lilIntro">
					<h3 >
						En reprise d'études...
					</h3>
				</div>
			</div>
		</div>
	</section>
	<!--              QUI SUIS JE                  -->
	<section id="quisuisje">
		<div class="rowDeQuiSuisJe">
			<div class="bigtitlepage">
				<h1 class="titlepage">
					QUI SUIS JE ?
				</h1>
			</div>
			<div class="col pageQuiSuisJe quisuisjeresumeprogression">
			<div class="colonneQuiSuisJe quisuisjeportrait"></div>
				<div class="col colonneQuiSuisJe quisuisjeresume pbold">
					<p>
						Je suis Kadidja, 24 ans.
						Actuellement je suis à la recherche d'une alternance
						en developpement Web pour la rentrée de Septembre 2022. <br>
						Ce cursus me permettrait d'avoir une transition entre l'univers scolaire 
						et le monde professionnel.<br>
						Car je souhaite à la suite de cette licence, exercer en tant que Developpeuse Web. <br><br>
						<p class="crougeinterieur pbold lesTroisPoints">...</p>
						<br><br>
						<p>En face, vous pouver voir mon utilisation de différents langages d'intégration et 
						de programmation. Le pourcentage est une indication de mon aisance et de l'utilisation
						de ces différents langages durant les projets que j'au eue à monter.
					</p>
				</div>
				<div class="col colonneQuiSuisJe quisuisjeprogression">
					<ul>
						<li>

							<div class="lescaseProgression">
								<div class="logoprogression">
									<img src="wsimg/htm.png" alt="logo html">
								</div>
								<div class="contenuProgression crougeborder">
									<div class="tailleProgression HTMLprog crouge "><p>70%</p></div>
								</div>
							</div>
						</li>

						<li>
						<div class="lescaseProgression">
							<div class="logoprogression">
								<img src="wsimg/CSS3LOGO.svg" alt="logo css">
							</div>
							<div class="contenuProgression cjauneborder">
									<div class="tailleProgression CSSprog cjaune  "><p>70%</p></div>
								</div>
						</div>
						</li>
						<li>
						<div class="lescaseProgression">
							<div class="logoprogression">
								<img src="wsimg/JAVASCRIPTLOGO.svg" alt="logo javascript">
							</div>
							<div class="contenuProgression crougeborder">
									<div class="tailleProgression JSprog crouge"><p>30%</p></div>
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
		<div class="rowDePageParcours">
			<div class="bigtitlepage">
				<h1 class="titlepage">
					MON PARCOURS
				</h1>
			</div>
			<div class="pageParcours">
				<!--PARTIE 1-->
				<div class="col colonneParcours">
					<div class="align-self-start cparcours cparcoursun crouge">
						<img src="wsimg/ordinare.png" alt="icône d'ordinateur"/>
						<h3 class="datetitle">2012-2015</h3>
						<audio controls src="wsaudio/monparcourspart1.m4a" class="audioEcouter"></audio>
						<button class="btnSummary" onclick="apparaitreTexte(0)">
							<span class="enSavoirPlus">+</span> EN RESUME
						</button>
					</div>
				</div>
				<div class="audioContenu">
					<section>
						<button class="closeTextParcours" onclick="fermerTexte(0)" >
							<span>&times;</span>
						</button>
						<div>
							<h3>DE 2012 à 2015</h3>
						</div>
						<div>
							<div>
								<p>Mes années au Lycée Marie Laurencin , m'ont permis d'explorer la créativité
									et de suivre le procédé d'un vetement du début à la fin.
								</p>
							</div>
						</div>
					</section>
				</div>
				<!--PARTIE 2-->
				<div class="col colonneParcours">
					<div class="align-self-end cparcours cparcoursdeux cbleu">
						<img src="wsimg/ordinare.png"  alt="icône d'ordinateur"/>
						<h3 class="datetitle">2015-2017</h3>
						<audio controls src="wsaudio/monparcourspart2.m4a" class="audioEcouter"></audio>
						<button class="btnSummary" onclick="apparaitreTexte(1)">
							<span class="enSavoirPlus">+</span> EN RESUME
						</button>
					</div>
				</div>
				<div class="audioContenu">
					<section>
					<button class="closeTextParcours" onclick="fermerTexte(1)" >
							<span>&times;</span>
					</button>				
					<div>
						<h3>DE 2015 à 2017</h3>
					</div>
					<div>
							<div>
								<p>
									Suite aux années au sein du Lycée Marie Laurencin,
									je décide de continuer dans un BTS de la même branche.
									Il y avait moins de créativité, et peu de débouchés.
									Et j'ai découvert de nouveaux centres d'interêt.
								</p>
							</div>
					</div>
				</section>
				</div>
				<!--PARTIE 3-->
				<div class="col colonneParcours">
					<div class="align-self-center cparcours cparcourstrois cjaune">
						<img src="wsimg/ordinare.png" alt="icône d'ordinateur" />
						<h3 class="datetitle">2018-2019</h3>
						<audio controls src="wsaudio/monparcourspart3.m4a" class="audioEcouter"></audio>
						<button class="btnSummary" onclick="apparaitreTexte(2)">
							<span class="enSavoirPlus">+</span> EN RESUME
						</button>
					</div>
				</div>
				<div class="audioContenu col-8">
					<section>
						<button class="closeTextParcours" onclick="fermerTexte(2)" >
							<span>&times;</span>
						</button>
						<div>
							<h3>DE 2018 à 2019</h3>
						</div>
						<div>
							<div>
								<p>
									Mon BTS en main, j'avais choisi la réorientation ,j'ai eu l'opportunité
									d'être accompagnée de la mission locale et de pouvoir passer la formation 
									"Le Pass NUmérique" donné par le Conservatoire Nationale des Arts et Métiers.
									Ce qui m'a permis de conforté mon choix de réorientation...
								</p>
							</div>
						</div>
					</section>
				</div>
				<!--PARTIE 4-->
				<div class="col colonneParcours">
					<div class="align-self-start cparcours cparcoursquatre crouge">
						<img src="wsimg/ordinare.png" alt="icône d'ordinateur"/>
						<h3 class="datetitle">2019-2021</h3>
						<audio controls src="wsaudio/monparcourspart4.m4a" class="audioEcouter"></audio>
						<button class="btnSummary" onclick="apparaitreTexte(3)">
							<span class="enSavoirPlus">+</span> EN RESUME
						</button>
					</div>
				</div>
				<div class="audioContenu col-8">
					<section>
						<button class="closeTextParcours" onclick="fermerTexte(3)" >
							<span>&times;</span>
						</button>
						<div>
							<h3>DE 2019 à 2021</h3>
						</div>
						<div>
							<div>
								<p>J'ai pu réintégrer le parcours scolaire et être admise en DUT MMI à l'IUT de Cergy.
									J'ai pu réapprendre différents langages d'intégrations et de programmation.
									Seulement,j'avais des lacunes relationnel qui ne me permettraient pas d'aller plus loin.
								</p>
							</div>
						</div>
					</section>
				</div>
				<!--PARTIE 5-->
				<div class="col colonneParcours">
					<div class="align-self-start cparcours cparcourscinq cbleu">
						<img src="wsimg/ordinare.png" alt="icône d'ordinateur" />
						<h3 class="datetitle">2021-2022</h3>
						<audio controls src="wsaudio/monparcourspart5.m4a" class="audioEcouter"></audio>
						<button class="btnSummary" onclick="apparaitreTexte(4)">
							<span class="enSavoirPlus">+</span> EN RESUME
						</button>
					</div>
				</div>
				<div class="audioContenu col-8">
					<section>
						<button class="closeTextParcours" onclick="fermerTexte(4)" >
							<span>&times;</span>
						</button>
						<div>
							<h3>DE 2021 à 2022</h3>
						</div>
						<div>
							<div>
								<p>
									Pour travailler sus mes lacunes,j'ai chercher un emploi dans le secteur 
									du numérique. J'ai pu excercer en tant que conseillère numérique au sein 
									d'Emmaus Connect, une des association de la fondation Emmaus. Les missions de ce 
									volontariat , me permettaient de sortir de ma zone de confort, c'est à dire 
									aller vers les autres, les aider , les rassurer ect...
								</p>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<!--              MON PORTFOLIO                  -->
	<section id="monportfolio">
		<div class="rowDePagePortfolio">
			<div class="bigtitlepage">
				<h1 class="titlepage">
					MON PORTFOLIO
				</h1>
			</div>
			<div class="pagePortfolio">
				<!---------------------------------PREMIER PROJET--------------------------------->
			<div class="col colonnePortfolio">
				<div class="align-self-start cportfolio">
					<button class="row buttonModal portfolionum" onclick="openTheModal(0)">
						<span class="enSavoirPlusPortfolio cbleuinterieur">+</span>APERÇU
					</button>
					<div class="row portfolioParagraphe">
						<div class="lecarrePortfolio cbleu"></div>
						<p>
							Une sorte de site vitrine que j'ai essayé de monter d'après
							mes connaissances en HTML et CSS. Je me suis simplement inspiré
							des magazines de mode et de design...
						</p>
					</div>
				
					<div class="row">
						<iframe src="projet/lachaise/indexlachaise.html" title="La Chaise" ></iframe>
					</div>
				</div>
			</div>
			<div class="myModal modal">
					<!-- Boutton Fermer -->
					<span class="close" onclick="closeTheModal(0)">&times;</span>

					<!-- Contenu du Modal -->
					<section class="modal-content portfolio">
						<iframe src="projet/lachaise/indexlachaise.html" title="La Chaise" class="ifrascroll">
						</iframe>
					</section>
			</div>
				<!---------------------------------SECOND PROJET--------------------------------->
			<div class="col colonnePortfolio">
				<div class="align-self-start cportfolio">
					<button class="row buttonModal portfolionum" onclick="openTheModal(1)">
						<span class="enSavoirPlusPortfolio cjauneinterieur">+</span>APERÇU
					</button>
					<div class="row portfolioParagraphe">
						<div class="lecarrePortfolio cjaune"></div>
						<p>
							A l'issu d'un projet en groupe qui consistait à développer une entreprise,
							il nous a été demandé de réaliser un site statique qui représentais notre idée.
							Dans notre cas, un restaurant ambulant pour les étudiants...
						</p>
					</div>
					<div class="row">
						<iframe src="projet/foodbus/index.html" title="FoodBus" ></iframe>
					</div>
				</div>
			</div>
			<div class="myModal modal">
					<!-- Boutton Fermer -->
					<span class="close" onclick="closeTheModal(1)">&times;</span>

					<!-- Contenu du Modal -->
					<section class="modal-content portfolio">
						<iframe src="projet/foodbus/index.html" title="FoodBus" class="ifrascroll">
						</iframe>
					</section>
			</div>
				<!---------------------------------TROISIEME PROJET--------------------------------->
			<div class="col colonnePortfolio">
				<div class=" align-self-start cportfolio">
					<button class="row buttonModal portfolionum" onclick="openTheModal(2)" >
						<span class="enSavoirPlusPortfolio crougeinterieur">+</span>APERÇU
					</button>
					<div class="row portfolioParagraphe">
						<div class="lecarrePortfolio crouge"></div>
						<p>
							Lors de mon dernier semestre , j'ai pu exercer en tant que Web Designer.
							Ce qui m'a permis de retravailler l'image du site web de la boutique YESOOO...
						</p>
					</div>
					<div class="row">
						<iframe src="projet/yesooo/maquettesyesooo.pdf" title="Yesooo"></iframe>
					</div>
				</div>
			</div>
			<div class="myModal modal">
					<!-- Boutton Fermer -->
					<span class="close " id="closingbutton" onclick="closeTheModal(2)">&times;</span>

					<!-- Contenu du Modal -->
					<section class="modal-content portfolio">
						<iframe src="projet/yesooo/maquettesyesooo.pdf" title="Yesooo" class="ifrascroll">
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
			<div class="col photoContact">
				<img src="wsimg/defaultportrait.jpg" alt="Portrait de l'auteur du Portfolio">
			</div>

			<div class="col">
				<form class="meContacterFormulaire" action="envoimail.php" method="POST">
					<fieldset>
						<legend class="pbold crougeinterieur">SI VOUS SOUHAITEZ M'ECRIRE</legend>
						<label for="fname" class="labelInputContact" >NOM ET PRENOM :</label>
						<input class="lecontourBleuContact espaceInput" type="text" id="nometprenom" name="leNometPrenom" value="Nom et Prenom"><br><br>
						<label for="email" class="labelInputContact">ADRESSE MAIL :</label>
						<input class="lecontourBleuContact espaceInput" type="email" id="email" name="leMail" value="Votre Adresse Mail"><br><br>
						<label for="sujet" class="labelInputContact">L'OBJET :</label>
						<input class="lecontourBleuContact espaceInput" type="text" id="sujet" name="leSujet" value="L'objet"><br><br>
						<textarea class="lecontourBleuContact mecontactermessage" name="leMessage">
						</textarea><br><br>
						<button class="contactButton" type="submit">
							ENVOYER
						</button>
					</fieldset>
				</form>
			</div>
		</div>
	</section>
	<!--              FIN DE PAGE                  -->
	<footer>
		<div class="footerlogo">
			<ul>
				<li><a href="https://www.linkedin.com/in/kadidja-cisse-075671195/"><img src="wsimg/LINKEDINLOGO.png" alt="logo linkedInd"></a></li>
			</ul>
		</div>
	</footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>

</body>

>>>>>>> f6025e7 (fb)
</html>