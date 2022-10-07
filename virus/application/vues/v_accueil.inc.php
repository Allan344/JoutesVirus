
<div style="position: relative;">
	<!-- Image de droite Biologique -->
	<div class="imgparent">
		<a href="index.php?cas=virus&type=bio" class="imgenfant">
		<img src="public/images/fondvirusbiovert.png" alt="Image sur les virus biologique" id="imagefond">
		</a>
	</div>

	<!-- Image de droite Informatique -->
	<div class="imgparent2">
		<a href="index.php?cas=virus&type=info" class="imgenfant2">
		<img src="public/images/fondvirusinfo.jpg" alt="Image sur les virus informatique" id="imagefond2">
		</a>
	</div>

	/<!-- Carré central -->
	<div class="carrenoir">

		
		<?php 
			// Connexion a la BDD
			$con = mysqli_connect("www.g10.joutes.club", "sisr", "sVFjYxorMMfRqF", "matomo");
			if (!$con) {
					die("Database connection failed: " . mysqli_connect_error());
				}

			//Selection de la BDD 
			$db_select = mysqli_select_db($con, "matomo");
			if (!$db_select) {
				die("Database selection failed: " . mysqli_connect_error());
			} 

			//Requête pour selectionner les visiteurs
			$requete="SELECT max(idvisit) as visiteurs FROM matomo_log_link_visit_action";
			$visiteurs=mysqli_query($con,$requete);

			while($enregistrement=mysqli_fetch_object($visiteurs))
			{
				$nbvisiteurs=$enregistrement->visiteurs;
			}
			
		?>

		<h4><pre> Il y a eu <?php echo $nbvisiteurs ?> visiteurs sur ce site !</pre></h4>
		<br/>

		<p><pre>Bienvenue sur le site de la Team10 ! </pre></p>

		<p><pre>Sur ce site est répertorié une bibliothèque de virus aussi bien 
		informatiques que biologiques, connus ou moins.
		Vous pourrez donc vous renseignez sur plusieurs types de virus et 
		peut-être faire de plus amples recherches sur ceux-ci pour 
		apprendre de nouvelles choses !


		Sur les cotés se trouvent les boutons pour accèder aux différentes catégories de virus, 
		dans ceux-ci se trouvent un onglet Prévention dédié à ce type de virus !


		Et à tout moment, vous pouvez accèder aux détails de l'équipe qui à créé ce site 
		via le bouton Groupe en haut à droite.</pre></p>

		<p><pre> Toute la Team10 vous souhaite une bonne navigation et nous esperons que vous prendrez 
		le temps de faire des recherches sur les virus répertoriés, 
		des mondes numériques et biologiques fascinants vous attendent !</pre></p>
	</div>	
</div>  