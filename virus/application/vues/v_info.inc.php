<div style="position: relative;">

		<div class="imgparent">
			<a href="index.php" class="imgenfant">
			<img src="public/images/fondvirusbio-accueil.png" alt="Image sur les virus informatique" id="imagefond">
			</a>
		</div>

        <div class="imgparent2">
			<a href="index.php?cas=virus&type=info" class="imgenfant2">
			<img src="public/images/fondvirusinfo.jpg" alt="Image sur les virus biologique" id="imagefond2">
			</a>
		</div>

		

		

		<div class="carrenoir">
		<p><pre> Les Virus Informatiques</pre></p>
			<p class="texte"> Un virus informatique est un programme nécessitant une intervention humaine, celui-ci insère une copie de lui-même dans un autre programme afin d'avoir un objectif nocif envers la cible. <br/>
			Il existe plusieurs types de virus , tels que le vers qui se prépage et s'éxécute seul, le cheval de troie qui semble légitime, mais contient du code malveillant.
			<br/>
			Également le RansonWare qui menace l'utilisateur afin d'en soutirer de l'argent, le rootkit lui peut être fatal,car en effet il permet d'accéder à un périphérique sans être détecté.

			</p>

			<div id="header"> </div>

			<table align="center" class="tablevirusinfo" border="1">
			<br/>
					Exemple de Virus Informatiques
					
				<tr>
					<th>Nom</th>
					<th class="thannee">Date</th>
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

$requete = "SELECT * FROM virus WHERE idTypeVirus=2";


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
				<td> <?php print date("Y",strtotime($dateVirus))?> </td>
				<td> 
					<?php 
						$requete="SELECT * FROM types WHERE idVirus=".$idTypeVirus."";

						$jeuType=mysqli_query($con,$requete);

						while($enregistrement=mysqli_fetch_object($jeuType))
						{
							$TypeVirus=$enregistrement->libelleVirus;
						}

					 echo $TypeVirus ?>   </td>
				<td>  <?php echo $descriptionVirus?>  </td>
				</tr>
<?php
}
?>
			</table>


		</div>	
	</div>  