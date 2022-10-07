<div style="position: relative;">

        <div class="imgparent2">
			<a href="index.php?cas=virus&type=bio" class="imgenfant2">
			<img src="public/images/fondvirusbiovert.png" alt="Image sur les virus biologique" id="imagefond2">
			</a>
		</div>

		<div class="imgparent">
			<a href="index.php" class="imgenfant">
			<img src="public/images/fondvirusinfo-accueil.png" alt="Image sur les virus informatique" id="imagefond">
			</a>
		</div>

		

		<div class="carrenoir">
			<p><pre> Les Virus Biologiques</pre></p>

			<p class="texte"> Un virus biologique est une particule microscopique infectieuse ne pouvant se propager qu'en pénétrant dans une cellule. 
				<br/>Il existe des virus qui infectent des animaux et d'autres qui infectent les végétaux. </p>

			<div id="header"> </div>

			<table align="center" class="tablevirusbio" border="1">
				<br/>
					Exemple de Virus bactériologiques
				<tr>
					<th>Nom</th>
					<th class="thannee">Année</th>
					<th>Type</th>
					<th>Description</th>
				</tr>

				<?php

$con = mysqli_connect("www.g10.joutes.club", "slam", "YCrNLBrvzPGcRL", "joutes");
//$con = mysqli_connect("localhost", "root", "", "joutesvirus");
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

    //Selecting a database 

$db_select = mysqli_select_db($con, "joutes");
if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
} 

$requete = "SELECT * FROM virus WHERE idTypeVirus=1";


    $jeuVirus=mysqli_query($con,$requete);

    //var_dump($lesVirus[2]);

//var_dump($jeuFilms);

while($enregistrement=mysqli_fetch_object($jeuVirus))
{
    $idVirus=$enregistrement->idVirus;
    $nomVirus=$enregistrement->nomVirus;
    $dateVirus=$enregistrement->dateVirus;
    $idTypeVirus=$enregistrement->idTypeVirus;
    $descriptionVirus=$enregistrement->descriptionVirus;
    
?>
				<tr>
				<td> <?php echo $nomVirus?> </td>
				<td class="thannee"> <?php print date("Y",strtotime($dateVirus))?> </td>
				<td> 
					<?php 
						$requete="SELECT * FROM types WHERE idVirus=".$idTypeVirus."";

						$jeuType=mysqli_query($con,$requete);

						while($enregistrement=mysqli_fetch_object($jeuType))
						{
							$TypeVirus=$enregistrement->libelleVirus;
						}

					 echo $TypeVirus ?> </td>
				<td> <?php echo $descriptionVirus?> </td>
				</tr>
<?php
}
?>
			</table>
		</div>	
	</div>  
