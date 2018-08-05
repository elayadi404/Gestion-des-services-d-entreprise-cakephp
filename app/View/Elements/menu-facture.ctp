

<nav>
	<div class='wifeo_conteneur_menu'>
		<div class='wifeo_rubrique'>
			<?= $this->Html->link('FACTURES',array('controller'=>'Factures','action'=>'addselect'))	;?>	

			<div class='wifeo_sousmenu'>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('générer facture  ',array('controller'=>'Factures','action'=>'addselect'))	;?>	
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('affichage  ',array('controller'=>'Clients','action'=>'find_client/req=factur'))	;?>	
				</div>				
			</div>
			

</nav>