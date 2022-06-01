<?PHP
	include "../controller/actualiteC.php";
	$actualiteC=new actualiteC();
	$listeactualite=$actualiteC->afficherActualite();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>Eco-aware</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="C:\xampp\htdocs\dashbord with news\assets\img\logo.png" type="C:\xampp\htdocs\dashbord with news\assets\img\logo.png">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Rubik:100,200,300,400,600,500,700,800,900|Karla:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
		<!-- Bootstrap 4.3.1 CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<!-- AOS 2.3.1 jQuery plugin CSS (Animations) -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!-- FontAwesome CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- Startup 3 CSS (Styles for all blocks) -->
		<link href="../css/style1.css" rel="stylesheet" />
		<!-- my css -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- jQuery 3.3.1 -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	</head> 
<!-- Contient  -->
<body class="w3-light-grey w3-content" style="max-width:3000px">
    <?php include_once 'headerfront.php'; ?>
	<div class="w3-row-padding w3-padding-16 w3-center">
	<?PHP
				foreach($listeactualite as $Actualite){
			    $image = $Actualite['ImageActualite']; // source iamge
		?>
    <div class="w3-quarter">
	<img src="../assets/img/<?PHP echo $image ?>" alt="Texte Alternatif" width="300" height="300">
      
        <p><b><?PHP echo $Actualite['TitreActualite']; ?></b></p>
        <p><b><?PHP echo $Actualite['DateActualite']; ?></b> <br> Description: <br> <?PHP echo $Actualite['DescriptionActualite']; ?></p>
     </div>
	 <?PHP } ?>
    </div>				
<!-- Footer -->
<?php include_once 'footerfront.php'; ?> 

</body>
</html>