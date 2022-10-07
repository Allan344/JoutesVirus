<div style="position: relative;">
		<div class="imgparent">
			<a href="index.php" class="imgenfant">
			<img src="public/images/fondvirusbio-accueil.png" alt="Image sur les virus biologique" id="imagefond">
			</a>
		</div>

		<div class="imgparent2">
			<a href="index.php" class="imgenfant2">
			<img src="public/images/fondvirusinfo-accueil.png" alt="Image sur les virus biologique" id="imagefond2">
			</a>
		</div>

		<div class="carrenoir">
		
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

$requete = "SELECT * FROM virus";


    $jeuVirus=mysqli_query($con,$requete);


?>
<br/>


AJOUT 
<br/><br/><br/>




<form name="ajout" method="POST">

<input type="text" name="nomVirus" id="name" required placeholder="Nom du Virus">


<input type="date" name="dateVirus" id="name" required placeholder="Date du Virus">

<select name="idTypeNewVirus" onBlur="verif_champ_obligatoire('zs_prenom','text')" >
			<option value="" disabled selected>Type du Virus</option>
			<option value="1" >Virus Biologique </option>
			<option value="2" >Virus Informatique </option>
		</select>


<br/><br/><textarea id="story" name="description" rows="4" cols="20" style="resize:none" placeholder="Description du Virus"></textarea>

<br/><br/>

		<input name="ajout" type="submit" value="Ajouter" >
	</form>
<?php
if(isset($_POST['ajout'])==True)
	{	
		$newVirus= $_POST['nomVirus'];
		$newdateVirus= $_POST['dateVirus'];
		$newnewdate=date("Y-m-d", strtotime($newdateVirus));
		$newidTypeVirus= $_POST ['idTypeNewVirus'];
		$newdescription= $_POST ['description'];
		
		//var_dump($newidTypeVirus);

		$req = "INSERT INTO virus (nomVirus, dateVirus, idTypeVirus, descriptionVirus) VALUES  ('$newVirus', '$newnewdate',$newidTypeVirus, '$newdescription')";
		

		$ajout = mysqli_query($con,$req);

		//echo ($req);

		?>

		<h2> <?php echo $newVirus ?> a bien été ajouté. </h2>	

<?php
	}
?>


<div id="header"> </div>


MODIFIER
<br/><br/><br/>



<form name="modifvirus" method="POST">
		<select name="nomvirusmod" onBlur="verif_champ_obligatoire('zs_prenom','text')" >
			<option value="" disabled selected>Nom du Virus </option>
			<?php 
			while($enregistrement=mysqli_fetch_object($jeuVirus))
			{
				$idVirus=$enregistrement->idVirus;
				$nomVirus=$enregistrement->nomVirus;
			?>
			<option value="<?php echo $nomVirus ?>"> <?php echo $nomVirus ?> </option>
		<?php } ?>
		</select>

<?php



	$requete="SELECT * FROM virus WHERE idVirus=".$idVirus;

//exécution de la requête et récupération du pointeur sur le jeu (qui ne contient qu'un seul enregistrement)
$jeuVirusM= mysqli_query($con,$requete);

if (!$jeuVirusM) {
    $message  = 'Requête invalide : ' . mysql_error() . "\n";
    $message .= 'Requête complète : ' . $jeuVirusM;
    die($jeuVirusM);
}



//extraction de l'enregistrement
$enregistrement=mysqli_fetch_object($jeuVirusM);

// voir = var_dump($enregistrement);

//récupération des champs
$idVirus=$enregistrement->idVirus;
$dateVirus=$enregistrement->dateVirus;
$idTypeVirus=$enregistrement->idTypeVirus;
$decriptionVirus=$enregistrement->descriptionVirus;
?>

<input type="text" name="nomVirus" id="name" required placeholder="Nom du Virus">


<input type="date" name="dateVirus" id="name" required placeholder="Date du Virus">

<select name="idTypeNewVirus" onBlur="verif_champ_obligatoire('zs_prenom','text')" >
			<option value="" disabled selected>Type du Virus</option>
			<option value="1" >Virus Biologique </option>
			<option value="2" >Virus Informatique </option>
		</select>


<br/><br/><textarea id="story" name="description" rows="4" cols="20" style="resize:none" placeholder="Description du Virus"></textarea>

<br/><br/>

		<input name="modif" type="submit" value="Modifier" >
	</form>
<?php
if(isset($_POST['modif'])==True)
	{	

		$nomVirus =$_POST ['nomvirusmod'];
		$newnomVirus= $_POST['nomVirus'];

		$dateVirus= $_POST['dateVirus'];

		$newdate=date("Y-m-d", strtotime($dateVirus));

		$newidTypeVirus= $_POST ['idTypeNewVirus'];
		$newdescription= $_POST ['description'];
		
		//var_dump($newidTypeVirus);

		$req = "UPDATE virus SET 
		nomVirus='$newnomVirus',
		dateVirus='$newdate',
		idTypeVirus='$newidTypeVirus',
		descriptionVirus='$newdescription'
		WHERE nomVirus='$nomVirus'";

		

		$modif = mysqli_query($con,$req);

		?>

		<h2> <?php echo $nomVirus ?> a bien été modifié. </h2>	

<?php
	}
?>


<div id="header"> </div>



SUPPRIMER
<br/><br/><br/>






<?php
$requete = "SELECT * FROM virus";


    $jeuVirus=mysqli_query($con,$requete);

?>

<form name="supvirus" method="POST">
		<select name="nomvirusaj" onBlur="verif_champ_obligatoire('zs_prenom','text')" >
			<option value="" disabled selected > Nom du Virus</option>
			<?php 
			while($enregistrement=mysqli_fetch_object($jeuVirus))
			{
				$nomVirus=$enregistrement->nomVirus;
			?>
			<option value="<?php echo $nomVirus ?>"> <?php echo $nomVirus ?> </option>
		<?php } ?>
		</select>

		<input name="sup" type="submit" value="Supprimer" >
	</form>
<?php 

if(isset($_POST['sup'])==True)
		{
			$deletenom = $_POST ['nomvirusaj'];
			$req = "DELETE FROM virus WHERE nomVirus='$deletenom'";


			$del = mysqli_query($con,$req);
			?>
			<h2> <?php echo $deletenom ?> a bien été supprimé. </h2>	

<?php
		}


?>
<!-- 
<div id="header"> </div>
<a href="G10JOUTESAJM.php" style="text-decoration:none; color: white; text-decoration:underline"> RAFRAICHIR </a> -->

		</div>	
	</div>  

	