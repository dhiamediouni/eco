
<?php
    require_once '../controller/eventc.php';
    require_once '../model/event.php';

    $error = "";
    // create user
    $event = null;
    // create an instance of the controller
    $eventc = new eventc();
    if (
        isset($_POST["nom"]) &&
        isset($_POST["date"]) &&
        isset($_POST["prix_dt"]) &&
        isset($_POST["localisation"]) 
        
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["date"]) &&
            !empty($_POST["prix_dt"]) &&
            !empty($_POST["localisation"])
            
        ) {
            $event = new event(
                $_POST['nom'], 
                $_POST['date'],
                $_POST['prix_dt'],
                $_POST['localisation']       
            );
            $eventc->ajouterevent($event);
            mail('ayed.mohamedaziz@esprit.tn','Un Ajout au table event','Une nouvelle entite event est ajouter il y a quelques secondes ','From: ayed.mohamedziz@esprit.tn');
           header('Location:../views/eventView.php');
        }
        else
            $error = "Missing information";
    }  

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        
        <!-- My Css Classes-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/ayed.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
                
        <!-- java -->
        <script type="text/javascript" src="../js/event.js"></script>
    </head>
    <body class="sb-nav-fixed">
            <!-- header-->
                  <?php include_once 'header.php'; ?>
            <!-- Contient -->
            <div id="layoutSidenav_content">
                <div id="layoutSidenav_content">
                    <div class="testbox">
                        <form action="" method="POST">
                          <br>
                          <h1>New event</h1>
                          <p></p>
                          <h4>nom event</h4>
                          <div >
                            <input type="text" name="nom" id="nom" placeholder="" required maxlength = "40"/>
                          </div>
                          <h4>Date event<span>*</span></h4>
                          <div class="date">
                            <input type="date" name="date" id="date" min="<?php echo date('Y-m-d'); ?>"required/>
                            <i class="fas fa-calendar-alt"></i>
                          </div>
                          <h4>prix event</h4>
                          <textarea rows="5" id="prix_dt" name="prix_dt" required maxlength = "1400"></textarea>
                          <h4>localisation:</h4>
                          <input type="text" name="localisation" id="localisation">
                          <div class="btn-block">
                            <button type="submit" name="submit" value="submit"  onclick="return okEvent();" >Add</button>
                            
                          </div>
                          
                        </form>
                      </div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>   
    </body>
</html>
