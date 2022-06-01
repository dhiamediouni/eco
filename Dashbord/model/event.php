<?PHP
	class event{
		private  $id_eve = null;
		private  $nom = null;
		private  $prix_dt = null;
		private  $date = null;
		private  $localisation = null;
		
		
		function __construct(string $nom, string $prix_dt,  string $date, string $localisation){
			
			$this->nom=$nom;
			$this->prix_dt=$prix_dt;
			$this->date=$date;
			$this->localisation=$localisation;
		}
		
		function getid_eve(): int{
			return $this->id_eve;
		}
		function getnom(): string{
			return $this->nom;
		}
		function getprix_dt(): string {
			return $this->prix_dt;
		}
		function getdate(): string{
			return $this->date;
		}
		function getlocalisation(): string{
			return $this->localisation;
		}
		
		function setnom(string $nom): void{
			$this->nom=$nom;
		}
		function setprix_dt(string $prix_dt): void{
			$this->prix_dt=$prix_dt;
		}
		function setdate(string $date): void{
			$this->date=$date;
		}
		function setlocalisation(string $localisation): void{
			$this->localisation=$localisation;
		}
		
	}

?>