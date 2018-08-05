
<nav>
	<div class='wifeo_conteneur_menu'>
		<div class='wifeo_rubrique'>
			<?= $this->Html->link('ACTIVITÉS',array('controller'=>'Services','action'=>'add'))	;?>	

			<div class='wifeo_sousmenu'>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('nouveau',array('controller'=>'Services','action'=>'add'))	;?>	</a>
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('supprimer ',array('controller'=>'Services','action'=>'delet'))	;?>	</a>
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('paramètres',array('controller'=>'Services','action'=>'update'))	;?>
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('affichage',array('controller'=>'Services','action'=>'show'))	;?>	</a>
				</div>

				
			</div>

	</nav>

