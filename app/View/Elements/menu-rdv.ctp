

<nav>
	<div class='wifeo_conteneur_menu'>
		<div class='wifeo_rubrique'>
			<?= $this->Html->link('RENDEZ-VOUS',array('controller'=>'Appointmentes'))	;?>	

			<div class='wifeo_sousmenu'>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('nouveau',array('controller'=>'Clients','action'=>'find_client'))	;?>	</a>
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('affichage',array('controller'=>'Appointmentes','action'=>'showall'))	;?>	</a>
				</div>
				
				
			</div>
</nav>

