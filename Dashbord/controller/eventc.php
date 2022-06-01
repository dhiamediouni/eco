<?PHP
	include '../config.php';
	require_once '../model/event.php';

	class eventc {
		
		function ajouterevent($event){
			$sql="INSERT INTO evenement (`nom`, `date`, `prix_dt`, `localisation`) 
			VALUES (:nom,:prix_dt, :date, :localisation)";
			$db = getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $event->getnom(),
					'prix_dt' => $event->getprix_dt(),
					'date' => $event->getdate(),
					'localisation' => $event->getlocalisation(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherevent(){
			$sql="SELECT * FROM evenement";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
			
		}

		

        function trierevent(){
			
			$sql="SELECT * FROM evenement order by prix_dt";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function trierevent1(){
			
			$sql="SELECT * FROM evenement order by nom";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function recpererevent($id_eve)
		{
			
			$sql="SELECT FROM evenement WHERE id_eve= $id_eve";
			$db = getConnexion();
			$req=$db->prepare($sql);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
			
		}
		function supprimerevent($id_eve){
			$sql="DELETE FROM evenement WHERE id_eve= :id_eve";
			$db = getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_eve',$id_eve);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierevent($event, $id_eve){
			
			try {
				echo $event->getnom();
				$db = getConnexion();
				$query = $db->prepare(
					"UPDATE evenement SET 
						nom = :nom,
						prix_dt = :prix_dt,
						date = :date,
						localisation = :localisation
					    WHERE id_eve = :id_eve"
				);
				$query->execute([
					'nom' => $event->getnom(),
					'prix_dt' => $event->getprix_dt(),
					'date' => $event->getdate(),
					'localisation' => $event->getlocalisation(),	
					'id_eve' => $id_eve
				]);
				echo $query->execute;
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		

		
		
	}

?>