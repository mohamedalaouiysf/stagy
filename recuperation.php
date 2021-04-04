<?php
/*include('connexion.php');
if(isset($_POST['sub'])){
	$nompre=$_POST['nompre'];
	$mail=$_POST['mail'];
	$mdp=$_POST['mdp'];
    $date=$_POST['date_naissance'];
    $bio=$_POST['bio'];
	if(isset($_FILES['fichier']) and $_FILES['fichier']['error']==0)
	{ 
		$dossier='photo/';
		$temp_name=$_FILES['fichier']['tmp_name'];
		if(!is_uploaded_file($temp_name))
		{
		exit("le fichier est untrouvable");
		}
		if ($_FILES['fichier']['size'] >= 1000000){
			exit("Erreur, le fichier est volumineux");
		}
		$infosfichier = pathinfo($_FILES['fichier']['name']);
		$extension_upload = $infosfichier['extension'];
		
		$extension_upload = strtolower($extension_upload);
		$extensions_autorisees = array('png','jpeg','jpg');
		if (!in_array($extension_upload, $extensions_autorisees))
		{
		exit("Erreur, Veuillez inserer une image svp (extensions autorisées: png)");
		}
		$nom_photo=$nompre.".".$extension_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
		exit("Problem dans le telechargement de l'image, Ressayez");
		}
		$ph_name=$nom_photo;
	}
	else{
		$ph_name="inconnu.jpg";
	}
    if(isset($_FILES['fichier2']) and $_FILES['fichier2']['error']==0)
	{ 
		$dossier='doc/';
		$temp_name=$_FILES['fichier2']['tmp_name'];
		if(!is_uploaded_file($temp_name))
		{
		exit("le fichier est untrouvable");
		}
		if ($_FILES['fichier2']['size'] >= 1000000){
			exit("Erreur, le fichier est volumineux");
		}
		$infosfichier = pathinfo($_FILES['fichier2']['name']);
		$extension_upload = $infosfichier['extension'];
		
		$extension_upload = strtolower($extension_upload);
		$extensions_autorisees = array('pdf');
		if (!in_array($extension_upload, $extensions_autorisees))
		{
		exit("Erreur, Veuillez inserer un document pdf svp (extensions autorisées: pdf)");
		}
		$nom_cv=$nompre.".".$extension_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_cv)){
		exit("Probleme dans le telechargement du cv, Ressayez");
		}
		$cv_name=$nom_cv;
	}
	else{
		$cv_name=NULL;
	}
	$requette=" INSERT INTO user VALUES(0,'$nompre','$date','$mdp','$mail','$ph_name','$cv_name','$bio')";
	$resultat=mysqli_query($link,$requette);
    if($resultat){
        echo"ok";
    }
	$sql="select ID_USER from user where EMAIL='".$mail."'and MDP='".$mdp."'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
	$id=$row['ID_USER'];
	foreach($_POST['ci'] as $v){
		$req="INSERT INTO interesser VALUES('$v','$id')";
		$res=mysqli_query($link,$req);
	}
    mysqli_close($link);*/
	header('Location:index.php');
?>