<?php  $title = "Qui suis-je ?"; ?>
<?php ob_start(); ?>
<div class="container mt-4">
	<h2 class="text-center text-warning mb-3 border-bottom">A propos de moi</h2>
	<figure>
    	<img src="assets/images/oldman.jpg " alt="ecrivain" class="rounded-circle">
    	<figcaption class="text-light text-center">Pendant mon voyage en Alaska..</figcaption>
    </figure>
    <aside class="mt-5 pb-3">
    	<h3 class="text-light text-center"> <strong>Jean FORTEROCHE</strong></h3>
        <h4 class="text-center text-warning mb-4">Ecrivain et acteur</h4>
        <h5 class="text-light border-bottom">Mes débuts</h5>
        <p class="text-justify">
        	Naîs à Bordeaux le 24 Mars 1962. D'abords inspiré par le théatre, j'ai suivi des cours à 12 ans, je veux devenir acteur. Encouragé par mon professeur, je suis rapidement remarqué par une compagnie de théatre. Mais à 14 ans, j'écris, dans le cadre d'un travail scolaire, l'histoire d'un oisillons tombé du nid, ce qui m'inspira une nouvelle voie : dès l’âge de 15 ans, je fais mes premières armes en écrivant des histoires pour un fanzine, mais aussi tout au long de ma scolarité je me consacre à la lecture ainsi qu’à l’écriture en montant un journal pour mon lycée. Après mon bac, je commence l’écriture de <i>Demain les chats</i>. Après mes études en psychologie social à Bordeaux. je me passionne pour les voyages, et commence un voyage au Pérou, puis en Inde. De ces années me viens mon goût pour le récit d'aventure, que je mêle avec mes thèmes favoris, des animaux à la mort jusqu’aux origines de l’humanité. Je publie mon premier roman, <i>Demain les chats</i>, en février 1991. Mes œuvres ont été traduites en vinght-cinq langues. Avec 5 millions d’exemplaires vendus dans le monde, je deviens l'un des auteurs français contemporains les plus lus en france. 
        </p>
        <h5 class="text-light border-bottom">Après l'écriture</h5>
		<p class=" text-justify">
			Après le succès de mes romans, <i>Trois jours et une vie et La danse des ombres</i>, je décide de me rediriger vers ma voie initial et commença des petits rôles dans des séries TV notamment dans "Encore eux ?" une série qui vise à montrer le côté hypocrite de notre société. Je finis par décrocher le rôle principal dans "Fais moi danser" avec Sarah Bouranvier. Ce film rencontrera un franc succès auprès des téléspectateurs, je serai à la suite de ça reconnu comme un acteur avéré. 
			Depuis peu je souhaite me remettre à l'écriture d'une manière plutôt différente, associant nouvelles technologies et j' entreprend la création d'un blog dans lequel je publierai plusieurs épisodes de mon nouveau roman intitulé: <i>Un billet simple pour l'Alaska</i>.
        </p>
    </aside>
</div>
<?php $content = ob_get_clean(); ?>
<?php require ('view/template.php'); ?>
        
  
		