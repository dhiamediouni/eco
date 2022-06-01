<?PHP
	include "../controller/actualiteC.php";

	$actualiteC=new actualiteC();
	$listeactualite=$actualiteC->afficherActualite();
if(isset($_POST['submi']))
{
    $listeactualite=$actualiteC->afficherActualite();
}
if(isset($_POST['submit']))
{
    $listeactualite=$actualiteC->trierActualite();
}
if(isset($_POST['submit1']))
{
    $listeactualite=$actualiteC->trierActualite1();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Liste Actualite</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- My Css Class-->

	<link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="../css/assyl.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>  
    </head>

    <body class="sb-nav-fixed">
    <!-- header -->
    <?php include_once 'header.php'; ?>
     <!-- Contient -->
    <body>
	<div class="limiter">
            
		   <div class="centrer" >
			<div>
				<div >
		<hr>
        <br>
		<h1>Liste Des Actualites</h1> 
		<form method="POST" action="">
<button type="submit" id="trititre" name="submi" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> afficher les News  </button>
<button type="submit" id="triDate" name="submit" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> trier par date </button> 
<button type="submit" id="trititre" name="submit1" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> trier par titre </button>

        </form>   
		<table   >
        
			<tr >
				<th ><strong>Id Actualite</strong></th>
				<th ><strong>Titre Actualite</strong></th>
				<th ><strong>Date Actualite</strong></th>
				<th ><strong>Description Actualite</strong></th>
				<th ><strong>Image Actualite</strong></th>
				<th ><strong>supprimer</strong></th>
				<th ><strong>modifier</strong></th>
			</tr>

			<?PHP
				foreach($listeactualite as $Actualite){
					$image = $Actualite['ImageActualite']; // source iamge
                     
			?>
				<tr>
					<td ><?PHP echo $Actualite['IdActualite']; ?></td>
					<td ><?PHP echo $Actualite['TitreActualite']; ?></td>
					<td ><?PHP echo $Actualite['DateActualite']; ?></td>
					<td ><?PHP echo $Actualite['DescriptionActualite']; ?></td>
					<td ><img src="../assets/img/<?PHP echo $image ?>" alt="Texte Alternatif" width="100" height="100"> </td> <!-- affichage -->
					
					<td >
						<form method="POST" action="../views/actualiteDelete.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $Actualite['IdActualite']; ?> name="IdActualite">
						</form>
					</td>
					<td >
						<a href="../views/actualiteUpdate.php?IdActualite=<?PHP echo $Actualite['IdActualite']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
            
		</table> 
		<br>
		<form class="form-inline" method="post" action="../libs/generate_pdfActualite.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>Generate PDF</button> 
        </form>         
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
