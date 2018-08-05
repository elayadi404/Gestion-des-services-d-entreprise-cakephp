

<nav>
	<div class='wifeo_conteneur_menu'>
		<div class='wifeo_rubrique'>
			<?= $this->Html->link('UTILISATEURS',array('controller'=>'users','action'=>'add'))	;?>	

			<div class='wifeo_sousmenu'>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('nouveau',array('controller'=>'users','action'=>'add'))	;?>	
				</div>
				
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('paramètres',array('controller'=>'users','action'=>'update'))	;?>	
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('affichage',array('controller'=>'users','action'=>'affiche_user'))	;?>	
				</div>

				
			</div>

	</nav>

