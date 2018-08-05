
<nav>
	<div class='wifeo_conteneur_menu'>
		<div class='wifeo_rubrique'>
			<?= $this->Html->link('CLIENTS',array('controller'=>'TypeClients','action'=>'add_type'))	;?>	

			<div class='wifeo_sousmenu'>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('nouveau type ',array('controller'=>'TypeClients','action'=>'add'))	;?>	
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('supprimer type',array('controller'=>'TypeClients','action'=>'delet'))	;?>	
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('paramètres ',array('controller'=>'TypeClients','action'=>'update'))	;?>	
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('affichage',array('controller'=>'TypeClients','action'=>'show'))	;?>	
				</div>

				
			</div>

	</nav>

